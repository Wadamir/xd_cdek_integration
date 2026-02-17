<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">

	<div class="page-header">
		<div class="container-fluid">
			<div class="pull-right">
				<a href="<?php echo $cancel; ?>" class="btn btn-default"><?php echo $button_cancel; ?></a>
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
			<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?>
				<button type="button" class="close" data-dismiss="alert">&times;</button>
			</div>
		<?php } ?>
		<?php if ($success) { ?>
			<div class="alert alert-success"><i class="fa fa-exclamation-circle"></i> <?php echo $success; ?>
				<button type="button" class="close" data-dismiss="alert">&times;</button>
			</div>
		<?php } ?>

		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-pencil"></i> <?php echo $heading_title; ?></h3>
			</div>

			<div class="panel-body">
				<div class="well">
					<div class="row">

						<div class="col-sm-4">

							<div class="form-group">
								<label class="control-label"><?php echo $column_order_id; ?></label>
								<input type="text" class="form-control" name="filter_order_id" value="<?php echo $filter_order_id; ?>">
							</div>

							<div class="form-group">
								<label class="control-label"><?php echo $column_dispatch_number; ?></label>
								<input type="text" class="form-control" name="filter_dispatch_number" value="<?php echo $filter_dispatch_number; ?>">
							</div>

							<div class="form-group">
								<label class="control-label"><?php echo $column_act_number; ?></label>
								<input type="text" class="form-control" name="filter_act_number" value="<?php echo $filter_act_number; ?>">
							</div>

						</div>

						<div class="col-sm-4">

							<div class="form-group">
								<label class="control-label"><?php echo $column_dispatch_date; ?></label>
								<input type="text" class="form-control date" name="filter_date" value="<?php echo $filter_date; ?>">
							</div>

							<div class="form-group">
								<label class="control-label"><?php echo $column_city_from; ?></label>
								<input type="text" class="form-control" name="filter_city_from" value="<?php echo $filter_city_from; ?>">
							</div>

							<div class="form-group">
								<label class="control-label"><?php echo $column_city_to; ?></label>
								<input type="text" class="form-control" name="filter_city_to" value="<?php echo $filter_city_to; ?>">
							</div>

						</div>

						<div class="col-sm-4">
							<div class="form-group">
								<label class="control-label"><?php echo $column_status; ?></label>
								<select name="filter_status_id" class="form-control">
									<option value="*"></option>
									<?php foreach ($statuses as $status_id => $status_info) { ?>
										<option value="<?php echo $status_id; ?>" <?php if ($filter_status_id == $status_id) { ?> selected="selected" <?php } ?>><?php echo $status_info['title']; ?></option>
									<?php } ?>
								</select>
							</div>

							<div class="form-group">
								<label class="control-label"><?php echo $column_delivery_cost; ?></label>
								<input type="text" class="form-control" name="filter_total" value="<?php echo $filter_total; ?>">
							</div>

							<div class="form-group">
								<button type="button" onclick="filter();" class="btn btn-primary pull-right"><i class="fa fa-search"></i> <?php echo $button_filter; ?></button>
							</div>
						</div>
					</div>
				</div>

				<table class="list table" style="table-layout: fixed;">
					<thead>
						<tr>
							<td class="left"><a href="<?php echo $sort_order_id; ?>" <?php if ($sort == 'o.order_id') { ?> class="<?php echo $order | lower; ?>" <?php } ?>><?php echo $column_order_id; ?></a></td>
							<td class="left"><a href="<?php echo $sort_dispatch_number; ?>" <?php if ($sort == 'd.dispatch_number') { ?> class="<?php echo $order | lower; ?>" <?php } ?>><?php echo $column_dispatch_number; ?></a></td>
							<td class="left"><a href="<?php echo $sort_order_id; ?>" <?php if ($sort == 'o.order_id') { ?> class="<?php echo $order | lower; ?>" <?php } ?>><?php echo $column_act_number; ?></a></td>
							<td class="left"><a href="<?php echo $sort_act_number; ?>" <?php if ($sort == 'o.act_number') { ?> class="<?php echo $order | lower; ?>" <?php } ?>><?php echo $column_dispatch_date; ?></a></td>
							<td class="left"><a href="<?php echo $sort_city_from; ?>" <?php if ($sort == 'o.city_name') { ?> class="<?php echo $order | lower; ?>" <?php } ?>><?php echo $column_city_from; ?></a></td>
							<td class="left"><a href="<?php echo $sort_city_to; ?>" <?php if ($sort == 'o.recipient_city_name') { ?> class="<?php echo $order | lower; ?>" <?php } ?>><?php echo $column_city_to; ?></a></td>
							<td class="left"><a href="<?php echo $sort_status; ?>" <?php if ($sort == 'o.status_id') { ?> class="<?php echo $order | lower; ?>" <?php } ?>><?php echo $column_status; ?></a></td>
							<td class="left"><a href="<?php echo $sort_total; ?>" <?php if ($sort == 'o.delivery_cost') { ?> class="<?php echo $order | lower; ?>" <?php } ?>><?php echo $column_delivery_cost; ?></a></td>
							<td class="right"><?php echo $column_action; ?></td>
						</tr>
					</thead>
					<tbody>
						<?php if (!empty($dispatches)) { ?>
							<?php foreach ($dispatches as $dispatch_info) { ?>
								<tr>
									<td class="left"><?php echo $dispatch_info['order_id']; ?></td>
									<td class="left">
										<?php if ($dispatch_info['cdek_number']) { ?>
											<?php echo $dispatch_info['cdek_number']; ?>
										<?php } else { ?>
											<?php echo $text_sync_required_order; ?>
										<?php } ?>
									</td>
									<td class="left">
										<?php if ($dispatch_info['act_number']) { ?>
											<?php echo $dispatch_info['act_number']; ?>
										<?php } else { ?>
											<a class="js sync-row"><?php echo $text_sync; ?></a>
										<?php } ?>
									</td>
									<td class="left"><?php echo $dispatch_info['date']; ?></td>
									<td class="left"><?php echo $dispatch_info['city_name']; ?></td>
									<td class="left"><?php echo $dispatch_info['recipient_city_name']; ?></td>
									<td class="left"><?php echo $dispatch_info['status']; ?><span class="help"><?php echo $dispatch_info['status_date']; ?></span></td>
									<td class="left">
										<?php if ($dispatch_info['cost']) { ?>
											<?php echo $dispatch_info['cost']; ?>
										<?php } else { ?>
											<a class="js sync-row"><?php echo $text_sync; ?></a>
										<?php } ?>
									</td>
									<td class="right action">
										<?php foreach ($dispatch_info['action'] as $action) { ?>
											<a href="<?php echo $action['href']; ?>" <?php if (!empty($action['class'])) { ?> class="<?php echo $action['class']; ?>" <?php } ?>><?php echo $action['text']; ?></a>
										<?php } ?>
									</td>
								</tr>
							<?php } ?>
						<?php } else { ?>
							<tr>
								<td class="center" colspan="9"><?php echo $text_no_results; ?></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
				<div class="pagination">
					<?php if ($pagination) { ?>
						<div class="limit">
							<select onchange="location = $(this).val();">
								<?php foreach ($limits as $key => $url) { ?>
									<option value="<?php echo $url; ?>" <?php if ($limit == key) { ?> selected="selected" <?php } ?>><?php echo $key; ?></option>
								<?php } ?>
							</select>
						</div>
					<?php } ?>
					<?php echo $pagination; ?>
				</div>
			</div>

		</div>
	</div>
</div>
<script type="text/javascript">
	<!--
	$('.right.action a.sync').on('click', function(event) {
		ajaxSend(this, {
			beforeSend: function(context) {
				$(context).removeClass('right').addClass('center').css('width', $(context).width()).append('<img class="loader" src="view/image/cdek_integrator/loader.gif" alt="<?php echo $text_loading; ?>" title="<?php echo $text_loading; ?>" />');
				$('a', context).hide();
			},
			complete: function(context) {
				$('a', context).show();
				$('.loader', context).remove();
				$(context).removeClass('center').addClass('right');

			},
			callback: function(el, json) {
				var context = $(el).closest('tr');
				if (json.status != 'error') {
					$('td', context).animate({
						'background-color': '#000000'
					}, 'fast', function() {
						$('td:eq(2)', context).html(json.act_number);
						$('td:eq(3)', context).html(json.date);
						$('td:eq(4)', context).html(json.city_name);
						$('td:eq(5)', context).html(json.recipient_city_name);
						$('td:eq(6)', context).html(json.status_title + '<span class="help">' + json.status_date + '</span>');
						$('td:eq(7)', context).html(json.cost);

						$('td', context).animate({
							'background-color': '#FFFFFF'
						}, 'fast');
					});
				} else {
					$('.box').before('<div class="warning">' + json.message + '</div>');
				}
			}
		});
		event.preventDefault();
	});

	$('a.js.sync-row').on('click', function(event) {

		var row = $(this).closest('tr');

		$('.right.action a.sync', row).trigger('click');

	});

	$('tr.filter input').keydown(function(e) {
		if (e.keyCode == 13) {
			filter();
		}
	});

	function filter() {

		url = 'index.php?route=module/cdek_integrator/dispatch&token=<?php echo $token; ?>';

		var filter_order_id = $('input[name=\'filter_order_id\']').val();

		if (filter_order_id) {
			url += '&filter_order_id=' + encodeURIComponent(filter_order_id);
		}

		var filter_dispatch_number = $('input[name=\'filter_dispatch_number\']').val();

		if (filter_dispatch_number) {
			url += '&filter_dispatch_number=' + encodeURIComponent(filter_dispatch_number);
		}

		var filter_act_number = $('input[name=\'filter_act_number\']').val();

		if (filter_act_number) {
			url += '&filter_act_number=' + encodeURIComponent(filter_act_number);
		}

		var filter_date = $('input[name=\'filter_date\']').val();

		if (filter_date) {
			url += '&filter_date=' + encodeURIComponent(filter_date);
		}

		var filter_city_from = $('input[name=\'filter_city_from\']').val();

		if (filter_city_from) {
			url += '&filter_city_from=' + encodeURIComponent(filter_city_from);
		}

		var filter_city_to = $('input[name=\'filter_city_to\']').val();

		if (filter_city_to) {
			url += '&filter_city_to=' + encodeURIComponent(filter_city_to);
		}

		var filter_status_id = $('select[name=\'filter_status_id\']').val();

		if (filter_status_id != '*') {
			url += '&filter_status_id=' + encodeURIComponent(filter_status_id);
		}

		var filter_total = $('input[name=\'filter_total\']').val();

		if (filter_total) {
			url += '&filter_total=' + encodeURIComponent(filter_total);
		}

		location = url;
	}

	$(document).ready(function() {
		$('.date').datetimepicker({
			format: 'YYYY-MM-DD',
			pickTime: false
		})
	});

	//-->
</script>
<?php echo $footer; ?>