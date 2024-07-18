	<style type="text/css">

	.limiter {
		width: 100%;
		margin: 0 auto;
	}

	.container-login100 {
		width: 100%;  
		min-height: 100vh;
		display: -webkit-box;
		display: -webkit-flex;
		display: -moz-box;
		display: -ms-flexbox;
		display: flex;
		flex-wrap: wrap;
		justify-content: center;
		align-items: center;
		padding: 15px;

		background-repeat: no-repeat;
		background-position: center;
		background-size: cover;
		position: relative;
		z-index: 1;  
	}

	.container-login100::before {
		content: "";
		display: block;
		position: absolute;
		z-index: -1;
		width: 100%;
		height: 100%;
		top: 0;
		left: 0;
		background-color: rgba(255,255,255,0.6);
	}

	.retroshadow {
		font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;
		font-size: 40px;
		/* padding: 20px 50px; */
		text-align: center;
		text-transform: uppercase;
		text-rendering: optimizeLegibility;

		color: #fff;
		/* background-color: #d5d5d5; */
		letter-spacing: 0.05em;
		text-shadow: 2px 2px 0px #2c2c2c, 7px 7px 0px rgba(0, 0, 0, 0.2);
	}

	.container-login100 hr { 
		margin-top: 1rem;
		margin-bottom: 1rem;
		border-top: 2px solid #fff;
	}

	</style>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?php echo base_url(); ?>images/bg3.jpg');">
			<div class="wrap-login100">
				<?php echo form_open('index.php/login/login_form'); ?>
				<!-- <span class="login100-form-logo"> -->
				<!-- <i class="zmdi zmdi-landscape"></i> -->
				<!-- <img src='<?php echo base_url(); ?>/images/logo_hansa.jfif' style="width:100%"></img> -->
				<!-- </span> -->
      		<div class='retroshadow'>Codeigniter</div>
				<hr>
				<br>
				<!-- <span class="login100-form-title p-b-34 p-t-27">
					Log in
				</span> -->

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