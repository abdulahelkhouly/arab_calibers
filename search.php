<?php
session_start();
 include 'design/header.php';
 include 'connect.php';	
?>
<?php if (isset($_SESSION['user']))
{
?>
<form method="post" action="data.php">
	<div class="form-group">
	    <label class="col-md-2">Course :</label>
	    <div class="col-md-4">
	    	<input type="text" name="course" class="form-control" placeholder="Course" >
		</div>
		<div class="col-md-4" style="margin-top: 10px;">
			<input type="submit" value="Search" class="btn btn-primary btn-block">
		</div>
	</div>
</form>
<?php 
} else {
	header('location: index.php');
}
	
?> 
<?php  include 'design/footer.php'; ?>