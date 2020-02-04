<?php
session_start();
 include 'design/header.php';
 include 'connect.php';	

?>
<?php 
	if (isset($_SESSION['user'])) {
		if (isset($_POST['course']) && $_POST['course'] != null) {
			$course = $_POST['course'];
			$query = "SELECT name FROM trainees WHERE course = '$course'";
			$result = $mysqli->query($query);
 			$row = $result->fetch_all();

 			if ($result->num_rows > 0) {
 				for ($i = 0; $i < $result->num_rows; $i++) { 
 					for ($j = 0; $j < 1 ; $j++) { 
 						?> <ul> <li>  <?php
 						echo $row[$i][$j]; ?>
 							</li> </ul> <?php 					}
 				}
 			}	else {
 				echo "<p class='alert alert-danger'>No Result ... </p>";
 			}
		}	else {
			echo "<p class='alert alert-danger'>Please Fill Field Course Want to search ... </p>";

			header("refresh: 2; url=search.php");
		}
	}	else {
		header("location: index.php");
	}	

?>
	<a href="admin.php" class="btn btn-primary" style="margin-left: 10px;">Back</a>

<?php  include 'design/footer.php'; ?>