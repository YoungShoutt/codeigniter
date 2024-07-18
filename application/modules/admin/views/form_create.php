<script type="text/javascript">
	function checked_menu(id) {
		// alert(id.id);
		// menu_id = menu_id;
		var name = 'check_' + id.menu_id;
		var value = $(".messageCheckbox[name='" + name + "']:checked").val();
		// alert(id.id + " - " + id.menu_id + " - ");
		updateMenu(id.id, id.menu_id, value);
	}

	function updateMenu(id, menu_id, value) {
		var a = (value == 'on') ? '1' : '0';
		$.ajax({
			type: "POST",
			url: "<?php echo base_url('index.php/admin/admin_new/simpan') ?>",
			data: {
				user_id: id,
				menu_id: menu_id,
				value: a
			},
			dataType: "JSON",
			success: function(response) {

			}
		});
	}
</script>
<style>
	.row {
		max-width: 1500px;
	}

	._poto_circle {
		display: block;
		width: 150px;
		height: 150px;
		margin: 1em auto;
		background-size: cover;
		background-repeat: no-repeat;
		background-position: center center;
		-webkit-border-radius: 99em;
		-moz-border-radius: 99em;
		border-radius: 99em;
		border: 5px solid #eee;
		box-shadow: 0 3px 2px rgba(0, 0, 0, 0.3);
	}
</style>
<div class="row">
	<div id="formxx" style='height:1000px;'>
		<div class="row">
			<div class="large-12 columns">
				<div class="ui-widget-header">
					<h6>&nbsp;<img src="<?php echo base_url(); ?>stylesheets/Home_t.ico" width="25px">&nbsp;MANAJEMEN MENU</h6>
				</div>
				<hr>
			</div>
		</div>

		<?php
		echo $this->dynamic_menu_settings->build_menu($id, $nama);
		?>

	</div>
</div>