<?php
$conn =mysqli_connect("localhost","root","","wdr");
//Check connection
if($conn->connect_error){
	
		die("COnnection failed:" .$conn->connect_error);
	}
	else
	echo "";
?>