		</div>
		<script>toastr.info('Are you the 6 fingered man?');</script>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="{base_url}/vendor/jquery/jquery.min.js"></script>
		<script src="{base_url}/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="{base_url}/vendor/modernizr/modernizr.js"></script>
		<script src="{base_url}/vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="{base_url}/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="{base_url}/vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->

		<!-- start: JAVASCRIPTS REQUIRED FOR UI_NOTIFICATIONS -->
		<script src="{base_url}/vendor/sweetalert/sweet-alert.min.js"></script>
		<script src="{base_url}/vendor/toastr/toastr.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR UI_NOTIFICATIONS -->
		
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->

		<?php if ( isset($required_js) ) : ?>
			{required_js}
				<script src="{base_url}{req_js}"></script>
			{/required_js}
		<?php endif; ?>

		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="{base_url}/assets/js/main.js"></script>
		<script src="{base_url}/assets/js/ui-notifications.js"></script>
		<script src="{base_url}/assets/js/toastr.js"></script>

		<!-- start: JavaScript Event Handlers for this page -->
		<?php if ( isset($event_handlers) ) : ?>
			{event_handlers}
				<script src="{base_url}{event_handler}"></script>
			{/event_handlers}
		<?php endif; ?>
		
		<script>
			jQuery(document).ready(function() {
				Main.init();
				<?php if ( isset($init_js) ) : ?>
					{init_js}
						{in_js}.init();
					{/init_js}
				<?php endif; ?>				
				UINotifications.init();
				
				<?php if ( !is_null($toastr_code) ) : ?>
						showToastr('<?=$toastr_status?>','<?=$toastr_title?>','<?=$toastr_text?>');
					<?php  ?>
				<?php endif; ?>

			});

		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
