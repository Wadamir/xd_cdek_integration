<?php echo $header; ?>
<div id="content"><!-- модуль сдэк -->
	<div class="box">
		<img src="view/image/cdek/cdeklogo.png" />
		<div class="content">
			<div class="box">
				<div class="content">
					<?php if ($status) { ?>
						<h2 style="color: #2B6BFF!important;"><?php echo $message; ?></h2>
					<?php } else { ?>
						<h2 style="color: #FB050E!important;"><?php echo $message; ?></h2>
					<?php } ?>
					<p>
						<?php echo $license_thanks; ?>
					</p>
					<form action="<?php echo $action; ?>" method="POST">
						<table class="list">
							<tr>
								<td class="left"><?php echo $license_username; ?></td>
								<td class="left"><input type="text" name="cdekLicense_user" value=""></td>
							</tr>
							<tr>
								<td class="left"><?php echo $license_password; ?></td>
								<td class="left"><input type="text" name="cdekLicense_password" value=""></td>
							</tr>
							<tr>
								<td class="left"></td>
								<td class="left"><input type="submit"></td>
							</tr>
						</table>
					</form>
					<p>
						<?php echo $license_register_info; ?> <a target="_blank" href="https://cdek.im/signup.">https://cdek.im/signup.</a>. <?php echo $license_register_after; ?>
					</p>
					<p>
						<?php echo $license_support_info; ?> <a target="_blank" href="support@cdek.im."></a>support@cdek.im.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo $footer; ?>