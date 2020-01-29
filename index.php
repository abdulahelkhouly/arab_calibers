<?php 
session_start();
 include 'design/header.php';
 include 'connect.php';	
 if ($_SERVER['REQUEST_METHOD'] == 'POST')
 {
 	$user_name = $_POST['user'];
 	$password = $_POST['pass'];


 	$sql = "SELECT user_name, password FROM users WHERE user_name = '$user_name' AND password = '$password' AND group_id = '1'";
 	$result = $conn->query($sql);

 	if ($result->num_rows > 0)
 	{
 		$_SESSION['user'] = $user_name;
		header('location: admin.php');
	}
 	else 
 	{
 		echo "<p class='alert alert-dark'>Please Review User Name Or Password</p> ";

 	}
 }	
?>

	<form class="login" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<input class="form-control input-lg" type="text" name="user" placeholder="User Name" autocomplete="off">
		<input class="form-control input-lg" type="password" name="pass" placeholder="Password" autocomplete="off">
		<input class="btn btn-primary btn-block btn-lg" type="submit" value="Login">
	</form>

<?php  include 'design/footer.php'; ?>