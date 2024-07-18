<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?php echo base_url(); ?>images/bg.jpg');">
			<div class="wrap-login100">
				<?php echo form_open('index.php/login/login_form'); ?>
				<!-- <span class="login100-form-logo"> -->
				<!-- <i class="zmdi zmdi-landscape"></i> -->
				<img src='<?php echo base_url(); ?>/images/logo.jfif' style="width:100%"></img>
				<!-- </span> -->

				<span class="login100-form-title p-b-34 p-t-27">
					Log in
				</span>

				<div class="wrap-input100 validate-input" data-validate="Enter username">
					<input class="input100" type="text" name="username" placeholder="Username" value="<?php echo set_value('username'); ?>">
					<span class=" focus-input100" data-placeholder="&#xf207;"></span>
				</div>

				<?php echo form_error('username'); ?>
				<div class="wrap-input100 validate-input" data-validate="Enter password">
					<input class="input100" type="password" name="password" placeholder="Password" value="<?php echo set_value('password'); ?>">
					<span class=" focus-input100" data-placeholder="&#xf191;"></span>
				</div>
				<?php echo form_error('password'); ?>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						Login
					</button>
				</div>

				</form>
			</div>
		</div>
	</div>


</body>