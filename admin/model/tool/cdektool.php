<?php
class ModelToolCdektool extends Model
{

    public function check()
    {
        // $license = $this->checkLicense();

        // if($license['status'] == false) {
        // 	$this->session->data['error'] = $license['message'];
        // 	return false;
        // } else {
        return true;
        // }
    }

    public function checkInstalled($type, $name)
    {
        // OpenCart 3.x controller path
        $oc3_controller = DIR_APPLICATION . 'controller/extension/' . $type . '/' . $name . '.php';
        // OpenCart 2.x controller path
        $oc2_controller = DIR_APPLICATION . 'controller/' . $type . '/' . $name . '.php';

        if (!file_exists($oc3_controller) && !file_exists($oc2_controller)) {
            return false;
        }

        $route_oc3 = 'extension/' . $type . '/' . $name;
        $route_oc2 = $type . '/' . $name;

        // Try to load the install controller if it exists
        try {
            $this->load->controller($route_oc3 . '/install');
        } catch (Exception $e) {
            try {
                $this->load->controller($route_oc2 . '/install');
            } catch (Exception $e2) {
                // Silently ignore if install fails
            }
        }

        // Add permissions if user model is available
        if (isset($this->user) && method_exists($this->user, 'getGroupId')) {
            $this->load->model('user/user_group');

            $group_id = $this->user->getGroupId();

            $this->model_user_user_group->addPermission($group_id, 'access', $route_oc3);
            $this->model_user_user_group->addPermission($group_id, 'modify', $route_oc3);
            $this->model_user_user_group->addPermission($group_id, 'access', $route_oc2);
            $this->model_user_user_group->addPermission($group_id, 'modify', $route_oc2);
        }

        return true;
    }

    public function checkLicense()
    {
        $this->load->model('setting/setting');
        $license_status = 'fail';
        $user = 'test';
        $password = 'test';

        $settings = $this->model_setting_setting->getSetting('cdekLicense');
        if (isset($settings['cdekLicense_user']) && isset($settings['cdekLicense_password'])) {
            $user = $settings['cdekLicense_user'];
            $password = $settings['cdekLicense_password'];
            $license_status = $this->checkUser($user, $password);
            if ($license_status == 'fail') {
                $license = array('status' => false, 'message' => 'Пользователь ' . $user . ' не активен! <a href="http://cdek-souz.ru/users/registrate/" target="_blank">Зарегистрироваться</a> <br> <b>Перед установкой/настройкой модуля пожалуйста, ознакомьтесь с <a href="http://cdek.opencart.ru/documentation/" target="_blank">документацией</a></b>');
            } else {
                $license = array('status' => true, 'message' => 'Лицензия ' . $user . ' работает нормально!');
            }
        } else {
            $license = array('status' => false, 'message' => 'Нет лицензии! <a href="http://cdek-souz.ru/users/registrate/" target="_blank">Зарегистрироваться</a> <br> <b>Перед установкой/настройкой модуля пожалуйста, ознакомьтесь с <a href="http://cdek.opencart.ru/documentation/" target="_blank">документацией</a></b>');
        }

        return $license;
    }

    public function checkUser($user, $pass)
    {
        $licenseServers = array();

        $licenseServers[] = 'http://cdek-souz.ru/udata/users/userCheck/';
        $licenseServers[] = 'https://cdek.im/udata/users/userCheck';
        $licenseServers[] = 'http://cdek.opencart.ru/service/license/';

        $status = 'fail';

        foreach ($licenseServers as $licenseServer) {
            $response = $this->getCurl($licenseServer . '?m=' . $user . '&p=' . $pass . '');
            $status = $response['content'];

            if ($status != 'fail') {
                return $status;
            }
        }

        return $status;
    }

    public function importCdekCities()
    {
        $file = DIR_SYSTEM . "library/cdek_integrator/cdek_city.json";
        if (file_exists($file)) {
            $json = file_get_contents($file);
            if (!empty($json)) {
                $this->db->query("TRUNCATE TABLE " . DB_PREFIX . "cdek_city");
                $cdek_cities = json_decode($json, 1);
                foreach ($cdek_cities as $cdek_city) {
                    $this->db->query("INSERT INTO " . DB_PREFIX . "cdek_city SET id='" . (int)$cdek_city['id'] . "', name='" . $this->db->escape($cdek_city['name']) . "', cityName='" . $this->db->escape($cdek_city['cityName']) . "', regionName='" . $this->db->escape($cdek_city['regionName']) . "', center='" . (int)$cdek_city['center'] . "', payment_limit='" . (float)$cdek_city['cache_limit'] . "'");
                }
            }
        }
    }

    public function getCurl($url)
    {
        $options = array(
            CURLOPT_RETURNTRANSFER => true,     // return web page
            CURLOPT_HEADER         => false,    // don't return headers
            CURLOPT_FOLLOWLOCATION => true,     // follow redirects, or false
            CURLOPT_ENCODING       => "",       // handle all encodings
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_USERAGENT      => "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.17 (KHTML, like Gecko) Chrome/24.0.1312.52 Safari/537.17", // who am i
            CURLOPT_AUTOREFERER    => true,     // set referer on redirect
            CURLOPT_CONNECTTIMEOUT => 10,       // timeout on connect
            CURLOPT_TIMEOUT        => 10,       // timeout on response
            CURLOPT_MAXREDIRS      => 10,       // stop after 10 redirects
        );
        $ch      = curl_init($url);
        curl_setopt_array($ch, $options);
        $content = curl_exec($ch);
        $err     = curl_errno($ch);
        $errmsg  = curl_error($ch);
        $header  = curl_getinfo($ch);
        curl_close($ch);
        $header['errno']   = $err;
        $header['errmsg']  = $errmsg;
        $header['content'] = $content;
        return $header;
    }
}
