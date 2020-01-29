<?php
 session_start();
 include 'design/header.php';
 include 'connect.php';	

 session_unset();
 session_destroy();
 header('location: index.php');
?>


<?php  include 'design/footer.php'; ?>