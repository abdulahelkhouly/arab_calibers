<?php
session_start();
 include 'design/header.php';
 include 'connect.php';	
?>

<?php if (isset($_SESSION['user'])) { 
?>

<h1 class="text-center">Add Trainess</h1>
<div class="container">
	<form method="post" action="add_t.php">
	  <div class="form-group">
	    <label for="name" class="col-md-2">Name :</label>
	    <input type="text" name="name" class="form-control col-md-6" placeholder="Full Name" >
	  </div>
	  <div class="form-group">
	    <label for="email" class="col-md-2">Email :</label>
	    <input type="email" name="email" class="form-control col-md-6" placeholder="Email">
	  </div>
	  <div class="form-group">
	    <label for="country" class="col-md-2">Country :</label>
	    <input type="text" name="country" class="form-control col-md-6" placeholder="Country">
	  </div>
	  <div class="form-group">
	    <label for="phone" class="col-md-2">Phone :</label>
	    <input type="text" name="phone" class="form-control col-md-6" placeholder="Phone ">
	  </div>
	  <div class="form-group">
	    <label for="coures" class="col-md-2">Course :</label>
	    <input type="text" name="course" class="form-control col-md-6" placeholder="Course ">
	  </div>
	  <input type="submit" value="Add" class="btn btn-primary">
	  <a href="admin.php" class="btn btn-primary">Back</a>
</form>
</div>
<?php 
} else {
	header('location: index.php');
}
?> 
<?php  include 'design/footer.php'; ?>