<?php
	$conn = new mysqli("localhost", "root", "", "QuantoxTest2");
 
	if ($conn->connect_errno)
	{
		print ("Connection error (" . $conn->connect_errno . "): $conn->connect_error");
	}
?>