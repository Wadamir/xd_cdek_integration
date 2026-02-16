<div class="cdek_description">
	<?php if ($period) { ?>
		<?php echo $period . '<BR>'; ?>
	<?php } ?>

	<?php if ($delivery_data) { ?>
		<?php echo $delivery_data . '<BR>'; ?>
	<?php } ?>

	<?php if ($usePvz) { ?>
		<div class="sdek_pvz_info">
		<button class="btn btn-primary cdek_btn_pvz">
			<a id="selectCdekPvz" href="javascript:" onclick="cdekPvzClick('<?php echo $code; ?>', '<?php echo $pvzType; ?>');"><?php echo $text_select_pickup_point; ?></a>
	</button>
			<?php $pvz_address = ''; ?>
			<?php if (isset($selected_pvz[$code])) { ?>
				<?php $pvz_address = $selected_pvz[$code]; ?>
			<?php } ?>
			<span class="cdek_selectedPvzInfo" id="cdek_selectedPvzInfo_<?php echo $code; ?>"><?php echo $pvz_address; ?></span>
		</div>
		<input type="hidden" name="need_pvz[]" value="<?php echo $code; ?>">
	<?php } else { ?>
		<?php echo $text_delivery_by_courier; ?>
	<?php } ?>
</div>