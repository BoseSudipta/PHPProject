<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		textarea{
			resize: none;
		}
	</style>
</head>
<body>
	<?php echo form_open('Admin/disc_save',array('class'=>'form')); { ?>
<div class="container" >
	<div class="topic">
		<textarea name="topic" placeholder="PLease,Write your topic here" cols="30" rows="5"></textarea>
	</div></br>
	<textarea name='content' cols="100" rows="20"></textarea></br>
	<button type="submit" name="post">Post</button>
</div>
<?php   }  ?>
</body>
</html>