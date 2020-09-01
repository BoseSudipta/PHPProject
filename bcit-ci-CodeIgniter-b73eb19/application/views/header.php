<!DOCTYPE html> 
<html lang="en"> 
<head> 
<title></title> 
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head> 
<body>  

<!-- <div class="container-fluid"> -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark navbar-fixed-top">
 
  <?php echo anchor('User/home','Home',array('class'=>'nav-link'))  ?>

 
  <ul class="navbar-nav mr-auto">
   
    <li class="nav-item">
      <?php echo anchor('User/disc','Discussion',array('class'=>'nav-link'))   ?>
    </li>
    <?php if($this->session->userdata('authenticated')) {?>
    <li class="nav-item">
        <?php echo anchor('ProtectController/showrecord','Protectors',array('class'=>'nav-link'))   ?>
      </li>
    <?php } ?>
    <li class="nav-item">
      <?php echo anchor('EmailController/contact','Contact',array('class'=>'nav-link'))   ?>
    </li>
  </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="nav-item dropdown">
      <?php if($this->session->userdata('authenticated')) {?>
        <?php $user=$this->session->userdata('first_name'); ?>
         <?php  echo anchor('',$user,array('class'=>'nav-link dropdown-toggle','id'=>'navbarDropdown','role'=>'button','data-toggle'=>'dropdown')) ?>
         
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <div class="dropdown-divider"></div>
          
          <?php echo anchor('User/profile','Profile',array('class'=>'nav-link','class'=>'dropdown-item')) ?>
          
          
        </div>
  </li>
      <li class="nav-item">
        <?php echo anchor('user/logout','Logout',array('class'=>'nav-link'))    ?>
      </li>
      
    <?php } else {?>
  <li class="nav-item">
    <?php echo anchor('User/reg','Register',array('class'=>'nav-link'))   ?>
  </li>
  <li class="nav-item">
    <?php echo anchor('User/login','Login',array('class'=>'nav-link'))   ?>
  </li> 
  <li>
      <?php echo anchor('Admin/admin','Admin Login',array('class'=>'nav-link')); ?>
  </li>
<?php } ?>
  </ul> 

</nav>
</div>
<br>
  
</body> 
</html> 