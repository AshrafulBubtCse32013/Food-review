<?php
$conn =mysqli_connect("localhost","root","","wdp");
//Check connection
if($conn->connect_error){
	
		die("COnnection failed:" .$conn->connect_error);
	}
	else
	echo "Connected Successfully";
?>