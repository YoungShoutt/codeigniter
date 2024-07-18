<script>
    $(document).ready(function() {
        $("#username").val("<?= $username ?>");
        jQuery("#save").click(function() {
            var new_pass = $("#new_password").val();
            var re_pass = $("#re_password").val();
            if (new_pass == re_pass) {
                $("#newpass").validate({
                    rules: {
                        username: 'required',
                        password: 'required',
                        new_password: 'required',
                        re_password: 'required',

                    },
                    comment: {
                        required: true
                    },

                    messages: {
                        username: ' Field Cannot Be empty',
                        password: 'Field Cannot Be empty',
                        new_password: 'Field Cannot Be empty',
                        re_password: 'Field Cannot Be empty',
                    },
                }).form();
                var data2 = $('#newpass').serialize();
                if ($("#newpass").valid()) {
                    $.ajax({
                        url: "<?php base_url(); ?>GantiPassword/newpass",
                        type: "POST",
                        data: data2,
                        dataType: "JSON",
                        success: function(msg) {
                            console.log(msg.status);
                            if (msg.status == 'wrongpass') {
                                $.alert.open('Change Password', '<center>Wrong Password Or Username</center>', {
                                    OK: "OK"
                                }, function(button) {
                                    if (button == 'OK') {
                                        $('#newpass')[0].reset();
                                    } else {}
                                });
                            } else if (msg.status == 'nouser') {
                                $.alert.open('Change Password', '<center>Wrong Password Or Username </center>', {
                                    OK: "OK"
                                }, function(button) {
                                    if (button == 'OK') {
                                        $('#newpass')[0].reset();
                                    } else {}
                                });
                            } else if (msg.status == 'success') {
                                $.alert.open('Change Password', '<center>Success Change</center>', {
                                    OK: "OK"
                                }, function(button) {
                                    if (button == 'OK') {
                                        $('#newpass')[0].reset();
                                    } else {}
                                });
                            }
                        },
                        error: function() {
                            $.alert.open('Change Password', '<center>Failed save</center>', {
                                OK: "OK"
                            }, function(button) {
                                if (button == 'OK') {
                                    location.reload();
                                } else {}
                            });
                        }
                    });
                }
            } else {
                $.alert.open('Change Password', '<center>False Re-Password</center>', {
                    OK: "OK"
                }, function(button) {
                    if (button == 'OK') {} else {}
                });
            }
        });


    });
</script>
<div class="row">
    <div id="formx">
        <div class="ui-jqgrid-titlebar ui-widget-header ui-corner-tl ui-corner-tr ui-helper-clearfix">
            <h6>&nbsp;<img src="<?php echo base_url(); ?>images/crud/home.png">&nbsp;Ganti Password </h6>
        </div>
        <br>
        <form id="newpass">
            <div class="row">
                <div class="small-12 columns">
                    <div class="row">
                        <div class="small-3 columns">
                            <label for="itemCode" class="right inline">Username</label>
                        </div>
                        <div class="small-3 columns">
                            <input type="text" id="username" name="username">
                        </div>
                        <div class="small-6 columns">
                            <label></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-3 columns">
                            <label for="itemCode" class="right inline">Password</label>
                        </div>
                        <div class="small-3 columns">
                            <input type="password" id="password" name="password">
                        </div>
                        <div class="small-6 columns">
                            <label></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-3 columns">
                            <label for="itemCode" class="right inline"><b>Reset Password</b></label>
                        </div>
                        <div class="small-9 columns">
                            <label></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-3 columns">
                            <label for="itemCode" class="right inline">New Password</label>
                        </div>
                        <div class="small-3 columns">
                            <input type="password" id="new_password" name="new_password">
                        </div>
                        <div class="small-6 columns">
                            <label></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-3 columns">
                            <label for="itemCode" class="right inline">re-Password</label>
                        </div>
                        <div class="small-3 columns">
                            <input type="password" id="re_password" name="re_password">
                        </div>
                        <div class="small-6 columns">
                            <label></label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="small-3 columns"></div>
                        <div class="small-9 columns">
                            <a href="javascript:void(0)" id="save" class="btnx" style="padding: 9px 17px; font-size: 14px; ">Save</a>
                            <a href="javascript:void(0)" id="inactive" class="btnx" style="padding: 9px 17px; font-size: 14px; display: none;">Save</a>
                            <a href="<?php echo base_url(); ?>" id="save" class="btnx" style="padding: 9px 17px; font-size: 14px; ">Exit</a>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>