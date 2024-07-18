<?php //error_reporting(0);session_start(); 
?>
<!DOCTYPE html>

<head>
	<meta charset="utf-8" />
	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width" />
	<title>PARASAYU SPA</title>
	<script src="<?php echo base_url(); ?>javascripts/jquery-2.0.0.min.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/jquery-ui.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/foundation.min.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/modernizr.foundation.js"></script>

	<script src="<?php echo base_url(); ?>javascripts/vendor/zepto.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/foundation/foundation.section.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/jquery.validate.min.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/jquery.maskedinput.min.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/jquery.colorbox.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/select2.min.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/jquery.jqGrid.min.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/grid.locale-en.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/jquery.windowmsg-1.0.js"></script>
	<script src="<?php echo base_url(); ?>alert/js/alert.min.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/num/autoNumeric.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/num/accounting.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/jquery.inputmask.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/jquery.inputmask.extensions.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/jquery.inputmask.date.extensions.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/jquery.fancybox.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/inputTags.jquery.min.js"></script>

	<script src="<?php echo base_url(); ?>javascripts/jquery-idleTimeout.js"></script>

	<script src="<?php echo base_url(); ?>javascripts/jquery-idleTimeout.min.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/jquery-idleTimeout-iframes.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/jquery-idleTimeout-iframes.min.js"></script>
	<!---->
	<script src="<?php echo base_url(); ?>javascripts/store.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/store.min.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/canvasjs.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheets/jquery-ui.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheets/foundation.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheets/select2.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheets/note.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheets/button/css/buttons.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheets/button/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheets/jquery.fancybox.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheets/general_enclosed_foundicons.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>alert/css/alert.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>alert/themes/default/theme.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>javascripts/css/ui.jqgrid.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheets/colorbox.css">
	<style type="text/css">
		.ui-autocomplete {
			height: 200px;
			overflow-y: scroll;
			overflow-x: hidden;
		}
	</style>
	<script type="text/javascript">
		var currentdatelog, dateTimelog;

		function LogDatetime() {
			var currentdatelog = new Date();
			var xx = currentdatelog.getFullYear() + "-" + (currentdatelog.getMonth() + 1) + "-" + currentdatelog.getDate() + " " + ((currentdatelog.getHours() < 10) ? "0" : "") + currentdatelog.getHours() + ":" + ((currentdatelog.getMinutes() < 10) ? "0" : "") + currentdatelog.getMinutes() + ":" + ((currentdatelog.getSeconds() < 10) ? "0" : "") + currentdatelog.getSeconds();

			setTimeout('LogDatetime()', 1000);
			return xx;
		}
		$(document).ready(function() {
			$(document).idleTimeout({
				idleTimeLimit: 300, // 'No activity' time limit in seconds. 1200 = 20 Minutes
				redirectUrl: '<?php echo base_url() ?>index.php/login/login/logout?a=1', // redirect to this url on timeout logout. Set to "redirectUrl: false" to disable redirect
				// optional custom callback to perform before logout
				customCallback: false, // set to false for no customCallback
				// customCallback: function () { // define optional custom js function
				// perform custom action before logout
				// },
				// configure which activity events to detect
				// http://www.quirksmode.org/dom/events/
				// https://developer.mozilla.org/en-US/docs/Web/Reference/Events
				activityEvents: 'click keypress scroll wheel mousewheel mousemove', // separate each event with a space
				// warning dialog box configuration
				enableDialog: true, // set to false for logout without warning dialog
				dialogDisplayLimit: 15, // time to display the warning dialog before logout (and optional callback) in seconds. 180 = 3 Minutes
				dialogTitle: 'Perhatian!!!',
				dialogText: 'Halaman akan otomatis di arahkan ke halaman Login karena tidak ada aktivitas... Terimakasih',
				// server-side session keep-alive timer
				sessionKeepAliveTimer: false // Ping the server at this interval in seconds. 600 = 10 Minutes
				// sessionKeepAliveTimer: false // Set to false to disable pings
			});
			var voluntaryLogoutAll = function() {
				if (store.enabled) {
					store.set('idleTimerLoggedOut', true);
					window.location.href = "<?php echo base_url() ?>index.php/login/login/logout?a=0"; // redirect to this url. Set this value to YOUR site's logout page.
				} else {
					alert('Please disable "Private Mode", or upgrade to a modern browser. Or perhaps a dependent file missing. Please see: https://github.com/marcuswestin/store.js')
				}
			}
			$(function() {
				$(document).foundation();
			});

			/*==============*/


			/*==============*/
			$(".pdfpop").fancybox({

				fitToView: true,
				//  height:1000,
				autoSize: true,
				closeClick: false,
				openEffect: 'none',
				closeEffect: 'none'
			});

			$(".jrf").fancybox({
				maxWidth: 800,
				maxHeight: 600,
				fitToView: false,
				width: '70%',
				height: '70%',
				autoSize: false,
				closeClick: false,
				openEffect: 'none',
				closeEffect: 'none'
			});

			/*==============*/

		});
	</script>
	<!-- Included CSS Files -->
	<!--<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheets/smoothness/jquery-ui-1.10.3.custom.min.css">-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheets/foundation.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheets/select2.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheets/nyroModal.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>javascripts/css/ui.jqgrid.css">
</head>