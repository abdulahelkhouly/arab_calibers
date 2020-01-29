<?php

$servername = "localhost";
$username = "root";
$db_name = "arab_calibers";

$conn = new mysqli($servername, $username, null, $db_name);
if ($conn->connect_error)
{
	die("error" . $conn->connect_error);
}