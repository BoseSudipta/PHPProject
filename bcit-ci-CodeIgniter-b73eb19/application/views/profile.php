<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/update.css">
</head>
<body>
		 
			<div class="container">
				<!-- <div class="form-icon">
                	<span><i class="icon icon-user"><?php $data->image ?></i></span>
        		</div> -->
			<table class="table table-bordered">

				<tr>
					<td><strong>First Name</strong></td>
					<td><?php echo $data->first_name?></td>
				</tr>
				<tr>
					<td><strong>Last Name</strong></td>
					<td><?php echo $data->last_name  ?></td>
				</tr>
				<tr>
					<td><strong>Email Address</strong></td>
					<td><?php echo $data->email    ?></td>
				</tr>
				<tr>
					<td><strong>Phone Number</strong></td>
					<td><?php echo $data->phone  ?></td>
				</tr>
				<tr>
					<td><strong>DOB</strong></td>
					<td><?php echo $data->birth_date ?></td>
				</tr>
			</table>
		</div>
	<div class="container">
	<div class="col-sm-2">
		<button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#exampleModalCenter" >
  Edit
</button>

		<button class="btn btn-danger" id="delete" onclick="location.href='<?php echo base_url();?>User/delete_data'" >Delete</button>
	</div>
</div>

	<?php echo form_open('User/update ',['class'=>'form']); ?>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<!--  -->
      	

        <div class="form-group">
			<input type="text" id="f_name" class="form-control item" name="first_name" value="<?php echo $data->first_name ?>">
			
		</div>
		<div class="form_group">
			<input type="text" id="L_name" class="form-control item" name="last_name" value="<?php echo $data->last_name?>">
		</div>
		<div class="form-group">
			<input type="password" id="password" class="form-control item" name="password" value="<?php echo $data->password?>">
		</div>
		<div class="form-group">
			<input type="email" id="mail" class="form-control item" name="email" value="<?php echo $data->email?>">
		</div>
		<div class="form_group">
			<input type="text" id="phone-number" class="form-control item" name="phone" value="<?php echo $data->phone ?>">
		</div>
		<div class="form-group">
			<input type="text" id="birth-date" class="form-control item" name="birth_date" value="<?php echo $data->birth_date ?>">
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name ='update' class="btn btn-primary">Save changes</button>
      </div>

    </div>
  </div>
</div>
      

	<?php  echo form_close();   ?>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>