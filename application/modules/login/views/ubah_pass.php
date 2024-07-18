<html>

<head>
	<title>Form Login</title>
	<script type="text/javascript">
		$(document).ready(function() {
			$("input[name=username]").focus();
		});
	</script>
</head>

<body>
	<div class="container" style="position:relative;
 top:25px;
 left:25px;
 width:250px;">
		<h1>Ubah password</h1>
	</div>

	<div class="container" style="position:relative;
 top:0px;
 right:0;
 width:120px;">
		<section class="main">
			<p style="position:absolute">
				<label>Ubah Password</label>
			</p>
		</section>
		<section class="main">
			<form class="form-3" action="<?php echo base_url(); ?>index.php/login/login/change" method="post" name="login">

				<form class="form-3">
					<p class="clearfix">
						<label for="login">Password</label>
						<input type="hidden" name="user" value="<?php echo $this->uri->segment(3); ?>">
						<input type="password" size="40" name="pass1" value="<?php echo set_value('username'); ?>" class="inputan" autocomplete="off"> <?php echo form_error('username'); ?>
					</p>
					<!--
				    <p class="clearfix">
				        <label for="password">Password</label>
						<input type="password" size="40" name="pass2" value="<?php echo set_value('password'); ?>" class="inputan" autocomplete="off"> <?php echo form_error('password'); ?>
						<input type="hidden" size="40" name="url" value="<?php echo  $_SERVER['HTTP_REFERER']; ?>" class="inputan"> 
						<input type="hidden" size="40" name="index" value="<?php echo  $_GET['a'] ?>" class="inputan"> 
					</p>-->
					<p class="clearfix">
						<label></label>
					</p>

					<p class="clearfix">
						<input type="submit" name="login" value="Ubah" class="tombol">
					</p>

				</form>
		</section>
	</div>
</body>

</html>