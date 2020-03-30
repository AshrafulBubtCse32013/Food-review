<?php
include 'config.php';

?>

<!Doc type - Food Review work>
<html>
<head>

	<title>Registration</title>

	<h2 class="h" align="center">Welcome to Food Review</h2>

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

		<center><img src="Reg.jpg" class="img"></img></center>
		
<center><form action="reg.php" method="POST">

	<b><label>User-Name</label>
	<input type="text" name="name" id="form" placeholder="Enter your Name" required></input>
	<br>

	<b><label>User-Email</label>
	<input type="email" name="email" id="form" placeholder="Enter your Email" required></input>
	<br>

	<b><label>User-Password</label>
	<input type="password" name="pass" id="form" placeholder="Enter your Password" required></input>
	<br>

	<b><label>Confirm Password</label>
	<input type="password" name="cpass"  id="form" placeholder="Confirm your Password" required></input>

	<!button work>

	<input type="submit" name="reg" id="button" value="SIGN-UP"></input>

	<a href="login.php"><input type="button" name="back" id="button" value="BACK TO SIGN-IN"></input>


	


</form></center>


<?php

if(isset($_POST['reg'])){
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$cpass = $_POST['cpass'];
	
	
	
	if($pass==$cpass){
		
		$query= "select*from user where email='$email'";
		$query_check= mysqli_query($conn,$query);
		if($query_check){
			
			if(mysqli_num_rows($query_check) >0){
				
				echo "
		<script>
		alert('User ALready Registered ');
		window.location.href='login.php';
		</script>
		";
				
				
			}else{
				
	$insertion= "insert into user values('$name','$email','$pass')";
	
	           
				$run = mysqli_query($conn,$insertion);
				
				if($run ){
					
					echo "
		<script>
		alert('Registration Successful ');
		window.location.href='login.php';
		</script>
		";
					
				}else{
					
						echo "
		<script>
		alert('Registration Failed  ');
		window.location.href='reg.php';
		</script>
		";
				}
				
				
			}
			
			
			
		}else{
			echo "
		<script>
		alert('Database Problem');
		window.location.href='reg.php';
		</script>
		";
			
		}
		
		
	}
	else{
		echo "
		<script>
		alert('Password & Confirm Password not match');
		window.location.href='reg.php';
		</script>
		";
	}
	
	
}
else{
	
	
}

?>

	</div>


</body>

</html>