<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
	<div class="page-header">
		<div class="container-fluid">
			<div class="pull-right">
				<a onclick="$('#form').submit();" class="btn btn-primary"><?php echo $button_send; ?></a>
				<a href="<?php echo $cancel; ?>" class="btn btn-primary"><?php echo $button_cancel; ?></a>
			</div>
			<h1><?php echo $heading_title; ?></h1>
			<ul class="breadcrumb">
				<?php foreach ($breadcrumbs as $breadcrumb) { ?>
					<li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
	<div class="container-fluid">
		<?php if ($error_warning) { ?>
			<div class="warning">
				<ul>
					<?php foreach ($error_warning as $message) { ?>
						<li><?php echo $message; ?></li>
					<?php } ?>
				</ul>
			</div>
		<?php } ?>
		<?php if ($success) { ?>
			<div class="success"><?php echo $success; ?></div>
		<?php } ?>
		<div class="box">
			<div class="content">
				<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form">
					<table class="form table">
						<tbody>
							<tr>
								<td><em>Номер отправления</em></td>
								<td>
									<?php echo $number; ?>
									<input type="hidden" name="number" value="<?php echo $number; ?>" />
								</td>
							</tr>
							<tr>
								<td><em><?php echo $text_order_count_items; ?></em></td>
								<td><?php echo $total; ?></td>
							</tr>
							<?php if ($city_default) { ?>
								<tr>
									<td><em><?php echo $text_city; ?></em></td>
									<td><?php echo $city_name; ?></td>
								</tr>
							<?php } ?>
						</tbody>
					</table>



					<div id="vtabs" class="vtabs col-md-2">
						<h2><?php echo $text_title_orders; ?></h2>



						<?php $activeA = 'active'; ?>


						<a class="vtabs-link <?php echo $activeA; ?>" href="#order-<?php echo $cdek_orders['order_id']; ?>" <?php if (isset($error['cdek_orders'])) { ?> class="error-tab" <?php } ?> data-toggle="tab"><?php echo $text_order_n; ?><?php echo $cdek_orders['order_id']; ?></a><br>


					</div>
					<div class="cdek-orders col-md-10 tab-content">

						<?php $activeTab = ' active'; ?>

						<div class="vtabs-content order tab-pane<?php echo $activeTab; ?>" id="order-<?php echo $cdek_orders['order_id']; ?>" data-order="<?php echo $cdek_orders['order_id']; ?>">
							<ul id="tabs-order-<?php echo $cdek_orders['order_id']; ?>" class="nav nav-tabs">
								<li class="active"><a href="#order-data" data-toggle="tab"><?php echo $tab_data; ?></a></li>
								<li><a href="#order-recipient" <?php if (isset($error['cdek_orders']['recipient'])) { ?> class="error-tab" <?php } ?> data-toggle="tab"><?php echo $tab_recipient; ?></a></li>
								<li><a href="#order-package" <?php if (isset($error['cdek_orders']['package'])) { ?> class="error-tab" <?php } ?> data-toggle="tab"><?php echo $tab_package; ?></a></li>
								<li><a href="#order-courier" <?php if (isset($error['cdek_orders']['courier'])) { ?> class="error-tab" <?php } ?> data-toggle="tab"><?php echo $tab_courier; ?></a></li>
								<li><a href="#order-additional" <?php if (isset($error['cdek_orders']['add_service'])) { ?> class="error-tab" <?php } ?> data-toggle="tab"><?php echo $tab_additional; ?></a></li>
							</ul>

							<div class="tab-content">
								<div id="order-data" class="form-horizontal tab-pane active">

									<div class="form-group">
										<label class="col-sm-2 control-label"><?php echo $text_order_id; ?></label>
										<div class="col-sm-10">
											<?php echo $cdek_orders['order_id']; ?>
											<input type="hidden" name="cdek_orders[order_id]" value="<?php echo $cdek_orders['order_id']; ?>" />
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label"><?php echo $text_order_total; ?></label>
										<div class="col-sm-10">
											<?php echo $cdek_orders['total']; ?>
										</div>
									</div>

									<div class="form-group <?php if (!$city_default) { ?>required<?php } ?>">
										<label class="col-sm-2 control-label" for="cdek-orders-city-id"><?php echo $text_city; ?></label>
										<div class="col-sm-10">
											<?php if ($city_default) { ?>
												<?php echo $city_name; ?>
												<input type="hidden" name="cdek_orders[city_id]" value="<?php echo $city_id; ?>" />
												<input type="hidden" name="cdek_orders[city_name]" value="<?php echo $city_name; ?>" />
											<?php } else { ?>
												<input type="hidden" class="setting-city-id" name="cdek_orders[city_id]" value="<?php if (!empty($cdek_orders['city_id'])) { ?><?php echo trim($cdek_orders['city_id']); ?><?php } ?>" />

												<a class="js city-from" <?php if (empty($cdek_orders['city_id'])) { ?>style=" display:none;" <?php } ?>><?php if (!empty($cdek_orders['city_name'])) { ?><?php echo $cdek_orders['city_name']; ?><?php } ?></a>

												<input type="text" id="cdek-orders-city-id" class="setting-city-name form-control" name="cdek_orders[city_name]" value="<?php if (!empty($cdek_orders['city_name'])) { ?> <?php echo $cdek_orders['city_name']; ?><?php } ?>" <?php if (!empty($cdek_orders['city_id'])) { ?>style=" display: none;" <?php } ?> />
											<?php } ?>

											<?php if (isset($error['cdek_orders']['city_id'])) { ?>
												<div class="text-danger"><?php echo $error['cdek_orders']['city_id']; ?></div>
											<?php } ?>
										</div>
									</div>
									<div class="form-group required">
										<label class="col-sm-2 control-label" for="cdek-orders-tariff-id"><?php echo $entry_tariff; ?></label>
										<div class="col-sm-10">
											<?php if ($cdek_orders['shipping_method']) { ?>
												<p class="help"><?php echo $text_customer_shipping_method; ?>: <?php echo $cdek_orders['shipping_method']; ?></p>
											<?php } ?>
											<select id="cdek-orders-tariff-id" class="tariff_switcher form-control" name="cdek_orders[tariff_id]">
												<option value=""><?php echo $text_select; ?></option>
												<?php foreach ($tariff_list as $tariff_id => $tariff_info) { ?>
													<option value="<?php echo $tariff_id; ?>" <?php if (!empty($cdek_orders['tariff_id']) && $cdek_orders['tariff_id'] == $tariff_id) { ?> selected="selected" <?php } ?> data-mode="<?php echo $tariff_info['mode_id']; ?>"><?php echo $tariff_info['title']; ?></option>
												<?php } ?>
											</select>
											<input type="hidden" class="setting-mode-id" name="cdek_orders[mode_id]" value="<?php if (!empty($cdek_orders['mode_id'])) { ?><?php echo $cdek_orders['mode_id']; ?><?php } ?>" />
											<?php if (isset($error['cdek_orders']['tariff_id'])) { ?>
												<div class="text-danger"><?php echo $error['cdek_orders']['tariff_id']; ?></div>
											<?php } ?>
											<div class="shipping-price"></div>
										</div>
									</div>
									<div class="form-group seller-adress required" <?php if (
																						empty($cdek_orders['tariff_id']) ||
																						empty($tariff_list[$cdek_orders['tariff_id']]['mode_id']) ||
																						in_array($tariff_list[$cdek_orders['tariff_id']]['mode_id'], [3, 4, 6])
																					) { ?> style="display: none;" <?php } ?>>
										<label class="col-sm-2 control-label" for="cdek-orders-city-id"><?php echo $entry_seller_address; ?></label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="cdek_orders[sell_address]" value="<?php echo $sell_address; ?>" />
										</div>
									</div>
									<div class="form-group required address-mode shipment-point" <?php if (
																										empty($cdek_orders['tariff_id']) ||
																										empty($tariff_list[$cdek_orders['tariff_id']]['mode_id']) ||
																										in_array($tariff_list[$cdek_orders['tariff_id']]['mode_id'], [1, 2, 5])
																									) { ?> style="display: none;" <?php } ?>>
										<label class="col-sm-2 control-label" for=""><?php echo $entry_pvz_sell; ?></label>
										<div class="col-sm-10">
											<select name="cdek_orders[shipment_point]" class="shipment-point-code form-control">
												<option value=""><?php echo $text_select; ?></option>
												<?php if (!empty($cdek_orders['pvz_list_sell'])) { ?>
													<?php foreach ($cdek_orders['pvz_list_sell'] as $pvz_info) { ?>
														<option <?php if (!empty($cdek_orders['shipment_point']) && $cdek_orders['shipment_point'] == $pvz_info['Code']) { ?> selected="selected" <?php } ?> <?php if (empty($cdek_orders['tariff_id']) || empty($tariff_list[$cdek_orders['tariff_id']]['mode_id']) || !in_array($tariff_list[$cdek_orders['tariff_id']]['mode_id'], [0 => 3, 1 => 4, 2 => 7])) { ?> disabled="disabled" <?php } ?> value="<?php echo $pvz_info['Code']; ?>" data-name="<?php echo $pvz_info['Name']; ?>" data-y="<?php echo $pvz_info['y']; ?>" data-x="<?php echo $pvz_info['x']; ?>" data-address="<?php echo $pvz_info['Address']; ?>" data-worktime="<?php echo $pvz_info['WorkTime']; ?>" data-phone="<?php echo $pvz_info['Phone']; ?>"> <?php echo $pvz_info['Name']; ?> (<?php echo $pvz_info['Address']; ?>)</option>
													<?php } ?>
												<?php } ?>
											</select>
										</div>
									</div>

									<div class="form-group required">
										<label class="col-sm-2 control-label" for="cdek-orders-cod"><?php echo $entry_cod; ?></label>
										<div class="col-sm-10">
											<select id="cdek-orders-cod" class="cdek-order-cod toggle form-control" name="cdek_orders[cod]" data-toggletarget="#cdek-order-currency-cod">
												<?php foreach ($boolean_variables as $key => $value) { ?>
													<option value="<?php echo $key; ?>" <?php if ($cdek_orders['cod'] == $key) { ?> selected="selected" <?php } ?>><?php echo $value; ?></option>
												<?php } ?>
											</select>
										</div>
									</div>

									<div class="form-group" id="cdek-order-currency-cod" style="display:<?php echo $cdek_orders['cod'] ? 'block' : 'none'; ?>">
										<label class="col-sm-2 control-label" for="cdek-orders-currency-cod"><?php echo $entry_currency_cod; ?></label>
										<div class="col-sm-10">
											<select class="form-control" id="cdek-orders-currency-cod" name="cdek_orders[currency_cod]">
												<?php foreach ($currency_list as $key => $value) { ?>
													<option value="<?php echo $key; ?>" <?php if (isset($cdek_orders['currency_cod']) && $cdek_orders['currency_cod'] == $key) { ?> selected="selected" <?php } ?>><?php echo $value; ?></option>
												<?php } ?>
											</select>
											<?php if (isset($error['cdek_orders']['currency_cod'])) { ?>
												<div class="text-danger"><?php echo $error['cdek_orders']['currency_cod']; ?></div>
											<?php } ?>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label" for="cdek-orders-delivery-recipient-cost"><?php echo $entry_delivery_recipient_cost; ?></label>
										<div class="col-sm-10">
											<input class="form-control" id="cdek-orders-delivery-recipient-cost" type="text" name="cdek_orders[delivery_recipient_cost]" value="<?php if (!empty($cdek_orders['delivery_recipient_cost'])) { ?><?php echo $cdek_orders['delivery_recipient_cost']; ?><?php } ?>" size="2" />
											<?php if (isset($error['cdek_orders']['delivery_recipient_cost'])) { ?>
												<div class="text-danger"><?php echo $error['cdek_orders']['delivery_recipient_cost']; ?></div>
											<?php } ?>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label" for="cdek-orders-delivery-recipient-vat-rate"><?php echo $entry_delivery_recipient_vat_rate; ?></label>
										<div class="col-sm-10">
											<select class="form-control" id="cdek-orders-delivery-recipient-vat-rate" name="cdek_orders[delivery_recipient_vat_rate]">
												<?php foreach ($vat_rate_list as $vat_rate => $vat_rate_name) { ?>

													<?php $selected = ''; ?>
													<?php if ((!empty($cdek_orders['delivery_recipient_vat_rate']) && ($cdek_orders['delivery_recipient_vat_rate'] == $vat_rate))) { ?>
														<?php $selected = 'selected'; ?>
													<?php } ?>

													<option value="<?php echo $vat_rate; ?>" <?php echo $selected; ?>><?php echo $vat_rate_name; ?></option>
												<?php } ?>
											</select>
											<?php if (isset($error['cdek_orders']['delivery_recipient_vat_rate'])) { ?>
												<div class="text-danger"><?php echo $error['cdek_orders']['delivery_recipient_vat_rate']; ?></div>
											<?php } ?>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label" for="cdek-orders-delivery-recipient-vat-sum"><?php echo $entry_delivery_recipient_vat_sum; ?></label>
										<div class="col-sm-10">
											<input class="form-control" id="cdek-orders-delivery-recipient-vat-sum" type="text" name="cdek_orders[delivery_recipient_vat_sum]" value="<?php if (!empty($cdek_orders['delivery_recipient_vat_sum'])) { ?><?php echo $cdek_orders['delivery_recipient_vat_sum']; ?><?php } ?>" size="2" />
											<?php if (isset($error['cdek_orders']['delivery_recipient_vat_sum'])) { ?>
												<div class="text-danger"><?php echo $error['cdek_orders']['delivery_recipient_vat_sum']; ?></div>
											<?php } ?>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label" for="cdek-orders-seller-name"><?php echo $entry_seller_name; ?></label>
										<div class="col-sm-10">
											<input class="form-control" id="cdek-orders-seller-name" type="text" name="cdek_orders[seller_name]" value="<?php if (!empty($cdek_orders['seller_name'])) { ?><?php echo $cdek_orders['seller_name']; ?><?php } ?>" maxlength="255" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="cdek-orders-seller-telephone"><?php echo $entry_seller_telephone; ?></label>
										<div class="col-sm-10">
											<input class="form-control" id="cdek-orders-seller-telephone" type="text" name="cdek_orders[seller_telephone]" value="<?php if (!empty($cdek_orders['seller_telephone'])) { ?><?php echo $cdek_orders['seller_telephone']; ?><?php } ?>" maxlength="255" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="cdek-orders-seller-inn"><?php echo $entry_seller_inn; ?></label>
										<div class="col-sm-10">
											<input class="form-control" id="cdek-orders-seller-inn" type="text" name="cdek_orders[seller_inn]" value="<?php if (!empty($cdek_orders['seller_inn'])) { ?><?php echo $cdek_orders['seller_inn']; ?><?php } ?>" maxlength="255" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="cdek-orders-seller-address"><?php echo $entry_seller_address; ?></label>
										<div class="col-sm-10">
											<input class="form-control" id="cdek-orders-seller-address" type="text" name="cdek_orders[seller_address]" value="<?php if (!empty($cdek_orders['seller_address'])) { ?><?php echo $cdek_orders['seller_address']; ?><?php } ?>" maxlength="255" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="cdek-orders-seller-ownership"><?php echo $entry_seller_ownership; ?></label>
										<div class="col-sm-10">
											<select class="form-control" id="cdek-orders-seller-ownership" name="cdek_orders[seller_ownership]">
												<?php foreach ($ownership_forms as $ownership_id => $ownership_form) { ?>

													<?php $selected = ''; ?>
													<?php if ((!empty($cdek_orders['seller_ownership']) && ($cdek_orders['seller_ownership'] == $ownership_id))) { ?>
														<?php $selected = 'selected'; ?>
													<?php } ?>

													<option value="<?php echo $ownership_id; ?>" <?php echo $selected; ?>><?php echo $ownership_form; ?></option>
												<?php } ?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="cdek-orders-cdek-comment"><?php echo $entry_comment; ?></label>
										<div class="col-sm-10">
											<?php if (!empty($cdek_orders['comment'])) { ?>
												<div class="help user-comment">
													<p class="user-comment-title"><?php echo $text_user_comment; ?></p>
													<?php echo $cdek_orders['comment']; ?>
												</div>
											<?php } ?>
											<textarea class="form-control" id="cdek-orders-cdek-comment" rows="5" cols="50" name="cdek_orders[cdek_comment]"><?php if (!empty($cdek_orders['cdek_comment'])) { ?><?php echo $cdek_orders['cdek_comment']; ?><?php } ?></textarea>
											<?php if (isset($error['cdek_orders']['cdek_comment'])) { ?>
												<div class="text-danger"><?php echo $error['cdek_orders']['cdek_comment']; ?></div>
											<?php } ?>
										</div>
									</div>

								</div>

								<div id="order-recipient" class="form-horizontal recipient tab-pane">

									<div class="form-group required">
										<label class="col-sm-2 control-label" for="cdek-orders-recipient-name"><?php echo $entry_recipient_name; ?></label>
										<div class="col-sm-10">
											<input class="form-control" id="cdek-orders-recipient-name" type="text" name="cdek_orders[recipient_name]" value="<?php echo $cdek_orders['recipient_name']; ?>" maxlength="128" />
											<?php if (isset($error['cdek_orders']['recipient_name'])) { ?>
												<div class="text-danger"><?php echo $error['cdek_orders']['recipient_name']; ?></div>
											<?php } ?>
										</div>
									</div>

									<div class="form-group required">
										<label class="col-sm-2 control-label" for="cdek-orders-recipient-telephone"><?php echo $entry_recipient_telephone; ?></label>
										<div class="col-sm-10">
											<input class="form-control" id="cdek-orders-recipient-telephone" type="text" name="cdek_orders[recipient_telephone]" value="<?php echo $cdek_orders['recipient_telephone']; ?>" maxlength="50" />
											<?php if (isset($error['cdek_orders']['recipient_telephone'])) { ?>
												<div class="text-danger"><?php echo $error['cdek_orders']['recipient_telephone']; ?></div>
											<?php } ?>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label" for="cdek-orders-recipient-email"><?php echo $entry_recipient_email; ?></label>
										<div class="col-sm-10">
											<input class="form-control" id="cdek-orders-recipient-email" type="text" name="cdek_orders[recipient_email]" value="<?php echo $cdek_orders['recipient_email']; ?>" maxlength="255" />
											<?php if (isset($error['cdek_orders']['recipient_email'])) { ?>
												<div class="text-danger"><?php echo $error['cdek_orders']['recipient_email']; ?></div>
											<?php } ?>
										</div>
									</div>

									<div class="form-group">
										<div class="col-sm-10">
											<h3><?php echo $text_shipping_address; ?></h3>
											<?php if ($cdek_orders['shipping_address']) { ?>
												<p class="help"><?php echo $text_customer_shipping_address; ?>: <?php echo $cdek_orders['shipping_address']; ?></p>
											<?php } ?>
										</div>
									</div>

									<div class="form-group required">
										<label class="col-sm-2 control-label" for="cdek-orders-recipient-city-name"><?php echo $entry_recipient_city; ?></label>
										<div class="col-sm-10">
											<input type="hidden" class="setting-city-id" name="cdek_orders[recipient_city_id]" value="<?php if (!empty($cdek_orders['recipient_city_id'])) { ?><?php echo $cdek_orders['recipient_city_id']; ?><?php } ?>" />

											<a class="js city-from" <?php if (empty($cdek_orders['recipient_city_id'])) { ?>style=" display: none;" <?php } ?>><?php if (!empty($cdek_orders['recipient_city_name'])) { ?><?php echo $cdek_orders['recipient_city_name']; ?><?php } ?></a>

											<input type="text" id="cdek-orders-recipient-city-name" class="setting-city-name form-control" name="cdek_orders[recipient_city_name]" value="<?php if (!empty($cdek_orders['recipient_city_name'])) { ?><?php echo $cdek_orders['recipient_city_name']; ?><?php } ?>" <?php if (!empty($cdek_orders['recipient_city_id'])) { ?> style="display: none;" <?php } ?> />

											<?php if (isset($error['cdek_orders']['recipient_city_id'])) { ?>
												<div class="text-danger"><?php echo $error['cdek_orders']['recipient_city_id']; ?></div>
											<?php } ?>
										</div>
									</div>

									<div class="form-group required address-mode pvz" <?php if (
																							empty($cdek_orders['tariff_id']) ||
																							empty($tariff_list[$cdek_orders['tariff_id']]['mode_id']) ||
																							in_array($tariff_list[$cdek_orders['tariff_id']]['mode_id'], [1, 3])
																						) { ?> style="display: none;" <?php } ?>>

										<label class="col-sm-2 control-label" for=""><?php echo $entry_pvz; ?></label>
										<div class="col-sm-10">
											<select name="cdek_orders[address][pvz_code]" class="address-pvz-code form-control">
												<option value=""><?php echo $text_select; ?></option>
												<?php if (!empty($cdek_orders['pvz_list'])) { ?>
													<?php foreach ($cdek_orders['pvz_list'] as $key => $pvz_info) { ?>
														<option <?php if (!empty($cdek_orders['address']['pvz_code']) && $cdek_orders['address']['pvz_code'] == $pvz_info['Code']) { ?> selected="selected" <?php if (empty($cdek_orders['tariff_id']) || empty($tariff_list[$cdek_orders['tariff_id']]['mode_id']) ||  in_array($tariff_list[$cdek_orders['tariff_id']]['mode_id'], [1, 3])) { ?> disabled="disabled" <?php } ?> <?php } ?> value="<?php echo $pvz_info['Code']; ?>" data-name="<?php echo $pvz_info['Name']; ?>" data-y="<?php echo $pvz_info['y']; ?>" data-x="<?php echo $pvz_info['x']; ?>" data-address="<?php echo $pvz_info['Address']; ?>" data-worktime="<?php echo $pvz_info['WorkTime']; ?>" data-phone="<?php echo $pvz_info['Phone']; ?>"> <?php echo $pvz_info['Name']; ?> (<?php echo $pvz_info['Address']; ?>)</option>
													<?php } ?>
												<?php } ?>
											</select>

											<div class="pvz-wrapper">
												<?php if (!empty($cdek_orders['pvz_info'])) { ?>
													<p><?php echo $cdek_orders['pvz_info']['Name']; ?><?php if ($cdek_orders['pvz_info']['x']) { ?> (<a href="http://maps.google.ru/maps?q=<?php echo $cdek_orders['pvz_info']['y']; ?>,<?php echo $cdek_orders['pvz_info']['x']; ?>" target="_blank">на карте</a>)<?php } ?></p>
													<span class="help">
														<strong>Адрес</strong>: <?php echo $cdek_orders['pvz_info']['Address']; ?><br />
														<?php if (!empty($cdek_orders['pvz_info']['Phone']) && trim($cdek_orders['pvz_info']['Phone']) != '-') { ?>
															<strong>Телефон</strong>: <?php echo $cdek_orders['pvz_info']['Phone']; ?><br />
														<?php } ?>
														<?php if (!empty($cdek_orders['pvz_info']['WorkTime']) && trim($cdek_orders['pvz_info']['WorkTime']) != '-') { ?>
															<strong>Режим работы</strong>: <?php echo $cdek_orders['pvz_info']['WorkTime']; ?>
														<?php } ?>

													</span>
												<?php } ?>
											</div>
											<?php if (isset($error['cdek_orders']['address']['pvz_code'])) { ?>
												<div class="text-danger"><?php echo $error['cdek_orders']['address']['pvz_code']; ?></div>
											<?php } ?>
										</div>
									</div>

									<div class="address-mode address">

										<div class="form-group required" <?php if (
																				empty($cdek_orders['tariff_id']) ||
																				empty($tariff_list[$cdek_orders['tariff_id']]['mode_id']) ||
																				in_array($tariff_list[$cdek_orders['tariff_id']]['mode_id'], [2, 4, 6, 7])
																			) { ?> style="
									
									display: none;
									 " <?php } ?>>
											<label class="col-sm-2 control-label" for="cdek-orders-address-street"><?php echo $entry_street; ?></label>
											<div class="col-sm-10">
												<input class="form-control" id="cdek-orders-address-street" type="text" name="cdek_orders[address][street]" value="<?php if (!empty($cdek_orders['address']['street'])) { ?><?php echo $cdek_orders['address']['street']; ?> <?php } ?>" maxlength="50" />
												<?php if (isset($error['cdek_orders']['address']['street'])) { ?>
													<div class="text-danger"><?php echo $error['cdek_orders']['address']['street']; ?></div>
												<?php } ?>
											</div>
										</div>

										<div class="form-group <?php if (!empty($cdek_orders['tariff_id']) && !empty($tariff_list[$cdek_orders['tariff_id']]['mode_id']) && in_array($tariff_list[$cdek_orders['tariff_id']]['mode_id'], [1, 3])) { ?>  required<?php } ?> ">
											<label class="col-sm-2 control-label" for="cdek-orders-address-house"><?php echo $entry_house; ?></label>
											<div class="col-sm-10">
												<input class="form-control" id="cdek-orders-address-house" type="text" name="cdek_orders[address][house]" value="<?php if (!empty($cdek_orders['address']['house'])) { ?><?php echo $cdek_orders['address']['house']; ?><?php } ?>" size="2" maxlength="30" />

												<?php if (isset($error['cdek_orders']['address']['house'])) { ?>
													<div class="text-danger"><?php echo $error['cdek_orders']['address']['house']; ?></div>
												<?php } ?>
											</div>
										</div>

										<div class="form-group <?php if (!empty($cdek_orders['tariff_id']) && !empty($tariff_list[$cdek_orders['tariff_id']]['mode_id']) && in_array($tariff_list[$cdek_orders['tariff_id']]['mode_id'], [1, 3])) { ?> required <?php } ?>">
											<label class="col-sm-2 control-label" for="cdek-orders-address-flat"><?php echo $entry_flat; ?></label>
											<div class="col-sm-10">
												<input class="form-control" id="cdek-orders-address-flat" type="text" name="cdek_orders[address][flat]" value="<?php if (!empty($cdek_orders['address']['flat'])) { ?><?php echo $cdek_orders['address']['flat']; ?><?php } ?>" size="2" maxlength="10" />
												<?php if (isset($error['cdek_orders']['address']['flat'])) { ?>
													<div class="text-danger"><?php echo $error['cdek_orders']['address']['flat']; ?></div>
												<?php } ?>
											</div>
										</div>
									</div>
								</div>
								<div id="order-package" class="form-horizontal tab-pane">
									<div class="form-group">
										<label class="col-sm-2 control-label"><?php echo $text_package; ?></label>
										<div class="col-sm-10">
											<label class="radio-inline">
												<?php if ($check_package) { ?>
													<input type="radio" name="check_package" value="1" checked="checked" />
													<?php echo $text_yes; ?>
												<?php } else { ?>
													<input type="radio" name="check_package" value="1" />
													<?php echo $text_yes; ?>
												<?php } ?>
											</label>
											<label class="radio-inline">
												<?php if (!$check_package) { ?>
													<input type="radio" name="check_package" value="0" checked="checked" />
													<?php echo $text_no; ?>
												<?php } else { ?>
													<input type="radio" name="check_package" value="0" />
													<?php echo $text_no; ?>
												<?php } ?>
											</label>
										</div>
									</div>
									<div id="order-package-full" class="package">
										<div class="form-horizontal">
											<div class="form-group required">
												<label class="col-sm-2 control-label" for="cdek-orders-currency"><?php echo $entry_currency; ?></label>
												<div class="col-sm-10">
													<select class="form-control" id="cdek-orders-currency" name="cdek_orders[currency]">
														<?php foreach ($currency_list as $key => $value) { ?>
															<option value="<?php echo $key; ?>" <?php if (isset($cdek_orders['currency']) && $cdek_orders['currency'] == $key) { ?> selected="selected" <?php } ?>><?php echo $value; ?></option>
														<?php } ?>
													</select>
												</div>
											</div>
											<?php foreach ($cdek_orders['packages'] as $package_id => $package_info) { ?>
												<div class="form-group required">
													<label class="col-sm-2 control-label" for="cdek-orders-package-<?php echo $package_id; ?>-brcode"><?php echo $entry_brcode; ?></label>
													<div class="col-sm-10">
														<input class="form-control" id="cdek-orders-package-<?php echo $package_id; ?>-brcode" type="text" name="cdek_orders[package][<?php echo $package_id; ?>][brcode]" value="<?php if (!empty($package_info['brcode'])) { ?><?php echo $package_info['brcode']; ?><?php } ?>" maxlength="20" />
													</div>
												</div>
												<div class="form-group required" id="cdek-orders-package-<?php echo $package_id; ?>-size-a-block">
													<label class="col-sm-2 control-label" for="cdek-orders-package-<?php echo $package_id; ?>-size-a"><?php echo $entry_package; ?></label>
													<div class="col-sm-10">
														<div class="form-inline">
															<input class="form-control" id="cdek-orders-package-<?php echo $package_id; ?>-size-a" type="text" placeholder="<?php echo $text_short_length; ?>" name="cdek_orders[package][<?php echo $package_id; ?>][size_a]" value="<?php if (!empty($package_info['size_a'])) { ?> <?php echo $package_info['size_a']; ?><?php } ?>" size="2" /> x
															<input class="form-control" type="text" placeholder="<?php echo $text_short_width; ?>" name="cdek_orders[package][<?php echo $package_id; ?>][size_b]" value="<?php if (!empty($package_info['size_b'])) { ?><?php echo $package_info['size_b']; ?><?php } ?>" size="2" /> x
															<input class="form-control" type="text" placeholder="<?php echo $text_short_height; ?>" name="cdek_orders[package][<?php echo $package_id; ?>][size_c]" value="<?php if (!empty($package_info['size_c'])) { ?><?php echo $package_info['size_c']; ?><?php } ?>" size="2" />
														</div>
														<?php if (isset($error['cdek_orders']['package'][$package_id]['size'])) { ?>
															<div class="text-danger"><?php echo $error['cdek_orders']['package'][$package_id]['size']; ?></div>
														<?php } ?>
													</div>
												</div>
												<div class="form-group required">
													<label class="col-sm-2 control-label" for="cdek-orders-package-<?php echo $package_id; ?>-weight"><?php echo $entry_order_weight; ?></label>
													<div class="col-sm-10">
														<div class="form-inline">
															<input class="package-weight form-control" id="cdek-orders-package-<?php echo $package_id; ?>-weight" type="text" name="cdek_orders[package][<?php echo $package_id; ?>][weight]" value="<?php echo $package_info['weight']; ?>" data-packing_prefix="<?php echo $package_info['additional_weight']['prefix']; ?>" data-packing_weight="<?php echo $package_info['additional_weight']['weight']; ?>" />
															<?php if ($package_info['additional_weight']['weight']) { ?>
																<span class="help inline"><?php echo $package_info['additional_weight']['prefix'] . ' ' . package_info['additional_weight']['weight']; ?> грамм</span>
															<?php } ?>
														</div>
														<?php if (isset($error['cdek_orders']['package'][$package_id]['weight'])) { ?>
															<div class="text-danger"><?php echo $error['cdek_orders']['package'][$package_id]['weight']; ?></div>
														<?php } ?>
													</div>
												</div>
												<table class="list package-items table">
													<thead>
														<tr>
															<td class="left"><?php echo $column_title; ?></td>
															<td class="right"><?php echo $column_weight; ?></td>
															<td class="right"><?php echo $column_price; ?></td>
															<td class="right"><?php echo $column_payment; ?></td>
															<td class="right"><?php echo $column_amount; ?></td>
															<td class="right"><?php echo $column_cost; ?></td>
														</tr>
													</thead>
													<tbody>
														<?php foreach ($package_info['item'] as $row => $item) { ?>
															<tr>
																<td class="left">
																	<?php echo $item['name']; ?>
																	<?php foreach ($item['option'] as $option) { ?>
																		<br />
																		<?php if ($option['type'] != 'file') { ?>
																			&nbsp;<small> - <?php echo $option['name']; ?>: <?php echo $option['value']; ?></small>
																		<?php } else { ?>
																			&nbsp;<small> - <?php echo $option['name']; ?>: <a href="<?php echo $option['href']; ?>"><?php echo $option['value']; ?></a></small>
																		<?php } ?>
																	<?php } ?>
																	<input type="hidden" name="cdek_orders[package][<?php echo $package_id; ?>][item][<?php echo $row; ?>][comment]" value="<?php echo $item['name']; ?>" size="3" />
																	<input type="hidden" name="cdek_orders[package][<?php echo $package_id; ?>][item][<?php echo $row; ?>][ware_key]" value="<?php echo $item['order_product_id']; ?>" size="3" />
																</td>
																<td class="right">
																	<input type="text" class="form-control" name="cdek_orders[package][<?php echo $package_id; ?>][item][<?php echo $row; ?>][weight]" value="<?php echo $item['weight']; ?>" size="5" />
																	<?php if (isset($error['cdek_orders']['package'][$package_id]['item'][$row]['weight'])) { ?>
																		<div class="text-danger"><?php echo $error['cdek_orders']['package'][$package_id]['item'][$row]['weight']; ?></div>
																	<?php } ?>
																</td>
																<td class="right">
																	<input type="text" class="form-control" name="cdek_orders[package][<?php echo $package_id; ?>][item][<?php echo $row; ?>][cost]" value="<?php echo $item['price']; ?>" size="3" />
																	<?php if (isset($error['cdek_orders']['package'][$package_id]['item'][$row]['cost'])) { ?>
																		<div class="text-danger"><?php echo $error['cdek_orders']['package'][$package_id]['item'][$row]['cost']; ?></div>
																	<?php } ?>
																</td>
																<td class="right package-item-payment">
																	<div class="input-group">
																		<span class="input-group-addon">Оплата</span>

																		<input type="text" <?php if (!$cdek_orders['cod']) { ?> readonly="readonly" <?php } ?> class="form-control" name="cdek_orders[package][<?php echo $package_id; ?>][item][<?php echo $row; ?>][payment]" data-value="<?php echo $item['payment']; ?>" value="<?php echo $cdek_orders['cod'] ? $item['payment'] : 0; ?>" size="3" />
																	</div>
																	<?php if (isset($error['cdek_orders']['package'][$package_id]['item'][$row]['payment'])) { ?>
																		<div class="text-danger"><?php echo $error['cdek_orders']['package'][$package_id]['item'][$row]['payment']; ?></div>
																	<?php } ?>

																	<div class="input-group">
																		<span class="input-group-addon">НДС</span>

																		<select class="form-control" <?php if (!$cdek_orders['cod']) { ?> readonly="readonly" <?php } ?> name="cdek_orders[package][<?php echo $package_id; ?>][item][<?php echo $row; ?>][payment_vat_rate]">
																			<?php foreach ($vat_rate_list as $vat_rate => $vat_rate_name) { ?>
																				<?php $selected = ''; ?>
																				<?php if (($item['payment_vat_rate'] && ($item['payment_vat_rate'] == $vat_rate))) { ?>
																					<?php $selected = 'selected'; ?>
																				<?php } ?>
																				<div><?php echo $item['payment_vat_rate']; ?> <?php echo $vat_rate; ?> <?php echo $selected; ?></div>
																				<option value="<?php echo $vat_rate; ?>" <?php echo $selected; ?>><?php echo $vat_rate_name; ?></option>
																			<?php } ?>
																		</select>
																	</div>
																	<?php if (isset($error['cdek_orders']['package'][$package_id]['item'][$row]['payment_vat_rate'])) { ?>
																		<div class="text-danger"><?php echo $error['cdek_orders']['package'][$package_id]['item'][$row]['payment_vat_rate']; ?></div>
																	<?php } ?>

																	<div class="input-group">
																		<span class="input-group-addon">НДС Сумма</span>
																		<input type="text" class="form-control" <?php if (!$cdek_orders['cod']) { ?> readonly="readonly" <?php } ?> name="cdek_orders[package][<?php echo $package_id; ?>][item][<?php echo $row; ?>][payment_vat_sum]" data-value="<?php echo $item['payment_vat_sum']; ?>" value="<?php echo $cdek_orders['cod'] ? $item['payment_vat_sum'] : 0; ?>" size="3" />
																	</div>

																	<?php if (isset($error['cdek_orders']['package'][$package_id]['item'][$row]['payment_vat_rate'])) { ?>
																		<div class="text-danger"><?php echo $error['cdek_orders']['package'][$package_id]['item'][$row]['payment_vat_sum']; ?></div>
																	<?php } ?>
																</td>
																<td class="right">
																	<input type="text" class="form-control" name="cdek_orders[package][<?php echo $package_id; ?>][item][<?php echo $row; ?>][amount]" value="<?php echo $item['quantity']; ?>" size="3" />
																	<?php if (isset($error['cdek_orders']['package'][$package_id]['item'][$row]['amount'])) { ?>
																		<div class="text-danger"><?php echo $error['cdek_orders']['package'][$package_id]['item'][$row]['amount']; ?></div>
																	<?php } ?>
																</td>
																<td class="right"><?php echo $item['total']; ?></td>
															</tr>
														<?php } ?>
													</tbody>
												</table>
											<?php } ?>
											<table class="list package-items table">
												<tfoot>
													<?php foreach ($cdek_orders['totals'] as $row => $order_total) { ?>
														<tr>
															<td class="right <?php echo $order_total['code']; ?>" colspan="5"><?php echo $order_total['title']; ?></td>
															<td class="right <?php echo $order_total['code']; ?>"><?php echo $order_total['text']; ?></td>
														</tr>
													<?php } ?>
												</tfoot>
											</table>
										</div>
									</div>

									<?php foreach ($cdek_orders['full_packages'] as $package_id => $package_info) { ?>
										<div id="order-full_package-<?php echo $package_id; ?>" class="full_package" style="display: none;">
											<?php if (isset($error['cdek_orders']['package'][$package_id]['warning'])) { ?>
												<div class="text-danger"><?php echo $error['cdek_orders']['package'][$package_id]['warning']; ?></div>
											<?php } ?>
											<br />

											<div class="form-horizontal">
												<div class="form-group required">
													<label class="col-sm-2 control-label" for="cdek-orders-currency"><?php echo $entry_currency; ?></label>
													<div class="col-sm-10">
														<select class="form-control" id="cdek-orders-currency" name="cdek_orders[currency]" disabled="disabled">
															<?php foreach ($currency_list as $key => $value) { ?>
																<option value="<?php echo $key; ?>" <?php if (isset($cdek_orders['currency']) && $cdek_orders['currency'] == $key) { ?> selected="selected" <?php } ?>><?php echo $value; ?></option>
															<?php } ?>
														</select>
													</div>
												</div>


												<div class="form-group required">
													<label class="col-sm-2 control-label" for="cdek-orders-package-<?php echo $package_id; ?>-brcode"><?php echo $entry_brcode; ?></label>
													<div class="col-sm-10">
														<input class="form-control" id="cdek-orders-package-<?php echo $package_id; ?>-brcode" type="text" name="cdek_orders[package][<?php echo $package_id; ?>][brcode]" value="<?php if (!empty($package_info['brcode'])) { ?><?php echo $package_info['brcode']; ?><?php } ?>" maxlength="20" disabled="disabled" />
													</div>
												</div>
												<div class="form-group required" id="cdek-orders-package-<?php echo $package_id; ?>-size-a-block">
													<label class="col-sm-2 control-label" for="cdek-orders-package-<?php echo $package_id; ?>-size-a"><?php echo $entry_package; ?></label>
													<div class="col-sm-10">
														<div class="form-inline">
															<input class="form-control" id="cdek-orders-package-<?php echo $package_id; ?>-size-a" type="text" placeholder="<?php echo $text_short_length; ?>" name="cdek_orders[package][<?php echo $package_id; ?>][size_a]" value="<?php if (!empty($package_info['size_a'])) { ?> <?php echo $package_info['size_a']; ?><?php } ?>" size="2" disabled="disabled" /> x
															<input class="form-control" type="text" placeholder="<?php echo $text_short_width; ?>" name="cdek_orders[package][<?php echo $package_id; ?>][size_b]" value="<?php if (!empty($package_info['size_b'])) { ?><?php echo $package_info['size_b']; ?><?php } ?>" size="2" disabled="disabled" /> x
															<input class="form-control" type="text" placeholder="<?php echo $text_short_height; ?>" name="cdek_orders[package][<?php echo $package_id; ?>][size_c]" value="<?php if (!empty($package_info['size_c'])) { ?><?php echo $package_info['size_c']; ?><?php } ?>" size="2" disabled="disabled" />
														</div>
														<?php if (isset($error['cdek_orders']['package'][$package_id]['size'])) { ?>
															<div class="text-danger"><?php echo $error['cdek_orders']['package'][$package_id]['size']; ?></div>
														<?php } ?>
													</div>
												</div>

												<div class="form-group required">
													<label class="col-sm-2 control-label" for="cdek-orders-package-<?php echo $package_id; ?>-weight"><?php echo $entry_order_weight; ?></label>
													<div class="col-sm-10">
														<div class="form-inline">
															<input class="package-weight form-control" id="cdek-orders-package-<?php echo $package_id; ?>-weight" type="text" name="cdek_orders[package][<?php echo $package_id; ?>][weight]" value="<?php echo $package_info['weight']; ?>" data-packing_prefix="<?php echo $package_info['additional_weight']['prefix']; ?>" data-packing_weight="<?php echo $package_info['additional_weight']['weight']; ?>" disabled="disabled" />
															<?php if ($package_info['additional_weight']['weight']) { ?>
																<span class="help inline"><?php echo $package_info['additional_weight']['prefix'] . ' ' . package_info['additional_weight']['weight']; ?> грамм</span>
															<?php } ?>
														</div>
														<?php if (isset($error['cdek_orders']['package'][$package_id]['weight'])) { ?>
															<div class="text-danger"><?php echo $error['cdek_orders']['package'][$package_id]['weight']; ?></div>
														<?php } ?>
													</div>
												</div>
											</div>

											<table class="list package-items table">
												<thead>
													<tr>
														<td class="left"><?php echo $column_title; ?></td>
														<td class="right"><?php echo $column_weight; ?></td>
														<td class="right"><?php echo $column_price; ?></td>
														<td class="right"><?php echo $column_payment; ?></td>
														<td class="right"><?php echo $column_amount; ?></td>
														<td class="right"><?php echo $column_cost; ?></td>
													</tr>
												</thead>
												<tbody>
													<?php foreach ($package_info['item'] as $row => $item) { ?>
														<tr>
															<td class="left">
																<?php echo $item['name']; ?>
																<?php foreach ($item['option'] as $option) { ?>
																	<br />
																	<?php if ($option['type'] != 'file') { ?>
																		&nbsp;<small> - <?php echo $option['name']; ?>: <?php echo $option['value']; ?></small>
																	<?php } else { ?>
																		&nbsp;<small> - <?php echo $option['name']; ?>: <a href="<?php echo $option['href']; ?>"><?php echo $option['value']; ?></a></small>
																	<?php } ?>
																<?php } ?>
																<input type="hidden" name="cdek_orders[package][<?php echo $package_id; ?>][item][<?php echo $row; ?>][comment]" value="<?php echo $item['name']; ?>" size="3" disabled="disabled" />
																<input type="hidden" name="cdek_orders[package][<?php echo $package_id; ?>][item][<?php echo $row; ?>][ware_key]" value="<?php echo $item['order_product_id']; ?>" size="3" disabled="disabled" />
															</td>
															<td class="right">
																<input type="text" class="form-control" name="cdek_orders[package][<?php echo $package_id; ?>][item][<?php echo $row; ?>][weight]" value="<?php echo $item['weight']; ?>" size="5" disabled="disabled" />
																<?php if (isset($error['cdek_orders']['package'][$package_id]['item'][$row]['weight'])) { ?>
																	<div class="text-danger"><?php echo $error['cdek_orders']['package'][$package_id]['item'][$row]['weight']; ?></div>
																<?php } ?>
															</td>
															<td class="right">
																<input type="text" class="form-control" name="cdek_orders[package][<?php echo $package_id; ?>][item][<?php echo $row; ?>][cost]" value="<?php echo $item['price']; ?>" size="3" disabled="disabled" />
																<?php if (isset($error['cdek_orders']['package'][$package_id]['item'][$row]['cost'])) { ?>
																	<div class="text-danger"><?php echo $error['cdek_orders']['package'][$package_id]['item'][$row]['cost']; ?></div>
																<?php } ?>
															</td>
															<td class="right package-item-payment">
																<div class="input-group">
																	<span class="input-group-addon">Оплата</span>

																	<input type="text" <?php if (!$cdek_orders['cod']) { ?> readonly="readonly" <?php } ?> class="form-control" name="cdek_orders[package][<?php echo $package_id; ?>][item][<?php echo $row; ?>][payment]" data-value="<?php echo $item['payment']; ?>" value="<?php echo $cdek_orders['cod'] ? $item['payment'] : 0; ?>" size="3" disabled="disabled" />
																</div>
																<?php if (isset($error['cdek_orders']['package'][$package_id]['item'][$row]['payment'])) { ?>
																	<div class="text-danger"><?php echo $error['cdek_orders']['package'][$package_id]['item'][$row]['payment']; ?></div>
																<?php } ?>

																<div class="input-group">
																	<span class="input-group-addon">НДС</span>

																	<select class="form-control" <?php if (!$cdek_orders['cod']) { ?> readonly="readonly" <?php } ?> name="cdek_orders[package][<?php echo $package_id; ?>][item][<?php echo $row; ?>][payment_vat_rate]" disabled="disabled">
																		<?php foreach ($vat_rate_list as $vat_rate => $vat_rate_name) { ?>
																			<?php $selected = ''; ?>
																			<?php if ($item['payment_vat_rate'] && $item['payment_vat_rate'] == $vat_rate) { ?>
																				<?php $selected = 'selected'; ?>
																			<?php } ?>
																			<div><?php echo $item['payment_vat_rate']; ?> <?php echo $vat_rate; ?> <?php echo $selected; ?></div>
																			<option value="<?php echo $vat_rate; ?>" <?php echo $selected; ?>><?php echo $vat_rate_name; ?></option>
																		<?php } ?>
																	</select>
																</div>
																<?php if (isset($error['cdek_orders']['package'][$package_id]['item'][$row]['payment_vat_rate'])) { ?>
																	<div class="text-danger"><?php echo $error['cdek_orders']['package'][$package_id]['item'][$row]['payment_vat_rate']; ?></div>
																<?php } ?>

																<div class="input-group">
																	<span class="input-group-addon">НДС Сумма</span>
																	<input type="text" class="form-control" <?php if (!$cdek_orders['cod']) { ?> readonly="readonly" <?php } ?> name="cdek_orders[package][<?php echo $package_id; ?>][item][<?php echo $row; ?>][payment_vat_sum]" data-value="<?php echo $item['payment_vat_sum']; ?>" value="<?php echo $cdek_orders['cod'] ? $item['payment_vat_sum'] : 0; ?>" size="3" disabled="disabled" />
																</div>

																<?php if (isset($error['cdek_orders']['package'][$package_id]['item'][$row]['payment_vat_sum'])) { ?>
																	<div class="text-danger"><?php echo $error['cdek_orders']['package'][$package_id]['item'][$row]['payment_vat_sum']; ?></div>
																<?php } ?>
															</td>
															<td class="right">
																<input type="text" class="form-control" name="cdek_orders[package][<?php echo $package_id; ?>][item][<?php echo $row; ?>][amount]" value="<?php echo $item['quantity']; ?>" size="3" disabled="disabled" />
																<?php if (isset($error['cdek_orders']['package'][$package_id]['item'][$row]['amount'])) { ?>
																	<div class="text-danger"><?php echo $error['cdek_orders']['package'][$package_id]['item'][$row]['amount']; ?></div>
																<?php } ?>
															</td>
															<td class="right"><?php echo $item['total']; ?></td>
														</tr>
													<?php } ?>
												</tbody>
												<tfoot>
													<?php foreach ($cdek_orders['totals'] as $row => $order_total) { ?>
														<tr>
															<td class="right <?php echo $order_total['code']; ?>" colspan="5"><?php echo $order_total['title']; ?></td>
															<td class="right <?php echo $order_total['code']; ?>"><?php echo $order_total['text']; ?></td>
														</tr>
													<?php } ?>
												</tfoot>
											</table>
										</div>
									<?php } ?>
								</div>
								<div id="order-courier" class="tab-pane">
									<table class="form table">
										<tbody>
											<tr>
												<td colspan="2">
													<span class="help"><em class="red"><?php echo $text_attention; ?></em></span>
													<ul class="help">
														<li>Вызов курьера возможно сделать только на будущую дату;</li>
														<li>На один день возможно не более одного вызова курьера на один адрес;</li>
														<li><?php echo $text_courier_hour_range; ?>.</li>
													</ul>
												</td>
											</tr>
											<tr class="parent">
												<td><label for="cdek-orders-courier-call"><?php echo $entry_courier_call; ?></label></td>
												<td>
													<select id="cdek-orders-courier-call" name="cdek_orders[courier][call]" class="toggle" data-toggletarget="#cdek-orders-courier-call-block">
														<?php foreach ($boolean_variables as $key => $value) { ?>
															<option value="<?php echo $key; ?>" <?php if (isset($cdek_orders['courier']['call']) && $cdek_orders['courier']['call'] == $key) { ?> selected="selected" <?php } ?>><?php echo $value; ?></option>
														<?php } ?>
													</select>
												</td>
											</tr>
											<tr>
												<td colspan="2" class="include">
													<div id="cdek-orders-courier-call-block" <?php if (!isset($cdek_orders['courier']['call']) || !$cdek_orders['courier']['call']) { ?> style="  display:none" <?php } ?>>
														<table class="form table">
															<tbody>
																<tr>
																	<td colspan="2">
																		<h4><?php echo $text_courier; ?></h4>
																	</td>
																</tr>
																<tr>
																	<td><label for="cdek-orders-courier-date"><span class="required">*</span> <?php echo $entry_courier_date; ?></label></td>
																	<td>
																		<input id="cdek-orders-courier-date" class="date" type="text" name="cdek_orders[courier][date]" value="<?php if (!empty($cdek_orders['courier']['date'])) { ?><?php echo $cdek_orders['courier']['date']; ?><?php } ?>" size="8" />
																		<?php if (isset($error['cdek_orders']['courier']['date'])) { ?>
																			<div class="text-danger"><?php echo $error['cdek_orders']['courier']['date']; ?></div>
																		<?php } ?>
																	</td>
																</tr>
																<tr>
																	<td><label for="cdek-orders-courier-time-beg"><span class="required">*</span> <?php echo $entry_courier_time; ?></label></td>
																	<td>
																		<span class="text-from"><?php echo $text_from; ?></span> <input id="cdek-orders-courier-time-beg" class="time" type="text" name="cdek_orders[courier][time_beg]" value="<?php if (!empty($cdek_orders['courier']['time_beg'])) { ?><?php echo $cdek_orders['courier']['time_beg']; ?><?php } ?>" size="8" /> <?php echo $text_to; ?> <input class="time" type="text" name="cdek_orders[courier][time_end]" value="<?php if (!empty($cdek_orders['courier']['time_end'])) { ?><?php echo $cdek_orders['courier']['time_end']; ?><?php } ?>" size="8" />
																		<?php if (isset($error['cdek_orders']['courier']['time'])) { ?>
																			<div class="text-danger"><?php echo $error['cdek_orders']['courier']['time']; ?></div>
																		<?php } ?>
																	</td>
																</tr>
																<tr>
																	<td><label for="cdek-orders-courier-lunch-beg"><?php echo $entry_courier_lunch; ?></label></td>
																	<td>
																		<span class="text-from"><?php echo $text_from; ?></span> <input id="cdek-orders-courier-lunch-beg" class="time" type="text" name="cdek_orders[courier][lunch_beg]" value="<?php if (!empty($cdek_orders['courier']['lunch_beg'])) { ?><?php echo $cdek_orders['courier']['lunch_beg']; ?><?php } ?>" size="8" /> <?php echo $text_to; ?> <input class="time" type="text" name="cdek_orders[courier][lunch_end]" value="<?php if (!empty($cdek_orders['courier']['lunch_end'])) { ?><?php echo $cdek_orders['courier']['lunch_end']; ?><?php } ?>" size="8" />
																		<?php if (isset($error['cdek_orders']['courier']['lunch'])) { ?>
																			<div class="text-danger"><?php echo $error['cdek_orders']['courier']['lunch']; ?></div>
																		<?php } ?>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="order-additional" class="tab-pane">
									<table class="form table">
										<tbody>
											<tr>
												<td><?php echo $entry_add_service; ?></td>
												<td>
													<div class="scrollbox cervices">
														<?php $class = 'even'; ?>
														<?php $checked = []; ?>
														<?php if (!empty($cdek_orders['add_service'])) { ?>
															<?php $checked = []; ?>
															<?php foreach ($cdek_orders['add_service'] as $service_id => $cervice_info) { ?>
																<?php $checked = array_merge($checked, [0 => $service_id]); ?>
															<?php } ?>
														<?php } ?>
														<?php foreach ($add_cervices as $cervice_code => $cervice_info) { ?>
															<?php if (isset($cervice_info['hide'])) { ?>
																<?php $class = ((($class == 'even')) ? ('odd') : ('even')); ?>
															<?php } ?>
															<div class="<?php echo $class; ?>">
																<input type="checkbox" name="cdek_orders[add_service][<?php echo $cervice_code; ?>][service_id]" value="<?php echo $cervice_code; ?>" <?php if (in_array($cervice_code, $checked)) { ?> checked="checked" <?php } ?> />
																<div class="item-description">
																	<?php echo $cervice_info['title']; ?><span class="help"><?php echo $cervice_info['description']; ?></span>
																</div>
															</div>
														<?php } ?>
													</div>
													<?php if (isset($error['cdek_orders']['add_service'])) { ?>
														<div class="text-danger"><?php echo $error['cdek_orders']['add_service']; ?></div>
													<?php } ?>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	<!--
	$('.vtabs-link').click(function() {
		$('#vtabs').find("a").removeClass('active');
		$(this).addClass('active');
	});

	$('.cdek-order-cod').change(function() {

		var cod_enable = $(this).val();
		var context = $(this).closest('.vtabs-content');
		var input = $('table.package-items td.package-item-payment input:text', context);
		if (cod_enable == 1) {
			$('.package-item-payment select').attr('readonly', '').removeAttr('readonly');
		} else {
			$('.package-item-payment select').attr('readonly', 'readonly');
		}
		$(input).each(function(i, elem) {
			if (cod_enable == 1) {
				$(this).val($(this).data('value'));
				$(this).attr('readonly', '').removeAttr('readonly');
			} else {
				$(this).data('value', $(this).val());
				$(this).val(0);
				$(this).attr('readonly', 'readonly');
			}
		});
	});

	$('input.package-weight').change(function() {

		var self = this;
		var context = $(self).closest('div');
		var weight = $(self).val();

		if (!isNaN(weight) && weight > 0) {

			$.ajax({
				url: "index.php?route=extension/module/cdek_integrator/getAjaxPackingWeight&token=<?php echo $token; ?>&weight=" + weight,
				dataType: "json",
				beforeSend: function(jqXHR, settings) {
					$('.help', context).text('');
					if (!$('.loader', context).length) $(self).after('<img class="loader" src="view/image/cdek_integrator/loader.gif" alt="Загрузка..." title="Загрузка..." />');
				},
				complete: function(jqXHR, textStatus) {
					$('.loader', context).remove();
				},
				success: function(json) {

					if (json.packing_weight) {

						$(self).data('packing_prefix', json.packing_weight.prefix);
						$(self).data('packing_weight', json.packing_weight.weight);

						$('.help', context).text(json.packing_weight.prefix + ' ' + json.packing_weight.weight + ' грамм');
					}

				}
			});

		} else {
			$('.help', context).text('');
		}

	});

	$('.tariff_switcher').change(function(event) {

		var context = $(this).closest('.vtabs-content');

		$('.address-mode.pvz', context).hide();

		if ($(this).val() != 0) {

			var mode_id = $('option:selected', this).data('mode');

			if (mode_id == 1 || mode_id == 3) {
				$('.address-mode.address', context).find('.form-group').addClass('required');
				$(".address-mode.address").removeAttr('disabled');
				$('.address-mode.pvz select').attr('disabled', 'disabled');
			} else {
				$('.address-mode.pvz', context).show();
				$('.address-mode.address', context).hide();
				$('.address-mode.pvz select').removeAttr('disabled');
				$(".address-mode.address").attr('disabled', 'disabled');
				$('.address-mode.address', context).find('.form-group').removeClass('required');
			}

			$('.setting-mode-id', context).val(mode_id);

			//$('.address-mode' + className, context).show();
			$(this).closest('td').find('.error').remove();
		}

		$('.address-mode.shipment-point', context).hide();

		if ($(this).val() != 0) {

			var mode_id = $('option:selected', this).data('mode');

			if (mode_id == 1 || mode_id == 2 || mode_id == 5) {
				$('.seller-adress', context).find('.form-group').addClass('required');
				$('.seller-adress', context).show();
				$(".seller-adress input").removeAttr('disabled');
				$('.address-mode.shipment-point select').attr('disabled', 'disabled');
			} else {
				$('.address-mode.shipment-point', context).show();
				$('.address-mode.shipment-point select').removeAttr('disabled');
				$('.seller-adress', context).hide();
				$(".seller-adress input").attr('disabled', 'disabled');
				$('.seller-adress', context).find('.form-group').removeClass('required');
			}

			$('.setting-mode-id', context).val(mode_id);

			//$('.address-mode' + className, context).show();
			$(this).closest('td').find('.error').remove();
		}
	});

	$(".setting-city-name").bind('cityselect', function() {

		var context = $(this).closest('.tab-pane');

		var city_code = $('input.setting-city-id', context).val();

		if (city_code != '') {

			var element = $('.address-mode.pvz select', context);

			$('option:gt(0)', element).remove();

			$.ajax({
				url: "index.php?route=extension/module/cdek_integrator/getPVZByCity&token=<?php echo $token; ?>&city_code=" + city_code,
				dataType: "json",
				beforeSend: function(jqXHR, settings) {
					if (!$('.address-mode.pvz .loader', context).length) $(element).after('<img class="loader" src="view/image/cdek_integrator/loader.gif" alt="Загрузка..." title="Загрузка..." />');
				},
				complete: function(jqXHR, textStatus) {
					$('.address-mode.pvz .loader', context).remove();
				},
				success: function(json) {
					if (json.List) {

						var html = '';

						for (var row in json.List) {
							html += '<option value="' + json.List[row].Code + '" data-name="' + json.List[row].Name + '" data-y="' + json.List[row].y + '" data-x="' + json.List[row].x + '" data-address="' + json.List[row].Address + '" data-worktime="' + json.List[row].WorkTime + '" data-phone="' + json.List[row].Phone + '">' + json.List[row].Address + +'</option>';
						}

						if (html != '') {
							$(element).append(html);

						}
					}

					$(element).trigger('change');
				}
			});
		}

	});

	function initTimepicker() {

		//$('.date').datepicker({dateFormat: 'yy-mm-dd'});
		//$('.time').timepicker({timeFormat: 'hh:mm'});
		$('.time').datetimepicker({
			format: 'HH:mm',
			pickDate: false,
		})
		$('.date').datetimepicker({
			format: 'YYYY-MM-DD',
			pickTime: false
		})
	}

	initTimepicker();

	$('select.address-pvz-code').change(function(event) {
		$(this).parent().find('.pvz-wrapper').html('');
		$(this).parent().find('.error').remove();

		if ($(this).val() != '') {

			var option = $('option[value=' + $(this).val() + ']', this);

			var html = '<p>' + $(option).data('name');

			if ($(option).data('x')) {
				html += ' (<a href="http://maps.google.ru/maps?q=' + $(option).data('y') + ',' + $(option).data('x') + '" target="_blank">на карте</a>)';
			}

			html += '</p>';
			html += '<span class="help">';
			html += '<strong>Адрес</strong>: ' + $(option).data('address') + '<br />';

			if ($(option).data('phone') && $(option).data('phone') != '-') {
				html += '<strong>Телефон</strong>: ' + $(option).data('phone') + '<br />';
			}

			if ($(option).data('worktime') && $(option).data('worktime') != '-') {
				html += '<strong>Режим работы</strong>: ' + $(option).data('worktime');
			}

			html += '</span>';

			$(this).parent().find('.pvz-wrapper').html(html);

		}

	});


	//
	-->
</script>

<script type="text/javascript">
	$(document).ready(function() {
		$('#cdek-orders-recipient-city-name').autocomplete({
			source: function(request, response) {
				$.ajax({
					url: "index.php?route=extension/module/cdek_integrator/getCityByName&token=<?php echo $token; ?>",
					dataType: "json",
					data: {
						q: function() {
							return $('#cdek-orders-recipient-city-name').val()
						},
						name_startsWith: function() {
							return $('#cdek-orders-recipient-city-name').val()
						}
					},
					success: function(data) {
						response($.map(data, function(item) {
							return {
								label: item.full_name,
								value: item.full_name,
								id: item.code
							}
						}));
					}
				});
			},
			minLength: 1,
			select: function(event) {
				$('.setting-city-id').parent().find('.error').remove();
				$('.setting-city-id').val(event.id);
				$('.setting-city-name').val(event.value);
				$('.js.city-from').text(event.label).show();
				$('.setting-city-name').hide();

				$('.setting-city-name').trigger('cityselect');

				$('.setting-city-id').trigger('change');

			}
		});
		$('input[name=\'check_package\']').trigger('change');
	});
	$('input[name=\'check_package\']').on('change', function() {
		var check = $('input[name=\'check_package\']:checked').val();
		if (check == 1) {
			$('.package').css('display', 'block');
			$('.package input').removeAttr('disabled');
			$('.package select').removeAttr('disabled');
			$('.full_package').css('display', 'none');
			$('.full_package input').attr('disabled', 'disabled');
			$('.full_package select').attr('disabled', 'disabled');
		} else {
			$('.package').css('display', 'none');
			$('.package input').attr('disabled', 'disabled');
			$('.package select').attr('disabled', 'disabled');
			$('.full_package').css('display', 'block');
			$('.full_package input').removeAttr('disabled');
			$('.full_package select').removeAttr('disabled');
		}
	});
</script>
<?php echo $footer; ?>