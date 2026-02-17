<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">

	<div class="page-header">
		<div class="container-fluid">
			<div class="pull-right">
				<?php if ($total) { ?>
					<a href="<?php echo $order; ?>" class="btn btn-default"><?php echo $button_new_order; ?> <span class="label label-success"><?php echo $total; ?></span></a>
				<?php } ?>
				<a href="<?php echo $option; ?>" class="btn btn-primary"><?php echo $button_option; ?></a>
				<a href="<?php echo $update_city; ?>" data-toggle="tooltip" class="btn btn-default">
					<?php echo $text_updatecity; ?>
				</a>
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
			<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i><?php echo $error_warning; ?><button type="button" class="close" data-dismiss="alert">&times;</button></div>
		<?php } ?>
		<?php if ($success) { ?>
			<div class="alert alert-success"><i class="fa fa-exclamation-circle"></i><?php echo $success; ?><button type="button" class="close" data-dismiss="alert">&times;</button></div>
		<?php } ?>
		<?php if (isset($attention)) { ?>
			<div class="alert alert-warning"><i class="fa fa-exclamation-circle"></i><?php echo $attention; ?></div>
		<?php } ?>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-pencil"></i> <?php echo $heading_title; ?></h3>
			</div>
			<div class="panel-body">

				<h2 class="title_h2"><?php echo $text_last_dispatches; ?></h2>
				<table class="table">
					<thead>
						<td class="left"><?php echo $column_site_order_id; ?></td>
						<td class="left"><?php echo $column_dispatch_number; ?></td>
						<td class="left"><?php echo $column_act_number; ?></td>
						<td class="left"><?php echo $column_dispatch_date; ?></td>
						<td class="left"><?php echo $column_city_from; ?></td>
						<td class="left"><?php echo $column_city_to; ?></td>
						<td class="left"><?php echo $column_status; ?></td>
						<td class="left"><?php echo $column_delivery_cost; ?></td>
						<td class="right"></td>
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
											<a class="js sync-row" href="<?php echo $dispatch_info['sync']; ?>"><?php echo $text_sync; ?></a>
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
											<a class="js sync-row" href="<?php echo $dispatch_info['sync']; ?>"><?php echo $text_sync; ?></a>
										<?php } ?>
									</td>
									<td class="right action">
										<?php foreach ($dispatch_info['action'] as $action) { ?>
											<a href="<?php echo $action['href']; ?>"><?php echo $action['text']; ?></a>
										<?php } ?>
									</td>
								</tr>
							<?php } ?>
							<tr>
								<td class="center" colspan="9"><a href="<?php echo $dispatch_list; ?>"><?php echo $text_view_all_dispatches; ?></a></td>
							</tr>
						<?php } else { ?>
							<tr>
								<td class="center" colspan="9"><?php echo $text_no_results; ?></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>
<script type="text/javascript">
	<!--
	$('a.js.sync-row').on('click', function(event) {

		event.preventDefault();

		ajaxSend(this, {
			callback: function(el, json) {

				var context = $(el).closest('tr');

				if (json.status != 'error') {

					$('td', context).animate({
						'background-color': '#000000'
					}, 'fast', function() {

						$('td:eq(2)', context).html(json.act_number);
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

	});

	//
	-->
</script>
<?php echo $footer; ?>