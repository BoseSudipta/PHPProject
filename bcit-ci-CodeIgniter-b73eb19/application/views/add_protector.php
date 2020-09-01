<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	
		<div class="protector-form">
		<?php echo form_open('ProtectController/protectors',['class'=>'form']); ?>
	<div class="form-group">
		<input type="text" name="name" class="form-control item" placeholder="Name">
	</div>
	<div class="form-group">
		<input type="phone" name="phone" class="form-control item" placeholder="Phone Number">
	</div>
	
	<button type="submit" class="" name="sub" value="Submit">Submit</button>
	</form>
	</div>
	
	

</body>
</html>