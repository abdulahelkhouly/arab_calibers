<?php
session_start();
 include 'design/header.php';
 include 'connect.php';	
?>

<?php if (isset($_SESSION['user']))
{
?>
<p class="alert alert-success">
	Welcome Mr <?php echo $_SESSION['user']; ?> 
	<a href="log_out.php" class="btn btn-primary" style="margin-left: 8px;">Log Out</a>

</p>
<?php 
} else {
	header('location: index.php');
}
?> 
<?php  include 'design/footer.php'; ?>