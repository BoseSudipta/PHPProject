<!DOCTYPE html>
<html>
<head>
	<title>Users record</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	<!-- -->
<table border="2">
	<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>password</th>
		<th>email</th>
		<th>phone</th>
		<th>birthdate</th>
		<th>Action</th>
	</tr>
	<?php  foreach($data as $row) {   ?>
	<tr>
		<tbody>
			<td><?=$row->first_name?></td>
			<td><?=$row->last_name?></td>
			<td><?=$row->password?></td>
			<td><?=$row->email?></td>
			<td><?=$row->phone?></td>
			<td><?=$row->birth_date?></td>
			<td><button class="btn btn-primary edit" relid="<?php echo $row->id; ?>" relpath="<?= base_url('Admin/record_edit')?>" data-toggle="modal" data-target="#editModal">Edit</button>
				<a href="<?php echo base_url('Admin/record_del/'.$id=$row->id); ?>">Delete</td>
		</tbody>
	</tr>
<?php }  ?>



<!-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
	<?php echo form_open('Admin/record_update',['class'=>'form']); ?>
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


        <div class="form-group">
			<input type="text" id="f_name" class="form-control item" name="first_name">
		</div>
		<div class="form_group">
			<input type="text" id="l_name" class="form-control item" name="last_name">
		</div>
		<div class="form-group">
			<input type="password" id="password" class="form-control item" name="password" >
		</div>
		<div class="form-group">
			<input type="email" id="email" class="form-control item" name="email" >
		</div>
		<div class="form_group">
			<input type="text" id="phone_number" class="form-control item" name="phone" >
		</div>
		<div class="form-group">
			<input type="text" id="birth_date" class="form-control item" name="birth_date">
		</div>
	 <!-- <input type="text" value="< -->
      </div>
      <div class="modal-footer">
				<input type="text" id="id" name="id">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="update" class="btn btn-primary" >Save changes</button>
      </div>
		</form>



	</form>
</div>
</div>
 </table>




<script
			  src="https://code.jquery.com/jquery-3.5.1.js"
			  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
			  crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<script src="<?php echo base_url(); ?>assets/JS/admin.js"></script>



</body>
</html>
