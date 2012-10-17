<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login-登录</title>
<link rel="stylesheet" href="<?php echo base_url()?>css/admin/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url()?>css/admin/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url()?>css/admin/invalid.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo base_url()?>js/jquery-1.6.2.min.js"></script>
</head>
<body id="login">
		<div id="login-wrapper" class="png_bg">
			<div id="login-top">
				<h1>Simpla Admin</h1>
				<!-- Logo (221px width) -->
				<img id="logo" src="<?php echo base_url()?>images/logo.jpg" alt="Simpla Admin logo" />
			</div> <!-- End #logn-top -->
			<div id="login-content">
				<?php echo form_open('index.php/admin/login/submit','name=form') ?>				
					<p>
						<label>Username</label>
						<input class="text-input" type="text" name="username" />
						<?php echo form_error('username'); ?>
					</p>
					<div class="clear"></div>
					<p>
						<label>Password</label>
						<input class="text-input" type="password" name="password" />
						<?php echo form_error('password'); ?>
					</p>
					<div class="clear"></div>
					<!--<p id="remember-password">
						<input type="checkbox" />Remember me
					</p>
					<div class="clear"></div>-->
					<p>
						<input class="button" type="submit" name="submit" value="Sign In" />
					</p>
				<p><a href="<?php echo base_url()?>index.php/admin/login/signup">注册</a></p>
			</div> <!-- End #login-content -->
		</div> <!-- End #login-wrapper -->
  </body>
</html>