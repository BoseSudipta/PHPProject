<!-- <?php
 phpinfo();
?> -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
 <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>  -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/post.css">

</head>
<body>
<div class="col-md-2">
</div>
<div class="container col-md-6">
	<?php foreach ($d as $row) {?>
<div class="topic">
	<span><?=$row->Topic?></span>
</div>
<br>
<div class="post_body">
	<?=$row->Content?>
</div>
<br><br>
<div class="form-group">
	<textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter comment rows='5'"></textarea>
</div>
<?php }  ?>
<span id="p" ><?php $x=$row->post_id;
				echo $x;
 ?></span>

<div class="form-group">
	<button id="reply" >Reply</button>
</div>

<!-- <button type="button"id="show" value="loadmore" >Load More</button> -->
<!-- <button type="button"id="" onclick="loadmore()">Load More</button> -->
<!-- <div id="load-more"> -->
<button id="show">Show Cutomers</button>
<div id="customers-list"></div>
</div>



<script
			  src="https://code.jquery.com/jquery-3.5.1.js"
			  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
			  crossorigin="anonymous"></script>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
<script src="<?php echo base_url(); ?>assets/JS/reply.js"></script>
</body>
</html>
