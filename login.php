<?php

include 'config.php';

?>

<!Doc type - Food Review work>
<html>
<head>

	<title>Log-in</title>

	<h2 class="h" align="center">Welcome to Log-in</h2>

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

		<center><img src="login.jpg" class="img"></img></center><b>
			<br><br>
		
<center><form action="login.php" method="POST">

	

	<b><label>User-Email</label>
	<input type="email" name="email" id="form" placeholder="Enter your Email" required></input>
	<br>

	<b><label>User-Password</label>
	<input type="password" name="pass" id="form" placeholder="Enter your Password" required></input>
	<br>

	
	<!button work>

	<input type="submit" name="login" id="button" value="Log-in"></input>

	<a href="reg.php"><input type="button" name="reg"  id="button" value="Registration"></input>


	


</form></center>


<?php

    if(isset($_POST['login'])){
		
		$email= $_POST['email'];
		$pass=$_POST['pass'];
		
		$check = "select*from user where email='$email' AND password ='$pass'";
		$check_work= mysqli_query($conn,$check);
		
		if($check_work){
			if(mysqli_num_rows($check_work) > 0 ){
				
				echo"
				<script>
				alert('You are Successfully  Logged in');
				window.location.href='f2.php';
				</script>
				";
				
			}else{
				
				echo"
				<script>
				alert('Password or Email not Found ');
				window.location.href('reg.php');
				</script>
				";
			}
			
			
		}else{
			
			
				echo"
				<script>
				alert('Database Error  ');
				window.location.href('reg.php');
				</script>
				";
		}
		
		
		
	}else{
		
		
	}





?>

	</div>


</body>

</html>