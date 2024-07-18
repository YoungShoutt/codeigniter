<!DOCTYPE html>

<head>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<title>Codeigniter</title>

	<script src="<?php echo base_url(); ?>javascripts/jquery-2.0.0.min.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/jquery-ui.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/foundation.min.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/modernizr.foundation.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/vendor/zepto.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/foundation/foundation.section.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/foundation/foundation.topbar.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/foundation/foundation.reveal.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/jquery.validate.min.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/jquery.maskedinput.min.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/select2.min.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/jquery.qtip.min.js"></script>
	<!-- <script src="<?php echo base_url(); ?>javascripts/maskMoney.min.js"></script> -->
	<!--<script src="<?php echo base_url(); ?>javascripts/jquery.jqGrid.min.js"></script>-->
	<script src="<?php echo base_url(); ?>javascripts/jquery.jqGrid46.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/jquery.contextmenu.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/jquery.flipCounter.1.2.pack.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/jquery.easing.1.3.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/js/i18n/grid.locale-en.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/jquery.windowmsg-1.0.js"></script>
	<script src="<?php echo base_url(); ?>alert/js/alert.min.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/num/autoNumeric.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/num/accounting.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/jquery.fancybox.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/jquery.blockUI.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/ajaxupload/ajaxfileupload.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/up/site.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/jquery.combobox.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/notify.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/notify.min.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/jquery.numeric.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/jquery.number.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/jquery.inputmask.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/jquery.inputmask.extensions.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/jquery.inputmask.date.extensions.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/jquery.inputmask.numeric.extensions.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/up/ajaxfileupload.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/jquery.mtz.monthpicker.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/highcharts.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/exporting.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/jspdf.min.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/export-csv.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/tautocomplete.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/handsontable.full.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/highcharts-export-clientside.js"></script>
	<!--<script src="<?php echo base_url(); ?>javascripts/jquery.nanoscroller.min.js"></script>-->
	<script src="<?php echo base_url(); ?>javascripts/jquery.nicescroll.min.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/jquery.colorbox.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/moment.min.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/Chart.min.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/chartjs_utils.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/chartjs-plugin-annotation.min.js"></script>

	<script src="<?php echo base_url(); ?>javascripts/jquery-idleTimeout.js"></script>

	<script src="<?php echo base_url(); ?>javascripts/jquery-idleTimeout.min.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/jquery-idleTimeout-iframes.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/jquery-idleTimeout-iframes.min.js"></script>
	<!---->
	<script src="<?php echo base_url(); ?>javascripts/store.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/store.min.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/jquery.tagsinput.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/listbox.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/jquery.datetimepicker.full.js"></script>
	<script src="<?php echo base_url(); ?>javascripts/iziModal.min.js"></script>


	<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheets/jquery-ui.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheets/foundation.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheets/select2.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheets/note.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheets/jquery.qtip.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheets/button/css/buttons.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheets/button/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheets/button/css/buttons.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheets/jquery.fancybox.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheets/jquery.combobox.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheets/general_enclosed_foundicons.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheets/tautocomplete.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheets/listbox.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheets/propertygrid.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheets/jquery.tagsinput.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheets/handsontable.full.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheets/colorbox.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>alert/css/alert.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>alert/themes/default/theme.css" />
	<!--<link rel="stylesheet" href="<?php echo base_url(); ?>javascripts/css/redmond_jquery-ui-custom.css">-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>javascripts/css/ui.jqgrid.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheets/jquery.datetimepicker.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheets/jquery.dataTables.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheets/dataTables.foundation.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheets/iziModal.min.css">

	<script src="<?php echo base_url(); ?>public/fancywebsocket.js"></script>
	<link rel="shortcut icon" href="<?php echo base_url(); ?>images/logo.jpg">
	<script src="<?php echo base_url(); ?>javascripts/xlsx.full.min.js"></script>
	<style type="text/css">
		.ui-autocomplete {
			height: 200px;
			overflow-y: scroll;
			overflow-x: hidden;
		}
	</style>
	<script type="text/javascript">
		$(document).ready(function() {

			// var Server;
 			// Server = new FancyWebSocket('ws://localhost/80');
 			// //tangkap apakah ada action dr client manapun
			// Server.bind('message', function( payload ) {
			// 	switch (payload) {
			// 		case 'tobingmsg':
			// 			dhtmlx.message({
			// 				'text': "From other at "+new Date().toLocaleString(),
			// 				'expire': -1
			// 			});
			// 			break;
			// 		case 'tobingerror':
			// 			dhtmlx.message({
			// 				'text': "From other at "+new Date().toLocaleString(),
			// 				'expire': -1,
			// 				'type' : 'error',
			// 			});
			// 			break;   
			// 	}
			// });
			
			// Server.connect();
			function send() {
				//munculkan pesan buat diri sendiri
				dhtmlx.message({
					'text': "From you at "+new Date().toLocaleString(),
					'expire': -1
				});
		
				//sampaikan ke server bahwa telah terjadi action
				Server.send( 'message', 'tobingmsg' );
			}
		
			//kirim pesan tobingerror
			function senderror() {
				//munculkan pesan buat diri sendiri
				dhtmlx.message({
					'text': "From you at "+new Date().toLocaleString(),
					'expire': -1,
					'type' : 'error'
				});
		
				//sampaikan ke server bahwa telah terjadi action
				Server.send( 'message', 'tobingerror' );
			}
			$(".notif").notify("Hai <?php echo $pengguna->username; ?> ,Selamat Bekerja ... :D", "info", {
				position: "bottom-center"
			});


			$(function() {
				$(document).foundation();
			});
			$(".fancybox").fancybox({
				openEffect: 'none',
				closeEffect: 'none',
				width: 1050,
				height: 500,
				fitToView: false,
				autoSize: false,
				padding: 0,
				iframe: {
					scrolling : 'auto',
					preload   : false
				}
			});
			$(".pdfpop").fancybox({
				openEffect: 'none',
				closeEffect: 'none',
				width: 1050,
				height: 500,
				fitToView: false,
				autoSize: false,
				padding: 0,
				iframe: {
					preload: false
				}
			});
			$(".pdfpop15").fancybox({
				openEffect: 'none',
				closeEffect: 'none',
				width: 300,
				height: 400,
				fitToView: true,
				autoSize: true,
				padding: 0,
				type: 'iframe'
			});
			$(".pdfpop14").fancybox({
				openEffect: 'none',
				closeEffect: 'none',
				width: 600,
				height: 700,
				fitToView: true,
				autoSize: true,
				padding: 0,
				type: 'iframe'
			});
			$(".pdfpop2").fancybox({
				openEffect: 'none',
				closeEffect: 'none',
				width: 1300,
				height: 600,
				fitToView: false,
				autoSize: false,
				padding: 0,
				type: 'iframe'
			});
			$(".pdfpop3").fancybox({
				openEffect: 'none',
				closeEffect: 'none',
				width: 300,
				height: 310,
				fitToView: false,
				autoSize: false,
				padding: 0,
				type: 'iframe'
			});

			$(".pdfpop4").fancybox({
				openEffect: 'none',
				closeEffect: 'none',
				width: 450,
				height: 385,
				fitToView: false,
				autoSize: false,
				padding: 0,
				type: 'iframe'
			});


		});

		$(document).ready(function() {
			jQuery("#reminder_cek").click(function() {
				$.ajax({
					url: "<?php echo base_url(); ?>index.php/welcome/home/get_reminder",
					type: "POST",
					data: {},
					dataType: "JSON",
					success: function(data) {
						$('#modal_reminder').foundation('reveal', 'open');
						panjang =data.length;
						for (i = 0; i < panjang; i++) {
							if(data[i].type_transaction == "Inquiry"){
								$("#req_drawing").val(data[i].numrows);
							}else if(data[i].type_transaction == "Request Drawing"){
								$("#upload_drawing").val(data[i].numrows);
							}else if(data[i].type_transaction == "Ordersheet"){
								$("#req_drawing_p").val(data[i].numrows);
							}else if(data[i].type_transaction == "Request Drawing Pro"){
								$("#upload_drawing_p").val(data[i].numrows);
							}
						}
					},
					error: function() {}
				});
			});
			jQuery("#close_reminder").click(function() {
				$('#modal_reminder').foundation('reveal', 'close');
			});
			// send();
			$(document).idleTimeout({
				idleTimeLimit: 3600, // 'No activity' time limit in seconds. 1200 = 20 Minutes
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
				dialogDisplayLimit: 25, // time to display the warning dialog before logout (and optional callback) in seconds. 180 = 3 Minutes
				dialogTitle: 'Session Expiration Warning',
				dialogText: 'Because you have been inactive, your session is about to expire.',
				// server-side session keep-alive timer
				sessionKeepAliveTimer: false // Ping the server at this interval in seconds. 600 = 10 Minutes
				// sessionKeepAliveTimer: false // Set to false to disable pings
			});
		});
	</script>

	<style type="text/css">
		.ui-state-highlight {
			background: #b5ff80 !important;
		}

		.myAltRowClass {
			background-color: #b3c0f2;
			background-image: none;
		}

		input[type=text],
		textarea {
			-webkit-transition: all 0.30s ease-in-out;
			-moz-transition: all 0.30s ease-in-out;
			-ms-transition: all 0.30s ease-in-out;
			-o-transition: all 0.30s ease-in-out;
			outline: none;
			border: 1px solid #DDDDDD;
		}

		input[type=text]:focus,
		textarea:focus {
			box-shadow: 0 0 5px rgba(81, 203, 238, 1);
			border: 1px solid rgba(81, 203, 238, 1);
		}

		.thelist {
			height: 100%;
		}

		/* Main Item selector 
.top-bar-section li a:hover {
    color: #fff;
    background-color: #2ba6cb;
    -webkit-transition: background-color 300ms ease-out;
    -moz-transition: background-color 300ms ease-out;
    transition: background-color 300ms ease-out;
    box-shadow: 0 0 5px rgba(81, 203, 238, 1);
  border: 0.3px solid rgba(81, 203, 238, 1);
  }
*/
		/* Dropdown Item selector */
		.top-bar-section li li a:hover {
			color: #2ba6cb;
			background-color: #fff;
			-webkit-transition: background-color 900ms ease-out;
			-moz-transition: background-color 900ms ease-out;
			transition: background-color 900ms ease-out;
			box-shadow: 0 0 5px rgba(81, 203, 238, 1);
			border: 0.3px solid rgba(81, 203, 238, 1);
		}
	</style>
	<script type="text/javascript">
		var voluntaryLogoutAll = function() {
			if (store.enabled) {
				$.alert.open('Warning', '<center>You Are logout </center>', {
					OK: "OK"
				}, function(button) {
					if (button == 'OK') {
						window.location.href = "<?php echo base_url('index.php/login/login/logout') ?>";
					} else {}
				});
				store.set('idleTimerLoggedOut', true);
				//window.location.href = "<?php echo base_url('index.php/login/login/logout') ?>"; // redirect to this url. Set this value to YOUR site's logout page.
			} else {
				alert('Please disable "Private Mode", or upgrade to a modern browser. Or perhaps a dependent file missing. Please see: https://github.com/marcuswestin/store.js')
			}
		}
	</script>
</head>

<body>
	<?php
	echo $this->dynamic_menu->build_menu($pengguna->user_id, $pengguna->username);
	?>
<div id="modal_reminder" class="reveal-modal medium" style="display: none" data-reveal aria-labelledby="firstModalTitle" aria-hidden="true" role="dialog">
   <div id="formx">
      <form id="form_update_inq">
         <h4>
            <center>Reminder</center>
         </h4>
         <div class="row">
            <div class="large-12 columns">
               <div class="row">
                  <div class="large-2 columns">
                     <label for="" class="right inline">Activity</span></label>
                  </div>
                  <div class="large-3 columns">
                     <label for="" class="right inline">Counter</span></label>
                     <!-- <input type="text" id="inq_edit_view" name="inq_edit_view" style="background:#DCDCDC" readonly> -->
                  </div>
                  <div class="large-2 columns">
                     <label for="" class="right inline">Activity</span></label>
                  </div>
                  <div class="large-3 columns">
                     <label for="" class="right inline">Counter</span></label>
                     <!-- <input type="text" id="inq_edit_view" name="inq_edit_view" style="background:#DCDCDC" readonly> -->
                  </div>
                  <div class="large-6 columns"></div>
               </div>
               <hr>
               <br>
               <div class="row">
                  <div class="large-4 columns">
                     <label for="" class="left inline">Request Drawing For Quotation :</span></label>
                  </div>
                  <div class="large-1 columns">
                     <input type="text" id="req_drawing" name="req_drawing" style="background:#DCDCDC" readonly>
                  </div>
                  <div class="large-4 columns">
                     <label for="" class="left inline">Request Drawing For Production :</span></label>
                  </div>
                  <div class="large-1 columns">
                     <input type="text" id="req_drawing_p" name="req_drawing_p" style="background:#DCDCDC" readonly>
                  </div>
                  <div class="large-6 columns"></div>
               </div>
               <div class="row">
                  <div class="large-4 columns">
                     <label for="" class="left inline">Upload Drawing For Quotation :</span></label>
                  </div>
                  <div class="large-1 columns">
                     <input type="text" id="upload_drawing" name="upload_drawing" style="background:#DCDCDC" readonly>
                  </div>
                  <div class="large-4 columns">
                     <label for="" class="left inline">Upload Drawing For Production :</span></label>
                  </div>
                  <div class="large-1 columns">
                     <input type="text" id="upload_drawing_p" name="upload_drawing_p" style="background:#DCDCDC" readonly>
                  </div>
                  <div class="large-6 columns"></div>
               </div>
               <div class="row">
                  <div class="large-1 columns"></div>
                  <div class="large-9 columns">
                     <a href="javascript:void(0)" id="close_reminder" class="btnx" style="padding: 9px 17px; font-size: 14px;">Close</a>
                  </div>
               </div>
            </div>
         </div>
      </form>
   </div>
</div>