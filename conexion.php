<?php
function conexion(){
	$servername = "localhost";
	$database = "search_prod";
	$username = "root";
	$password = "";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $database);

	return $conn;	
}
?>