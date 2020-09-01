<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="assets/home.css">

</head>
<body>
	<div class="row">
		<div class="col-md-8">
			<div class="container p-3 mb-2 bg-primary">
				<h1>Welcome To the Women Safety Portal</h1>
			</div>
			<br><br>
			<div class="container">
				<h2 class="font-weight-bold">Press the panic button to send Messages to protectors</h2>
			</div>
			<br>

			<div class="container">
				
				<button type="button" name="panic_btn" id="btn" class ="btn btn-danger btn-lg btn3d ">Panic Button</button>
			
				<p id="status"></p>
				<!-- <p id="protectors-list"></p>
 -->				<a id="map-link" target="_blank"></a>
			</div>
		
	</div>
		<div class="col-md-4">
			<h2>Guide to use this portal</h2>
			<h3><p> 1.To use panic <b>BUTTON</b>,you have to register first and after that you can login in this portal.</p>
			<p> If you are already a registered user then you have to login to use the panic button</p>
			<p> It's Important to add protectors before clicking <b>Panic Button</b></p>
		</div>
	
	</div>
	


<script src="<?php echo base_url(); ?>/assets/JS/main.js"></script>
		
</body>
</html>

