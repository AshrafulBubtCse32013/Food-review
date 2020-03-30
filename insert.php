<?php
$connection = mysqli_connect("localhost", "root", "", "wdp"); // Establishing Connection with Server

if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];

//Insert Query of SQL
$sql = "INSERT into name(name, email, contact, address) VALUES ('$name', '$email', '$contact', '$address')";
if (mysqli_query($connection, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}}
?>