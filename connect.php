<?php

$servername = "localhost";
$username = "root";
$db_name = "arab_calibers";

$mysqli = new mysqli($servername, $username, null, $db_name);
if ($mysqli->connect_error)
{
	die("error" . $mysqli->connect_error);
}