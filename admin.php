<?php
session_start();
 include 'design/header.php';
 include 'connect.php';	
?>

<?php if (isset($_SESSION['user']))
{
?>
<p class="alert alert-success">
	Welcome Mr <?php echo $_SESSION['full_name']; ?> 
	<a href="add.php" class="btn btn-primary" style="margin-left: 8px;">Add</a>

	<button data-toggle="collapse" data-target="#demo" class="btn btn-primary">Search</button>

	<a href="log_out.php" class="btn btn-primary" style="margin-left: 8px;">Log Out</a>

</p>
<div id="demo" class="collapse">
	
</div>
<?php 
} else {
	header('location: index.php');
}
	
?> 
		<script src="design/libs/jquery-3.4.1.min.js"></script>
		<script src="design/libs/bootstrap.js"></script>
		<script src="design/script/script.js"></script>
		<script>
			$('button').click(function () {
				$.ajax({
					url: "search.php",
					success: function ($result) {
						$("#demo").html($result);
					}
				})
			})
		</script>
	</body>
</html>	