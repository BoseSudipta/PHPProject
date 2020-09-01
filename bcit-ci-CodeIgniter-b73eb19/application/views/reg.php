
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width-device-width,initial-scale=1.0">
	<title>Registration</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="https://localhost/PHPProject/bcit-ci-CodeIgniter-b73eb19/css/style.css"> -->
	<link rel = "stylesheet" type = "text/css" 
   href = "<?php echo base_url(); ?>assets/css/style.css">
</head>
<body>


<div class="registration-form">

	<?php echo form_open('User/reg',['class'=>'form']); ?>
		
		
		<div class="form-icon">
                <span><i class="icon icon-user"></i></span>
        </div>
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
		<!-- <div class="form-group">
			<input type="file" id="image" name="img" class="img">
		</div> -->
		<div class="form-group">
			<button type="submit"  class="btn btn-block create-account" name="create_acc" value="create_acc">Create Account</button>
		</div>
		
	</form>
</div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/JS/reg.js"></script>
</body>
</html>

