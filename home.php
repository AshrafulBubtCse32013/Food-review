<?php

include 'config.php';

?>

<!Doc type - Food Review work>
<html>
<head>

	<title>Home</title>

	<h2 class="h" align="center">Log Out</h2>

	<style>

.h {
	background: #ff4d4d;
	padding: 10px;
	border: 2px solid black;
	color: black;
}

#b{

	
}
	
	#d{height: 510px;
		width: 400px;
		background: #dcdde1;
		border: 3px solid black;
		border-radius:25px; 
		margin: 0 auto;}

#form{

			
			margin: 5px;
			text-align: center;
			padding: 5px;
			height: 30px;
			width: 380px;
			background: white;}

.img{
	
	height:200px;
	width:200px;}


	#button{
	height:30px;
	width:380px;
	background:blue;
	padding:2px;
	margin:2px;
	border-radius:25px; 
	
}



	</style>

</head>

<body id="b">

	<div id="d">

		<center><img src="Home.png" class="img"></img></center><b>
			<br><br>
		
<center><form action="home.php" method="POST">

	

	

	
	<!button work>

	<input type="submit" name="logout" id="button" value="Log-out"></input>

	

	


</form></center>
<?php
if(isset($_POST['logout'])){

echo "
<script>

alert('you are successfully logged out');
window.location.href='login.php';
</script>
";

}else{


}

	?>

	</div>


</body>

</html>