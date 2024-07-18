<?php //error_reporting(0);
session_start(); ?>
<!DOCTYPE html>
<html ng-app='myApp'>
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />

  <title><?php echo (isset($pageTitle)) ? $pageTitle : 'Codeigniter'; ?> </title>
  <script type="text/javascript">
      var BASE_URL = "<?php echo base_url(); ?>";
      var Broadcast = {
              POST : "<?php echo POST; ?>",
              BROADCAST_URL : "<?php echo BROADCAST_URL; ?>",
              BROADCAST_PORT : "<?php echo BROADCAST_PORT; ?>",
              };
    </script>
  
    <script src="<?php echo base_url(); ?>javascripts/jquery-2.0.0.min.js"></script>
    <script src="<?php echo base_url(); ?>javascripts/jquery-ui.js"></script>
    <script src="<?php echo base_url(); ?>javascripts/JsBarcode.all.min.js"></script>
    <script src="<?php echo base_url(); ?>javascripts/foundation.min.js"></script>
    <script src="<?php echo base_url(); ?>javascripts/angular.min.js"></script>
    <script src="<?php echo base_url(); ?>javascripts/modernizr.foundation.js"></script>
    <script src="<?php echo base_url(); ?>javascripts/vendor/zepto.js"></script>
    <script src="<?php echo base_url(); ?>javascripts/foundation/foundation.section.js"></script>
    <script src="<?php echo base_url(); ?>javascripts/foundation/foundation.topbar.js"></script>
    <script src="<?php echo base_url(); ?>javascripts/foundation/foundation.reveal.js"></script>
    <script src="<?php echo base_url(); ?>javascripts/jquery.validate.min.js"></script>
    <script src="<?php echo base_url(); ?>javascripts/jquery.maskedinput.min.js"></script>
    <script src="<?php echo base_url(); ?>javascripts/select2.min.js"></script>
    <script src="<?php echo base_url(); ?>javascripts/jquery.qtip.min.js"></script>
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
    <script src="<?php echo base_url(); ?>javascripts/jquery.inputmask.js"></script>
    <script src="<?php echo base_url(); ?>javascripts/jquery.inputmask.extensions.js"></script>
    <script src="<?php echo base_url(); ?>javascripts/jquery.inputmask.date.extensions.js"></script>
    <script src="<?php echo base_url(); ?>javascripts/jquery.inputmask.numeric.extensions.js"></script>
    <script src="<?php echo base_url(); ?>javascripts/up/ajaxfileupload.js"></script>
    <script src="<?php echo base_url(); ?>javascripts/jquery.mtz.monthpicker.js"></script>
    <script src="<?php echo base_url(); ?>javascripts/highcharts.js"></script>
    <script src="<?php echo base_url(); ?>javascripts/exporting.js"></script>
    <script src="<?php echo base_url(); ?>javascripts/canvas-tools.js"></script>
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
    <script src="<?php echo base_url(); ?>javascripts/d3.v5.min.js"></script>

     <script src="<?php echo base_url(); ?>javascripts/jquery-idleTimeout.js"></script>
    
    <script src="<?php echo base_url(); ?>javascripts/jquery-idleTimeout.min.js"></script>
    <script src="<?php echo base_url(); ?>javascripts/jquery-idleTimeout-iframes.js"></script>
    <script src="<?php echo base_url(); ?>javascripts/jquery-idleTimeout-iframes.min.js"></script>
     <!---->
    <script src="<?php echo base_url(); ?>javascripts/store.js"></script>
    <script src="<?php echo base_url(); ?>javascripts/store.min.js"></script>
    <script src="<?php echo base_url(); ?>javascripts/canvasjs.min.js"></script>
    <script src="<?php echo base_url(); ?>javascripts/2_jquery.canvasjs.min.js"></script>
    <script src="<?php echo base_url(); ?>javascripts/jquery.tagsinput.js"></script>
    <script src="<?php echo base_url(); ?>javascripts/listbox.js"></script>
    <script src="<?php echo base_url(); ?>javascripts/jquery.datetimepicker.full.js"></script>
    <script src="<?php echo base_url(); ?>javascripts/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>javascripts/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>javascripts/pouchdb-6.4.3.min.js"></script>
    <script src="<?php echo base_url(); ?>javascripts/iziModal.min.js"></script>

   
    <link rel="stylesheet" href="<?php echo base_url(); ?>stylesheets/jquery-ui.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>stylesheets/foundation.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>stylesheets/select2.css">
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
    
    <!--
    <script src="http://192.168.0.165:3000/socket.io/socket.io.js"></script>-->
<style type="text/css"> 
.ui-autocomplete { height: 200px; overflow-y: scroll; overflow-x: hidden;}
</style>
<script>
/*
    $(document).ready(function(){
    var socket = io.connect('http://192.168.0.165:3000');
        socket.emit('menu_access',"<?php echo "[".date('H:i:s')."][IP = ".$this->input->ip_address()."] ".$pengguna->username."-".$pengguna->nama;?>"+" <> "+document.URL);
        socket.emit('menu_access_log',"<?php echo "[".date('H:i:s')."][IP = ".$this->input->ip_address()."] ".$pengguna->username."-".$pengguna->nama;?>"+" <> "+document.URL);
        socket.emit('list_user','<?php echo $pengguna->username."-".$pengguna->nama;?>');
        //socket.emit('user_login',"<?php echo $pengguna->username; ?>")
    });
 */
 

  </script>
<script type="text/javascript">




  var ws = new WebSocket("ws://192.168.0.252:2000");
  var currentdatelog,dateTimelog;
  var timerStart = Date.now();
  function LogDatetime(){
    var currentdatelog = new Date(); 
    var xx = currentdatelog.getFullYear()+"-"+(currentdatelog.getMonth()+1)+"-"+currentdatelog.getDate()+" "+((currentdatelog.getHours() < 10)?"0":"") + currentdatelog.getHours() +":"+ ((currentdatelog.getMinutes() < 10)?"0":"") + currentdatelog.getMinutes() +":"+ ((currentdatelog.getSeconds() < 10)?"0":"") + currentdatelog.getSeconds();
    
    setTimeout( 'LogDatetime()', 1000 );
    return xx;
  }

window.onunload = function() {
  //console.log('event');
  dateTimelog = LogDatetime();
   ws.send(JSON.stringify({
              "datetime"  : dateTimelog,
              "sendType"  : "monitor",
              "username"  : '<?php echo $pengguna->username;?>',
              "nama"      : '<?php echo $pengguna->nama;?> ',
              "url"       : window.location.href,
              "data"      : "close",
              "ip_address": "<?php echo $this->input->ip_address(); ?>"
          }));
  return true; //here also can be string, that will be shown to the user
}
window.onload = function(){

//console.log("Time until everything loaded: ", Date.now()-timerStart);
dateTimelog = LogDatetime();
    ws.send(JSON.stringify({
              "datetime"  : dateTimelog,
              "sendType"  : "monitor",
              "username"  : '<?php echo $pengguna->username;?>',
              "nama"      : '<?php echo $pengguna->nama;?> ',
              "url"       : window.location.href,
              "data"      : "open",
              "ip_address": "<?php echo $this->input->ip_address(); ?>",
          }));
}

$(document).ready(function() {
//console.log("Time until DOMready: ", Date.now()-timerStart);
get_notif("<?php echo $this->session->userdata('username'); ?>");
/*==============*/
if (typeof(Storage) !== "undefined") {
    // Code for localStorage/sessionStorage.
    //console.log("LOCAL STORAGE SUPPORT");
} else {
    // Sorry! No Web Storage support..
    //console.log("LOCAL STORAGE NOT SUPPORT");
}

ws.onopen = function(e) {
    //console.log(e);
    dateTimelog = LogDatetime();
     $(document).on("click change focusout", function(event) {
      
    dateTimelog = LogDatetime();
    var textxxx = $(event.target).val();
    var rawxxxx = $(event.target).text();
    var idbbbbb = $(event.target).attr('id');
    if (!idbbbbb) {

    }else{
     ws.send(JSON.stringify({
              "datetime"  : dateTimelog,
              "sendType"  : "global",
              "username"  : '<?php echo $pengguna->username;?>',
              "nama"      : '<?php echo $pengguna->nama;?>',
              "url"       : window.location.href,
              "controller": '<?php echo $this->router->fetch_class(); ?>',
              "event"     : event.type,
              "action"     : idbbbbb,
              "data"      : idbbbbb+" = "+textxxx,
              "raw"       : rawxxxx
          }));
    }
});              
};
 ws.onmessage = function (message) {
    var data = JSON.parse(message.data);

       // console.log(data);
    if (data.controller=='memo' && data.sendType=='form') {
      switch (data.action) {
        case 'simpan':
          get_notif("<?php echo $this->session->userdata('username'); ?>");
            break;
        case 'simpan_balas':
          get_notif_balas(data.data);
            break;
        case 'panel_klik':
          //get_notif("<?php echo $this->session->userdata('username'); ?>");
           //reload_rsm_view();
    }
      //console.log(data.datetime+" - "+data.username+" - "+data.action);
    }
    // lakukan sesuatu dengan data
};
ws.onerror = function () {
    //console.log("Koneksi gagal.");
};

ws.onclose = function (event) {
    //console.log("Koneksi telah ditutup. Pesan penutupan: " + event.code+" <?php echo $pengguna->nama.' - '.$this->router->fetch_class();?>");
   
};


/*==============*/


$(".notif").notify("Hai <?php echo $pengguna->nama;?> ,Selamat Bekerja ... :D","info", { position:"bottom-center" });
  
$(function(){
    $(document).foundation();
  });
$(".fancybox").fancybox({
    openEffect  : 'none',
    closeEffect : 'none',
    iframe : {
        preload: false
    }
});
$(".pdfpop").fancybox({
        openEffect  : 'none',
        closeEffect : 'none',
        width : 1050,
         height : 500,
         fitToView : false,
         autoSize : false,
         padding: 0,
         iframe : {
        preload: false
    }
      });
$(".pdfpop15").fancybox({
        openEffect  : 'none',
        closeEffect : 'none',
        width : 300,
         height : 400,
         fitToView : true,
         autoSize : true,
         padding: 0,
         type   :'iframe'
      });
$(".pdfpop14").fancybox({
        openEffect  : 'none',
        closeEffect : 'none',
        width : 600,
         height : 700,
         fitToView : true,
         autoSize : true,
         padding: 0,
         type   :'iframe'
      });
$(".pdfpop2").fancybox({
        openEffect  : 'none',
        closeEffect : 'none',
        width : 1300,
         height : 600,
         fitToView : false,
         autoSize : false,
         padding: 0,
         type   :'iframe'
      });
$(".pdfpop90").fancybox({
        openEffect  : 'none',
        closeEffect : 'none',
        width : 600,
         height : 600,
         fitToView : false,
         autoSize : false,
         padding: 0,
         type   :'iframe'
      });
$(".pdfpop3").fancybox({
        openEffect  : 'none',
        closeEffect : 'none',
        width : 300,
         height : 310,
         fitToView : false,
         autoSize : false,
         padding: 0,
         type   :'iframe'
      });

$(".pdfpop4").fancybox({
        openEffect  : 'none',
        closeEffect : 'none',
        width : 450,
         height : 385,
         fitToView : false,
         autoSize : false,
         padding: 0,
         type   :'iframe'
      });


}); 



</script>

<style type="text/css">
.myAltRowClass { background-color: #b3c0f2; background-image: none; }
  input[type=text], textarea {
  -webkit-transition: all 0.30s ease-in-out;
  -moz-transition: all 0.30s ease-in-out;
  -ms-transition: all 0.30s ease-in-out;
  -o-transition: all 0.30s ease-in-out;
  outline: none;
  border: 1px solid #DDDDDD;
}
 
input[type=text]:focus, textarea:focus {
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
  
$(document).ready(function (){
  /**/
  $(window).on("beforeunload", function() { 
    //return confirm("Do you really want to close?"); 
  });



$(document).idleTimeout({
idleTimeLimit: 600, // 'No activity' time limit in seconds. 1200 = 20 Minutes
redirectUrl: '<?php echo base_url() ?>index.php/login/login/logout?a=1', // redirect to this url on timeout logout. Set to "redirectUrl: false" to disable redirect
// optional custom callback to perform before logout
customCallback: true, // set to false for no customCallback
 customCallback: function () { // define optional custom js function
 //alert('logout act');
},
// configure which activity events to detect
// http://www.quirksmode.org/dom/events/
// https://developer.mozilla.org/en-US/docs/Web/Reference/Events
activityEvents: 'click keypress scroll wheel mousewheel mousemove', // separate each event with a space
// warning dialog box configuration
enableDialog: true, // set to false for logout without warning dialog
dialogDisplayLimit: 60, // time to display the warning dialog before logout (and optional callback) in seconds. 180 = 3 Minutes
dialogTitle: 'Perhatian!!!',
dialogText: 'Halaman akan otomatis di arahkan ke halaman Login karena tidak ada aktivitas... Terimakasih',
// server-side session keep-alive timer
sessionKeepAliveTimer: false // Ping the server at this interval in seconds. 600 = 10 Minutes
// sessionKeepAliveTimer: false // Set to false to disable pings
});
});
var voluntaryLogoutAll = function () {
    ws.send(JSON.stringify({
              "datetime"  : dateTimelog,
              "sendType"  : "monitor",
              "username"  : '<?php echo $pengguna->username;?>',
              "nama"      : '<?php echo $pengguna->nama;?> ',
              "url"       : window.location.href,
              "data"      : "logout",
              "ip_address": "<?php echo $this->input->ip_address(); ?>"
          }));
        if (store.enabled) {
          store.set('idleTimerLoggedOut', true);
          window.location.href = "<?php echo base_url() ?>index.php/login/login/logout?a=0";      // redirect to this url. Set this value to YOUR site's logout page.
        } else {
          alert('Please disable "Private Mode", or upgrade to a modern browser. Or perhaps a dependent file missing. Please see: https://github.com/marcuswestin/store.js')
        }
      }
    function get_notif(user){
      $.ajax({
        url   : '<?php echo base_url() ?>index.php/login/home/get_notif',
        data  : {username:user},
        type : 'POST',
        dataType:'JSON',
        success : function(msg){
          if (msg.notif > 0) {
          // $.alert.open('info',msg.isi[0].memo_tanggal);
           $.notify.addStyle("metro", {
              html:
                  "<div>" +
                      "<div class='image' data-notify-html='image'/>" +
                      "<div class='text-wrapper'>" +
                          "<div class='title' data-notify-html='title1'/>" +
                          "<div class='title' data-notify-html='title2'/>" +
                          "<hr>" +
                          "<div class='text' style='white-space: pre-line' data-notify-html='text'/>" +
                      "</div>" +
                  "</div>",
              classes: {
                  error: {
                      "color": "#fafafa !important",
                      "background-color": "#F71919",
                      "border": "1px solid #FF0026"
                  },
                  success: {
                      "background-color": "#32CD32",
                      "border": "1px solid #4DB149"
                  },
                  info: {
                      "color": "#fafafa !important",
                      "background-color": "#1E90FF",
                      "border": "1px solid #1E90FF"
                  },
                  warning: {
                      "background-color": "#FAFA47",
                      "border": "1px solid #EEEE45"
                  },
                  black: {
                      "color": "#fafafa !important",
                      "background-color": "#333",
                      "border": "1px solid #000"
                  },
                  white: {
                      "background-color": "#f1f1f1",
                      "border": "1px solid #ddd"
                  }
              }
          });
           var user = "<?php echo  $this->session->userdata('username'); ?>";
           for (var i = 0; i < msg.notif; i++) {
                if (user==msg.isi[i].memo_user_dituju) {

                   $(".badge1").attr('data-badge',msg.notif);
                   $.notify({
                        title1: 'Memo Baru ('+msg.isi[i].memo_tanggal+' '+msg.isi[i].memo_jam+')',
                        title2: "Pesan Dari : "+msg.isi[i].base_name,
                        text: msg.isi[i].memo_isi,
                        image: "<img src='<?php echo base_url(); ?>/images/dark/appbar.message.profanity.png'/>"
                    }, {
                        style: 'metro',
                        className: 'info',
                        autoHide: false,
                        clickToHide: true
                    },
                    { position:"left" });
                 }else if(msg.isi[i].memo_user_dituju==''){

                   $.notify({
                        title1: 'Memo Departemen ('+msg.isi[i].memo_tanggal+' '+msg.isi[i].memo_jam+')',
                        title2: "Pesan Dari : "+msg.isi[i].base_name,
                        text: msg.isi[i].memo_isi,
                        image: "<img src='<?php echo base_url(); ?>/images/dark/appbar.message.profanity.png'/>"
                    }, {
                        style: 'metro',
                        className: 'info',
                        autoHide: false,
                        clickToHide: true
                    },
                  { position:"left" });

               }else{

               }
             
           }
           

          }
        }
      })
    }

    function get_notif_balas(memo_id){
       $.ajax({
        url   : '<?php echo base_url() ?>index.php/login/home/get_notif_balas',
        data  : {memo_id:memo_id},
        type : 'POST',
        dataType:'JSON',
        success : function(msg){
           if (msg.notif > 0) {
          // $.alert.open('info',msg.isi[0].memo_tanggal);
           $.notify.addStyle("metro", {
              html:
                  "<div>" +
                      "<div class='image' data-notify-html='image'/>" +
                      "<div class='text-wrapper'>" +
                          "<div class='title' data-notify-html='title1'/>" +
                          "<div class='text' style='white-space: pre-line' data-notify-html='text'/>" +
                          "<hr>" +
                          "<div class='title' data-notify-html='title2'/>" +
                          "<div class='text' style='white-space: pre-line' data-notify-html='text1'/>" +
                      "</div>" +
                  "</div>",
              classes: {
                  error: {
                      "color": "#fafafa !important",
                      "background-color": "#F71919",
                      "border": "1px solid #FF0026"
                  },
                  success: {
                      "background-color": "#32CD32",
                      "border": "1px solid #4DB149"
                  },
                  info: {
                      "color": "#fafafa !important",
                      "background-color": "#1E90FF",
                      "border": "1px solid #1E90FF"
                  },
                  warning: {
                      "background-color": "#FAFA47",
                      "border": "1px solid #EEEE45"
                  },
                  black: {
                      "color": "#fafafa !important",
                      "background-color": "#333",
                      "border": "1px solid #000"
                  },
                  white: {
                      "background-color": "#f1f1f1",
                      "border": "1px solid #ddd"
                  }
              }
          });
           var user = "<?php echo  $this->session->userdata('username'); ?>";
            for (var i = 0; i < msg.notif; i++) {
                if (user==msg.isi[i].memo_user_pengadu) {

                   $(".badge1").attr('data-badge',msg.notif);
                   $.notify({
                        title1: 'Memo Anda',
                        title2: "Balasan Dari : "+msg.isi[i].base_name+'('+msg.isi[i].memo_tindakan_datetime+')',
                        text: msg.isi[i].memo_isi,
                        text1: msg.isi[i].memo_isi_tindakan,
                        image: "<img src='<?php echo base_url(); ?>/images/dark/appbar.message.profanity.png'/>"
                    }, {
                        style: 'metro',
                        className: 'success',
                        autoHide: false,
                        clickToHide: true
                    },
                    { position:"left" });
                 }
            }

         }
        }
      });
    }
</script>

<style type="text/css">
.notifyjs-metro-base {
  position: relative;
    min-height: 52px;
    width: 400px;
    color:#444;
}

    .notifyjs-metro-base .image {
        display: table;
        position: absolute;
        height: auto;
        width: auto;
        left: 25px;
        top: 50%;

        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    .notifyjs-metro-base .text-wrapper {
        display: inline-block;
        vertical-align: top;
        text-align: left;
        margin: 10px 10px 10px 52px;
        clear: both;
        font-family: 'Segoe UI';
    }

    .notifyjs-metro-base .title {
        font-size: 15px;
        font-weight: bold;
    }

    .notifyjs-metro-base .text {
        font-size: 14px;
        font-weight: normal;
        vertical-align: middle;
}
  .fixed {
    height: 10%;
    left: 0;
    position: fixed;
    top: 0;
    width: 100%;
    height: 10%;
    z-index: 99;
}
.badge1 {
    position:relative;
  }
  .badge1[data-badge]:after {
    content:attr(data-badge);
    position:absolute;
    top:0px;
    right:5px;
    font-size:.7em;
    background:green;
    color:white;
    width:18px;height:18px;
    text-align:center;
    line-height:18px;
    border-radius:50%;
    box-shadow:0 0 1px #333;
  }
</style>

<?php 
$user = $this->session->userdata('username');
$memo_in_notif = $this->db->query("SELECT * FROM t_memo WHERE (memo_tindakan=0 OR memo_tindakan IS NULL) AND memo_user_dituju='$user'")->num_rows();
 ?>
 <script>
   var app =  angular.module('myApp',[]);
   app.controller('myCtrl',function($scope,$interval,$http){
   // $interval(function(){
      $http.get('<?php echo base_url() ?>index.php/login/home/get_notif').
      then(function(response){
        $scope.notif = response.data;
      //$.notify("Hello World");
      })
    //},1000);
   })
 </script>
</head>
	<body>
<?php if ($_SERVER['REMOTE_ADDR']=='192.168.0.240') {
  ?>
  <div  class="fixed">
<nav class="top-bar" data-options="is_hover:true">
      <ul class="title-area">
        <!-- Title Area -->
        <li class="name">
          <h1>
            <a href="<?php echo base_url(); ?>">
            PT. HANIL JAYA STEEL 
            </a>
          </h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
      </ul> 
      <section class="top-bar-section">
        <!-- Right Nav Section -->
        <ul class="left">
          <li class="divider"></li>
          <li><a href="<?php echo base_url(); ?>">HOME</a></li>
          <li class="divider hide-for-small "></li>
          <li class="has-dropdown"><a href="#">Gudang</a>
            <ul class="dropdown">
              <li class="has-dropdown"><a href="#">Input Data</a>
                <ul class="dropdown">
                  <?php if($pengguna->gudang_122persetujuan == 1){?>
                  <li><a href=<?php echo base_url(); ?>index.php/gudang/gudang_122persetujuan>Bon Penyerahan Material</a></li>
                  <?php }if($pengguna->lap_stokb == 1){?>
                  <li><a href=<?php echo base_url(); ?>index.php/gudang/lap_stokb>Laporan Stok Barang</a></li>
                  <?php }if($pengguna->lap_stokp == 1){?>
                  <li><a href=<?php echo base_url(); ?>index.php/gudang/lap_stokp>Laporan Detil Stok Barang</a></li>
                  <?php }if($pengguna->lap_inout == 1){?>
                  <li><a href=<?php echo base_url(); ?>index.php/gudang/lap_inout>Ledger Pemasukan Dan Pengeluaran Material</a></li>
                  <?php }?>
                </ul>
                </li>
                </ul></li></ul>
  <ul class="right">
          <li class="has-dropdown">
            <a href="#">Welcome,<b><?php echo $pengguna->nama;?></b></a>
            <ul class="dropdown">
              <li><a onclick="voluntaryLogoutAll()" href="javascript:void(0)">Keluar</a></li>
            </ul>
          </li>
        </ul>
              </section></nav></div>
  <?php
  }else{
  ?>
<div  ng-controller='myCtrl' class="fixed">
<nav class="top-bar" data-options="is_hover:false">
      <ul class="title-area">
        <!-- Title Area -->
        <li class="name">
          <h1>
            <a href="<?php echo base_url(); ?>">
            PT. HANIL JAYA STEEL 
            </a>
          </h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
      </ul> 
      <section class="top-bar-section">
        <!-- Right Nav Section -->
        <ul class="left">
          <li class="divider"></li>
          <li ><a href="<?php echo base_url(); ?>index.php/memo" class="badge1" data-badge="<?php echo $memo_in_notif ?>">MEMO</a></li> <!--{{notif.notif}}-->
          <li class="divider hide-for-small "></li>
          <?php if($pengguna->proid == 1 || $pengguna->stid == 1 || $pengguna->prold == 1 || $pengguna->proid_2 == 1 || $pengguna->pro_rm_com == 1 || $pengguna->pro_rm_miss == 1 || $pengguna->monitoring_p1 == 1){ ?>
          <li class="has-dropdown"><a href="#">PRODUKSI</a>
            <ul class="dropdown">
              <li class="has-dropdown"><a href="#">PRODUKSI 1.1</a>
              <ul class="dropdown">
               <?php if($pengguna->proid == 1){?>
              <li class="has-dropdown"><a href="#">P100 Input Data</a>
                <ul class="dropdown">
                <?php if($pengguna->pro101 == 1){ ?>
                  <li><a href=<?php echo base_url(); ?>index.php/produksi/pro101>Billet & Besi Beton</a></li>
                <?php } if($pengguna->pro102 == 1){?>
                    <li><a href=<?php echo base_url(); ?>index.php/produksi/pro102>Cost of Code</a></li>
                <?php } if($pengguna->pro101a == 1){?>
                    <li><a href=<?php echo base_url(); ?>index.php/produksi/pro101a>Input Grade Scrap Kelas</a></li>
                <?php } if($pengguna->pro203 == 1){?>
                    <li><a href=<?php echo base_url(); ?>index.php/produksi/pro203>Daily Production / Shipment Report</a></li>
                <?php } if($pengguna->pro110 == 1){?>
                    <li><a href=<?php echo base_url(); ?>index.php/produksi/pro110>Daily Production / Shipment Report II</a></li>
                <?php } if($pengguna->pro202 == 1){?>
                    <li><a href=<?php echo base_url(); ?>index.php/produksi/pro202>Update Cos Daily</a></li>
                <?php } if($pengguna->pro109 == 1){?>
                    <li><a href=<?php echo base_url(); ?>index.php/produksi/pro109>Pemakaian Material</a></li>
                <?php } if($pengguna->tot_scr == 1){?>
                    <li><a href=<?php echo base_url(); ?>index.php/produksi/tot_scr>Daily Report Pemakaian Scrap</a></li>
                <?php }?>
      
                </ul>
              </li>
              <?php } if($pengguna->stid == 1){?>
               <li class="has-dropdown"><a href="#">P200 Input Data Steel Making</a>
               <ul class="dropdown">
                <?php if($pengguna->pro103a == 1){ ?>
                    <li><a href=<?php echo base_url(); ?>index.php/produksi/pro103a>P201 Komposisi Pemakaian Scrap</a></li>
                <?php } if($pengguna->pro103b == 1){ ?>
                    <!--<li><a href=<?php echo base_url(); ?>index.php/produksi/pro103b>P202 Komposisi Material Billet Input</a></li>-->
                <?php } if($pengguna->pro103_c == 1){ ?>
                    <li><a href=<?php echo base_url(); ?>index.php/produksi/pro103_c>P203 Steel Making Input per Bucket</a></li>
                <?php } if($pengguna->pro103_d == 1){ ?>
                    <li><a href=<?php echo base_url(); ?>index.php/produksi/pro103_d>P204 Steel Making Trouble Input</a></li>
                <?php } if($pengguna->pro103_e == 1){?>
                    <li><a href=<?php echo base_url(); ?>index.php/produksi/pro103_e>P205 Steel Making Production Input</a></li>
                <?php } if($pengguna->pro103f == 1){?>
                    <li><a href=<?php echo base_url(); ?>index.php/produksi/pro103f>P206 Data Pemakaian Material</a></li>
                <?php } if($pengguna->stm_ohc == 1){?>
                    <li><a href=<?php echo base_url(); ?>index.php/produksi/stm_ohc>P207 Input OHC</a></li>
                <?php } if($pengguna->steel_making_eaf == 1){?>
                    <li><a href=<?php echo base_url(); ?>index.php/produksi/steel_making_ladle> Steel Making Ladle</a></li>
                <?php } if($pengguna->steel_making_eaf == 1){?>
                    <li><a href=<?php echo base_url(); ?>index.php/produksi/steel_making> Steel Making EAF</a></li>
                <?php } if($pengguna->steel_making_ccm == 1){?>
                    <li><a href=<?php echo base_url(); ?>index.php/produksi/steel_making_ccm>Steel Making CCM</a></li>
                <?php } if($pengguna->steel_making_ccm == 1){?>
                    <li><a href=<?php echo base_url(); ?>index.php/produksi/steel_making_trouble>Steel Making Trouble</a></li>
                <?php } ?>
                     </ul>
               </li>
               <?php } if($pengguna->bskid == 1){?>
               <li class="has-dropdown"><a href="#">P300 Input Data Billet</a>
               <ul class="dropdown">
                <?php  if($pengguna->pro107 == 1){ ?>
                    <!--<li><a href=<?php echo base_url(); ?>index.php/produksi/pro107>P301 Input Potong Billet</a></li>-->
                <?php }if($pengguna->pro_bi == 1){ ?>
                    <!--<li><a href=<?php echo base_url(); ?>index.php/produksi/pro_bi>P302 Update Stok Billet STM</a></li>-->
                <?php }if($pengguna->pro_bili == 1){ ?>
                    <!--<li><a href=<?php echo base_url(); ?>index.php/produksi/pro_bili>P303 Komposisi Billet Impor</a></li>-->
                <?php }   ?>
                     </ul>
               </li>
               <?php } if($pengguna->roid == 1){?>
               <li class="has-dropdown"><a href="#">P400 Input Data Rolling</a>
               <ul class="dropdown">
                <?php  if($pengguna->pro107_a == 1){?>
                    <li><a href=<?php echo base_url(); ?>index.php/produksi/pro107_a>P401 Roll Daily Report Input</a></li>
                <?php } if($pengguna->pro_qcg == 1){?>
                    <li><a href=<?php echo base_url(); ?>index.php/produksi/pro_qcg>P402 Input Grade Rolling</a></li>
                <?php }if($pengguna->pro107_b == 1){?>
                    <li><a href=<?php echo base_url(); ?>index.php/produksi/pro107_b>P403 Roll Daily Report Input(Trouble)</a></li>
                <?php }if($pengguna->besitekuk == 1){ ?>
                          <li><a href=<?php echo base_url(); ?>index.php/sale/besipotong>P404 Besi Potong / Tekuk</a></li>
                <?php }if($pengguna->pro107_a == 1){ ?>
                          <li><a href=<?php echo base_url(); ?>index.php/produksi/grafik_inspeksi>Grafik Inspeksi</a></li>
                <?php }if($pengguna->grafik_rolled_temp == 1){ ?>
                          <li><a href=<?php echo base_url(); ?>index.php/produksi/grafik_rolled_temp>Grafik Rolled Temp</a></li>
                      <?php }  ?>
                     </ul>
               </li>
               <?php }  if($pengguna->prold == 1){?>
              <li class="has-dropdown"><a href="#">P500 Laporan Data 1</a>
              <ul class="dropdown">
                <?php if($pengguna->rep_rol == 1){ ?>
                  <li><a href=<?php echo base_url(); ?>index.php/produksi/rep_rol>P501 Laporan Produksi Rolling Mill Harian</a></li>
                <?php } if($pengguna->rep_rolh == 1){ ?>
                  <li><a href=<?php echo base_url(); ?>index.php/produksi/rep_rolh>P502 Roll I II III Daily Report</a></li>
                <?php } if($pengguna->rep_rols == 1){ ?>
                  <li><a href=<?php echo base_url(); ?>index.php/produksi/rep_rols>P503 Actual Report Rolling Mill I II III</a></li>
                <?php } if($pengguna->rep_spe == 1){ ?>
                  <li><a href=<?php echo base_url(); ?>index.php/produksi/rep_spe>P504 Scrap Evaluation Report (Days)</a></li>
                <?php } if($pengguna->rep_speb == 1){ ?>
                  <li><a href=<?php echo base_url(); ?>index.php/produksi/rep_speb>P505 Scrap Evaluation Report (Month)</a></li>
                <?php } if($pengguna->rep_ksb == 1){ ?>
                  <li><a href=<?php echo base_url(); ?>index.php/produksi/rep_ksb>P506 Konsumsi Scrap Bulanan</a></li>
                <?php }if($pengguna->rep_rm == 1){ ?>
                  <li><a href=<?php echo base_url(); ?>index.php/produksi/rep_rm>P507 Reporting Roll Mill Trouble</a></li>
                <?php } if($pengguna->rep_ohc == 1){ ?>
                  <li><a href=<?php echo base_url(); ?>index.php/produksi/rep_ohc>P508 Laporan OHC Harian</a></li>
                <?php } if($pengguna->rep_ohcb == 1){ ?>
                  <li><a href=<?php echo base_url(); ?>index.php/produksi/rep_ohcb>P509 Laporan OHC Bulanan</a></li>
                <?php } if($pengguna->rep_size == 1){ ?>
                  <li><a href=<?php echo base_url(); ?>index.php/produksi/rep_size>P510 Laporan Rolling Size Bulan</a></li>
                <?php } if($pengguna->rep_rol_tgl == 1){ ?>
                  <li><a href=<?php echo base_url(); ?>index.php/produksi/rep_rol_tgl>P511 Laporan Rolling Mill 1 2 3(Perhari)</a></li>
                <?php } if($pengguna->rep_rol_per == 1){ ?>
                  <li><a href=<?php echo base_url(); ?>index.php/produksi/rep_rol_per>P512 Laporan Rolling Mill Persize (Pertanggal)</a></li>
                <?php } if($pengguna->rep_crol == 1){ ?>
                  <li><a href=<?php echo base_url(); ?>index.php/produksi/rep_crol>P513 Laporan Rolling QC & Sale</a></li>
                <?php } if($pengguna->rep_stmh == 1){ ?>
                  <li><a href=<?php echo base_url(); ?>index.php/produksi/rep_stmh>P514 Laporan STM Harian</a></li>
                <?php } if($pengguna->rep_ctimb == 1){ ?>
                  <li><a href=<?php echo base_url(); ?>index.php/produksi/rep_ctimb>P515 Laporan Timbang Besi Beton</a></li>
                <?php } if($pengguna->rep_stm_qc == 1){ ?>
                  <li><a href=<?php echo base_url(); ?>index.php/produksi/rep_stm_qc>P516 Laporan Yield Report STM</a></li>
                <?php } if($pengguna->rep_math == 1){ ?>
                  <li><a href=<?php echo base_url(); ?>index.php/produksi/rep_math>P517 AUX Material Harian</a></li>
                <?php } if($pengguna->rep_matb == 1){ ?>
                  <li><a href=<?php echo base_url(); ?>index.php/produksi/rep_matb>P518 AUX Material Bulanan</a></li>
                <?php } if($pengguna->rep_matb == 1){ ?>
                  <li><a href=<?php echo base_url(); ?>index.php/produksi/laporan_performance_produksi>P519 Laporan Performance Produksi</a></li>
                <?php } ?>
                </ul>
                </li>
                <?php } if($pengguna->prold == 1){?>
              <li class="has-dropdown"><a href="#">P600 Laporan Data 2</a>
              <ul class="dropdown">
                <?php if($pengguna->rep_rmg == 1){ ?>
                  <li><a href=<?php echo base_url(); ?>index.php/produksi/rep_rmg>P601 Laporan Prod RM Actual dan Table</a></li>
                <?php } ?>
                </ul>
                </li>
                <?php }

                if($pengguna->prold == 1){?>
              <li class="has-dropdown"><a href="#">P700 Display Graph</a>
              <ul class="dropdown">
                <?php if($pengguna->dis_rol == 1){ ?>
                  <li><a href=<?php echo base_url(); ?>index.php/produksi/dis_rol>P701 Display Grafik</a></li>
                <?php } ?>
                </ul>
                </li>
                <?php }
            /*     if($pengguna->pro_kom_eaf == 1 || $pengguna->pro_kom_uji == 1){?>
              <li class="has-dropdown"><a href="#">P900 Input Data QC</a>
              <ul class="dropdown">
                <?php if($pengguna->pro_kom_eaf == 1){ ?>
                  <li><a href=<?php echo base_url(); ?>index.php/produksi/pro_kom_eaf>P901 Input Komposisi</a></li>
                <?php }if($pengguna->pro_kom_uji == 1){ ?>
                  <li><a href=<?php echo base_url(); ?>index.php/produksi/pro_kom_uji>P902 Input Hasil Uji Tarik</a></li>
                <?php }if($pengguna->pro_sertifikat == 1){ ?>
                  <li><a href=<?php echo base_url(); ?>index.php/produksi/pro_sertifikat>P903 Sertifikat Mill</a></li>
                <?php }if($pengguna->besitekuk == 1){ ?>
                  <li><a href=<?php echo base_url(); ?>index.php/sale/besitekuk >P904 Besi Tekuk</a></li>
                <?php } ?>
                </ul>
                </li>
                <?php }*/
                if($pengguna->pro800 == 1){?>
              <li class="has-dropdown"><a href="#">P800 Display</a>
              <ul class="dropdown">
                <?php if($pengguna->pro801 == 1){ ?>
                  <li><a href=<?php echo base_url(); ?>index.php/produksi/disp_komposisi>P801 Display Komposisi</a></li>
                <?php } ?>
                </ul>
                </li>
                <?php } ?>


              </ul>
              </li>
              <?php if($pengguna->proid_2 == 1){?>
              <li class="has-dropdown"><a href="#">PRODUKSI 1.2</a>
              <ul class="dropdown">
                <?php if($pengguna->steel_making_ladle == 1){?>
                    <li><a href=<?php echo base_url(); ?>index.php/produksi/steel_making_ladle> Steel Making Ladle</a></li>
                <?php } if($pengguna->steel_making_mouldtube == 1){?>
                    <li><a href=<?php echo base_url(); ?>index.php/produksi/steel_making_mouldtube> Steel Making Jacket & Cetakan</a></li>
                <?php } if($pengguna->steel_making_eaf == 1){?>
                    <li><a href=<?php echo base_url(); ?>index.php/produksi/steel_making> Steel Making EAF</a></li>
                <?php } if($pengguna->steel_making_ccm == 1){?>
                    <li><a href=<?php echo base_url(); ?>index.php/produksi/steel_making_ccm/index_1>Steel Making CCM</a></li>
                <?php } if($pengguna->steel_making_trouble == 1){?>
                    <li><a href=<?php echo base_url(); ?>index.php/produksi/steel_making_trouble>Steel Making Trouble</a></li>
                <?php } ?>
              </ul>
              </li> <?php } ?>
                <li class="has-dropdown"><a href="#">Rolling MIll 3</a>
                    <ul class="dropdown">
                      <?php if($pengguna->pro_rm_master_info == 1){ ?>
                        <li><a href=<?php echo base_url(); ?>index.php/produksi/pro_rm_master_info>Master Trouble Rolling</a></li>
                      <?php }if($pengguna->pro_rm_com == 1){ ?>
                        <li><a href=<?php echo base_url(); ?>index.php/produksi/pro_rm_com>Rolling MIll 3 Pulphit 1</a></li>
                      <?php }if($pengguna->pro_rm_miss == 1){?>
                     <!--     <li><a href=<?php echo base_url(); ?>index.php/produksi/pro_rm_miss_v1>Rolling MIll 3 Pulphit 2 Versi 1 (Manual OK)</a></li>-->
                          <li><a href=<?php echo base_url(); ?>index.php/produksi/pro_rm_miss>Rolling MIll 3 Pulphit 2 Versi 2 (Automatis)</a></li>
                      <?php }if($pengguna->pro_rm_temp == 1){ ?>
                      <!--  <li><a href=<?php echo base_url(); ?>index.php/produksi/pro_rm_temp>Input Gas, Temperatur dan Angin</a></li>-->
                      <?php }if($pengguna->pro_rm_trouble == 1){ ?>
                        <li><a href=<?php echo base_url(); ?>index.php/produksi/pro_rm_trouble >Rolling MIll Trouble</a></li>
                      <?php }if($pengguna->pro_rm_shift == 1){ ?>
                        <li><a href=<?php echo base_url(); ?>index.php/produksi/pro_rm_shift >Rolling MIll Shif</a></li>
                      <?php }if($pengguna->monitoring_p1 == 1){ ?>
                        <li><a href=<?php echo base_url(); ?>index.php/produksi/monitoring_p1 >Monitoring Pulpit 1 & 2</a></li>
                      <?php }if($pengguna->pro_performance == 1){ ?>
                          <li><a href=<?php echo base_url(); ?>index.php/produksi/pro_performance>Performa Produksi</a></li>
                      <?php }if($pengguna->temp_rhf == 1){ ?>
                        <li><a href=<?php echo base_url(); ?>index.php/produksi/temp_rhf >Input Temperatur RHF RM 3</a></li>
                      <?php }if($pengguna->pro_dia_inspec == 1){ ?>
                        <li><a href=<?php echo base_url(); ?>index.php/produksi/pro_dia_inspec >Diameter Inspection (RM)</a></li>
                      <?php }if($pengguna->pro_display_plan == 1){ ?>
                        <li><a href=<?php echo base_url(); ?>index.php/produksi/pro_display_plan >Display Timbangan Plant Return</a></li>
                      <?php } ?>
                    </ul>
              </li>
               <li class="has-dropdown"><a href="#">Laporan</a>
                    <ul class="dropdown">
                      <?php if($pengguna->pro_rm_laporan == 1){ ?>
                        <li><a href=<?php echo base_url(); ?>index.php/produksi/pro_rm_laporan >Rolling MIll 3</a></li>
                      <?php }if($pengguna->lap_trouble_bulan == 1){ ?>
                        <li><a href=<?php echo base_url(); ?>index.php/produksi/lap_trouble_bulan >Laporan Trouble Bulanan</a></li>
                      <?php }if($pengguna->lap_miss == 1){ ?>
                        <li><a href=<?php echo base_url(); ?>index.php/produksi/lap_miss >Excel Trouble Missroll</a></li>
                      <?php } ?>
                    </ul>
              </li>
            </ul>
          </li>
          <li class="divider"></li>
          <?php } ?>
          <?php if($pengguna->gm ==1 || $pengguna->gid == 1 || $pengguna->gidbt == 1 || $pengguna->gids == 1 || $pengguna->gkb == 1 || $pengguna->gld == 1 || $pengguna->display == 1){?>
          <li class="has-dropdown"><a href="#">GUDANG</a>
            <ul class="dropdown">
              <li class="has-dropdown"><a href="#">Input Data</a>
                <ul class="dropdown">
                  <?php if($pengguna->gm == 1 || $pengguna->gudang_cost==1 ){?>
                    <li class="has-dropdown"><a href="#">Master</a>
                      <ul class="dropdown">
                      <?php if($pengguna->gudang_101 == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/gudang_101>Master Kode Material </a></li>
                      <?php } if($pengguna->gudang_102 == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/gudang_102>Master Kode Supplier </a></li>
                      <?php } if($pengguna->gudang_cost == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/gudang_cost>Master Kode Cost Centre</a></li>
                      <?php } if($pengguna->gudang_125 == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/gudang_125>Master CWO </a></li>
                      <?php } if($pengguna->cost_import == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/cost_import>Master Cost Import</a></li>
                      <?php } if($pengguna->iubk == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/gdg_user>Master Identitas User Bukan Karyawan</a></li>
                      <?php }if($pengguna->gdg_nopol == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/gdg_nopol>Kendaraan Hanil</a></li>
                      <?php } ?>
                      </ul>
                    </li>
                  <?php } ?>
                  <?php if($pengguna->gid == 1){?>
                    <li class="has-dropdown"><a href="#">Purchasing & Logistic</a>
                      <ul class="dropdown">
                      <?php if($pengguna->gudang_106 == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/gudang_106>Permohonan Pembelian </a></li>
                      <?php } if($pengguna->gudang_106a == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/gudang_106a>Tanggal Persetujuan Permohonan Pembelian </a></li>
                      <?php } if($pengguna->gudang_116 == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/gudang_116>Pemeriksaan Permohonan Pembelian </a></li>
                      <?php } if($pengguna->gudang_107 == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/gudang_107>Purchase Order </a></li>
                      <?php } if($pengguna->gudang_108 == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/gudang_108>Persetujuan Order </a></li>
                      <?php } if($pengguna->gudang_109 == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/gudang_109>Data Surat Pesanan </a></li>
                      <?php } if($pengguna->gudang_701 == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/gudang_701>Surat Pemeriksaan Barang </a></li>
                      <?php } if($pengguna->gudang_105 == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/gudang_105>Material Masuk  Non PO / Retur Material  </a></li>
                      <?php } if($pengguna->gudang_111 == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/gudang_111>Data Penerimaan Material </a></li>
                      <?php } if($pengguna->gudang_117 == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/gudang_117>Data Penerimaan Material (NON) Stock </a></li>
                      <?php } if($pengguna->gudang_113 == 1){?>
                         <li><a href=<?php echo base_url(); ?>index.php/gudang/gudang_113_baru>Pemeriksaan Barang Keluar </a></li>
                      <?php } if($pengguna->gudang_122 == 1){?>
                         <li><a href=<?php echo base_url(); ?>index.php/gudang/gudang_122>Bon Pengeluaran Material </a></li>
                      <?php } if($pengguna->gudang_127 == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/gudang_127>Bon Pengeluaran Material  CWO </a></li>
                          <?php }if($pengguna->gudangjual_122 == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/gudangjual_122>Bon Pengeluaran Material  Jual </a></li>
                          <?php } if($pengguna->gudang_122persetujuan == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/gudang_122persetujuan>Penyerahan Material</a></li>
                      <?php } if($pengguna->gudang_123 == 1){?>
                         <li><a href=<?php echo base_url(); ?>index.php/gudang/gudang_123>Koreksi Material Masuk </a></li>
                      <?php } if($pengguna->gudang_124 == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/gudang_124>Koreksi Pengeluaran Material </a></li>
                      <?php } if($pengguna->stok == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/Stok>Update Stock</a></li>
                      <?php } if($pengguna->btl == 1){?>
                        <li><a href="<?php echo base_url(); ?>index.php/gudang/btl">Batal Permohonan</a></li>
                        <?php } if($pengguna->limit_order == 1){?>
                        <li><a href="<?php echo base_url(); ?>index.php/gudang/limit_order">Batas Waktu Minimal Pesanan</a></li>
                        <?php } ?>
                      </ul>
                    </li>
                  <?php } ?>
                  <?php if($pengguna->gida == 1){?>
                    <li class="has-dropdown"><a href="#">Input Data Accounting</a>
                      <ul class="dropdown">
                        <li><a href="<?php echo base_url(); ?>index.php/gudang/ubah_harga">Additional Price</a></li>
                        <?php if($pengguna->cekbln == 1){?>
                        <li><a href="<?php echo base_url(); ?>index.php/admin/bulan">Tutup Pembukuan</a></li>
                         <?php } if($pengguna->gudang_sop == 1){?>
                        <li><a href="<?php echo base_url(); ?>index.php/gudang/gudang_sop">Penyesuaian Stock Opname</a></li>
                        <?php } ?>
                      </ul>
                    </li>
                  <?php } ?>
                  <?php if($pengguna->gidbt == 1){ ?>
                    <li class="has-dropdown"><a href="#">Input Data Besi Tua</a>
                      <ul class="dropdown">
                      <?php if($pengguna->grade == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/Grade>Master Harga Grade</a></li>
                      <?php } if($pengguna->kelas == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/kelas>Master Kelas Besi Tua</a></li>
                      <?php } if($pengguna->tonase == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/tonase>Master Tambah Harga Besi Tua</a></li>
                      <?php } if($pengguna->tm_103 == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/tm_103>Koreksi Timbangan </a></li>
                      <?php } if($pengguna->koreksi_tm_103 == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/koreksi_new_tm_103>Prosentase Kelas Besi Tua</a></li>
                      <?php } if($pengguna->besi_tua == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/besi_tua>Update Besi Tua</a></li>
                      <?php } if($pengguna->tanda_terima == 1){?>
                        <li><a href="<?php echo base_url();?>index.php/gudang/tanda_terima">Tanda Terima Besi Tua</a></li>
                      <?php } ?>
                      </ul>
                    </li>
                  <?php } ?>
                  <?php if($pengguna->gids == 1){?>
                   <li class="has-dropdown"><a href="#">Input Data Subledger</a>
                    <ul class="dropdown">
                    <?php if($pengguna->sub == 1){?>
                     <li><a href=<?php echo base_url(); ?>index.php/gudang/sub>Input - Output Subledger</a></li>
                    <?php } if($pengguna->stok_sub == 1){?>
                      <li><a href=<?php echo base_url(); ?>index.php/gudang/stok_sub>Update Stock Subledger</a></li>
                    <?php } ?>
                    </ul>
                  </li>
                  <?php } ?>
                  <?php if($pengguna->gkb == 1){?>
                    <li class="has-dropdown"><a href="#">Kontrak Beli</a>
                      <ul class="dropdown">
                      <?php if($pengguna->import == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/import>Kontrak Beli</a></li>
                      <?php } if($pengguna->trans_pib == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/trans_pib>Transaksi PIB</a></li>
                      <?php } if($pengguna->trans_cost == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/trans_cost>Transaksi Cost Import</a></li>
                      <?php } ?>
                      </ul>
                    </li>
                  <?php } ?>
                </ul>
              </li>
              <li class="has-dropdown"><a href="#">Laporan Printing</a>
                <ul class="dropdown">
                  <?php if($pengguna->gld == 1){?>
                    <li class="has-dropdown"><a href="#">Laporan Data I</a>
                      <ul class="dropdown">
                      <?php if($pengguna->lap_gudang_101 == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/lap_gudang_101>Kode Material</a></li>
                        <?php } if($pengguna->lap_sup == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/lap_sup>Supplier </a></li>
                        <?php } if($pengguna->lap_gudang_106 == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/lap_gudang_106>Permohonan Pembelian & Perbaikan / PR </a></li>
                        <?php } if($pengguna->lap_sta_gudang_106 == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/lap_sta_gudang_106>Status Permohonan Pembelian </a></li>
                        <?php } if($pengguna->lap_gudang_125 == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/lap_gudang_125>CWO </a></li>
                        <?php } if($pengguna->lap_sta_gudang_125 == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/lap_sta_gudang_125>Status CWO </a></li>
                        <?php } if($pengguna->lap_gudang_107 == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/lap_gudang_107>Purchas Order </a></li>
                        <?php } if($pengguna->lap_sta_gudang_107 == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/lap_sta_gudang_107>Status Purchas Order </a></li>
                        <?php } if($pengguna->lap_spb == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/lap_spb>Daftar SPB </a></li>
                        <?php } if($pengguna->lap_pen == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/lap_pen>Laporan Harian Pemasukan Barang</a></li>
                        <?php } if($pengguna->lap_bon_jual == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/lap_bon_jual>Laporan Harian Pengeluaran Penjualan Barang</a></li>
                        <?php }if($pengguna->lap_bon == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/lap_bon>Laporan Harian Pengeluaran Barang</a></li>
                        <?php } if($pengguna->lap_inraw == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/lap_inraw>Laporan Harian Pemasukan RAW Barang</a></li>
                        <?php } if($pengguna->lap_inraw_fin == 1){?>
                          <li><a href=<?php echo base_url(); ?>index.php/gudang/lap_inraw_fin>Laporan Harian Pemasukan RAW Barang II</a></li>
                          <?php } if($pengguna->lap_raw == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/lap_raw>Laporan Harian Pengeluaran RAW Barang</a></li>
                        <?php } if($pengguna->lap_insub == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/lap_insub>Laporan Pemasukan Barang (SUB LEDGER)</a></li>
                        <?php } if($pengguna->lap_outsub == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/lap_outsub>Laporan Pengeluaran Barang (SUB LEDGER)</a></li>
                        <?php } if($pengguna->lap_inout== 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/lap_inout>Legder Pemasukan & Pengeluaran Material</a></li>
                        <?php } if($pengguna->lap_reff == 1){?>
                        <li><a href="<?php echo base_url(); ?>index.php/gudang/lap_reff">Laporan Refactories</a></li>
                        <?php }if($pengguna->lap_sto_penyesuaian == 1){?>
                        <li><a href="<?php echo base_url(); ?>index.php/gudang/lap_sto_penyesuaian">Kesesuain Stok</a></li>
                        <?php } ?>
                      </ul>
                    </li>
                    <?php }?>
                    <?php //if($pengguna->gld2 == 1){ ?>
                    <li class="has-dropdown"><a href="#" title="">Laporan Data II</a>
                      <ul class="dropdown">
                      <?php /*if($pengguna->lap_boncwo == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/lap_boncwo>Bon Material Keluar CWO</a></li>
                        <?php }*/ if($pengguna->lap_tmb == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/lap_besi>Inspection Report Of Iron Scrap </a></li>
                        <?php } if($pengguna->lap_besi == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/lap_sup_besi>Pemasukan Besi Tua Harian</a></li>
                         <?php } if($pengguna->lap_rekap == 1){?>
                        <li><a href=<?php echo base_url(); ?>index.php/gudang/lap_rekap>Rekap Pemasukan Besi Tua</a></li> 
                        <?php } if($pengguna->lap_rekap_kls == 1){?>
                        <li><a href="<?php echo base_url(); ?>index.php/gudang/lap_rekap_kls">Rekap Kelas Besi Tua</a></li>
                        <?php } if($pengguna->lap_stokb == 1){?>
                        <li><a href="<?php echo base_url(); ?>index.php/gudang/lap_stokb">Laporan Stok Barang</a></li>
                        <?php }  if($pengguna->lap_stokp == 1){?>
                        <li><a href="<?php echo base_url(); ?>index.php/gudang/lap_stokp">Laporan Detail Stok Barang</a></li>
                        <?php }  if($pengguna->lap_stokm == 1){?>
                        <li><a href="<?php echo base_url(); ?>index.php/gudang/lap_stokm">Month In/Out Stock Report</a></li>
                        <?php } if($pengguna->lap_consmat == 1){?>
                        <li><a href="<?php echo base_url(); ?>index.php/gudang/lap_consmat">Laporan Konsumsi Material</a></li>
                        <?php } if($pengguna->lap_stodate == 1){?>
                        <li><a href="<?php echo base_url(); ?>index.php/gudang/lap_stodate">Laporan pemasukan Barang Bulanan(Per-Tanggal)</a></li>
                        <?php }if($pengguna->lap_bon_so == 1){?>
                        <li><a href="<?php echo base_url(); ?>index.php/gudang/lap_bon_so">Laporan Penyesuaian Stock Opname</a></li> 
                        <?php } ?>
                      </ul>
                    </li>
                    <?php //} ?>
                </ul>
              </li>
              <?php if($pengguna->display == 1){ ?>
              <li class="has-dropdown"><a href="#">Laporan Display</a>
                <ul class="dropdown">
                <?php if($pengguna->lsd == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/gudang/cek_barang/sudah_datang">Status Permohonan</a></li>
                <?php } if($pengguna->cpb == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/gudang/viewbon">Cek Pengeluaran Barang</a></li>
                <?php }/**/ if($pengguna->hpm == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/gudang/display_hispem">History Pembelian Material</a></li>
                <?php } if($pengguna->dsb == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/gudang/display_stok">Display Stok Bulanan</a></li>
                  <?php } if($pengguna->lbb == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/gudang/lap_bon_bln">Laporan Bulanan Pengeluaran Bon Material </a></li>
                  <?php } if($pengguna->dispr == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/gudang/dis_pr">Status Permohonan Pada P/O </a></li>
                <?php } ?>
                </ul>
              </li>
              <?php } ?>
                <?php if($pengguna->lap_review_semester == 1){ ?>
              <li class="has-dropdown"><a href="#">Review Semester</a>
                <ul class="dropdown">
                <?php if($pengguna->lap_review_semester == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/gudang/lap_review_semester">Evaluasi PP</a></li>
                <?php } if($pengguna->lapeval == 1){?>
                  <li><a href="<?php echo base_url(); ?>index.php/gudang/lap_evaluasi">Laporan Evaluasi Supplier</a></li>
               <?php } ?>
                </ul>
              </li>
              <?php } ?>
            </ul>
          </li>
          <?php } ?>
            <?php if($pengguna->besitekuk == 1 || $pengguna->pro_kom_uji == 1 || $pengguna->pro_komplain_tind == 1 || $pengguna->pro_sertifikat == 1 || $pengguna->pro_kom_eaf == 1 || $pengguna->pro_display_kom == 1 || $pengguna->pro_komplain_tind==1 || $pengguna->pro_dis_import || $pengguna->pro_kel_qc_bils==1 ||$pengguna->pro_kom_import==1 ||$pengguna->pro_kom_import==1 ){?>
           <li class="divider"></li>
          <li class="has-dropdown"><a href="#">QC</a>
          <ul class="dropdown"> 
              <li class="has-dropdown"><a href="#">Lab</a>
                    <ul class="dropdown">
                      <?php if($pengguna->pro_kom_eaf == 1){ ?>
                        <li><a href=<?php echo base_url(); ?>index.php/produksi/pro_kom_eaf>LB901 Input Komposisi Billet Produk</a></li>
                      <?php }if($pengguna->pro_kom_import == 1){ ?>
                        <li><a href=<?php echo base_url(); ?>index.php/produksi/pro_kom_import >LB902 Input Komposisi Billet Beli</a></li>
                      <?php }if($pengguna->pro_kom_uji == 1){ ?>
                        <li><a href=<?php echo base_url(); ?>index.php/produksi/pro_kom_uji>LB903 Input Hasil Uji Tarik</a></li>
                      <?php }if($pengguna->pro_display_kom == 1){ ?>
                        <li><a href=<?php echo base_url(); ?>index.php/produksi/pro_display_kom >LB904 Display Hasil Uji Tarik</a></li>
                      <?php }if($pengguna->pro_dis_komposisi == 1){ ?>
                          <li><a href=<?php echo base_url(); ?>index.php/produksi/pro_dis_komposisi>LB905 Display Komposisi</a></li>
                          <li><a href=<?php echo base_url(); ?>index.php/produksi/pro_kom_local>LB909 Input Komposisi Billet NON PIB (Dari Timbangan)</a></li>
                      <?php }if($pengguna->pro_standart_kimia == 1){ ?>
                          <li><a href=<?php echo base_url(); ?>index.php/produksi/pro_standart_kimia>LB906 Input Standart Komposisi Kimia</a></li>
                      <?php }if($pengguna->pro_standart_qc == 1){ ?>
                          <li><a href=<?php echo base_url(); ?>index.php/produksi/pro_standart_qc>LB907 Input Standart Properties Besi Beton</a></li>
                      <?php }if($pengguna->pro_kom_rebar == 1){ ?>
                          <li><a href=<?php echo base_url(); ?>index.php/produksi/pro_kom_rebar>LB908 Input Komposisi RE-BAR</a></li>
                      <?php }    ?>
                    </ul>
              </li>
                   <li class="has-dropdown"><a href="#">PPC</a>
                    <ul class="dropdown">
                <li class="has-dropdown"><a href="#">Input Data</a>
                    <ul class="dropdown">
                      <?php if($pengguna->pro_kel_qc_bils == 1){ ?>
                        <li><a href=<?php echo base_url(); ?>index.php/produksi/pro_kel_qc_bils >PC801 Pengeluaran Billet/Scrap Dari Kawasan Berikat ( QC )</a></li>
                      <?php }if($pengguna->pro_dis_p1_billet == 1){ ?>
                          <li><a href=<?php echo base_url(); ?>index.php/produksi/pro_dis_p1_billet>PC811 Bon Billet Untuk Produksi RM 3</a></li>
                      <?php }  if($pengguna->pro_bon_billet == 1){ ?>
                          <li>
                            <a href=<?php echo base_url(); ?>index.php/produksi/pro_billet_bon_stok>PC812 Bon Pegeluaran Billet Stok Hanil</a>
                              <a href=<?php echo base_url(); ?>index.php/produksi/pro_bon_billet>PC803A Bon Pegeluaran Billet Stok Local</a>
                          </li>
                      <?php }    if($pengguna->pro_billet_potong == 1){ ?>
                          <li><a href=<?php echo base_url(); ?>index.php/produksi/pro_billet_potong>PC803B Input Potong Billet Local</a></li>
                      <?php }/* if($pengguna->pro_billet_potong_gb == 1){ ?>
                          <li><a href=<?php echo base_url(); ?>index.php/produksi/pro_billet_potong_gb>PC804 Input Potong Billet Import</a></li>
                      <?php }*/ if($pengguna->pro_billet_stok == 1){ ?>
                          <li><a href=<?php echo base_url(); ?>index.php/produksi/pro_billet_stok_V2>PC805 Update Stok Billet</a></li>
                      <?php }if($pengguna->pro_billet_move == 1){ ?>
                          <li><a href=<?php echo base_url(); ?>index.php/produksi/pro_billet_move>PC807 Pindah Lokasi Billet</a></li>
                      <?php }if($pengguna->pro_kg_mtr == 1){ ?>
                          <li><a href=<?php echo base_url(); ?>index.php/produksi/pro_kg_mtr>PC810 Kg/Meter</a></li>
                      <?php }  ?>
                    </ul>
              </li>
               <li class="has-dropdown"><a href="#">Display</a>
                    <ul class="dropdown">
                     <?php if($pengguna->pro_dis_import == 1){ ?>
                        <li><a href=<?php echo base_url(); ?>index.php/produksi/pro_dis_import >PC800 Status Billet Import</a></li>
                      <?php }if($pengguna->pro_dis_stok == 1){ ?>
                          <li><a href=<?php echo base_url(); ?>index.php/produksi/pro_dis_stok>PC806 Display Stok Billet</a></li>
                      <?php }if($pengguna->pro_dis_bon == 1){ ?>
                          <li><a href=<?php echo base_url(); ?>index.php/produksi/pro_dis_bon>PC808 Display Bon Billet</a></li>
                      <?php }/*if($pengguna->pro_dis_gb_qc == 1){ ?>
                          <li><a href=<?php echo base_url(); ?>index.php/produksi/pro_dis_gb_qc>PC809 Display Stok Billet Import</a></li>
                      <?php }*/   ?>
                    </ul>
              </li>
                    
                    </ul>
              </li>
                <li class="has-dropdown"><a href="#">Pengolahan Gudang Berikat</a>
                <ul class="dropdown">
                <?php if($pengguna->rencana_produksi == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/produksi/rencana_produksi">Rencana Pemakaian Billet</a></li>
                  <?php }if($pengguna->pro_berat_pl == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/produksi/pro_berat_pl">Berat PackingList</a></li>
                  <?php } if($pengguna->pro_potong_gb == 1 ){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/produksi/pro_potong_gb_v3">Input Potong Billet Gudang Berikat (Billet Utuh)</a></li>
                  <?php } if($pengguna->pro_potong_cutting == 1 ){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/produksi/pro_potong_gb_v2">Input Potong Billet Gudang Berikat (Billet Sudah Cutting)</a></li>
                  <?php }if($pengguna->pro_pib_qc == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/produksi/pro_pib_qc">Pemberian PIB Pada HN</a></li>
                  <?php }if($pengguna->pro_pib_qc_non == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/produksi/pro_pib_qc_non">Pemberian PIB Pada HN (PIB Sementara)</a></li>
                  <?php }if($pengguna->pro_pib_qc_list == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/produksi/pro_pib_qc_list">Pemberian PIB Pada PIB Sementara</a></li>
                  <?php }if($pengguna->pro_bon_pib == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/produksi/pro_bon_pib">Pengeluaran Billet Dari Gudang</a></li>
                  <?php } if($pengguna->pro_dis_gb == 1 ){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/produksi/pro_dis_gb">Display Stok Billet Import</a></li>
                  <?php } ?>
                </ul>
              </li>
              <li class="has-dropdown"><a href="#">Quality Control</a>
                    <ul class="dropdown">
                      <?php if($pengguna->sl501_b == 1){ ?>
                        <li><a href=<?php echo base_url(); ?>index.php/sale/sl501_b>QC700 Master Kode Billet</a></li>
                      <?php }/*if($pengguna->pro_bi == 1){ ?>
                          <li><a href=<?php echo base_url(); ?>index.php/produksi/pro_bi>P302 Update Stok Billet STM</a></li>
                      <?php }*/
                        if($pengguna->pro_qcgb == 1){?>
                          <li><a href=<?php echo base_url(); ?>index.php/produksi/pro_qcgb>QC701 Input Besi Beton Beli</a></li>
                      <?php }if($pengguna->pro_sertifikat == 1){ ?>
                        <li><a href=<?php echo base_url(); ?>index.php/produksi/pro_sertifikat2>QC702 Sertifikat Mill 2012</a></li>
                        <li><a href=<?php echo base_url(); ?>index.php/produksi/pro_sertifikat2_v2>QC702 Sertifikat Mill 2017</a></li>
                      <?php }if($pengguna->besitekuk == 1){ ?>
                        <li><a href=<?php echo base_url(); ?>index.php/sale/besitekuk >QC703 Besi Tekuk</a></li>
                      <?php }if($pengguna->pro_billet_verifikasi == 1){ ?>
                        <li><a href=<?php echo base_url(); ?>index.php/produksi/pro_billet_verifikasi >QC704 Verifikasi Billet OFF</a></li>
                      <?php }if($pengguna->pro_komplain_tind == 1){ ?>
                        <li><a href=<?php echo base_url(); ?>index.php/produksi/pro_komplain_tind >QC705 Tindakan & Penyelesaian Customer Complain</a></li>
                      <?php } if($pengguna->pro_rm_qc_shift == 1){ ?>
                          <li><a href=<?php echo base_url(); ?>index.php/produksi/pro_rm_qc_shift>QC706 Rolling Mill Shif</a></li>
                      <?php }if($pengguna->pro_display_serah == 1){ ?>
                        <li><a href=<?php echo base_url(); ?>index.php/produksi/pro_display_serah>QC707 Display Timbangan Serah Terima</a></li>
                      <?php }if($pengguna->pro_dia_inspec_qc == 1){ ?>
                          <li><a href=<?php echo base_url(); ?>index.php/produksi/pro_dia_inspec_qc>QC708 Diameter Inspection (QC)</a></li>
                      <?php }if($pengguna->under_proses == 1){ ?>
                          <li><a href=<?php echo base_url(); ?>index.php/sale/under_proses>QC709 Stok Under Proses</a></li>
                      <?php }if($pengguna->pro_display_tmb_billet == 1){ ?>
                        <li><a href=<?php echo base_url(); ?>index.php/produksi/pro_display_tmb_billet>QC710 Display Timbangan Billet</a></li>
                        <?php } ?>
                    </ul>
              </li>
               <li class="has-dropdown"><a href="#">Tolling</a>
                    <ul class="dropdown">
                      <?php if($pengguna->sl101_tolling == 1){ ?>
                        <li><a href=<?php echo base_url(); ?>index.php/sale/sl101_tolling>Master Data Pabrik Tolling</a></li>
                      <?php }if($pengguna->pro_kom_import_tolling == 1){ ?>
                        <li><a href=<?php echo base_url(); ?>index.php/produksi/pro_kom_import_tolling>Input Komposisi Billet Tolling</a></li>
                      <?php }if($pengguna->rencana_tolling == 1){ ?>
                        <li><a href=<?php echo base_url(); ?>index.php/produksi/rencana_tolling>Rencana Produksi Tolling</a></li>
                      <?php }if($pengguna->terima_tolling == 1){ ?>
                        <li><a href=<?php echo base_url(); ?>index.php/produksi/terima_tolling>Produksi Tolling Masuk</a></li>
                      <?php }if($pengguna->rencana_tolling == 1){ ?>
                        <li><a href=<?php echo base_url(); ?>index.php/sale/kontrak_beli_besi_hn>Pemberian HN Besi Tolling</a></li>
                      <?php }if($pengguna->kontrak_beli_besi_pending == 1){ ?>
                        <li><a href=<?php echo base_url(); ?>index.php/sale/kontrak_beli_besi_pending>Besi Beton Beli Pending</a></li>
                      <?php }if($pengguna->pro_standart_kimia == 1){ ?>
                      <?php }if($pengguna->pro_standart_qc == 1){ ?>
                      <?php }   ?>
                    </ul>
              </li>
             
                </ul>
                </li><?php } ?>

           <?php if($pengguna->pro_bilbel == 1 || $pengguna->pro_scrapbel== 1 || $pengguna->pro_kel_bils == 1 || $pengguna->pro_up_bils == 1){?>
           <li class="divider"></li>
          <li class="has-dropdown"><a href="#">EXIM</a>
          <ul class="dropdown">
           <?php if($pengguna->pro_bilbel == 1){ ?>
            <li><a href="<?php echo base_url(); ?>index.php/produksi/pro_bilbel">Packing List Billet</a></li>
          <?php } if($pengguna->pro_scrapbel== 1){ ?>
            <li><a href="<?php echo base_url(); ?>index.php/produksi/pro_scrapbel">Packing List Scrap</a></li>
          <?php }/*if($pengguna->pro_kel_bils == 1){ ?>
           <li><a href=<?php echo base_url(); ?>index.php/produksi/pro_kel_bils>Pengeluaran Billet/Scrap Dari Kawasan Berikat</a></li>
           <?php }if($pengguna->pro_up_bils == 1){ ?>
           <li><a href=<?php echo base_url(); ?>index.php/produksi/pro_up_bils>Update Barang Gudang Berikat</a></li>
            <?php }*/ ?>
                 <li class="has-dropdown"><a href="#">Pengolahan Gudang Berikat</a>
                <ul class="dropdown">
                <?php  if($pengguna->pro_pib == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/produksi/pro_pib_v2">Pembuatan PIB</a></li>
                  <?php }?>
                </ul>
              </li>
          </ul>

        </li><?php } ?>
          <li class="divider"></li>
          <?php if($pengguna->slid == 1 || $pengguna->slld == 1){?>
          <li class="has-dropdown"><a href="#">SALE</a>
            <ul class="dropdown">
            <?php if($pengguna->slid == 1){ ?>
              <li class="has-dropdown"><a href="#">Input Data</a>
                <ul class="dropdown">
                <?php if($pengguna->sl101 == 1){?>
                  <li><label>Master</label></li>
                  <li><a href="<?php echo base_url(); ?>index.php/sale/sl101">Master Data Customer</a></li>
                  <?php } if($pengguna->sl501 == 1){?>
                  <li><a href="<?php echo base_url(); ?>index.php/sale/sl501">Kode Barang Jadi</a></li>
                  <?php } if($pengguna->hprolling == 1){?>
                  <li><a href="<?php echo base_url(); ?>index.php/sale/hprolling">Stok Besi Beton</a></li>
                  <?php } if($pengguna->pro_invoice == 1){?>
                  <li><a href="<?php echo base_url(); ?>index.php/sale/proforma_invoice">Proforma Invoice</a></li>
                  <?php } ?>
                    <li class="divider"></li>
                    <li><label>Marketing</label></li>
                      <li class="has-dropdown"><a href="#">Kontrak</a>
                        <ul class="dropdown">
                          <?php if($pengguna->kproyek == 1){ ?>
                          <li><a href="<?php echo base_url(); ?>index.php/sale/kontrak_payung">Kontrak Payung</a></li>
                          <?php } if($pengguna->kproyek == 1){?>
                          <li><a href="<?php echo base_url(); ?>index.php/sale/kproyek">Kontrak Proyek</a></li>
                          <?php } if($pengguna->kskbdn == 1){?>
                          <li><a href="<?php echo base_url(); ?>index.php/sale/kskbdn">SKBDN Kontrak Proyek</a></li>
                          <?php } if($pengguna->kdistributor == 1){?>
                          <li><a href="<?php echo base_url(); ?>index.php/sale/kdistributor">Kontrak Tunggal</a></li>
                          <?php } if($pengguna->kdistributor2 == 1){?>
                          <li><a href="<?php echo base_url(); ?>index.php/sale/kontrakdistributor_v2">Kontrak Distributor</a></li>
                          <?php } if($pengguna->kontrak_billet == 1){?>
                          <li><a href="<?php echo base_url(); ?>index.php/sale/kontrakbillet">Kontrak Billet</a></li>
                          <?php } ?>
                        </ul>
                      </li>
                  <li class="has-dropdown"><a href="#">Komplain</a>
                    <ul class="dropdown">
                        <?php if($pengguna->pro_komplain == 1){?>
                        <li><a href="<?php echo base_url(); ?>index.php/produksi/pro_komplain">Customer Complaint</a></li>
                        <?php } if($pengguna->pro_komplain_biaya == 1){?>
                        <li><a href="<?php echo base_url(); ?>index.php/produksi/pro_komplain_biaya">Biaya</a></li>
                        <?php }if($pengguna->pro_komplain_status == 1){?>
                        <li><a href="<?php echo base_url(); ?>index.php/produksi/pro_komplain_status">Status Komplain</a></li>
                        <?php } ?>
                    </ul>
                  </li>

                  <?php if($pengguna->order_kirim == 1){?>
                  <li><a href="<?php echo base_url(); ?>index.php/sale/order_kirim">Order Kirim Besi Beton</a></li>
                  <?php } if($pengguna->surat_jalan_kembali == 1){?>
                  <li><a href="<?php echo base_url(); ?>index.php/sale/surat_jalan_kembali">Monitoring Surat Jalan</a></li>
                  <?php } if($pengguna->order_tekpot == 1){?>
                  <li><a href="<?php echo base_url(); ?>index.php/sale/order_tekpot">Order Tekuk / Potong</a></li>
                  <?php } if($pengguna->bon_besi_beton == 1){?>
                  <li><a href="<?php echo base_url(); ?>index.php/sale/bon_besi_beton">Bon Besi Beton</a></li>
                  <?php }?>


                    <li class="divider"></li>
                    <li><label>Penjualan</label></li>
                    <?php if($pengguna->sl104 == 1){?>
                  <li><a href="<?php echo base_url(); ?>index.php/sale/sl104/po">Delivery Order</a></li>
                  <?php } if($pengguna->spmuat == 1){?>
                  <li><a href="<?php echo base_url(); ?>index.php/sale/spmuat">Surat Perintah Muat</a></li>
                  <?php } if($pengguna->cetaksuratjalan == 1){?>
                  <li><a href="<?php echo base_url(); ?>index.php/sale/cetaksuratjalan">Cetak Surat Jalan</a></li>
                  <?php } if($pengguna->koreksi_shipment == 1){?>
                  <li><a href="<?php echo base_url(); ?>index.php/sale/koreksi_shipment">Koreksi Shipment</a></li>
                  <?php }?>
                    <li class="divider"></li>
                    <li><label>Besi Beton Beli</label></li>
                  <?php if($pengguna->kontrak_beli_besi == 1) { ?>
                  <li><a href="<?php echo base_url(); ?>index.php/sale/kontrak_beli_besi_beton">Kontrak Beli Besi Beton</a></li>
                  <?php }if($pengguna->kontrak_beli_besi_masuk == 1){?>
                  <li><a href="<?php echo base_url(); ?>index.php/sale/kontrak_beli_besi_masuk">Kontrak Beli Besi Beton Masuk</a></li>
                  <?php } ?>
                  <!--
                  <li><a href="<?php echo base_url(); ?>index.php/sale/pci">Production Correction Input</a></li>
                  <li><a href="<?php echo base_url(); ?>index.php/sale/koreksibbeton">Koreksi Besi Beton</a></li>
                  -->
                </ul>
              </li>
              <?php } if($pengguna->slld == 1){?>
              <li class="has-dropdown"><a href="#">Laporan Data</a>
                <ul class="dropdown">
                <?php if($pengguna->report_2 == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/sale/create_report/sales_report">REPORT SALES DAILY</a></li>
                  <?php } if($pengguna->report_2 == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/sale/create_report/sales_report_bulanan">REPORT SALES MONTHLY</a></li>
                  <?php } if($pengguna->report_1 == 1){ ?>
                  <!--<li><a href="<?php echo base_url(); ?>index.php/sale/create_report/shipment_harian">REPORT SHIPMENT DAILY</a></li>-->
                  <?php } if($pengguna->report_1 == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/sale/create_report/shipment_bulanan">REPORT SHIPMENT MONTHLY</a></li>
                  <?php } if($pengguna->report_4 == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/sale/create_report/stok_status">REPORT STOK BESI BETON</a></li>
                  <?php } if($pengguna->report_sisa_kontrak == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/sale/create_report/report_sisa_kontrak">LAPORAN SISA KONTRAK (PO)</a></li>
                  <?php } if($pengguna->report_sisa_kontrak == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/sale/create_report/report_sisa_kontrak_utama">LAPORAN SISA KONTRAK (UTAMA)</a></li>
                  <?php } if($pengguna->report_1 == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/sale/create_report/shipment_report">MONTHLY SHIPMENT REPORT (size)</a></li>
                  <?php } if($pengguna->report_1 == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/sale/create_report/ship_month_size">MONTHLY SHIPMENT REPORT (store)</a></li>
                  <?php } if($pengguna->report_1 == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/sale/create_report/ship_month_amount">MONTHLY SHIPMENT REPORT (amount)</a></li>
                  <?php } if($pengguna->report_5 == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/sale/create_report/detil_barang_manual">Laporan list shipment per-Faktur</a></li>
                  <?php }if($pengguna->pro_hcc == 1){?>
                  <li><a href="<?php echo base_url(); ?>index.php/produksi/pro_hcc">Laporan Customer Complaint</a></li>
                  <?php } if($pengguna->lap_penjualan_jo == 1){?>
                  <li><a href="<?php echo base_url(); ?>index.php/sale/reporting_shipment/penjualan_jo">Laporan Penjualan JO</a></li>
                  <?php } if($pengguna->lap_upajakum== 1){?>
                  <li><a href="<?php echo base_url(); ?>index.php/sale/upajakum/laporan_um_view">Laporan Uang Muka Kontrak</a></li>
                  <?php }  ?>
                </ul>
              </li>
              <?php } if($pengguna->disp_id == 1){?>
              <li class="has-dropdown"><a href="#">Display</a>
                <ul class="dropdown">
                <?php if($pengguna->disp_proyek == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/sale/disp_proyek">Display Kontrak (Sisa)</a></li>
                <?php }if($pengguna->disp_proyek == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/admin/admin_chart">Grafik penjualan</a></li>
                <?php }if($pengguna->disp_proyek == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/test">Display Antrian Truck</a></li>
                  <?php }if($pengguna->pro_display_besibeton == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/produksi/pro_display_besibeton">Display Timbangan Besibeton</a></li>
                <?php }if($pengguna->display_order_tekpot == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/sale/display_order_tekpot">Display History Order Tekuk / Potong</a></li>
                  <?php } ?>
                </ul>
              </li>
              <?php } ?>
            </ul>
          </li>
          <li class="divider"></li>
          <?php } if($pengguna->user_id == 1 ||$pengguna->user_id == 1371 || $pengguna->user_id == 1286 ||  $pengguna->user_id == 1277 || $pengguna->user_id == 610 || $pengguna->user_id == 611 || $pengguna->user_id == 612 || $pengguna->user_id == 615 || $pengguna->user_id == 617 || $pengguna->user_id == 619 || $pengguna->user_id == 1311 || $pengguna->user_id == 1313 || $pengguna->user_id == 1320 || $pengguna->user_id == 1321 || $pengguna->user_id == 1334 || $pengguna->user_id == 1369 || $pengguna->user_id == 636 || $pengguna->user_id == 637 || $pengguna->user_id == 639 || $pengguna->user_id == 1301 || $pengguna->user_id == 1312 || $pengguna->user_id == 1282 || $pengguna->user_id == 1283 || $pengguna->user_id == 1284 || $pengguna->user_id == 1287 || $pengguna->user_id == 1290 || $pengguna->user_id == 1291 || $pengguna->user_id == 1337 || $pengguna->user_id == 1340 || $pengguna->user_id == 1369 ||  $pengguna->user_id == 1370||  $pengguna->user_id == 1337||  $pengguna->user_id == 1289||  $pengguna->user_id == 1323||  $pengguna->user_id == 13452){?>
          <li class="has-dropdown">
            <li class="has-dropdown"><a href="#">ADIS</a>
            <ul class="dropdown">
              <li class="has-dropdown"><a href="#">Master</a>
                <ul class="dropdown">
                <?php if($pengguna->glacc == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/adis/glacc">Master GL Account</a></li>
                  <?php } if($pengguna->mbank == 1 ){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/adis/mbank">Master Bank</a></li>
                  <?php } if($pengguna->lotnumber == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/adis/lotnumber">Setting Lots Number Cek/Giro</a></li>
                  <?php } if($pengguna->valas == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/adis/valas">Kurs Valas</a></li>
                  <?php } if($pengguna->setacc == 1 ){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/adis/accm">Set Kode Jurnal</a></li>
                  <?php } if($pengguna->glacc == 1 ){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/adis/saldo">Saldo Awal Jurnal</a></li>
                  <?php } ?>
                </ul>
              </li>
              <li class="has-dropdown"><a href="#">Hutang</a>
                <ul class="dropdown">
                <?php if($pengguna->invhutang == 1 || $pengguna->user_id == 612 || $pengguna->user_id == 615 || $pengguna->user_id == 617 || $pengguna->user_id == 619 || $pengguna->user_id == 1313|| $pengguna->user_id == 1334 || $pengguna->user_id == 1369|| $pengguna->user_id == 13452 ){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/adis/invhutang">Verifikasi Invoice Hutang</a></li>
                <?php } if($pengguna->slipspb == 1 || $pengguna->user_id == 612 || $pengguna->user_id == 615 || $pengguna->user_id == 617 || $pengguna->user_id == 619 || $pengguna->user_id == 1313 || $pengguna->user_id == 1334 || $pengguna->user_id == 1369|| $pengguna->user_id == 13452 ){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/adis/slipspb">Pembuatan Slip Hutang</a></li>
                <?php } if($pengguna->dhs == 1 || $pengguna->user_id == 612 || $pengguna->user_id == 1313 || $pengguna->user_id == 617 || $pengguna->user_id == 619){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/adis/dhs">Daftar Hutang Supplier</a></li>
                  <li><a href="<?php echo base_url(); ?>index.php/adis/slipbayar">Pembuatan Slip Pembayaran</a></li>
                <?php } if($pengguna->transkasbankh == 1 || $pengguna->user_id == 617 || $pengguna->user_id == 619){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/adis/transkasbank?x=h">Transaksi Kas/Bank</a></li>
                <?php } if($pengguna->pinv == 1 || $pengguna->user_id == 1313 || $pengguna->user_id == 617 || $pengguna->user_id == 619){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/adis/pinv">Pembayaran Invoice</a></li>
                <?php } ?>
                </ul>
              </li>
              <li class="has-dropdown"><a href="#">Piutang</a>
                <ul class="dropdown">
                <?php  if($pengguna->upiut == 1){ ?>
                   <li><a href="<?php echo base_url(); ?>index.php/adis/upiut">Update Piutang</a></li>
                  <?php } if($pengguna->dpj == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/adis/dpj">Daftar Piutang Jatuh Tempo</a></li>
                  <?php } if($pengguna->transkasbankh == 1 ){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/adis/transkasbank?x=p">Transaksi Kas/Bank</a></li>
                  <?php } if($pengguna->piutp == 1 || $pengguna->user_id == 1311){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/adis/piutp">Mapping Pembayaran Piutang</a></li>
                  <li class="divider"></li>
                  <?php } if($pengguna->ippbf == 1 || $pengguna->user_id == 1311 || $pengguna->user_id == 1291 || $pengguna->user_id == 1287){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/adis/ippbf">Input Penjualan Barang</a></li>
                  <?php } if($pengguna->piutoto == 1 || $pengguna->user_id == 1311){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/adis/piutoto">Slip Otomatis Piutang</a></li>
                  <?php }if( $pengguna->user_id == 1311 || $pengguna->user_id == 1370){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/adis/koreksi_jth">Koreksi Jatuh Tempo</a></li>
                  <?php }if( $pengguna->slip_diskonto == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/adis/slip_diskonto">Slip Diskonto</a></li>
                  <?php }if( $pengguna->transkasbankp == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/adis/transkasbank">Transaksi Kas/Bank</a></li>
                  <?php } ?>
                </ul>
              </li>
              <li class="has-dropdown"><a href="#">Jurnal</a>
                <ul class="dropdown">
                <?php if($pengguna->slipbiasa == 1 || $pengguna->user_id == 612 || $pengguna->user_id == 1286  || $pengguna->user_id == 1277  || $pengguna->user_id == 1313 || $pengguna->user_id == 617 || $pengguna->user_id == 619 || $pengguna->user_id == 1369 || $pengguna->user_id == 1321 || $pengguna->user_id == 615 || $pengguna->user_id == 1311 || $pengguna->user_id == 1334 || $pengguna->user_id == 636 || $pengguna->user_id == 637 || $pengguna->user_id == 639 || $pengguna->user_id == 1301 || $pengguna->user_id == 1312 || $pengguna->user_id == 1282 || $pengguna->user_id == 1283 || $pengguna->user_id == 1284 || $pengguna->user_id == 13452){?>
                  <li><a href="<?php echo base_url(); ?>index.php/adis/slipbiasa">Jurnal Manual</a></li>
                <?php } if($pengguna->stjslip == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/adis/stjslip/oke">Persetujuan Jurnal</a></li>
                <?php } if($pengguna->stjslip == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/adis/ujurnal">Update Jurnal</a></li>
                  <li><a href="<?php echo base_url(); ?>index.php/adis/cbook">Tutup Buku</a></li>
                  <?php } if($pengguna->usbank == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/adis/usbank">Update Saldo Bank</a></li>
                  <?php } if($pengguna->slipbiasa == 1){ ?>
                  <?php } ?>
                  <li><a href="<?php echo base_url(); ?>index.php/adis/stjslip/look">View Jurnal</a></li>
                  
                </ul>
              </li>

              <li class="has-dropdown"><a href="#">Pajak</a>
                <ul class="dropdown">
                <?php if($pengguna->setpajak == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/sale/setfp/set">Set Faktur Pajak</a></li>
                  <?php } if($pengguna->faktur_pajak_manual == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/sale/sale_cetak/faktur_pajak_manual">Faktur Pajak Manual</a></li>
                  <?php } if($pengguna->manual_billet_sj == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/sale/billet_surat_jalan">Manual Billet Surat Jalan</a></li>
                  <?php } if($pengguna->faktur_pajak_manual_shipment == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/sale/sale_cetak/faktur_pajak_manual_shipment">Faktur Pajak Manual Shipment</a></li>
                  <?php } if($pengguna->sl206 == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/sale/sl206">Tax-Code Input</a></li>
                  <?php } if($pengguna->upajak == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/sale/upajak">Update Pajak</a></li>
                  <?php } if($pengguna->c_fp_list == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/sale/reporting_pajak/fplist_view">Cetak Faktur Pajak List</a></li>
                  <?php } if($pengguna->upajak == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/sale/reporting_pajak/fppajak_view">Cetak Faktur Pajak</a></li>
                  <?php } if($pengguna->upajakum == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/sale/upajakum">Uang Muka</a></li>
                  <?php } if($pengguna->pkeluar == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/adis/pkeluar">Pajak Keluaran/Masukan</a></li>
                  <?php } if($pengguna->faktur_pajak == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/sale/sale_cetak/faktur_pajak">Faktur Pajak</a></li>
                  <?php } if($pengguna->pph22 == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/sale/sale_cetak/pph22">Cetak Faktur PPh-22</a></li>
                  <?php } if($pengguna->cetak_ssp == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/sale/cetak_ssp">Cetak SSP</a></li>
                  <?php } if($pengguna->kwitansi == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/sale/sale_cetak/kwitansi">Cetak Kwitansi</a></li>
                  <?php } if($pengguna->cet == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/sale/cet">Cetak Tanda Terima</a></li>
                  <?php } if($pengguna->pmasuk == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/adis/pmasuk">Pajak Masukan</a></li>
                  <?php }if($pengguna->terima_ssp == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/adis/terima_ssp">Terima SSP</a></li>
                  <?php }if($pengguna->histori_in == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/adis/histori_in">Rincian Pemasukan Barang</a></li>
                  <?php } ?>
                  
                </ul>
              </li>
                       <li class="has-dropdown"><a href="#">Aktiva</a>
                <ul class="dropdown">
                <?php if($pengguna->adis_aktiva == 1 ){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/adis/adis_aktiva">Aktiva</a></li>
                <?php }if($pengguna->up_bln_aktiva == 1 ){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/adis/up_bln_aktiva">Update Bulan Aktiva</a></li>
                <?php } ?>
                  
                </ul>
              </li>
              <li class="has-dropdown"><a href="#">Distributor</a>
                <ul class="dropdown">
                <?php if($pengguna->pro_invoice_pajak_manual == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/finance/pi_pajak_manual">Proforma Invoice Pajak Manual</a></li>
                  <?php } if($pengguna->kwitansi == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/sale/sale_cetak/kwitansi">Cetak Kwitansi</a></li>
                  <?php } if($pengguna->timbangan_finance_billet == 1){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/finance/set_timbangan">Buat Surat Timbangan</a></li>
                  <?php } ?>
                </ul>
              </li>
              
                  <?php if($pengguna->pengajuan == 1 || $pengguna->user_id == 617 || $pengguna->user_id == 619){ ?>
                  <li><a href="<?php echo base_url(); ?>index.php/adis/pengajuan">Pengajuan Dana</a></li>
                  <?php }  ?>
                  
                   <?php if($departemen=='O0200' ||$departemen=='O0201' || $departemen=='O0202'){ ?>

                    <?php }else{ ?>
                        <li class="has-dropdown"><a href="#">Laporan</a>
                          <ul class="dropdown">
                            <li><a href="<?php echo base_url(); ?>index.php/adis/trialb">Daily Trial Balance</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/adis/slipcek">Slip Check List</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/adis/gledger">General Ledger</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/adis/trialb/index2">Trial Balance</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/adis/track">Document Tracking</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/adis/tagsbl">Tagihan SKBDN</a></li>
                          </ul>
                        </li>
                     <?php }  ?>
              
              <!--<li class="has-dropdown"><a href="#">Laporan AP</a>
                <ul class="dropdown">
                  <li><a href="<?php echo base_url(); ?>index.php/adis/lapsub">Subdiary Vendor/Supplier</a></li>
                  <li><a href="#">Subsidiary By Vendor/Supplier</a></li>
                  <li><a href="#">Transaksi AP By Date</a></li>
                  <li><a href="#">Rekap AP</a></li>
                  <li><a href="#">Pembayaran seluruh Vendor</a></li>
                </ul>
              </li>
              <li class="has-dropdown"><a href="#">Laporan AR</a>
                <ul class="dropdown">
                  <li><a href="#">A/R Transaksi Summary</a></li>
                  <li><a href="#">A/R Aging</a></li>
                  <li><a href="#">A/R Subsidiary By Customer</a></li>
                  <li><a href="#">Receipt Cash & Bank by Customer</a></li>
                  <li><a href="#">Pembayaran seluruh Vendor</a></li>
                </ul>
              </li>-->
            </ul>
          </li>
        </li>
          <li class="divider"></li>
        <!-- HRD -->
<?php } if($pengguna->hrdid == 1 ){?>
            <li class="has-dropdown"><a href="#">HRD</a>
              <ul class="dropdown">
                <?php if($pengguna->hrd_dept  == 1 || $pengguna->hrd_jabatan==1 || $pengguna->hrd_kode_absensi==1 || $pengguna->hrd_jamkerja==1 || $pengguna->hrd_ptkp==1 || $pengguna->hrd_bpjs==1 || $pengguna->hrd_bns_pro==1 || $pengguna->hrd_grade==1 || $pengguna->hrd_nilai==1 || $pengguna->hrd_srt_absen==1 ){ ?>
                <li class="has-dropdown"><a href="#">Master</a>
                 <?php } ?>
                    <ul class="dropdown">
                      <li class="has-dropdown"><a href="#">Kode Departemen</a>
                    <ul class="dropdown">
                    <?php if($pengguna->dept_approval == 1){ ?>
                        <li><a href="<?php echo base_url(); ?>index.php/hrd/dept_approval">Departemen Besar</a></li>
                        <?php } if($pengguna->hrd_dept == 1){ ?>
                        <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_dept">Departemen</a></li>
                         <?php }?> </ul></li> 

                         <?php if($pengguna->hrd_jabatan == 1){ ?>  
                        <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_jabatan"> Kode Jabatan</a></li>
                       <?php } if($pengguna->hrd_jamkerja == 1){ ?>
                      <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_jamkerja"> Kode Jam Kerja</a></li>
                          <?php } if($pengguna->hrd_ptkp == 1){ ?>
                        <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_ptkp"> PTKP</a></li>
                           <?php } if($pengguna->hrd_bpjs == 1){ ?>
                        <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_bpjs">  BPJS</a></li>
                         <?php }if($pengguna->hrd_nilai_nda == 1){ ?>
                        <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_nilai_nda">NDA</a></li>
                         <?php } if($pengguna->hrd_bns_pro == 1){ ?>
                       <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_bns_pro"> Kode Bonus Karyawan</a></li>
                          <?php } if($pengguna->hrd_grade == 1){ ?>
                        <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_grade"> Grade</a></li>
                          <?php } if($pengguna->hrd_nilai == 1){ ?>
                       <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_nilai">Bonus Kerajinan</a></li>
                      <?php }if($pengguna->hrd_kode_absensi == 1){ ?>
                       <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_kode_absensi">Master Kode Absensi</a></li>
                      <?php } ?>
                      <!-- <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_absensi">Masuk Data Ijin Tidak Masuk</a></li>
                       <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_tunjangan">Tunjangan Karyawan</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_scorsing">Data Scorsing</a></li>
                       <!-- <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_kartu_hilang">Data Kartu Hilang</a></li>!-->

                        
                      <!--  <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_basepend">Master Base Pendidikan</a></li>!-->
                        
                     
                      <!--  <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_bonus_kerajinan">Master Bonus Kerajinan</a></li>!-->
                      <!--  <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_jamsostek">Master Jamsostek</a></li>!-->
                      <!--  <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_bank">Master Bank</a></li>!-->
                    </ul>
                </li>
                <?php if($pengguna->hrd_update_grade == 1 || $pengguna->hrd_tahunan==1 || $pengguna->hrd_libur==1 || $pengguna->hrd_clk_baru==1 || $pengguna->hrd_absen_kary==1){ ?>
                <li class="has-dropdown"><a href="#">Pembuatan Data</a>
                 <?php } ?>
                    <ul class="dropdown">
                      <?php if($pengguna->hrd_update_grade == 1){ ?>
                        <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_update_grade"> Data Bulanan</a></li>
                       <?php } if($pengguna->hrd_tahunan == 1){ ?> 
                        <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_tahunan"> Data Tahunan</a></li>
                        <?php } if($pengguna->hrd_libur == 1){ ?> 
                        <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_libur">Hari Libur</a></li>
                        <?php } if($pengguna->hrd_clk_baru == 1){ ?> 
                        <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_clk_baru">Pembuatan Absensi</a></li>
                          <?php } if($pengguna->hrd_absen_kary == 1){ ?> 
                        <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_absen_kary">Pembuatan Absensi 1 Karyawan</a></li>   
                         <?php } ?>
                      <!--  <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_update_status">Update Data Status</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_update_tunj">Update Data Tunjangan</a></li>-->
                       
                    </ul> 
                </li>
                
                 <?php if($pengguna->hrd_update_grade == 1 || $pengguna->hrd_keluarga == 1 || $pengguna->hrd_karyawan == 1 || $pengguna->hrd_kstatus == 1 || $pengguna->hrd_tunjangan == 1 || $pengguna->hrd_kstatus_mgg == 1 || $pengguna->hrd_mutasi == 1 || $pengguna->hrd_asing == 1 || $pengguna->hrd_surat == 1){ ?>
                <li class="has-dropdown"><a href="#">Biodata</a>
                <?php } ?>
                    <ul class="dropdown">
                     <?php if($pengguna->hrd_karyawan == 1){ ?>
                        <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_karyawan"> Karyawan</a></li>
                      <?php } if($pengguna->hrd_base_outsourching == 1){ ?> 
                        <li><a href="<?php echo base_url(); ?>index.php/hrd_outs/hrd_base_outsourching"> Karyawan Outsourcing</a></li>
                      <?php } if($pengguna->hrd_keluarga == 1){ ?> 
                      <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_keluarga"> Keluarga</a></li>
                      <?php } if($pengguna->hrd_kstatus == 1){ ?> 
                      <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_kstatus"> Status Karyawan</a></li>
                        <?php } if($pengguna->hrd_kstatus_mgg == 1){ ?> 
                      <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_kstatus_mgg"> Status Karyawan Kontrak & Magang</a></li>
                       <?php } if($pengguna->hrd_tunjangan == 1){ ?> 
                       <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_tunjangan">Tunjangan Karyawan</a></li>
                       <?php }if($pengguna->hrd_asing == 1){ ?> 
                       <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_asing">Tenaga Kerja Asing</a></li>
                       <?php }if($pengguna->hrd_history == 1){ ?> 
                      <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_history"> Promosi, Mutasi, Demosi DLL</a></li>
                       <?php } ?>
                       <!-- <li><a href="#">Personel</a></li>
                        <li><a href="#">Keluarga</a></li>
                        <li><a href="#">Pendidikan</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_riwayat_kesehatan">Riwayat Kesehatan</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_riwayat_kecelakaan">Riwayat Kecelakaan</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_kstatus">Status Karyawan</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_kerajinan">Kerajinan Karyawan</a></li>-->
                    </ul>
                </li>
                <?php if($pengguna->hrd_spl == 1 || $pengguna->aktual == 1 || $pengguna->display_clk == 1 || $pengguna->psk == 1 || $pengguna->apvsjk == 1 || $pengguna->apv == 1 || $pengguna->apvlpsk == 1 || $pengguna->apvhrd == 1 ){ ?>
                <li class="has-dropdown"><a href="#">Absensi & Overtime</a>
                <?php } ?>
                    <ul class="dropdown">
                        <?php if($pengguna->hrd_spl == 1 || $pengguna->aktual == 1 || $pengguna->psk == 1 ){ ?>
                       <!--<li class="has-dropdown"><a href="#">Input SPL</a>-->
                        <?php } ?>
                          <!--<ul class="dropdown">-->
                              <?php if($pengguna->hrd_spl == 1){ ?>
                              <!--<li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_spl">Surat Perintah Lembur</a></li>-->
                               <?php } if($pengguna->aktual == 1){ ?> 
                              <!--<li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_spl/aktual">Setelah Jam Kerja</a></li>-->
                             <?php } if($pengguna->psk == 1){ ?> 
                              <!--<li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_spl/psk">Lepas Kerja</a></li>-->
                              <?php } ?>
                          <!--</ul>-->
                      <!--</li>-->
                        <?php if($pengguna->apvsjk == 1 ||$pengguna->hrd_aktual_spl == 1 || $pengguna->apv == 1 || $pengguna->apvlpsk == 1 || $pengguna->apvhrd == 1 || $pengguna->hrd_auto == 1 ){ ?>
                      <li class="has-dropdown"><a href="#">Surat Perintah Lembur</a>
                       <?php } ?>
                        <ul class="dropdown">
                           <?php if($pengguna->hrd_matrik_apv_spl == 1){ ?>
                              <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_matrik_apv">Matrik Admin & Approval SPL</a></li>
                             <?php }if($pengguna->hrd_spl == 1){ ?>
                              <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_spl">Input Surat Perintah Lembur</a></li>
                             <?php }if($pengguna->user_id == 1371 || $pengguna->user_id == 1370){ ?>
                              <li><a href="<?php echo base_url(); ?>index.php/hrd/koreksi_jenis_lembur">Koreksi Jenis Lembur</a></li>
                             <?php } if($pengguna->apv == 1){ ?> 
                              <!--<li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_spl/apv">Approval Setelah Jam Kerja</a></li>-->
                               <?php } if($pengguna->apvlpsk == 1){ ?> 
                              <!--<li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_spl/apvlpsk">Approval Selepas Jam Kerja</a></li>-->
                              <?php } if($pengguna->apv == 1){ ?> 
                              <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_spl/approval_lembur">Approval Rencana SPL</a></li>
                              <?php } if($pengguna->hrd_aktual_spl == 1){ ?> 
                              <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_aktual_spl">Input Aktual Lembur</a></li>
                              <?php } if($pengguna->apvsjk == 1){ ?> 
                              <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_spl_approval">Approval Aktual SPL</a></li>
                             <?php } if($pengguna->apvhrd == 1){ ?> 
                              <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_spl/apvhrd">Approval HRD</a></li>
                             <?php }if($pengguna->hrd_spl == 1){ ?> 
                              <li><a href="<?php echo base_url(); ?>index.php/hrd/display_lembur">Display Lembur</a></li>
                             <?php }if($pengguna->hrd_spl == 1){ ?> 
                              <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_display_spl_approve">Display Status Approval</a></li>
                             <?php }if($pengguna->hrd_auto == 1){ ?> 
                             <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_auto">SPL Otomatis Hari Libur</a></li>
                             <?php } ?>
                        </ul>
                      </li>
                       <?php if($pengguna->hrd_update_clk == 1 || $pengguna->check_ist == 1 || $pengguna->check_absen == 1 || $pengguna->display_clk == 1 || $pengguna->koreksi_clk == 1 || $pengguna->hrd_srt_ijin == 1 || $pengguna->hrd_srt_absen == 1  || $pengguna->hrd_tugas == 1 || $pengguna->display_clk ==1) {?>
                       <li class="has-dropdown"><a href="#">Absensi</a>
                        <?php } ?>
                        <ul class="dropdown">
                         <?php if($pengguna->hrd_update_clk == 1){ ?>
                         <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_update_clk">Tarik Check Clock /Tanggal</a></li>
                         <?php } if($pengguna->check_ist == 1){ ?> 
                        <li><a href="<?php echo base_url(); ?>index.php/hrd/check_ist">Checking Dan Koreksi Istirahat Karyawan</a></li>   
                        <?php } if($pengguna->check_absen == 1){ ?> 
                        <li><a href="<?php echo base_url(); ?>index.php/hrd/check_absen">Checking Dan Koreksi Absensi Karyawan</a></li>   
                        <?php } if($pengguna->display_clk == 1){ ?> 
                        <li><a href="<?php echo base_url(); ?>index.php/hrd/display_clk">Display Check Clock</a></li> 
                        <?php }  if($pengguna->koreksi_clk == 1){ ?> 
                        <li><a href="<?php echo base_url(); ?>index.php/hrd/koreksi_clk">Koreksi Check Clock</a></li> 
                         <?php }  if($pengguna->hrd_srt_ijin == 1){ ?>
                       <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_srt_ijin">Input Ijin Keluar Dan Terlambat</a></li>
                      <?php } if($pengguna->hrd_srt_absen == 1){ ?> 
                       <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_srt_absen">Input Data Ijin Tidak Masuk</a></li>
                        <?php } if($pengguna->hrd_tugas == 1){ ?> 
                       <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_tugas">Penugasan Karyawan</a></li>
                        <?php }if($pengguna->hrd_surat == 1){ ?> 
                      <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_surat"> Surat Peringatan</a></li>
                       <?php }if($pengguna->hrd_memo == 1){ ?> 
                       <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_memo"> Memo Karyawan</a></li>
                       <?php }if($pengguna->hrd_tutup == 1){ ?> 
                       <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_tutup">HRD Akses</a></li>
                        <?php }if($pengguna->hrd_akses_spl == 1){ ?> 
                       <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_akses_spl">HRD Akses Spl</a></li>
                        <?php }if($pengguna->hrd_absensi_export == 1){ ?> 
                       <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_absensi_export">HRD Export Absensi</a></li>
                        <?php }if($pengguna->hrd_oc_proteksi == 1){ ?> 
                       <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_oc_proteksi">Status Proteksi</a></li>
                        <?php }
                           ?>
                        </ul>
                      </li>
                      <!--
                         <?php if($pengguna->hipdata == 1){ ?>
                <li class="has-dropdown"><a href="#">Input Data</a>
                    <?php } ?>
                    <ul class="dropdown">
                     <?php if($pengguna->hrd_srt_ijin == 1){ ?>
                       <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_srt_ijin">Input Ijin Keluar Dan Terlambat</a></li>
                      <?php } if($pengguna->hrd_srt_absen == 1){ ?> 
                       <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_srt_absen">Input Data Ijin Tidak Masuk</a></li>
                      <?php } ?>
                       <!--  <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_jabatan">Kode Jabatan</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_jamkerja">Kode Jam Kerja</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_kerajinan">Kerajinan Karyawan</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_tunjangan">Tunjangan Karyawan</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_riwayat_kesehatan">Riwayat Kesehatan</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_riwayat_kecelakaan">Riwayat Kecelakaan</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_scorsing">Data Scorsing</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_kartu_hilang">Data Kartu Hilang</a></li>-->
                   <!--
                    </ul> 
                </li>
                -->
                    </ul>
                </li>
                <?php if($pengguna->hrd_update_absen == 1 || $pengguna->hrd_update_cuti == 1 || $pengguna->hrd_input_potongan==1 || $pengguna->lap_daftar_gaji_dept==1 || $pengguna->hrd_trans_kop==1 || $pengguna->hrd_update_potongan==1 || $pengguna->cetak_absensi==1 || $pengguna->lap_daftar_gaji==1 || $pengguna->lap_daftar_gaji_banding==1 || $pengguna->hrd_update_ot == 1  || $pengguna->hrd_kompen == 1  || $pengguna->hrd_bonus == 1   || $pengguna->hrd_kerajinan == 1 || $pengguna->hrd_up_rajin == 1){ ?>
                <li class="has-dropdown"><a href="#">Penggajian</a>
                 <?php } ?>
                    <ul class="dropdown">
                      <li class="has-dropdown"><a href="#">Potongan</a>
                        <ul class="dropdown">
                        <?php if($pengguna->hrd_rutin == 1){ ?> 
                            <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_rutin">Potongan Rutin</a></li>
                            <?php } if($pengguna->hrd_trans_kop == 1){ ?> 
                            <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_trans_kop">Transfer Potong Koperasi</a></li>
                            <?php }if($pengguna->hrd_update_potongan == 1){ ?> 
                            <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_update_potongan">Update Potong Serikat Kerja</a></li>
                            <?php }if($pengguna->hrd_input_potongan == 1){ ?> 
                            <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_input_potongan">Input Data Potongan Karyawan</a></li>
                            <?php }if($pengguna->hrd_pajak_cicilan == 1){ ?> 
                            <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_pajak_cicilan">Pajak Cicilan</a></li>
                            <?php } ?>
                        </ul>
                      </li>
                         <li class="has-dropdown"><a href="#">Update Gaji</a>
                        <ul class="dropdown">
                        <?php if($pengguna->hrd_update_ot == 1){ ?> 
                        <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_update_ot">Update OverTime</a></li>     
                         <?php }if($pengguna->hrd_update_absen == 1){ ?>
                            <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_update_absen">Update Absen Karyawan</a></li>
                           <?php } if($pengguna->hrd_update_cuti == 1){ ?> 
                            <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_update_cuti">Update Cuti Karyawan</a></li>
                            <?php } if($pengguna->hrd_kompen == 1){ ?> 
                            <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_kompen">Cuti Kompensasi</a></li>
                             <?php } if($pengguna->hrd_up_rajin == 1){ ?> 
                            <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_up_rajin">Update T-Resiko & Fungsi</a></li>
                              <?php }if($pengguna->hrd_bonus == 1){ ?> 
                            <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_bonus">Update Bonus Produksi</a></li>
                              <?php }  if($pengguna->hrd_kerajinan == 1){ ?> 
                            <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_kerajinan">Update Kerajinan</a></li>
                            <?php } if($pengguna->hrd_update_gaji == 1){ ?> 
                            <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_update_gaji">Update Gaji</a></li>
                          <?php } ?>
                        </ul>
                      </li>
                      
                          <li class="has-dropdown"><a href="#">Laporan</a>
                        <ul class="dropdown">
                        <?php if($pengguna->lap_daftar_gaji == 1){ ?> 
                        <li><a href="<?php echo base_url(); ?>index.php/hrd/lap_daftar_gaji">Daftar Gaji</a></li>     
                         <?php }if($pengguna->lap_daftar_gaji_banding == 1){ ?> 
                        <li><a href="<?php echo base_url(); ?>index.php/hrd/lap_daftar_gaji_banding">Perbandingan</a></li>     
                         <?php }if($pengguna->lap_daftar_gaji_dept == 1){ ?> 
                        <li><a href="<?php echo base_url(); ?>index.php/hrd/lap_daftar_gaji_dept">Rekapitulasi</a></li>     
                         <?php }if($pengguna->lap_jam_lembur == 1){ ?> 
                        <li><a href="<?php echo base_url(); ?>index.php/hrd/lap_jam_lembur">Cetak Jam Lembur</a></li>     
                         <?php }if($pengguna->cetak_absensi == 1){ ?> 
                        <li><a href="<?php echo base_url(); ?>index.php/hrd/lap_daftar_gaji_banding/cetak_absensi">Cetak Absensi</a></li>     
                         <?php }if($pengguna->lap_hrd_potongan == 1){ ?> 
                        <li><a href="<?php echo base_url(); ?>index.php/hrd/lap_hrd_potongan">Cetak Potongan</a></li>     
                         <?php } ?>
                        </ul>
                      </li>

                    </ul>
                </li>

                <!--<li class="has-dropdown"><a href="#">Penilaian / Kenaikan</a>
                    <ul class="dropdown">
                       
                    </ul>
                </li>-->
                <li class="has-dropdown"><a href="#">Data Laporan</a>
                    <ul class="dropdown">
                       <?php if($pengguna->display_clk_umum == 1){ ?> 
                        <li><a href="<?php echo base_url(); ?>index.php/hrd/display_clk_umum">Absensi Karyawan</a></li>     
                         <?php }if($pengguna->display_clk_harian == 1){ ?> 
                        <li><a href="<?php echo base_url(); ?>index.php/hrd/display_clk_harian">Absensi Harian Karyawan</a></li>     
                         <?php }if($pengguna->display_ot_umum == 1){ ?> 
                        <li><a href="<?php echo base_url(); ?>index.php/hrd/display_ot_umum">Approval & Overtime</a></li>     
                         <?php }if($pengguna->hrd_display_cuti == 1){ ?> 
                        <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_display_cuti">Laporan Cuti</a></li>   
                        <?php }if($pengguna->hrd_display_absen == 1){ ?> 
                       <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_display_absen">Display Absen Karyawan</a></li>
                        <?php }if($pengguna->display_jabatan == 1){ ?> 
                       <li><a href="<?php echo base_url(); ?>index.php/hrd/display_jabatan">Display Data Jabatan Per-Departemen</a></li>
                        <?php } 
                        if($pengguna->hrd_manrev == 1){ ?> 
                       <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_manrev">Management Review HRD</a></li>
                        <?php } 

                        if($pengguna->user_id == 611 || $pengguna->user_id == 1 || $pengguna->user_id == 1277){ ?> 
                     <!--   <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_bypas_spl">BYPASS SPL</a></li>  -->
                        <?php } ?>
                    </ul>
                </li>
                <li class="has-dropdown"><a href="#">Kompetensi</a>
                    <ul class="dropdown">
                       <?php if($pengguna->hrd_kompetensi_master == 1){ ?> 
                        <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_kompetensi_master/master_kompetensi">Master Compensable Factor</a></li>     
                         <?php }if($pengguna->hrd_kompetensi_form_koordinator == 1){ ?> 
                        <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_kompetensi_input_koordinator/input_kompetensi_nilai">Form Penilaian</a></li>     
                         <?php }?> 
                    </ul>
                </li>
                 <li class="has-dropdown"><a href="#">Kedisiplinan</a>
                    <ul class="dropdown">
                       <?php if($pengguna->hrd_display_tdk_absen == 1){ ?> 
                       <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_display_tdk_absen">Display Performa Absensi Karyawan</a></li>
                        <?php }if($pengguna->hrd_memo == 1){ ?> 
                      <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_memo"> Memo Karyawan</a></li>
                       <?php }if($pengguna->hrd_surat == 1){ ?> 
                      <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_surat"> Surat Peringatan</a></li>
                       <?php }?> 
                    </ul>
                </li>
                 <li class="has-dropdown"><a href="#">UMUM</a>
                    <ul class="dropdown">
                         <?php if($pengguna->hrd_tugas_dept == 1){ ?> 
                            <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_tugas_dept">Penugasan Karyawan (Departemen)</a></li>
                            <?php }if($pengguna->hrd_training_internal == 1){ ?> 
                            <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_training_internal">Training Internal / Eksternal</a></li>      
                         <?php }if($pengguna->hrd_pkb == 1){ ?> 
                            <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_pkb">P K B</a></li>       
                         <?php }if($pengguna->hrd_ijin_karyawan == 1){ ?> 
                            <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_ijin_karyawan">Ijin Karyawan</a></li>      
                         <?php }?> 
                    </ul>
                </li>
<!-- poli -->
    <?php if($pengguna->hrd_jenis_sakit == 1 || $pengguna->hrd_jenis_tindakan == 1){ ?>
                <li class="has-dropdown"><a href="#">POLI</a>
                 <?php } ?>
                    <ul class="dropdown">
                      <li class="has-dropdown"><a href="#">Master</a>
                        <ul class="dropdown">
                        <?php if($pengguna->hrd_jenis_sakit == 1){ ?> 
                            <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_jenis_sakit">Jenis Sakit & Cidera</a></li>
                            <?php } if($pengguna->hrd_jenis_tindakan == 1){ ?> 
                            <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_jenis_tindakan">Jenis Tindakan</a></li>
                            <?php }if($pengguna->hrd_obat == 1){ ?> 
                            <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_obat">Obat</a></li>
                            <?php } ?>
                        </ul>
                      </li>
                          <li class="has-dropdown"><a href="#">Input Data</a>
                        <ul class="dropdown">
                        <?php if($pengguna->hrd_poli == 1){ ?> 
                             <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_poli_2">Kecelakaan Kerja</a></li>
                            <?php } ?>
                        </ul>
                      </li>
                      <!--
                         <li class="has-dropdown"><a href="#">Update Gaji</a>
                        <ul class="dropdown">
                 
                        </ul>
                      </li>
                      
                          <li class="has-dropdown"><a href="#">Laporan</a>
                        <ul class="dropdown">
          
                        </ul>
                      </li>
-->
                    </ul>
                </li>


<!--end  poli-->
                </li>
<!-- HSE -->
    <?php if($pengguna->hrd_display_absen_hse == 1 || $pengguna->hrd_display_spb_hse == 1){ ?>
                <li class="has-dropdown"><a href="#">HSE</a>
                 <?php } ?>
                    <ul class="dropdown">
                       <?php if($pengguna->hrd_display_absen_hse == 1){ ?> 
                            <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_display_absen_hse">Display Absen Karyawan 2</a></li>
                                <?php }if($pengguna->hrd_display_spb_hse == 1){ ?> 
                            <li><a href="<?php echo base_url(); ?>index.php/hrd/hrd_display_spb_hse">Display SPB (Tolak, Retur, Repair)</a></li>
                                <?php } ?>
                        </ul>
                    
                </li>
              </ul>
          </li>
        <li class="divider"></li>
        <?php } ?>
        <!--- END HSE --->
<!-- END HRD -->
       
        <?php if($pengguna->m_finance == 1 ){?>
         <li class="has-dropdown"><a href="#">FINANCES</a>
                    <ul class="dropdown">
                    <?php if( $pengguna->besi_tua_update == 1 ){?>
                        <li class="has-dropdown"><a href="#">Besi Tua</a>
                          <ul class="dropdown">
                            <li><a href="http://www.haniljayasteel.lcl/titipan/">Update Status</a></li>
                            <li><a href="http://www.haniljayasteel.lcl/titipan/index.php/harga">Update Harga</a></li>
                            <li><a href="http://www.haniljayasteel.lcl/titipan/index.php/single">Update Status Buku</a></li>
                          </ul><?php } ?>
                        </li>
                         <?php if($pengguna->doc_tracking == 1 )  {?>
                       <li><a href="<?php echo base_url(); ?>index.php/finance/track">Document Tracking Faktur</a></li>
                         <?php }if($pengguna->doc_tracking == 1 ){?>
                       <li><a href="<?php echo base_url(); ?>index.php/finance/track/monitoring_faktur">Monitoring Faktur belum jadi tagihan</a></li>
                         <?php }if($pengguna->track_surat_jalan == 1 ){?>
                       <li><a href="<?php echo base_url(); ?>index.php/finance/track_surat_jalan">Pay Tracking</a></li>
                         <?php }if($pengguna->kontrak_tagihan == 1 ){?>
                       <li><a href="<?php echo base_url(); ?>index.php/sale/kontrak_tagihan">PO Tagihan</a></li>
                         <?php }if($pengguna->monitoring_kontrak_tagihan == 1 ){?>
                       <li><a href="<?php echo base_url(); ?>index.php/sale/monitoring_kontrak_tagihan">Monitoring PO Tagihan</a></li>
                         <?php }if($pengguna->tanda_terima_dokumen == 1 ){?>
                       <li><a href="<?php echo base_url(); ?>index.php/finance/tanda_terima_dokumen">Tanda Terima Dokumen</a></li>
                         <?php } ?>
                    </ul>
                </li>
        <?php } ?>
        <?php if($pengguna->besi_tua_cetak == 1 ){ ?>
        <li><a href="http://www.haniljayasteel.lcl/titipan/index.php/bstcetak">Besi Tua Cetak</a></li>
        <?php } ?>
        </ul>


        <ul class="right">
          <li class="has-dropdown">
            <a href="#">Welcome,<b><?php echo $pengguna->nama;?></b></a>
            <ul class="dropdown">
            <?php if($pengguna->user_id == 1 || $pengguna->user_id == 610 || $pengguna->user_id == 611|| $pengguna->user_id == 1371|| $pengguna->user_id == 1370){?>
              <li><a href="<?php echo base_url(); ?>index.php/admin">Admin</a></li>
              <li><a href="<?php echo base_url(); ?>index.php/admin/admin_new">Admin (New)</a></li>
              <li><a href="<?php echo base_url(); ?>index.php/produksi/pro_his_error">Trouble System</a></li>
            <?php } ?>              
              <li><a href="#">Pengaturan</a></li>
              <li><a href="#">Request Akses</a></li>
              <li><a href="#">Bantuan</a></li>
              <li><a onclick="voluntaryLogoutAll()" href="javascript:void(0)">Keluar</a></li>
            </ul>
          </li>
        </ul>
      </section>
    </nav>
  </div>
   <?php } ?>
          <!--<span id="hitunga"></span><br>-->
                    <input type="hidden" id="ambil" name="ambil" value="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ?>">
                   
<!--
   <script src="http://192.168.0.33:1337/socket.io/socket.io.js"></script>
<script>
  var socket = io('http://192.168.0.33:1337');
  var idfg = "<?php echo date('Y-m-d g:i a'); ?>-<?php echo $pengguna->username; ?>-<?php echo $pengguna->nama; ?>";
  socket.on('news', function (data) {
    console.log(data);
  
    socket.emit('my other event', idfg);
  });
</script>-->

                   
