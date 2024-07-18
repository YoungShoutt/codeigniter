<script type="text/javascript">
	$(document).ready(function() {

//--------------------------------------------- SECTION 1 --------------------------------------------
		$('form').attr('autocomplete','off');

		$("#kode_jnskulit").focusout(function() {
			var kode_jnskulit 	= $('#kode_jnskulit').val();
			$.ajax({
            url		: '<?php echo base_url(); ?>index.php/master_jeniskulit/mst_jnskulit/cek_kode',
            method	: "POST",
            dataType	: "json",
            data		: {'kode_jnskulit' : kode_jnskulit},
				success	: function(data) {
					// console.log(data);
					if(data.status == "exist") {
						$.alert.open('Master Jenis Kulit', 'Kode Jenis Kulit <b>"' + kode_jnskulit + '"</b> sudah ada. Silahkan cek <b>View Tab</b>.', {	
							OK: "OK"
							}, function(button){
								if(button == 'OK') {
									setTimeout(function(){$("#kode_jnskulit").val("").focus();}, 1);
								} else {}
							});
					} else if(data.status == "inactive") {
						$.alert.open('Master Jenis Kulit', 'Kode Jenis Kulit <b>"' + kode_jnskulit + '"</b> sudah ada, tetapi <b>tidak aktif</b>.', {
							OK: "OK"
							}, function(button){
								if(button == 'OK') {
									setTimeout(function(){$("#kode_jnskulit").val("").focus();}, 1);
								} else {}
							});
					} else if(data.status == "none") {
					} else{}
				},
				error: function() {
					$.alert.open('Master Jenis Kulit', '<center>Koneksi eror !</center>', {
						OK: "OK",
						}, function(button) {
							if(button == 'OK') {
								location.reload();
							} else {}
					});
				}
			});
			
		});	

		$("#save").click(function() {
		// $("#form1").on('submit', (function(e) {
		// e.preventDefault();
			var data = $("#form1").serialize();

			if($("#kode_jnskulit").val() ==''){
				setTimeout(function(){$("#kode_jnskulit").focus();}, 1);
			} else if($("#nama_jnskulit").val() ==''){
				setTimeout(function(){$("#nama_jnskulit").focus();}, 1);
			} 

			$("#form1").validate({
				rules: {
					kode_jnskulit		: 'required',
					nama_jnskulit		: 'required',
				},
				comment: {
					required: true
				}
			}).form();
				if($("#form1").valid()) {
				$.ajax({
					url			: '<?php echo base_url(); ?>index.php/master_jeniskulit/mst_jnskulit/entry_data',
					method		: "POST",
					dataType		: "json",
					data			: data,
					cache			: false,
					processData	: false,
					success		: function(data) {
						if (data == "success") {
							$('#grid_tab_view').trigger('reloadGrid');
							$.alert.open('Master Jenis Kulit', '<center>Data berhasil disimpan. </center>', {
									OK : "OK"
							}, function(button) {
								if(button == 'OK') {
									$("#form1")[0].reset();
									$('#grid_tab_view').trigger('reloadGrid');
								} else {}
							});
						} else{}
					}, error: function() {
						$.alert.open('Master Jenis Kulit', '<center>Data gagal disimpan.</center>', {
							OK: "OK",
							}, function(button) {
								if(button == 'OK') {
									location.reload();
								} else {}
						});
					}
				});    
			} 
			// else{
			// 	$.alert.open('Master jnskulit','Please complete the form.');
			// }
		})

//--------------------------------------------- SECTION 2 --------------------------------------------

		$("#search_kode_jnskulit").keyup(function() {
			setTimeout(function() {
				var text = $("#search_kode_jnskulit").val();
				var postdata = $("#grid_tab_view").jqGrid('getGridParam', 'postData');
				$.extend(postdata, {
					filters: 'kode_jnskulit',
					searchField: 'kode_jnskulit',
					searchOper: 'bw',
					search_kode_jnskulit: text,
				});
				$("#grid_tab_view").jqGrid('setGridParam', {
					search: text.length > 0,
					postData: postdata
				});
				$("#grid_tab_view").trigger("reloadGrid", [{
					page: 0
				}]);
			}, 25);
		});

		$.lastSelectedRow = null;
		$("#grid_tab_view").jqGrid({
			url: '<?php echo base_url(); ?>index.php/master_jeniskulit/mst_jnskulit/grid_view',
			datatype: "json",
			height: 'auto',
			width: 800,
			shrinkToFit: false,
			rownumbers: true,
			colModel: [
				{label: 'Kode Jenis Kulit',name: 'kode', index: 'kode', key:true, editable: false, width: 200},
				{label: 'Nama Jenis Kulit',name: 'jnskulit', index: 'jnskulit', editable: true, width: 200},
				],
			editurl: "<?php echo base_url(); ?>index.php/master_jeniskulit/mst_jnskulit/edit",
			rowNum: 10,
			rowList: [10, 20, 30, 100],
			caption: "Display Master Jenis Kulit",
			viewrecords: true,
			sortname: 'kode',
			sortorder: "asc",
			pager:'pager_tab_view'
		});
		jQuery("#grid_tab_view").jqGrid('navGrid', '#pager_tab_view', {
			view: false,
			edit: false,
			add: false,
			del: false,
			search: false,
			refreshtext: 'Reload',
		});
		jQuery("#grid_tab_view").jqGrid('inlineNav', "#pager_tab_view", {
			edit: true,
			add: false,
			save: true,
			edittext: "Edit",
			savetext: "Save",
			canceltext: "Cancel",
		});

		$("#delete").click(function() {
			var gr			= jQuery("#grid_tab_view").jqGrid('getGridParam', 'selrow');
			var kode_jnskulit= $('#grid_tab_view').getCell(gr, 'kode');
			if (gr != null) {
				$.alert.open('Master Jenis Kulit', '<center>Hapus Kode jnskulit <b>"' + kode_jnskulit + '"</b> ?</center>', {
					OK: "OK",
					NO: "NO"
				}, function(button) {
					if (button == 'OK') {
						$.ajax({
							url     : '<?php echo base_url(); ?>index.php/master_jeniskulit/mst_jnskulit/edit',
							method	: 'POST',
							dataType: "json",
							data    : {
								'kode'	: kode_jnskulit,
								oper			: 'del'
							},
							success: function(data) {
								// console.log(data);
								if (data == "success") {
									$('#grid_tab_view').trigger('reloadGrid');
									$.alert.open('Master Jenis Kulit', '<center>Data berhasil dihapus.</center>', {
										OK: "OK"
									}, function(button) {
										if (button == 'OK') {
										} else {}
									});
								} else {}
							},
							error: function() {
								$.alert.open('Master Jenis Kulit', '<center>Data gagal dihapus.</center>', {
									OK: "OK"
								}, function(button) {
									if (button == 'OK') {
										location.reload();
									} else {}
								});
							}
						});
					} else {}
				});
			} else {
				$.alert.open('Master Jenis Kulit', '<center>Pilih baris yang akan dihapus.</center>', {
					OK: "OK",
				}, function(button) {

				});
			}
		});

		$("#exit1, #exit2").click(function() {
			$.alert.open('confirm', '<b>Apakah anda yakin ingin keluar?', function(button) {
				if (button == 'yes') {
					location.href='<?php echo base_url(); ?>index.php/welcome/home';
				} else if (button == 'no') {} else {}
			})
		});

//-------------------------------------------- SCRIB CLASS -------------------------------------------
		$(".dateymd").val("").datepicker({
			dateFormat: "yy-mm-dd",
			changeYear: true,
			changeMonth: true,
			onClose: function(dateText, inst) {
				$('.dateymd').focusout() //Added to remove focus from datepicker input box on selecting date
			}
		}).inputmask("y-m-d", {
			"oncomplete": function() {},
			"oncleared": function() {},
			"clearIncomplete": true
		});

		$(".datey").val("").datepicker({
			dateFormat: "yy",
			changeYear: true,
			changeMonth: true,
			onClose: function(dateText, inst) {
				$('.datey').focusout() //Added to remove focus from datepicker input box on selecting date
			}
		}).inputmask("y", {
			"oncomplete": function() {},
			"oncleared": function() {},
			"clearIncomplete": true
		});

		$(".dateymdnow").val("").datepicker({
			dateFormat: "yy-mm-dd",
			changeYear: true,
			changeMonth: true,
			onClose: function(dateText, inst) {
				$('.dateymdnow').focusout() //Added to remove focus from datepicker input box on selecting date
			}
		}).inputmask("y-m-d", {
			"oncomplete": function() {},
			"oncleared": function() {},
			"clearIncomplete": true
		}).datepicker("setDate", new Date()).change();

		$(".dateymdhm").val("").datetimepicker({
			dateFormat: "yy-mm-dd HH-mm",
			changeYear: true,
			changeMonth: true,
			onClose: function(dateText, inst) {
				$('.dateymdhm').focusout() //Added to remove focus from datepicker input box on selecting date
			}
		}).inputmask("y-m-d h-m", {
			"oncomplete": function() {},
			"oncleared": function() {},
			"clearIncomplete": true
		});

		$(".dateym").val("").datepicker({
			dateFormat: "yy-mm",
			changeYear: true,
			changeMonth: true,
			onClose: function(dateText, inst) {
				$('.dateym').focusout()//Added to remove focus from datepicker input box on selecting date
			}
		}).inputmask("y-m",{
			"oncomplete"		: function(){ }, 
			"oncleared"			: function(){ }
		});

//-------------------------------------------- END SCRIPT -------------------------------------------
	});
</script>

<div class="row">
	<div id="formx">
		<div class="row">
			<div class="twelve columns">
				<div class="ui-jqgrid-titlebar ui-widget-header ui-corner-tl ui-corner-tr ui-helper-clearfix">
					<h6>&nbsp;<img src="<?php echo base_url(); ?>images/crud/home.png">&nbsp;Master Data Jenis Kulit </h6>
				</div>
				<hr>
					<div class="section-container tabs" data-section="tabs">
						<section>
							<p id="section1" class="title" data-section-title><a href="#section1"><i>Entry Data</i></a></p>
							<div class="content" data-section-content>
								<form id="form1" action="" method="post">
									<div class="row">
										<div class="large-3 columns">
											<label class="right inline"><span class="radius secondary label">Kode Jenis Kulit <span style="color: red;font-size: 22px;">*</span> :</span></label>
										</div>
										<div class="large-2 columns">
											<input type="text" name="kode_jnskulit" id="kode_jnskulit" onBlur="javascript:{this.value = this.value.toUpperCase(); }" tabindex="1"/>
										</div>
										<div class="large-1 columns">
										</div>
									</div>
									<div class="row">
										<div class="large-3 columns">
											<label class="right inline"><span class="radius secondary label">Nama Jenis Kulit <span style="color: red;font-size: 22px;">*</span> :</span></label>
										</div>
										<div class="large-4 columns">
											<input type="text" name="nama_jnskulit" id="nama_jnskulit" tabindex="2"/>
										</div>
										<div class="large-1 columns">
										</div>
									</div>
									<div class="row">
										<div class="large-2 columns">
											<label></label>
										</div>
										<div class="large-10 columns">
											<br>
											<a href="javascript:void(0);" id="save" class="btnx" style="padding: 9px 17px; font-size: 14px;" tabindex="3">Simpan</a>
											<a href="javascript:void(0);" id="exit1" class="btnx" style="padding: 9px 17px; font-size: 14px;" tabindex="4">Keluar</a>
										</div>
									</div>
								</form>
							</div>
						</section>
						<section>
							<p id="section2" class="title" data-section-title><a href="#section2"><i>View</i></a></p>
							<div class="content" data-section-content>
								<form id="form2">
									<div class="row">
										<div class="large-12 columns">
											<div class="large-4 columns">
												<label class="right inline"><span class="radius secondary label">Search Kode atau Nama Jenis Kulit : </label>
											</div>
											<div class="large-3 columns">
												<input type="text" id="search_kode_jnskulit" class='iblue' name="search_kode_jnskulit" tabindex="1"/>
											</div>
											<hr>
											<div class="large-1 columns"></div>
										</div>
									</div>
									<br>
									<div class="row">	
										<div class="large-12 columns">
											<center>
												<table id="grid_tab_view"></table>
												<div id="pager_tab_view"></div>
											</center>
										</div>
									</div>
									<br><hr>
									<div class="row">
										<div class="large-2 columns">
											<label></label>
										</div>
										<div class="large-10 columns">
											<br>
											<a href="javascript:void(0);" id="delete" class="btnx" style="padding: 9px 17px; font-size: 14px;">Hapus</a>
											<a href="javascript:void(0);" id="exit2" class="btnx" style="padding: 9px 17px; font-size: 14px;">Keluar</a>										</div>
										</div>
									</div>
								</form>
								</div>
						</section>
					</div>
			</div>
		</div>
	</div>
</div>


