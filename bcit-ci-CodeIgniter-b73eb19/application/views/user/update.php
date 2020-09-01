<!DOCTYPE html>
<html>
<head>
	<title></title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/update.css">
</head>
<body>
<div class="form-popup" id="popup-Form" >
	<?php echo form_open('User/update',['class'=>'form']); ?>
	<!-- <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
        </div> -->
		<div class="form-group">
			<input type="text" id="f_name" class="form-control item" name="first_name" placeholder="First Name">
		</div>
		<div class="form_group">
			<input type="text" id="L_name" class="form-control item" name="last_name" placeholder="Last Name">
		</div>
		<div class="form-group">
			<input type="password" id="password" class="form-control item" name="password" placeholder="Password">
		</div>
		<div class="form-group">
			<input type="email" id="mail" class="form-control item" name="email" placeholder="Email">
		</div>
		<div class="form_group">
			<input type="text" id="phone-number" class="form-control item" name="phone" placeholder="Phone Number">
		</div>
		<div class="form-group">
			<input type="text" id="birth-date" class="form-control item" name="birth_date" placeholder="Birth Date">
		</div>
		<div class="form-group">
			<button type="submit"  class="btn btn-block create-account" name="create_acc" value="create_acc">Update Account</button>

	<?php  echo form_close();   ?>
</div>
<script src="<?php echo base_url(); ?>/assets/JS/update.js"></script>
</body>
</html>