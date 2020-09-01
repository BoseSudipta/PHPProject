<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
	<div class="container">
<button  name="btn" class="btn btn-success btn-sm"><?php echo anchor('ProtectController/add_new','Add New',array('class'=>'btn'))  ?></button>
<table border="1">
	<thead>
		<tr>
			<th>Name</th>
			<th>Phone Number</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		 foreach ($data as $row) { ?>
		<tr>
			
			<td><?= $row->name ?></td>
			<td><?= $row->phone ?></td>
			<td>
				
				 <a href="<?php echo base_url('ProtectController/delete_record/'.$ph=$row->phone) ;   ?>">Delete</a>
		</tr>
		<?php }  ?>
	</tbody>
</table>
</div>
<script src="<?php echo base_url(); ?>/assets/JS/.js"></script>
</body>
</html>