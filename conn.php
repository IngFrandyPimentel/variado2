<?php
	$conn = new mysqli('localhost', 'root', 'toor', 'ffsystem');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>