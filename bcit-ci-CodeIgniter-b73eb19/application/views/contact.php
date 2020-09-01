<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel = "stylesheet" type = "text/css" 
   href = "<?php echo base_url(); ?>assets/css/contact.css">
</head>
<body>

	
<div class="container contact-form">
	
	<form method="post" action="<?= base_url('EmailController/send')?>" enctype="multipart/form-data">
		<h3>Contact Us</h3>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
				<input type="text" name="User_name" class="form-control" placeholder="Your Name">	
				</div>
				<div class="form-group">
					<input type="email" name="email" class="form-control" placeholder="Your Email"><br>
				</div>
				<div class="form-group">
					<textarea name="message" class="form-control" placeholder="Type Your Message"></textarea>
				</div>
				<div class="form-group">
					<button type="submit" name="btnSubmit" class="btn-contact" value="submit">Send</button>
				</div>
			</div>
			
		</div>
		
		
	</form>
</div>
</body>
</html>