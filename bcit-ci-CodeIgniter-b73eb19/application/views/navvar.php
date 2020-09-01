<!DOCTYPE html> 
<html lang="en"> 
<head> 
<title>Bootstrap Example</title> 
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head> 
<body> 

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="home">Logo</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url();?>Action/prevention">Prevention</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url();?>Action/news_events">News & Events</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url();?>Action/disc">Discussion</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url();?>EmailController/index">Contact Us</a>
    </li>
	</ul>
    <ul class="nav navbar-nav navbar-right"> 
    	<li class="nav-item">
    	<a href="#" class="nav-link">Profile</a>
    	</li>
	<li><a href="<?php echo base_url();?>Action/viewload"><span class="glyphicon glyphicon-user"></span>Register</a></li> 
	<li><a href="<?php echo base_url(); ?>Action/login"><span class="glyphicon glyphicon-log-in"></span>Login</a></li> 
	</ul> 

</nav>
<br>
	
</body> 
</html> 