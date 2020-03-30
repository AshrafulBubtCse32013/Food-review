<?php

?>

<html>

<head>

<title>
	
	Food Review

</title>

</head>

<style>
	
.header {
	display: inline-flex;
	width: 100%;
	border: 1px solid darkturquoise;
}

.logo {
	float: left;
	width: 10%;
	margin: 20px 30px;
}

.title {
	width: 30%;
	margin: -5px 50px;
}

.title h1 {
	padding: 0 122px;
	color: navy;
	font-style: italic;
}

.social {
	width: 30%;
	margin: 0 62px;
}

.social img {
	height: 50px;
	float: none;
	padding: 0 10px;
	margin: 0 -10px;
}

.register {
	width: 7%;
}

.register p {
	border: 1px solid;
	text-decoration: none;
	
}

.register a {
	text-decoration: none;
}


.nav {
	width: 100%;
	border: 1px solid darkturquoise;
	min-height: 42px;
}

.nav ul {
	margin:0;padding:0;list-style:none;

}

.nav ul li {
	display: block;
	float: left;
	border-left: 1px solid aquamarine;
	border-right: 1px solid cyan;
	position: relative;
}
.nav ul li:first-child{border-left: 0px solid #E4AD66;}
.nav ul li:last-child{border-right: 0px solid #E4AD66;}
.nav ul li a {
    display: block;
    padding: 10px;
    text-decoration: none;
    font-size: 19px;
    font-weight: bold;
    color: #fff;
	-webkit-transition:.5s;
	-moz-transition:.5s;
	-o-transition:.5s;
	transition:.5s;

}
.nav ul li a:hover,#active{background:cyan;color:#333;transition:.35s;}


.nav ul li a {
	text-decoration: none;
	color: deeppink;
}

.nav ul li ul{position:absolute;left:-999999px;}
.nav ul li:hover >ul{left:0px;}
.nav ul li ul li {
	width: 200px;
	border-bottom: 1px solid #BDBDBD;
	border-left: 0px solid #E4AD66;
	border-right: 0px solid #E4AF08;
	background: floralwhite;
}
	.nav ul li ul li:last-child{border-bottom:0px solid #B58318;}

.nav ul ul ul {
	margin-left: 200px;
	top: 0px;
}


.content {
	width: 100%;
	border: 1px solid aqua;
}




.fh h2 {
	border-bottom: 2px solid gainsboro;
	margin-bottom: 10px;
	padding: 10px;
	font-size: 24px;
	color: teal;
}

.ff {
	width: 100%;
	display: inline-flex;
	margin-bottom: 50px;
}

.fimg {
	width: 60%;
}

.fimg img {
	float: left;
	width: 200px;
	margin: 10px 50px;
	background: #fff;
	padding: 5px;
	border: 1px solid #EBB4F5;
	height: 100px;
}

.fp {
	width: 40%;
}

.fp p{font-size: 16px;
    line-height: 23px;
    text-align: justify;} 


.con {
	width: 100%;
	display: inline-flex;
	margin-top: 66px;
}

.con img {
	margin: 0 76px;
}

.con1 {
	width: 100%;
	display: inline-flex;
	margin-top: 100px;
	margin-bottom: 66px;
}

.con1 img {
	margin: 0 72px;
}

.footer {
	width: 100%;
	border: 1px solid aqua;
}

.footer p {
	margin: 20px 579px;
}

</style>


<body>
	
<div class="header">
	
<div class="logo"><img src="review.png"></div>
<div class="title"><h1>FOOD REVIEW</h1></div>
<div class="social">
			<a href="http://www.facebook.com"><img src="training_live_facebook.png" alt="post image" /></a>
		
		<a href="http://www.google.com"><img src="training_live_gplus.png" alt="post image" /></a>
		
		<a href="http://www.linkedin.com"><img src="training_live_linkedin-profile.png" alt="post image" /></a>
		
		<a href="http://www.twitter.com"><img src="training_live_twitt_profile.png" alt="post image" /></a>
		</div>


<div class="register"><a href="reg.php"><p>Register</p></a>Or<a href="login.php"><p>Sign In</p></a></div>



</div>

<div class="nav">
	
	<ul>
		
		<li><a href="f1.php">Home</a></li>
		<li><a href="#">Menu</a>

			<ul> 
		
		<li><a href="fastfood.php">Fast Food</a>

			<!--<ul>
				
				<li><a href="#">Cheeseburger</a></li>
				<li><a href="#">Hamburger</a></li>
				<li><a href="#">Sandwich</a></li>
				<li><a href="#">Fried chicken</a></li>
				<li><a href="#">Pizza</a></li>
				<li><a href="#">Pancake</a></li>
				<li><a href="#">Noodle</a></li>
				<li><a href="#">Pasta</a></li>
				<li><a href="#">French Fry</a></li>
				<li><a href="#">Cold Coffee</a></li>

			</ul>-->

		</li>
		<li><a href="friedrice.php">Set Menu</a>


			<!--<ul>
				
				<li><a href="#">Thai Fried Rice</a></li>
				<li><a href="#">Mixed Fried Rice</a></li>
				<li><a href="#">Vegetable Fried Rice</a></li>
				<li><a href="#">Masala Fried Rice</a></li>
				<li><a href="#">Beef Fried Rice </a></li>
				<li><a href="#">Egg Fried Rice</a></li>
				<li><a href="#">Chicken Fried Rice</a></li>
				

			</ul>-->



		</li>
		<li><a href="softdrinks.php">Soft Drinks</a>

			<!--<ul>
				
				<li><a href="#">7 up</a></li>
				<li><a href="#">Pepsi</a></li>
				<li><a href="#">Coca-Cola </a></li>
				<li><a href="#">Sprite</a></li>
				<li><a href="#">Mirinda</a></li>
				
				

			</ul>-->


		</li>
		
		
		</ul>

		</li>
		<li><a href="review.php">Reviews</a></li>
		<li><a href="about.php">About</a></li>
		<li><a href="#">Address</a></li>

	</ul>

</div>

<div class="content">

	<div class="fh"><h2>7 up</h2></div>
	<div class="ff">

		<div class="fimg"><a href="#"><img src="7 up.jpg"></a></div>

	<div class="fp">

		<p>7up 250ml ................ BDT:70.00</p>
		<p>7up 500ml ............... BDT:100.00</p>
		<p>7up 1 ltr ............... BDT:100.00</p>
		<p>7up 2 ltr ............... BDT:100.00</p>
		</div>

	</div>



	<div class="fh"><h2>Pepsi</h2></div>
	<div class="ff">

		<div class="fimg"><a href="#"><img src="pepsi.jpg"></a></div>

	<div class="fp">

		<p>Pepsi 250ml ................ BDT:70.00</p>
		<p>Pepsi 500ml ............... BDT:100.00</p>
		<p>Pepsi 1 ltr ............... BDT:100.00</p>
		<p>Pepsi 2 ltr ............... BDT:100.00</p>
		</div>

	</div>


	<div class="fh"><h2>Coca-Cola</h2></div>
	<div class="ff">

		<div class="fimg"><a href="#"><img src="Coca-Cola.jpg"></a></div>

	<div class="fp">

		<p>Coca-Cola 250ml ................ BDT:70.00</p>
		<p>Coca-Cola 500ml ............... BDT:100.00</p>
		<p>Coca-Cola 1 ltr ............... BDT:100.00</p>
		<p>Coca-Cola 2 ltr ............... BDT:100.00</p>
	</div>

	</div>


	<div class="fh"><h2>Sprite</h2></div>
	<div class="ff">

		<div class="fimg"><a href="#"><img src="Sprite.jpg"></a></div>

	<div class="fp">

		<p>Sprite 250ml ................ BDT:70.00</p>
		<p>Sprite 500ml ............... BDT:100.00</p>
		<p>Spritea 1 ltr ............... BDT:100.00</p>
		<p>Sprite 2 ltr ............... BDT:100.00</p></div>

	</div>


	<div class="fh"><h2>Mirinda</h2></div>
	<div class="ff">

		<div class="fimg"><a href="#"><img src="Mirinda.jpg"></a></div>

	<div class="fp">

		<p>Mirinda 250ml ................ BDT:70.00</p>
		<p>Mirinda 500ml ............... BDT:100.00</p>
		<p>Mirinda 1 ltr ............... BDT:100.00</p>
		<p>Mirinda 2 ltr ............... BDT:100.00</p>


	</div>

	</div>


	


	

<div class="footer"><p>&copy; Copyright Food Review.</p></div>


	
	

</body>


</html>