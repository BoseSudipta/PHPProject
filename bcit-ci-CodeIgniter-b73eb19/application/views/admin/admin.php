<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/login_style.css">

	
</head>
<body>
<div class="login-form">
	<!-- <h1><?php $title ?></h1> -->
	<?php if($this->session->flashdata('message')) {  ?>
		<div class="alert alert-danger">
			<?php echo $this->session->flashdata('message')?>
		</div>
	<?php } ?>
	<div>
			<h2><center>Admin Login</center></h2>
		</div>
		
	<?php echo form_open('Admin/admin_login_action',array('id' => 'loginForm')) ?>

		<div class="col-xs-6">
			<div class="form-group">
				<input type="email" name="email" id="email" class="form-control item" placeholder="Email address">
				<?php echo form_error('email', '<div class="error">', '</div>') ?>
			</div>
		</div>
		<div class="col-xs-6">
			<div class="form-group">
				<input type="password" name="password" id="password"  class="form-control item" placeholder="Password">
				<?php echo form_error('password', '<div class="error">', '</div>') ?>
			</div>
			<div>
				<h4></h4>
			</div>
		</div>
		<div class="col-xs-4">
			<div class="form-group">
				<button type ="submit" class="btn btn-default login-btn" name="signin" value="sign_in">Sign-In</button>
				<?php echo anchor('User/home','Home',array('class'=>'nav-link','class'=>'bth'))?>

			</div>
		</div>
		
	
	<?php echo form_close(); ?>
</div>
</body>
</html>