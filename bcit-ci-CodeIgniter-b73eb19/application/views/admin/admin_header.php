<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashbaord</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<style type="text/css">

	</style>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark navbar-fixed-top">
 
  <?php echo anchor('Admin_dashboard/admin_page','Home',array('class'=>'nav-link'))  ?>

 
  <ul class="navbar-nav mr-auto">
   
    <li class="nav-item">
      <?php echo anchor('Admin/discussion','Discussion',array('class'=>'nav-link'))   ?>
    </li>
    
    <
    <li class="nav-item">
      <?php echo anchor('Admin/records','Records',array('class'=>'nav-link'))   ?>
    </li>
  </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="nav-item dropdown">
      <?php if($this->session->userdata('authenticated')) {?>
        <?php $admin_name=$this->session->userdata('name'); ?>
         <?php  echo anchor('',$admin_name,array('class'=>'nav-link dropdown-toggle','id'=>'navbarDropdown','role'=>'button','data-toggle'=>'dropdown')) ?>
         
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <div class="dropdown-divider"></div>
          
          <?php echo anchor('Admin/profile','Profile',array('class'=>'nav-link','class'=>'dropdown-item')) ?>
          
          
        </div>
  </li>
      <li class="nav-item">
        <?php echo anchor('user/logout','Logout',array('class'=>'nav-link'))    ?>
      </li>
      
    <?php } else {
    	redirect('User/login');
    }
    ?>
  

  </ul> 

</nav>

</body>
</html>