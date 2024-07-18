<script type="text/javascript">
    $(document).ready(function() {
        jQuery("#datelog").datepicker({
            dateFormat: "yy-mm-dd"
        });
        $('form').attr('autocomplete', 'off');
        $("#save").click(function() {
            $("#form_dialog").validate({
                rules: {
                    nik: 'required',
                    nama: 'required',
                    username: 'required',
                    pass: 'required',
                },
                comment: {
                    required: true
                },

                messages: {
                    nik: ' Field Cannot Be empty',
                    nama: ' Field Cannot Be empty',
                    username: ' Field Cannot Be empty',
                    pass: ' Field Cannot Be empty',
                },
            }).form();
            var data2 = $('#form_dialog').serialize();
            if ($("#form_dialog").valid()) {
                $.ajax({
                    type: 'post',
                    dataType: "json",
                    url: '<?php echo base_url(); ?>index.php/admin/admin_new/tambah_user',
                    // data: 'kdChemical='+kdChemical+'&nmChemical='+nmChemical,
                    data: data2,
                    success: function(data) {
                        if (data != null) {
                            $.alert.open('Admin', '<center>Data Successfully Saved </center>', {
                                OK: "OK"
                            }, function(button) {
                                if (button == 'OK') {
                                    location.reload();
                                } else {}
                            });
                        } else {}
                    },
                    error: function(data) {
                        console.log(data);
                        $.alert.open('Admin', '<center>Failed</center>', {
                            OK: "OK"
                        }, function(button) {
                            if (button == 'OK') {
                                $('#form1')[0].reset();
                            } else {}
                        });
                    }
                });
            }
        });
        $("#username").focusout(function(e) {
            var username = $("#username").val();
            var nik = $("#nik").val();
            $.ajax({
                url: '<?php echo base_url(); ?>index.php/admin/admin_new/get_user',
                datatype: "JSON",
                type: "POST",
                data: {
                    username: username,
                    nik: nik
                },
                // processData: false,
                success: function(data) {
                    console.log(data);
                    $("#save").show();
                    $("#inactive").hide();
                    if (data != []) {
                        $("#save").hide();
                        $("#inactive").show();
                    } else {
                        $("#save").show();
                        $("#inactive").hide();
                    }
                }
            });
        });
        $("#nik").focusout(function(e) {
            var username = $("#username").val();
            var nik = $("#nik").val();
            $.ajax({
                url: '<?php echo base_url(); ?>index.php/admin/admin_new/getnik',
                datatype: "JSON",
                type: "POST",
                data: {
                    username: username,
                    nik: nik
                },
                // processData: false,
                success: function(data) {
                    console.log(data);
                    $("#save").show();
                    $("#inactive").hide();
                    if (data != []) {
                        $("#save").hide();
                        $("#inactive").show();
                    } else {
                        $("#save").show();
                        $("#inactive").hide();
                    }
                }
            });
        });
        $("#nik").keyup(function(e) {
            var nik = $("#nik").val();
            $.ajax({
                url: '<?php echo base_url(); ?>index.php/admin/admin_new/get_nik',
                data: {
                    nik: nik
                },
                datatype: "JSON",
                type: "POST",
                // processData: false,
                success: function(msg) {
                    obj = JSON.parse(msg);
                    console.log(obj);
                    if (obj.length == 0) {
                        $('#nama').val("");
                        $('#jabatan').val("");
                    } else {
                        $('#nama').val(obj[0].nama);
                        $('#jabatan').val(obj[0].jabatan);
                    }
                }
            });
        });

        jQuery("#inactive").click(function() {
            $("#inactive").notify(
                "Username Or NIK Is Exist", {
                    position: "right"
                }
            );
        });
        $(".date").inputmask("yyyy-mm-dd");
        $('.date').datepicker({
            dateFormat: 'yy-mm-dd'
        });
        $('#user').select2({
            placeholder: 'Select User',
            allowClear: true,
            theme: 'classic',
            width: "resolve",
            ajax: {
                url: '<?php echo base_url("index.php/admin/log_aktivitas/find") ?>',
                dataType: 'json',
                data: function(params) {
                    var query = {
                        search: params.term,
                        table: 't_workshop',
                        field1: 'WorkshopCode',
                        field2: 'CONCAT(WorkshopCode," - ",WorkshopName)',
                        page: params.page || 1,
                        type: 'public'
                    }
                    return query;
                },
                processResults: function(data, params) {
                    params.page = params.page || 1;
                    console.log(data.count_filtered);
                    return {
                        results: data.results,
                        pagination: {
                            more: (params.page * 10) < data.count_filtered
                        }
                    }
                }
            }
        });

        $("#listlog").jqGrid({
            url: '<?php echo base_url(); ?>index.php/admin/log_aktivitas/gridlog',
            datatype: "JSON",
            width: 850,
            height: "100%",
            rownumbers: true,
            autowidth: true,
            shrinkToFit: false,
            autowidth: false,
            colModel: [{
                    label: 'Id',
                    name: 'id',
                    index: 'id',
                    width: 70,

                    key: true,
                },
                {
                    label: 'Username',
                    name: 'username',
                    index: 'username',
                    width: 120,
                },
                {
                    label: 'Name',
                    name: 'name',
                    index: 'name',
                    width: 120,
                },
                {
                    label: 'Type',
                    name: 'type',
                    index: 'type',
                    width: 100,
                },
                {
                    label: 'Log Activity',
                    name: 'log_activity',
                    index: 'log_activity',
                    width: 245,
                },
                {
                    label: 'Datetime Activity',
                    name: 'datetime',
                    index: 'datetime',
                    width: 150,
                },
                {
                    label: 'IP Address',
                    name: 'ipaddress',
                    index: 'ipaddress',
                    width: 150,
                },
            ],
            rowNum: 10,
            search: true,
            rowList: [10,25, 50, 75],
            pager: '#pagerlog',
            viewrecords: true,
            sortorder: "asc",
            caption: "Log Activity",
        });
        jQuery("#listlog").jqGrid('navGrid', "#pagerlog", {
            edit: false,
            add: false,
            del: false,
            search: false,
            refresh: true,
            refreshtext: 'Reload',
        });
        $("#listlog").navButtonAdd("#pagerlog", {
            caption: "Print Progress Entry",
            title: "Click here to Print",
            buttonicon: "ui-icon-plusthick",
            onClickButton: function() {
                $('#print_log').foundation('reveal', 'open');
            }
        });
        $("#datelog").change(function() {
            setTimeout(function() {
                var text = $("#datelog").val();
                var postdata = $("#listlog").jqGrid('getGridParam', 'postData');
                $.extend(postdata, {
                    search_code: text,
                });
                $("#listlog").jqGrid('setGridParam', {
                    search: text.length > 0,
                    postData: postdata
                });
                $("#listlog").trigger("reloadGrid", [{
                    page: 1
                }]);
            }, 25);
        });
        $("#s_activity").keyup(function() {
            setTimeout(function() {
                var text = $("#s_activity").val();
                var postdata = $("#listlog").jqGrid('getGridParam', 'postData');
                $.extend(postdata, {
                    s_activity: text,
                });
                $("#listlog").jqGrid('setGridParam', {
                    search: text.length > 0,
                    postData: postdata
                });
                $("#listlog").trigger("reloadGrid", [{
                    page: 1
                }]);
            }, 25);
        });
        $("#s_username").keyup(function() {
            setTimeout(function() {
                var text = $("#s_username").val();
                var postdata = $("#listlog").jqGrid('getGridParam', 'postData');
                $.extend(postdata, {
                    s_username: text,
                });
                $("#listlog").jqGrid('setGridParam', {
                    search: text.length > 0,
                    postData: postdata
                });
                $("#listlog").trigger("reloadGrid", [{
                    page: 1
                }]);
            }, 25);
        });
        $("#print_user").click(function() {
            if ($("#user").val() != '' && $("#date_from").val() != '' && $("#date_to").val() != '') {
                window.open("<?php echo base_url(); ?>index.php/admin/log_aktivitas/export?user=" + $("#user").val()+'&date_from=' + $("#date_from").val()+'&date_to=' + $("#date_to").val() );
            } else {}
        });

    });
</script>
<div class="row">
    <div id="formxx">
        <div class="row">
            <div class="large-12 columns">
                <div class="ui-widget-header">
                    <h6>&nbsp;<img src="<?php echo base_url(); ?>stylesheets/Home_t.ico" width="25px;">&nbsp;Log Activity</h6>
                </div>
                <hr>
            </div>
        </div>
        <form id="form1" action="" method="post">
            <div class="row">
                <div class="large-2 columns">
                    <label class="right inline"><span class="radius secondary label">Date Log :</label>
                </div>
                <div class="large-1 columns">
                    <input type="text" name="datelog" id="datelog">
                </div>
                <div class="large-2 columns">
                    <label class="right inline"><span class="radius secondary label">Search Activity :</label>
                </div>
                <div class="large-2 columns">
                    <input type="text" name="s_activity" id="s_activity">
                </div>
                <div class="large-2 columns">
                    <label class="right inline"><span class="radius secondary label">Search Username :</label>
                </div>
                <div class="large-2 columns">
                    <input type="text" name="s_username" id="s_username">
                </div>
                <div class="large-1 columns">
                </div>
            </div>
            <div class="row">
                <div class="large-12 columns">
                    <center>
                        <table id="listlog"></table>
                    </center>
                    <div id="pagerlog"></div>
                    <br>
                    <hr>
                </div>
            </div>
            <br>
        </form>
    </div>
</div>

</div>
<div id="print_log" class="reveal-modal medium" style="display: none" data-reveal aria-labelledby="firstModalTitle" aria-hidden="true" role="dialog">
      <div id="formx">
         <form id="form_printlog">
            <h4>
               <center>Print Log Activity</center>
            </h4>
            <div class="row">
               <div class="large-12 columns">
                  <div class="row">
                  <div class="large-2 columns">
                        <label for="" class="right inline">Date Activity :</label>
                     </div>
                     <div class="large-2 columns">
                        <label for="" class="right inline">Date From :</label>
                     </div>
                     <div class="large-2 columns">
                        <input type="text" id="date_from" name="date_from" class="date" >
                     </div>
                     <div class="large-6 columns"></div>
                  </div>
                  <div class="row">
                     <div class="large-2 columns">
                        <label for="" class="right inline"></label>
                     </div>
                     <div class="large-2 columns">
                        <label for="" class="right inline">Date To :</label>
                     </div>
                     <div class="large-2 columns">
                        <input type="text" id="date_to" name="date_to" class="date" >
                     </div>
                     <div class="large-6 columns"></div>
                  </div>
                  <div class="row">
                     <div class="large-2 columns">
                        <label for="" class="right inline">User :</label>
                     </div>
                     <div class="large-4 columns">
                        <select name="user" id="user" style="width:100%;" class="select2"></select>
                     </div>
                     <div class="large-6 columns"></div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="large-3 columns"></div>
                     <div class="large-9 columns">
                        <!-- <a href="javascript:void(0)" id="save_modal" class="btnx" style="padding: 9px 17px; font-size: 14px; ">Save Tax</a> -->
                        <a href="javascript:void(0)" id="print_user" class="btnx" style="padding: 9px 17px; font-size: 14px; ">Print</a>
                        <a href="javascript:void(0)" id="exit_user" class="btnx" style="padding: 9px 17px; font-size: 14px;">Exit</a>
                     </div>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </div>