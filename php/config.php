<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "dl_database";

// This creates a connection to the server and the database
$conn = new mysqli($servername, $username, $password, $db_name);

// Check the connection to the server and database
if ($conn->connect_error) {
	die("Connection failure: ". $conn->connect_error);
}
?>