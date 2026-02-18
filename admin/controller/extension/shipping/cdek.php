<?php
class ControllerExtensionShippingCdek extends Controller
{

    private $error = array();
    private $api;

    public function index()
    {

        require_once DIR_SYSTEM . 'library/cdek_integrator/class.cdek_integrator.php';
        $this->api = new cdek_integrator($this->config->get('cdek_login'), $this->config->get('cdek_password'));

        $this->load->model('tool/cdek_tool');

        // Get user_token for URL parameters (OpenCart 3.x)
        $user_token = isset($this->session->data['user_token']) ? $this->session->data['user_token'] : '';
        if (!$user_token && isset($this->request->get['user_token'])) {
            $user_token = $this->request->get['user_token'];
        }

        if (!$this->model_tool_cdek_tool->check()) {
            $this->response->redirect($this->url->link('tool/cdek_tool', 'user_token=' . $user_token, true));
        }

        $this->load->language('extension/shipping/cdek');

        $this->document->setTitle($this->language->get('heading_title'));

        if (!extension_loaded('curl')) {
            $this->error['warning'] = $this->language->get('error_curl');
        }

        $this->load->model('setting/setting');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate() && !isset($this->error['warning'])) {

            if ($this->request->post['apply']) {
                $url = $this->url->link('extension/shipping/cdek', 'user_token=' . $user_token, true);
            } else {
                $url = $this->url->link('marketplace/extension', 'user_token=' . $user_token . '&type=shipping', true);
            }


            unset($this->request->post['apply']);

            // Separate shipping settings from CDEK settings
            $cdek_settings = $this->request->post;
            $shipping_settings = array();

            if (isset($cdek_settings['shipping_cdek_status'])) {
                $shipping_settings['shipping_cdek_status'] = $cdek_settings['shipping_cdek_status'];
                unset($cdek_settings['shipping_cdek_status']);
            }

            if (isset($cdek_settings['shipping_cdek_sort_order'])) {
                $shipping_settings['shipping_cdek_sort_order'] = $cdek_settings['shipping_cdek_sort_order'];
                unset($cdek_settings['shipping_cdek_sort_order']);
            }

            $this->model_setting_setting->editSetting('cdek', $cdek_settings);

            // Save shipping settings with proper prefix if any exist
            if (!empty($shipping_settings)) {
                $this->model_setting_setting->editSetting('shipping_cdek', $shipping_settings);
            }

            $this->saveTariffList();

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($url);
        }

        $this->checkInstall();

        if (version_compare(VERSION, '2.1') >= 0) {
            $this->load->model('customer/customer_group');
        } else {
            $this->load->model('sale/customer_group');
        }

        $this->load->model('localisation/geo_zone');
        $this->load->model('localisation/tax_class');
        $this->load->model('localisation/language');
        $this->load->model('localisation/length_class');
        $this->load->model('localisation/weight_class');

        //$this->document->addStyle('view/stylesheet/cdek.css');
        //$this->document->addScript('view/javascript/jquery/jquery.tablednd.0.7.min.js');

        $data['heading_title'] = $this->language->get('heading_title');
        $data['text_form'] = 'Настройки модуля ' . $this->language->get('heading_title');

        $data['text_enabled'] = $this->language->get('text_enabled');
        $data['text_disabled'] = $this->language->get('text_disabled');
        $data['text_all_zones'] = $this->language->get('text_all_zones');
        $data['text_none'] = $this->language->get('text_none');
        $data['text_select'] = $this->language->get('text_select');
        $data['text_date_current'] = $this->language->get('text_date_current');
        $data['text_date_append'] = $this->language->get('text_date_append');
        $data['entry_more_days'] = $this->language->get('entry_more_days');
        $data['text_day'] = $this->language->get('text_day');
        $data['text_insurance_cost'] = $this->language->get('text_insurance_cost');
        $data['text_loading'] = $this->language->get('text_loading');
        $data['text_help_auth'] = $this->language->get('text_help_auth');
        $data['text_testing_api_keys'] = sprintf($this->language->get('text_testing_api_keys'), cdek_integrator::TEST_ACCOUNT, cdek_integrator::TEST_SECURE_PASSWORD);
        $data['text_drag'] = $this->language->get('text_drag');
        $data['text_geo_zone'] = $this->language->get('text_geo_zone');
        $data['text_tariff'] = $this->language->get('text_tariff');
        $data['text_help_im'] = $this->language->get('text_help_im');
        $data['text_show_password'] = $this->language->get('text_show_password');
        $data['text_hide_password'] = $this->language->get('text_hide_password');
        $data['text_more_attention'] = $this->language->get('text_more_attention');
        $data['text_from'] = $this->language->get('text_from');
        $data['text_discount_help'] = $this->language->get('text_discount_help');
        $data['text_short_length'] = $this->language->get('text_short_length');
        $data['text_short_width'] = $this->language->get('text_short_width');
        $data['text_short_height'] = $this->language->get('text_short_height');
        $data['text_all_tariff'] = $this->language->get('text_all_tariff');
        $data['text_updatecity'] = $this->language->get('text_updatecity');

        $data['entry_log'] = $this->language->get('entry_log');
        $data['entry_log_help'] = $this->language->get('entry_log_help');
        $data['entry_title'] = $this->language->get('entry_title');
        $data['entry_description'] = $this->language->get('entry_description');
        $data['entry_period'] = $this->language->get('entry_period');
        $data['entry_delivery_data'] = $this->language->get('entry_delivery_data');
        $data['entry_empty_address'] = $this->language->get('entry_empty_address');
        $data['entry_empty_address_help'] = $this->language->get('entry_empty_address_help');
        $data['entry_show_pvz'] = $this->language->get('entry_show_pvz');
        $data['entry_show_pvz_help'] = $this->language->get('entry_show_pvz_help');
        $data['entry_work_mode'] = $this->language->get('entry_work_mode');
        $data['entry_work_mode_help'] = $this->language->get('entry_work_mode_help');
        $data['entry_max_weight'] = $this->language->get('entry_max_weight');
        $data['entry_cache_on_delivery'] = $this->language->get('entry_cache_on_delivery');
        $data['entry_city_from'] = $this->language->get('entry_city_from');
        $data['entry_length_class'] = $this->language->get('entry_length_class');
        $data['entry_length_class_help'] = $this->language->get('entry_length_class_help');
        $data['entry_weight_class'] = $this->language->get('entry_weight_class');
        $data['entry_weight_class_help'] = $this->language->get('entry_weight_class_help');
        $data['entry_default_size'] = $this->language->get('entry_default_size');
        $data['entry_volume'] = $this->language->get('entry_volume');
        $data['entry_default_weight_use'] = $this->language->get('entry_default_weight_use');
        $data['entry_default_weight'] = $this->language->get('entry_default_weight');
        $data['entry_default_weight_work_mode'] = $this->language->get('entry_default_weight_work_mode');
        $data['entry_size'] = $this->language->get('entry_size');
        $data['entry_size_help'] = $this->language->get('entry_size_help');
        $data['entry_login'] = $this->language->get('entry_login');
        $data['entry_password'] = $this->language->get('entry_password');
        $data['entry_cost'] = $this->language->get('entry_cost');
        $data['entry_tax_class'] = $this->language->get('entry_tax_class');
        $data['entry_geo_zone'] = $this->language->get('entry_geo_zone');
        $data['entry_status'] = $this->language->get('entry_status');
        $data['entry_sort_order'] = $this->language->get('entry_sort_order');
        $data['entry_additional_weight'] = $this->language->get('entry_additional_weight');
        $data['entry_additional_weight_help'] = $this->language->get('entry_additional_weight_help');
        $data['entry_min_weight'] = $this->language->get('entry_min_weight');
        $data['entry_min_weight_help'] = $this->language->get('entry_min_weight_help');
        $data['entry_max_weight'] = $this->language->get('entry_max_weight');
        $data['entry_max_weight_help'] = $this->language->get('entry_max_weight_help');
        $data['entry_min_total'] = $this->language->get('entry_min_total');
        $data['entry_min_total_help'] = $this->language->get('entry_min_total_help');
        $data['entry_max_total'] = $this->language->get('entry_max_total');
        $data['entry_max_total_help'] = $this->language->get('entry_max_total_help');
        $data['entry_customer_group'] = $this->language->get('entry_customer_group');
        $data['entry_store'] = $this->language->get('entry_store');
        $data['entry_date_execute'] = $this->language->get('entry_date_execute');
        $data['entry_pvz_more_one'] = $this->language->get('entry_pvz_more_one');
        $data['entry_pvz_more_one_help'] = $this->language->get('entry_pvz_more_one_help');
        $data['entry_weight_limit'] = $this->language->get('entry_weight_limit');
        $data['entry_use_postcode'] = $this->language->get('entry_use_postcode');
        $data['entry_use_postcode_help'] = $this->language->get('entry_use_postcode_help');
        $data['entry_use_region'] = $this->language->get('entry_use_region');
        $data['entry_use_region_help'] = $this->language->get('entry_use_region_help');
        $data['entry_use_region_russia'] = $this->language->get('entry_use_region_russia');
        $data['entry_use_region_russia_help'] = $this->language->get('entry_use_region_russia_help');
        $data['entry_default_size_type'] = $this->language->get('entry_default_size_type');
        $data['entry_default_size_work_mode'] = $this->language->get('entry_default_size_work_mode');
        $data['entry_packing_min_weight'] = $this->language->get('entry_packing_min_weight');
        $data['entry_packing_additional_weight'] = $this->language->get('entry_packing_additional_weight');
        $data['entry_packing_additional_weight_help'] = $this->language->get('entry_packing_additional_weight_help');
        $data['entry_city_ignore'] = $this->language->get('entry_city_ignore');
        $data['entry_city_ignore_help'] = $this->language->get('entry_city_ignore_help');
        $data['entry_empty'] = $this->language->get('entry_empty');
        $data['entry_empty_cost'] = $this->language->get('entry_empty_cost');
        $data['entry_empty_cost_help'] = $this->language->get('entry_empty_cost_help');
        $data['entry_default_param'] = $this->language->get('entry_default_param');
        $data['entry_default_param_work_mode'] = $this->language->get('entry_default_param_work_mode');

        $data['column_tariff'] = $this->language->get('column_tariff');
        $data['column_title'] = $this->language->get('column_title');
        $data['column_title_help'] = $this->language->get('column_title_help');
        $data['column_mode'] = $this->language->get('column_mode');
        $data['column_markup'] = $this->language->get('column_markup');
        $data['column_limit'] = $this->language->get('column_limit');
        $data['column_customer_group'] = $this->language->get('column_customer_group');
        $data['column_geo_zone'] = $this->language->get('column_geo_zone');
        $data['column_geo_zone_help'] = $this->language->get('column_geo_zone_help');
        $data['column_total'] = $this->language->get('column_total');
        $data['column_total_help'] = $this->language->get('column_total_help');
        $data['column_tax_class'] = $this->language->get('column_tax_class');
        $data['column_discount_type'] = $this->language->get('column_discount_type');
        $data['column_discount_value'] = $this->language->get('column_discount_value');

        $data['button_save'] = $this->language->get('button_save');
        $data['button_apply'] = $this->language->get('button_apply');
        $data['button_remove'] = $this->language->get('button_remove');
        $data['button_cancel'] = $this->language->get('button_cancel');
        $data['button_add_discount'] = $this->language->get('button_add_discount');

        $data['tab_general'] = $this->language->get('tab_general');
        $data['tab_data'] = $this->language->get('tab_data');
        $data['tab_auth'] = $this->language->get('tab_auth');
        $data['tab_tariff'] = $this->language->get('tab_tariff');
        $data['tab_package'] = $this->language->get('tab_package');
        $data['tab_discount'] = $this->language->get('tab_discount');
        $data['tab_additional'] = $this->language->get('tab_additional');
        $data['tab_empty'] = $this->language->get('tab_empty');

        if (isset($this->session->data['success'])) {
            $data['success'] = $this->session->data['success'];

            unset($this->session->data['success']);
        } else {
            $data['success'] = '';
        }

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        $data['error'] = $this->error;

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text'      => $this->language->get('text_home'),
            'href'      => $this->url->link('common/dashboard', 'user_token=' . $user_token, true),
            'separator' => false
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_extension'),
            'href' => $this->url->link('marketplace/extension', 'user_token=' . $user_token . '&type=shipping', true)
        );

        $data['breadcrumbs'][] = array(
            'text'      => $this->language->get('heading_title'),
            'href'      => $this->url->link('extension/shipping/cdek', 'user_token=' . $user_token, true),
            'separator' => ' :: '
        );

        $data['boolean_variables'] = array($this->language->get('text_no'), $this->language->get('text_yes'));

        $data['default_work_mode'] = array(
            'order'        => $this->language->get('text_mode_order'),
            'all'        => $this->language->get('text_mode_product_all'),
            'optional'    => $this->language->get('text_mode_product_optional')
        );

        $data['pvz_more_one_action'] = array(
            'first'  => $this->language->get('text_first'),
            'merge'  => $this->language->get('text_merge')
        );

        /*
		$data['pvz_more_one_action'] = array(
			'first'  => $this->language->get('text_first'),
			'merge'  => $this->language->get('text_merge'),
			'split'  => $this->language->get('text_split')
		);
		*/

        $data['work_mode'] = array(
            'single' => $this->language->get('text_single'),
            'more'     => $this->language->get('text_more')
        );

        $data['discount_type'] = array(
            'fixed'                => $this->language->get('text_fixed'),
            'fixed_weight'        => $this->language->get('text_fixed_weight'),
            'percent'            => $this->language->get('text_percent_source_product'),
            'percent_shipping'    => $this->language->get('text_percent_shipping'),
            'percent_cod'        => $this->language->get('text_percent_source_cod')
        );

        $data['additional_weight_mode'] = array(
            'fixed'            => $this->language->get('text_weight_fixed'),
            'all_percent'    => $this->language->get('text_weight_all')
        );

        $data['action'] = $this->url->link('extension/shipping/cdek', 'user_token=' . $user_token, true);
        $data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $user_token . '&type=shipping', true);
        $data['update_city'] = $this->url->link('extension/module/cdek_integrator/updateCities', 'user_token=' . $user_token . '&redirect=extension/shipping/cdek', true);

        $data['user_token'] = $user_token;

        if (isset($this->request->post['cdek_title'])) {
            $data['cdek_title'] = $this->request->post['cdek_title'];
        } else {
            $data['cdek_title'] = $this->config->get('cdek_title');
        }

        if (isset($this->request->post['cdek_cache_on_delivery'])) {
            $data['cdek_cache_on_delivery'] = $this->request->post['cdek_cache_on_delivery'];
        } else {
            $data['cdek_cache_on_delivery'] = $this->config->get('cdek_cache_on_delivery');
        }

        if (isset($this->request->post['cdek_weight_limit'])) {
            $data['cdek_weight_limit'] = $this->request->post['cdek_weight_limit'];
        } else {
            $data['cdek_weight_limit'] = $this->config->get('cdek_weight_limit');
        }

        if (isset($this->request->post['cdek_use_postcode'])) {
            $data['cdek_use_postcode'] = $this->request->post['cdek_use_postcode'];
        } elseif (!is_null($this->config->get('cdek_use_postcode'))) {
            $data['cdek_use_postcode'] = $this->config->get('cdek_use_postcode');
        } else {
            $data['cdek_use_postcode'] = 1;
        }

        if (isset($this->request->post['cdek_use_region'])) {
            $data['cdek_use_region'] = $this->request->post['cdek_use_region'];
        } elseif (!is_null($this->config->get('cdek_use_region'))) {
            $data['cdek_use_region'] = $this->config->get('cdek_use_region');
        } else {
            $data['cdek_use_region'] = 1;
        }

        if (isset($this->request->post['cdek_use_region_russia'])) {
            $data['cdek_use_region_russia'] = $this->request->post['cdek_use_region_russia'];
        } elseif (!is_null($this->config->get('cdek_use_region_russia'))) {
            $data['cdek_use_region_russia'] = $this->config->get('cdek_use_region_russia');
        } else {
            $data['cdek_use_region_russia'] = 1;
        }

        if (isset($this->request->post['cdek_log'])) {
            $data['cdek_log'] = $this->request->post['cdek_log'];
        } else {
            $data['cdek_log'] = $this->config->get('cdek_log');
        }

        if (isset($this->request->post['cdek_customer_tariff_list'])) {
            $data['cdek_customer_tariff_list'] = $this->request->post['cdek_customer_tariff_list'];
        } elseif ($this->config->get('cdek_customer_tariff_list')) {
            $data['cdek_customer_tariff_list'] = $this->config->get('cdek_customer_tariff_list');
        } else {
            $data['cdek_customer_tariff_list'] = array();
        }

        $data['geo_zones'] = $this->model_localisation_geo_zone->getGeoZones();

        $data['tariff_list'] = $this->_getTariffList();

        $data['tariff_mode'] = $this->getTariffMode();

        if (isset($data['cdek_customer_tariff_list'])) {

            foreach ($data['cdek_customer_tariff_list'] as $tariff_row => $tariff_info) {

                if (array_key_exists('tariff_id', $tariff_info) && array_key_exists($tariff_info['tariff_id'], $data['tariff_list'])) {

                    $tariff_id = $tariff_info['tariff_id'];

                    $title = $data['tariff_list'][$tariff_id]['title'];

                    if (array_key_exists('im', $data['tariff_list'][$tariff_id])) {
                        $title .= ' ***';
                    }

                    $data['cdek_customer_tariff_list'][$tariff_row] += array(
                        'tariff_name'    => $title,
                        'mode_name'        => $data['tariff_mode'][$tariff_info['mode_id']]
                    );
                } else {
                    unset($data['cdek_tariff_list'][$tariff_row]);
                }
            }
        }

        if (isset($this->request->post['cdek_work_mode'])) {
            $data['cdek_work_mode'] = $this->request->post['cdek_work_mode'];
        } else {
            $data['cdek_work_mode'] = $this->config->get('cdek_work_mode');
        }

        if (isset($this->request->post['cdek_show_pvz'])) {
            $data['cdek_show_pvz'] = $this->request->post['cdek_show_pvz'];
        } else {
            $data['cdek_show_pvz'] = $this->config->get('cdek_show_pvz');
        }

        if (isset($this->request->post['cdek_pvz_more_one'])) {
            $data['cdek_pvz_more_one'] = $this->request->post['cdek_pvz_more_one'];
        } else {
            $data['cdek_pvz_more_one'] = $this->config->get('cdek_pvz_more_one');
        }

        if (isset($this->request->post['cdek_default_param'])) {
            $data['cdek_default_param'] = $this->request->post['cdek_default_param'];
        } else {
            $data['cdek_default_param'] = $this->config->get('cdek_default_param');
        }

        if (isset($this->request->post['cdek_tax_class_id'])) {
            $data['cdek_tax_class_id'] = $this->request->post['cdek_tax_class_id'];
        } else {
            $data['cdek_tax_class_id'] = $this->config->get('cdek_tax_class_id');
        }

        if (isset($this->request->post['cdek_geo_zone_id'])) {
            $data['cdek_geo_zone_id'] = $this->request->post['cdek_geo_zone_id'];
        } else {
            $data['cdek_geo_zone_id'] = $this->config->get('cdek_geo_zone_id');
        }

        if (isset($this->request->post['cdek_customer_group_id'])) {
            $data['cdek_customer_group_id'] = $this->request->post['cdek_customer_group_id'];
        } else {
            $data['cdek_customer_group_id'] = $this->config->get('cdek_customer_group_id');
        }

        if (isset($this->request->post['cdek_period'])) {
            $data['cdek_period'] = $this->request->post['cdek_period'];
        } else {
            $data['cdek_period'] = $this->config->get('cdek_period');
        }

        if (isset($this->request->post['cdek_delivery_data'])) {
            $data['cdek_delivery_data'] = $this->request->post['cdek_delivery_data'];
        } else {
            $data['cdek_delivery_data'] = $this->config->get('cdek_delivery_data');
        }

        if (isset($this->request->post['cdek_empty_address'])) {
            $data['cdek_empty_address'] = $this->request->post['cdek_empty_address'];
        } else {
            $data['cdek_empty_address'] = $this->config->get('cdek_empty_address');
        }

        if (isset($this->request->post['cdek_min_weight'])) {
            $data['cdek_min_weight'] = $this->request->post['cdek_min_weight'];
        } else {
            $data['cdek_min_weight'] = $this->config->get('cdek_min_weight');
        }

        if (isset($this->request->post['cdek_max_weight'])) {
            $data['cdek_max_weight'] = $this->request->post['cdek_max_weight'];
        } else {
            $data['cdek_max_weight'] = $this->config->get('cdek_max_weight');
        }

        if (isset($this->request->post['cdek_min_total'])) {
            $data['cdek_min_total'] = $this->request->post['cdek_min_total'];
        } else {
            $data['cdek_min_total'] = $this->config->get('cdek_min_total');
        }

        if (isset($this->request->post['cdek_max_total'])) {
            $data['cdek_max_total'] = $this->request->post['cdek_max_total'];
        } else {
            $data['cdek_max_total'] = $this->config->get('cdek_max_total');
        }

        if (isset($this->request->post['cdek_city_from'])) {
            $data['cdek_city_from'] = $this->request->post['cdek_city_from'];
        } else {
            $data['cdek_city_from'] = $this->config->get('cdek_city_from');
        }

        if (isset($this->request->post['cdek_length_class_id'])) {
            $data['cdek_length_class_id'] = $this->request->post['cdek_length_class_id'];
        } elseif ($this->config->get('cdek_length_class_id')) {
            $data['cdek_length_class_id'] = $this->config->get('cdek_length_class_id');
        } else {
            $data['cdek_length_class_id'] = 1;
        }

        if (isset($this->request->post['cdek_weight_class_id'])) {
            $data['cdek_weight_class_id'] = $this->request->post['cdek_weight_class_id'];
        } elseif ($this->config->get('cdek_weight_class_id')) {
            $data['cdek_weight_class_id'] = $this->config->get('cdek_weight_class_id');
        } else {
            $data['cdek_weight_class_id'] = 1;
        }

        if (isset($this->request->post['cdek_city_from_id'])) {
            $data['cdek_city_from_id'] = $this->request->post['cdek_city_from_id'];
        } else {
            $data['cdek_city_from_id'] = $this->config->get('cdek_city_from_id');
        }

        if (isset($this->request->post['cdek_append_day'])) {
            $data['cdek_append_day'] = $this->request->post['cdek_append_day'];
        } else {
            $data['cdek_append_day'] = (int)$this->config->get('cdek_append_day');
        }

        if (isset($this->request->post['cdek_more_days'])) {
            $data['cdek_more_days'] = $this->request->post['cdek_more_days'];
        } else {
            $data['cdek_more_days'] = (int)$this->config->get('cdek_more_days');
        }

        if (isset($this->request->post['cdek_login'])) {
            $data['cdek_login'] = $this->request->post['cdek_login'];
        } else {
            $data['cdek_login'] = $this->config->get('cdek_login');
        }

        if (isset($this->request->post['cdek_password'])) {
            $data['cdek_password'] = $this->request->post['cdek_password'];
        } else {
            $data['cdek_password'] = $this->config->get('cdek_password');
        }

        if (isset($this->request->post['cdek_store'])) {
            $data['cdek_store'] = $this->request->post['cdek_store'];
        } elseif ($this->config->get('cdek_store')) {
            $data['cdek_store'] = $this->config->get('cdek_store');
        } else {
            $data['cdek_store'] = array();
        }

        if (isset($this->request->post['cdek_packing_weight_class_id'])) {
            $data['cdek_packing_weight_class_id'] = $this->request->post['cdek_packing_weight_class_id'];
        } else {
            $data['cdek_packing_weight_class_id'] = $this->config->get('cdek_packing_weight_class_id');
        }

        if (isset($this->request->post['cdek_packing_prefix'])) {
            $data['cdek_packing_prefix'] = $this->request->post['cdek_packing_prefix'];
        } else {
            $data['cdek_packing_prefix'] = $this->config->get('cdek_packing_prefix');
        }


        if (isset($this->request->post['cdek_packing_mode'])) {
            $data['cdek_packing_mode'] = $this->request->post['cdek_packing_mode'];
        } else {
            $data['cdek_packing_mode'] = $this->config->get('cdek_packing_mode');
        }

        if (isset($this->request->post['cdek_packing_value'])) {
            $data['cdek_packing_value'] = $this->request->post['cdek_packing_value'];
        } else {
            $data['cdek_packing_value'] = $this->config->get('cdek_packing_value');
        }

        if (isset($this->request->post['cdek_packing_min_weight'])) {
            $data['cdek_packing_min_weight'] = $this->request->post['cdek_packing_min_weight'];
        } else {
            $data['cdek_packing_min_weight'] = $this->config->get('cdek_packing_min_weight');
        }

        if (isset($this->request->post['cdek_discounts'])) {
            $data['cdek_discounts'] = $this->request->post['cdek_discounts'];
        } elseif ($this->config->get('cdek_discounts')) {
            $data['cdek_discounts'] = $this->config->get('cdek_discounts');
        } else {
            $data['cdek_discounts'] = array();
        }

        if (isset($this->request->post['cdek_city_ignore'])) {
            $data['cdek_city_ignore'] = $this->request->post['cdek_city_ignore'];
        } else {
            $data['cdek_city_ignore'] = $this->config->get('cdek_city_ignore');
        }

        if (isset($this->request->post['cdek_empty'])) {
            $data['cdek_empty'] = $this->request->post['cdek_empty'];
        } else {
            $data['cdek_empty'] = $this->config->get('cdek_empty');
        }


        // if (isset($this->request->post['cdek_status'])) {
        //     $data['cdek_status'] = $this->request->post['cdek_status'];
        // } else {
        //     $data['cdek_status'] = $this->config->get('cdek_status');
        // }

        // if (isset($this->request->post['cdek_sort_order'])) {
        //     $data['cdek_sort_order'] = $this->request->post['cdek_sort_order'];
        // } else {
        //     $data['cdek_sort_order'] = $this->config->get('cdek_sort_order');
        // }


        if (isset($this->request->post['shipping_cdek_status'])) {
            $data['shipping_cdek_status'] = $this->request->post['shipping_cdek_status'];
        } else {
            $data['shipping_cdek_status'] = $this->config->get('shipping_cdek_status');
        }

        if (isset($this->request->post['shipping_cdek_sort_order'])) {
            $data['shipping_cdek_sort_order'] = $this->request->post['shipping_cdek_sort_order'];
        } else {
            $data['shipping_cdek_sort_order'] = $this->config->get('shipping_cdek_sort_order');
        }


        $data['languages'] = $this->model_localisation_language->getLanguages();
        $data['geo_zones'] = $this->model_localisation_geo_zone->getGeoZones();
        $data['tax_classes'] = $this->model_localisation_tax_class->getTaxClasses();
        if (version_compare(VERSION, '2.1') >= 0) {
            $data['customer_groups'] = $this->model_customer_customer_group->getCustomerGroups();
        } else {
            $data['customer_groups'] = $this->model_sale_customer_group->getCustomerGroups();
        }
        $data['length_classes'] = $this->model_localisation_length_class->getLengthClasses();
        $data['weight_classes'] = $this->model_localisation_weight_class->getWeightClasses();

        $this->load->model('setting/store');

        $data['stores'] = array();
        $data['stores'][] = array(
            'store_id' => 0,
            'name'       => $this->language->get('text_store_default')
        );

        $data['stores'] = array_merge($data['stores'], $this->model_setting_store->getStores());

        // Load sub-templates for Twig
        $data['html_general'] = $this->load->view('extension/shipping/cdek/general', $data);
        $data['html_data'] = $this->load->view('extension/shipping/cdek/data', $data);
        $data['html_auth'] = $this->load->view('extension/shipping/cdek/auth', $data);
        $data['html_tariff'] = $this->load->view('extension/shipping/cdek/tariff', $data);
        $data['html_discount'] = $this->load->view('extension/shipping/cdek/discount', $data);
        $data['html_package'] = $this->load->view('extension/shipping/cdek/package', $data);
        $data['html_additional'] = $this->load->view('extension/shipping/cdek/additional', $data);
        $data['html_empty'] = $this->load->view('extension/shipping/cdek/empty', $data);

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/shipping/cdek', $data));
    }

    private function validate()
    {

        if (!$this->user->hasPermission('modify', 'extension/shipping/cdek')) {
            $this->error['warning'] = $this->language->get('error_permission');
        } else {

            foreach (array('cdek_weight_class_id', 'cdek_length_class_id') as $item) {
                if (!isset($this->request->post[$item]) || !$this->request->post[$item]) $this->error[$item] = $this->language->get('error_empty');
            }

            if (isset($this->request->post['cdek_default_param']) && isset($this->request->post['cdek_default_param']['use']) && $this->request->post['cdek_default_param']['use']) {

                $default_param = $this->request->post['cdek_default_param'];

                foreach (array('size_a', 'size_b', 'size_c') as $item) {

                    if (!isset($default_param[$item]) || !is_numeric($default_param[$item])) {
                        $this->error['cdek_default_param']['size'] = $this->language->get('error_numeric');
                        break;
                    } elseif ($default_param[$item] <= 0) {
                        $this->error['cdek_default_param']['size'] = $this->language->get('error_positive_numeric');
                        break;
                    }
                }

                if (!isset($default_param['weight']) || !is_numeric($default_param['weight'])) {
                    $this->error['cdek_default_param']['weight'] = $this->language->get('error_numeric');
                } elseif ($default_param['weight'] <= 0) {
                    $this->error['cdek_default_param']['weight'] = $this->language->get('error_positive_numeric');
                }
            }

            foreach (array('cdek_append_day', 'cdek_max_weight', 'cdek_min_weight', 'cdek_min_total', 'cdek_max_total', 'cdek_sort_order', 'cdek_packing_value', 'cdek_more_days') as $item) {
                if (isset($this->request->post[$item]) && $this->request->post[$item] != "" && !is_numeric($this->request->post[$item])) {
                    $this->error[$item] = $this->language->get('error_numeric');
                }
            }

            if (isset($this->request->post['cdek_packing_min_weight']) && $this->request->post['cdek_packing_min_weight'] != "") {

                if (!is_numeric($this->request->post['cdek_packing_min_weight'])) {
                    $this->error['cdek_packing_min_weight'] = $this->language->get('error_numeric');
                } elseif ($this->request->post['cdek_packing_min_weight'] <= 0) {
                    $this->error['cdek_packing_min_weight'] = $this->language->get('error_positive_numeric');
                }
            }

            if (!isset($this->request->post['cdek_customer_tariff_list']) || empty($this->request->post['cdek_customer_tariff_list'])) {
                $this->error['tariff_list'] = $this->language->get('error_tariff_list');
            } else {

                $geo_zones = $tariff_exists = array();

                $this->load->model('localisation/geo_zone');

                foreach ($this->model_localisation_geo_zone->getGeoZones() as $item) {
                    $geo_zones[$item['geo_zone_id']] = '«' . $item['name'] . '»';
                }

                foreach ($this->request->post['cdek_customer_tariff_list'] as $tariff_row => $tariff_info) {

                    $tariff_id = $tariff_info['tariff_id'];

                    foreach (array('max_weight', 'min_weight', 'min_total', 'max_total') as $item) {
                        if ($tariff_info[$item] != "" && !is_numeric($tariff_info[$item])) {
                            $this->error['tariff_list_item'][$tariff_row][$item] = $this->language->get('error_numeric');
                        } elseif (is_numeric($tariff_info[$item]) && $tariff_info[$item] <= 0) {
                            $this->error['tariff_list_item'][$tariff_row][$item] = $this->language->get('error_positive_numeric');
                        }
                    }

                    $geo_zone = !empty($tariff_info['geo_zone']) ? array_flip($tariff_info['geo_zone']) : array('all' => 'all');

                    if (array_key_exists($tariff_id, $tariff_exists)) {

                        $exists = array_intersect_key($geo_zone, $tariff_exists[$tariff_id]);

                        if (!empty($exists)) {

                            $error_zones = array();

                            foreach (array_keys($exists) as $zone_id) {
                                if (array_key_exists($zone_id, $geo_zones)) {
                                    $error_zones[] = $geo_zones[$zone_id];
                                } elseif ($zone_id == 'all') {
                                    $error_zones[] = 'все регионы';
                                }
                            }

                            if (!empty($error_zones)) {
                                $this->error['tariff_list_item'][$tariff_row]['exists'] = sprintf($this->language->get('error_tariff_item_exists'), implode(', ', array_unique($error_zones)));
                            }
                        }

                        $tariff_exists[$tariff_id] += $geo_zone;
                    } else {
                        $tariff_exists[$tariff_id] = $geo_zone;
                    }
                }
            }

            if (!empty($this->request->post['cdek_discounts'])) {

                foreach ($this->request->post['cdek_discounts'] as $discount_row => $discount_data) {

                    if ($discount_data['total'] == "" || !is_numeric($discount_data['total'])) {
                        $this->error['cdek_discounts'][$discount_row]['total'] = $this->language->get('error_numeric');
                    }

                    if ($discount_data['value'] == '') {
                        $this->error['cdek_discounts'][$discount_row]['value'] = $this->language->get('error_empty');
                    } elseif (!is_numeric($discount_data['value'])) {
                        $this->error['cdek_discounts'][$discount_row]['value'] = $this->language->get('error_numeric');
                    }
                }
            }

            if (!empty($this->request->post['cdek_empty']['use'])) {

                if ($this->request->post['cdek_empty']['cost'] != "" && !is_numeric($this->request->post['cdek_empty']['cost'])) {
                    $this->error['cdek_empty']['cost'] = $this->language->get('error_numeric');
                }
            }

            if ($this->error && !isset($this->error['warning'])) {
                $this->error['warning'] = $this->language->get('error_warning');
            }
        }

        if (!$this->error) {
            return true;
        } else {
            return false;
        }
    }

    private function getTariffMode()
    {
        $modeList = $this->getInfo()->getTariffMode();
        return $modeList;
    }

    private function _getTariffList()
    {
        $tariffList = $this->getInfo()->getTariffList();
        return $tariffList;
    }

    private function getStores()
    {

        $this->load->model('setting/store');

        $stores = $this->model_setting_store->getStores();
        $stores[] = array('store_id' => 0, 'name' => $this->config->get('config_name'));

        return $stores;
    }

    private function saveTariffList()
    {

        $this->load->model('setting/setting');

        $tariff_list = array(
            'cdek_tariff_list' => $this->_getTariffList()
        );

        foreach ($this->getStores() as $key => $store_info) {
            $this->model_setting_setting->editSetting('cdek_tariff_list', $tariff_list, $store_info['store_id']);
        }
    }

    public function checkInstall()
    {
        $status = $this->model_tool_cdek_tool->checkInstalled('shipping', 'cdek');
    }

    private function getInfo()
    {

        static $instance;

        if (!$instance) {
            $instance = $this->api->loadComponent('info');
        }

        return $instance;
    }
}
