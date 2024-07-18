<script type="text/javascript">
	$(document).ready(function() {

		//--------------------------------------------- SECTION 1 --------------------------------------------
		$('form').attr('autocomplete', 'off');

		$("#kode_desa").focusout(function() {
			var kode_desa = $('#kode_desa').val();
			$.ajax({
				url: '<?php echo base_url(); ?>index.php/desa/mst_desa/cek_kode',
				method: "POST",
				dataType: "json",
				data: {
					'kode_desa': kode_desa
				},
				success: function(data) {
					// console.log(data);
					if (data.status == "exist") {
						$.alert.open('Master desa', 'Kode desa <b>"' + kode_desa + '"</b> sudah ada. Silahkan cek <b>View Tab</b>.', {
							OK: "OK"
						}, function(button) {
							if (button == 'OK') {
								setTimeout(function() {
									$("#kode_desa").val("").focus();
								}, 1);
							} else {}
						});
					} else if (data.status == "inactive") {
						$.alert.open('Master desa', 'Kode desa <b>"' + kode_desa + '"</b> sudah ada, tetapi <b>tidak aktif</b>.', {
							OK: "OK"
						}, function(button) {
							if (button == 'OK') {
								setTimeout(function() {
									$("#kode_desa").val("").focus();
								}, 1);
							} else {}
						});
					} else if (data.status == "none") {} else {}
				},
				error: function() {
					$.alert.open('Master desa', '<center>Koneksi eror !</center>', {
						OK: "OK",
					}, function(button) {
						if (button == 'OK') {
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

			if ($("#select_pd_provinsi").val() == '') {
				setTimeout(function() {
					$("#select_pd_provinsi").focus();
				}, 1);
			} else if ($("#select_pd_kabupaten").val() == '') {
				setTimeout(function() {
					$("#select_pd_kabupaten").focus();
				}, 1);
			} else if ($("#select_pd_kecamatan").val() == '') {
				setTimeout(function() {
					$("#select_pd_kecamatan").focus();
				}, 1);
			} else if ($("#nama_desa").val() == '') {
				setTimeout(function() {
					$("#nama_desa").focus();
				}, 1);
			} else if ($("#kode_desa").val() == '') {
				setTimeout(function() {
					$("#kode_desa").focus();
				}, 1);
			}

			$("#form1").validate({
				rules: {
					kode_desa: 'required',
					nama_desa: 'required',
					select_pd_provinsi: 'required',
					select_pd_kabupaten: 'required',
					select_pd_kecamatan: 'required',
				},
				comment: {
					required: true
				}
			}).form();
			if ($("#form1").valid()) {
				$.ajax({
					url: '<?php echo base_url(); ?>index.php/desa/mst_desa/entry_data',
					method: "POST",
					dataType: "json",
					data: data,
					cache: false,
					processData: false,
					success: function(data) {
						if (data == "success") {
							$('#grid_tab_view').trigger('reloadGrid');
							$.alert.open('Master desa', '<center>Data berhasil disimpan. </center>', {
								OK: "OK"
							}, function(button) {
								if (button == 'OK') {
									$("#form1")[0].reset();
									$('#grid_tab_view').trigger('reloadGrid');
								} else {}
							});
						} else {}
					},
					error: function() {
						$.alert.open('Master desa', '<center>Data gagal disimpan.</center>', {
							OK: "OK",
						}, function(button) {
							if (button == 'OK') {
								location.reload();
							} else {}
						});
					}
				});
			}
			// else{
			// 	$.alert.open('Master desa','Please complete the form.');
			// }
		})

		$.lastSelectedRow = null;
		$("#grid_detail_item").jqGrid({
			// url: '<?php echo base_url(); ?>index.php/contoh/cwo/grid_detail_item',
			datatype: 'json',
			// data: mydata,
			height: 'auto',
			width: 900,
			shrinkToFit: false,
			// mtype: "GET",
			rownumbers: true,
			// enabletoolstips: true,
			colModel: [{
					label: 'Lastupdate',
					name: 'lastupdate',
					index: 'lastupdate',
					editable: false,
					width: 100,
					align: "right",
					hidden: true,
					key: true
				},
				{
					label: 'Kode Provinsi',
					name: 'select_pd_provinsi',
					index: 'select_pd_provinsi',
					editable: true,
					width: 150
				},
				{
					label: 'Kode Kabupaten',
					name: 'select_pd_kabupaten',
					index: 'select_pd_kabupaten',
					editable: true,
					width: 150
				},
				{
					label: 'Kode Kecamatan',
					name: 'select_pd_kecamatan',
					index: 'select_pd_kecamatan',
					editable: true,
					width: 150
				},
			],
			rowNum: 10,
			rowList: [10, 20, 30, 100],
			caption: "Detail Item",
			viewrecords: true,
			sortname: 'kode_desa',
			sortorder: "asc",
			pager: 'pager_detail_item',
			beforeSelectRow: function(rowid) {
				if ($("#grid_detail_item").jqGrid("getGridParam", "selrow") === rowid) {
					$("#grid_detail_item").jqGrid("resetSelection");
				} else {
					return true;
				}
			}
			// 'cellEdit': true,
			// 'cellsubmit' : 'clientArray',
			// editurl: 'clientArray'
		});

		$('#select_pd_provinsi').select2({
			placeholder: 'Cari Provinsi',
			allowClear: true,
			theme: 'classic',
			width: "100%",
			ajax: {
				url: '<?php echo base_url("index.php/desa/mst_desa/find_pd_provinsi") ?>',
				dataType: 'json',
				data: function(params) {
					var query = {
						search: params.term,
						page: params.page || 1
					}
					return query;
				},
				processResults: function(data, params) {
					params.page = params.page || 1;
					// console.log(data.count_filtered);
					return {
						results: data.results,
						pagination: {
							more: (params.page * 10) < data.count_filtered
						}
					}
				}
			}
		}).on('change', function(e) {
			var select_pd_provinsi = $("#select_pd_provinsi").val();
			$('#select_pd_kabupaten').html('')
			$.ajax({
				url: '<?php echo base_url(); ?>index.php/desa/mst_desa/find_pd_provinsi_detail',
				method: "POST",
				dataType: "json",
				data: {
					'select_pd_provinsi': select_pd_provinsi
				},
				success: function(data) {
					$("#select_pd_kabupaten").val(data[0].kdkab).focusout();
				}
			});
			$.ajax({
				url: '<?php echo base_url(); ?>index.php/desa/mst_desa/find_pd_kabupaten_by_prov_data',
				method: "POST",
				dataType: "json",
				data: {
					'select_pd_provinsi': select_pd_provinsi
				},
				success: function(data) {
					// console.log(data)
					// $("#select_pd_kabupaten").val(data.results[0]).focusout();
					$.each(data.results, function(index, item) {
						$('#select_pd_kabupaten').append($('<option>', {
							value: item.id,
							text: item.text
						}));
					});
					$('#select_pd_kabupaten').val(data.results[0].id).trigger('change');
				}
			});
		}).on('select2:clearing', function(e) {
			$('#select_pd_provinsi').val(null).trigger('change');
			$("#select_pd_kabupaten").val("");
		});

		jQuery("#grid_detail_item").jqGrid('navGrid', "#pager_detail_item", {
			view: false,
			edit: false,
			add: false,
			del: false,
			search: false,
			refreshtext: 'Reload',
		});
		jQuery("#grid_detail_item").jqGrid('inlineNav', "#pager_detail_item", {
			edit: false,
			add: false,
			save: false,
			cancel: false,
			edittext: "Edit ",
			savetext: "Save",
			canceltext: "Cancel",
		});


		$('#select_pd_kabupaten').select2({
			placeholder: 'Cari Kabupaten',
			allowClear: true,
			theme: 'classic',
			width: "100%",

		}).on('change', function(e) {
			var select_pd_kabupaten = $("#select_pd_kabupaten").val();
			$('#select_pd_kecamatan').html('')
			$.ajax({
				url: '<?php echo base_url(); ?>index.php/desa/mst_desa/find_pd_kabupaten_detail',
				method: "POST",
				dataType: "json",
				data: {
					'select_pd_kabupaten': select_pd_kabupaten
				},
				success: function(data) {
					$("#select_pd_kecamatan").val(data[0].kdkec).focusout();
				}
			});
			$.ajax({
				url: '<?php echo base_url(); ?>index.php/desa/mst_desa/find_pd_kecamatan_by_kab_data',
				method: "POST",
				dataType: "json",
				data: {
					'select_pd_kabupaten': select_pd_kabupaten
				},
				success: function(data) {
					$.each(data.results, function(index, item) {
						$('#select_pd_kecamatan').append($('<option>', {
							value: item.id,
							text: item.text
						}));
					});
				}
			});
		}).on('select2:clearing', function(e) {
			$('#select_pd_kabupaten').val(null).trigger('change');
			$("#select_pd_kecamatan").val("");
		});

		jQuery("#grid_detail_item").jqGrid('navGrid', "#pager_detail_item", {
			view: false,
			edit: false,
			add: false,
			del: false,
			search: false,
			refreshtext: 'Reload',
		});
		jQuery("#grid_detail_item").jqGrid('inlineNav', "#pager_detail_item", {
			edit: false,
			add: false,
			save: false,
			cancel: false,
			edittext: "Edit ",
			savetext: "Save",
			canceltext: "Cancel",
		});

		$('#select_pd_kecamatan').select2({
			placeholder: 'Cari Kecamatan',
			allowClear: true,
			theme: 'classic',
			width: "100%",

		}).on('change', function(e) {
			var select_pd_kecamatan = $("#select_pd_kecamatan").val();
			$.ajax({
				url: '<?php echo base_url(); ?>index.php/desa/mst_desa/find_pd_kecamatan_detail',
				method: "POST",
				dataType: "json",
				data: {
					'select_pd_kecamatan': select_pd_kecamatan
				}
			});
		}).on('select2:clearing', function(e) {
			$('#select_pd_kecamatan').val(null).trigger('change');
		});

		jQuery("#grid_detail_item").jqGrid('navGrid', "#pager_detail_item", {
			view: false,
			edit: false,
			add: false,
			del: false,
			search: false,
			refreshtext: 'Reload',
		});
		jQuery("#grid_detail_item").jqGrid('inlineNav', "#pager_detail_item", {
			edit: false,
			add: false,
			save: false,
			cancel: false,
			edittext: "Edit ",
			savetext: "Save",
			canceltext: "Cancel",
		});


		//--------------------------------------------- SECTION 2 --------------------------------------------

		$("#search_kode_desa").keyup(function() {
			setTimeout(function() {
				var text = $("#search_kode_desa").val();
				var postdata = $("#grid_tab_view").jqGrid('getGridParam', 'postData');
				$.extend(postdata, {
					filters: 'kode_desa',
					searchField: 'kode_desa',
					searchOper: 'bw',
					search_kode_desa: text,
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
			url: '<?php echo base_url(); ?>index.php/desa/mst_desa/grid_view',
			datatype: "json",
			height: 'auto',
			width: 800,
			shrinkToFit: false,
			rownumbers: true,
			colModel: [{
					label: 'Kode Provinsi',
					name: 'select_pd_provinsi',
					index: 'select_pd_provinsi',
					editable: false,
					width: 150
				},
				{
					label: 'Kode Kabupaten',
					name: 'select_pd_kabupaten',
					index: 'select_pd_kabupaten',
					editable: false,
					width: 150
				},
				{
					label: 'Kode Kecamatan',
					name: 'select_pd_kecamatan',
					index: 'select_pd_kecamatan',
					editable: false,
					width: 150
				},
				{
					label: 'Kode desa',
					name: 'kddes',
					index: 'kddes',
					key: true,
					editable: false,
					width: 200
				},
				{
					label: 'Nama desa',
					name: 'nmkec',
					index: 'nmkec',
					editable: true,
					width: 200
				},
			],
			editurl: "<?php echo base_url(); ?>index.php/desa/mst_desa/edit",
			rowNum: 10,
			rowList: [10, 20, 30, 100],
			caption: "Display Master desa",
			viewrecords: true,
			sortname: 'kddes',
			sortorder: "asc",
			pager: 'pager_tab_view'
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
			var gr = jQuery("#grid_tab_view").jqGrid('getGridParam', 'selrow');
			var kode_desa = $('#grid_tab_view').getCell(gr, 'kddes');
			if (gr != null) {
				$.alert.open('Master desa', '<center>Hapus Kode desa <b>"' + kode_desa + '"</b> ?</center>', {
					OK: "OK",
					NO: "NO"
				}, function(button) {
					if (button == 'OK') {
						$.ajax({
							url: '<?php echo base_url(); ?>index.php/desa/mst_desa/edit',
							method: 'POST',
							dataType: "json",
							data: {
								'kddes': kode_desa,
								oper: 'del'
							},
							success: function(data) {
								// console.log(data);
								if (data == "success") {
									$('#grid_tab_view').trigger('reloadGrid');
									$.alert.open('Master desa', '<center>Data berhasil dihapus.</center>', {
										OK: "OK"
									}, function(button) {
										if (button == 'OK') {} else {}
									});
								} else {}
							},
							error: function() {
								$.alert.open('Master desa', '<center>Data gagal dihapus.</center>', {
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
				$.alert.open('Master desa', '<center>Pilih baris yang akan dihapus.</center>', {
					OK: "OK",
				}, function(button) {

				});
			}
		});

		$("#exit1, #exit2").click(function() {
			$.alert.open('confirm', '<b>Apakah anda yakin ingin keluar?', function(button) {
				if (button == 'yes') {
					location.href = '<?php echo base_url(); ?>index.php/welcome/home';
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
				$('.dateym').focusout() //Added to remove focus from datepicker input box on selecting date
			}
		}).inputmask("y-m", {
			"oncomplete": function() {},
			"oncleared": function() {}
		});

		//-------------------------------------------- END SCRIPT -------------------------------------------
	});
</script>

<div class="row">
	<div id="formx">
		<div class="row">
			<div class="twelve columns">
				<div class="ui-jqgrid-titlebar ui-widget-header ui-corner-tl ui-corner-tr ui-helper-clearfix">
					<h6>&nbsp;<img src="<?php echo base_url(); ?>images/crud/home.png">&nbsp;Master desa</h6>
				</div>
				<hr>
				<div class="section-container tabs" data-section="tabs">
					<section>
						<p id="section1" class="title" data-section-title><a href="#section1"><i>Entry Data</i></a></p>
						<div class="content" data-section-content>
							<form id="form1" action="" method="post">
								<div class="row">
									<div class="large-3 columns">
										<label class="right inline"><span class="radius secondary label">Kode dan Nama Provinsi<span style="color: red;font-size: 22px;">*</span> :</label>
									</div>
									<div class="large-4 columns">
										<select class="form-control" name="select_pd_provinsi" id="select_pd_provinsi" tabindex="3"></select>
									</div>
									<div class="large-1 columns">
									</div>
								</div>
								<div class="row">
									<div class="large-3 columns">
										<label class="right inline"><span class="radius secondary label">Kode dan Nama Kabupaten<span style="color: red;font-size: 22px;">*</span> :</label>
									</div>
									<div class="large-4 columns">
										<select name="select_pd_kabupaten" id="select_pd_kabupaten" tabindex="3"></select>
									</div>
									<div class="large-1 columns">
									</div>
								</div>
								<div class="row">
									<div class="large-3 columns">
										<label class="right inline"><span class="radius secondary label">Kode dan Nama Kecamatan<span style="color: red;font-size: 22px;">*</span> :</label>
									</div>
									<div class="large-4 columns">
										<select name="select_pd_kecamatan" id="select_pd_kecamatan" tabindex="3"></select>
									</div>
									<div class="large-1 columns">
									</div>
								</div>
								<div class="row">
									<div class="large-3 columns">
										<label class="right inline"><span class="radius secondary label">Kode desa <span style="color: red;font-size: 22px;">*</span> :</span></label>
									</div>
									<div class="large-2 columns">
										<input type="text" name="kode_desa" id="kode_desa" onBlur="javascript:{this.value = this.value.toUpperCase(); }" tabindex="1" />
									</div>
									<div class="large-1 columns">
									</div>
								</div>
								<div class="row">
									<div class="large-3 columns">
										<label class="right inline"><span class="radius secondary label">Nama desa <span style="color: red;font-size: 22px;">*</span> :</span></label>
									</div>
									<div class="large-4 columns">
										<input type="text" name="nama_desa" id="nama_desa" tabindex="2" />
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
											<label class="right inline"><span class="radius secondary label">Search Kode desa atau Nama : </label>
										</div>
										<div class="large-3 columns">
											<input type="text" id="search_kode_desa" class='iblue' name="search_kode_desa" tabindex="1" />
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
								<br>
								<hr>
								<div class="row">
									<div class="large-2 columns">
										<label></label>
									</div>
									<div class="large-10 columns">
										<br>
										<a href="javascript:void(0);" id="delete" class="btnx" style="padding: 9px 17px; font-size: 14px;">Hapus</a>
										<a href="javascript:void(0);" id="exit2" class="btnx" style="padding: 9px 17px; font-size: 14px;">Keluar</a>
									</div>
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