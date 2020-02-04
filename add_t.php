<?php
session_start();
 include 'design/header.php';
 include 'connect.php';	
?>
<?php	
	if (isset($_SESSION['user']) AND isset($_POST['name']) AND $_POST['name'] != "" AND isset($_POST['email']) AND $_POST['email'] != "" AND isset($_POST['country']) AND $_POST['country'] != "" AND  isset($_POST['phone']) AND $_POST['phone'] != "" AND isset($_POST['course']) AND $_POST['course'] != "") {
		$name = $_POST['name']; $email = $_POST['email']; 
		$country = $_POST['country']; $phone = $_POST['phone'];
		$course = $_POST['course'];
		$query = "INSERT INTO trainees (name, email, country, phone, course)
		VALUES ('$name', '$email', '$country', '$phone', '$course')";

		if ($mysqli->query($query) === TRUE) {
			echo "<p class='alert alert-success'>Added ... </p>";

			header("refresh: 2; url=admin.php");

		} else {
    		echo "Error: " . $query . "<br>" . $mysqli->error;
		}
	}	else {
		echo "<p class='alert alert-danger'>Please Fill All Field ... </p>";

		header("refresh: 2; url=add.php");
	}
?>
<?php  include 'design/footer.php'; ?>