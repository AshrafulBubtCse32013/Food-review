<?php 
	
	$db = mysqli_connect('localhost', 'root', '', 'wdr');

	// initialize variables
	$name = "";
	$address = "";
	$id = 0;


	if (isset($_POST['save'])) {
		$name = $_POST['food_name'];
		$address = $_POST['price'];

		mysqli_query($db, "INSERT INTO info (food_name, price) VALUES ('$name', '$address')"); 
		mysqli_query($db,$query);
		
		header('location: admin.php');
	}

	?>