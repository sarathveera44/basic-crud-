<?php 
	$servername="localhost";
	$username="root";
	$password="";
	$database="crud";
	
	//======this my database connection check========
	$conn= new mysqli($servername,$username,$password,$database);
	if($conn->connect_error){
		die("connection failed". $conn->connect_error);
	}
?>	