<!DOCTYPE html>
<html>
<head>
	<title>Discussion</title>
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
<style type="text/css">
	a{
		color: white;
	}
</style>
</head>
<body>
<div class="container">
	
		<table class="table table-dark">
		<th>
			<tr>
				<th scope="col">Topic</th>
				<th scope="col">post date</tr>
			</tr>
		</th>
			<?php foreach ($data as $row) {?>
				<tbody>
					<tr>
						<td><a href="post_page/<?=$row->post_id?>" ?><?= $row->Topic ?></a></td>
						<td><?= $row->Datetime ?></td>
					</tr>
				</tbody>
			<?php } ?>
		
	</table>
	
	
</div>
</body>
</html>