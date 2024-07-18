<script type="text/javascript">
	$(document).ready(function() {
		$('form').attr('autocomplete', 'off');
		jQuery("#save").click(function() {
			$("#form_2").validate({
				rules: {
					nik: 'required',
					nama: 'required',
					username: 'required',
					pass: 'required',
				}
			}).form();
			var data2 = $('#form_2').serialize();
			if ($("#form_2").valid()) {
				$.ajax({
					type: 'post',
					dataType: "json",
					url: '<?php echo base_url(); ?>index.php/admin/admin_new/tambah_user',
					data: $('#form_2').serialize(),
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
		$("#listuser").jqGrid({
			url: '<?php echo base_url(); ?>index.php/admin/admin_new/griduser',
			datatype: "JSON",
			width: 980,
			rownumbers: true,
			autowidth: true,
			shrinkToFit: false,
			autowidth: false,
			colModel: [{
					label: 'NIK',
					name: 'nik',
					index: 'nik',
					width: 100,
					editable: true
				},
				{
					label: 'User Id',
					name: 'user_id',
					index: 'user_id',
					key: true,
					width: 90,
					editable: true
				},
				{
					label: 'Username',
					name: 'username',
					index: 'username',
					width: 120,
					editable: true
				},
				{
					label: 'Password',
					name: 'password',
					index: 'password',
					width: 300,
					editable: true
				},
				{
					label: 'Status',
					name: 'status',
					index: 'status',
					width: 100,
					editable: true
				},
				{
					label: 'Last Login',
					name: 'last_Login',
					index: 'last_Login',
					width: 100,
					editable: true
				},
				{
					label: 'Last Logout',
					name: 'last_Logout',
					index: 'last_Logout',
					width: 100,
					editable: true
				},
			],
			rowNum: 10,
			search: true,
			rowList: [10, 20, 30],
			pager: '#pageruser',
			viewrecords: true,
			sortorder: "asc",
			caption: "User",
		});
		jQuery("#listuser").jqGrid('navGrid', "#pageruser", {
			edit: false,
			add: false,
			del: false,
			search: false,
			refresh: false
		});
		$("#listuser").navButtonAdd("#pageruser", {
			caption: "Add New",
			title: "Click here to add Add New",
			buttonicon: "ui-icon-plusthick",
			onClickButton: function() {
				$('#firstModal').foundation('reveal', 'open');
			},
			position: "first"
		});
		$("#listuser").navButtonAdd("#pageruser", {
			caption: "Add Menu Privilege",
			title: "Click here Menu Privilege",
			buttonicon: "ui-icon-plusthick",
			onClickButton: function() {
				var row_id = jQuery("#listuser").jqGrid('getGridParam', 'selrow');
				window.open('<?php echo base_url(); ?>index.php/admin/admin_new/menu?id=' + $('#listuser').jqGrid('getCell', row_id, 'user_id') + '&nama=' + $('#listuser').jqGrid('getCell', row_id, 'username'));

			},
			position: "last"
		});
		$("#listuser").navButtonAdd("#pageruser", {
			caption: "Delete",
			title: "Click here to Delete",
			buttonicon: "ui-icon-plusthick",
			onClickButton: function() {
				$.alert.open('User', '<center>Delete User?</center>', {
					DELETE: "DELETE"
				}, function(button) {
					if (button == 'DELETE') {
						var gr = jQuery("#listuser").jqGrid('getGridParam', 'selrow');
						var id = $('#listuser').getCell(gr, 'user_id');
						$.ajax({
							url: '<?php echo base_url(); ?>index.php/admin/admin_new/delete',
							data: {
								id: id
							},
							datatype: "JSON",
							type: "POST",
							success: function(msg) {
								$("#listuser").trigger("reloadGrid", [{
									page: 1
								}]);
							}
						});
					} else {}
				});

			},
			position: "last"
		});
		$("#searchcode").keyup(function() {
			setTimeout(function() {
				var text = $("#searchcode").val();
				var postdata = $("#listuser").jqGrid('getGridParam', 'postData');
				$.extend(postdata, {
					searchcode: text,
				});
				$("#listuser").jqGrid('setGridParam', {
					search: text.length > 0,
					postData: postdata
				});
				$("#listuser").trigger("reloadGrid", [{
					page: 1
				}]);
			}, 25);
		});
	});
</script>
<div class="row">
	<div id="formxx">
		<div class="row">
			<div class="large-12 columns">
				<div class="ui-widget-header">
					<h6>&nbsp;<img src="<?php echo base_url(); ?>stylesheets/Home_t.ico" width="25px;">&nbsp;MANAJEMEN USER</h6>
				</div>
				<hr>
			</div>
		</div>
		<form id="form1">
			<div class="row">

				<div class="large-2 columns">
					<label class="right inline"><span class="radius secondary label">NIK :</label>
				</div>
				<div class="large-3 columns">
					<input type="text" name="searchcode" id="searchcode">
				</div>
				<div class="large-3 columns">
				</div>
			</div>
			<div class="row">
				<div class="large-12 columns">
					<center>
						<table id="listuser"></table>
					</center>
					<div id="pageruser"></div>
					<br>
					<hr>
				</div>
			</div>
	</div>
</div>
</div>

<div id="firstModal" class="reveal-modal medium" data-reveal aria-labelledby="firstModalTitle" aria-hidden="true" role="dialog">
	<div id="formx">
		<form id="form_2">
		</form>
		<form id="form_2">
			<div class="small-12 columns">
				<div class="row">
					<div class="small-3 columns">
						<label for="itemCode" class="right inline">NIK</label>
					</div>
					<div class="small-3 columns">
						<input type="text" id="nik" name="nik">
					</div>
					<div class="small-6 columns">
						<label></label>
					</div>
				</div>
				<div class="row">
					<div class="small-3 columns">
						<label for="itemCode" class="right inline">Name</label>
					</div>
					<div class="small-3 columns">
						<input type="text" id="nama" name="nama" style="background:#DCDCDC" readonly>
					</div>
					<div class="small-6 columns">
						<label></label>
					</div>
				</div>
				<div class="row">
					<div class="small-3 columns">
						<label for="itemCode" class="right inline">Position</label>
					</div>
					<div class="small-3 columns">
						<input type="text" id="jabatan" name="jabatan" style="background:#DCDCDC" readonly>
					</div>
					<div class="small-6 columns">
						<label></label>
					</div>
				</div>
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
						<input type="text" id="pass" name="pass">
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
					</div>
				</div>
			</div>
		</form>
	</div>
</div>