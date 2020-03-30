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
	z-index: 999;
}
	.nav ul li ul li:last-child{border-bottom:0px solid #B58318;}

.nav ul ul ul {
	margin-left: 200px;
	top: 0px;
}


#slider {
	overflow: hidden;
	width: 1335px;
	box-shadow: 0px 8px 10px -2px #566;
}

#slider1 {
	position: relative;
	width: 500%;
	animation-name: Food;
	animation-duration: 20s;
	animation-iteration-count: infinite;
}

#slider1 img {
	height: 300px;
	width: 20%;
	float: left;
}


@keyframes Food{

0%

{

	left: 0;

}


10%

{

left: 0;

}

20%

{

	left: -100%;


}


30%

{

	left: -100%;


}


40%

{

	left: -200%;


}


50%

{

	left: -200%;


}


60%

{

	left: -300%;


}



70%

{

	left: -300%;


}



80%

{

	left: -400%;


}



90%

{

	left: -400%;


}



100%

{

	left: 0;


}



}

.content {
	width: 100%;
	border: 1px solid aqua;
	margin-top: 6px;
	display: inline-flex;
}

.con {
	width: 70%;
	/* display: inline-flex; */
	margin-top: 66px;
	margin-bottom: 66px;
	border: 1px solid bisque;
}

.con img {
	margin: 0px 15px;
	height: 140px;
	width: 176;
	padding: 13px 0px;
}

.con1 {
	width: 70%;
	display: inline-flex;
	margin-top: 100px;
	margin-bottom: 66px;
}

.con1 img {
	margin: 0 72px;
}



.sidebar {
	width: 30%;
	background: #F0FCCF none repeat scroll 0 0;
	float: right;
	padding: 10px;
	margin-top: 62px;
	margin-bottom: 68px;
	border: 1px solid #F0FCB2;
	margin-right: 10px;
	margin-left: 404px;
}
.samesidebar{margin-bottom: 10px;}
.samesidebar h2{background: crimson;
    color: #fff;
    padding: 10px;
    margin-bottom: 8px;
    border-bottom: 2px solid #373954;}	
	
.samesidebar ul{margin:0;padding:0;list-style:none;}
.samesidebar ul li{
    border-bottom: 1px dashed #E4AFD7;
    font-size: 16px;
    padding: 5px 8px 5px 0px;}
.samesidebar ul li:last-child{border-bottom: 0px dashed #E4AFD7;}
.samesidebar ul li a{
    text-decoration: none;
    color: navy;}
.samesidebar ul li a:hover{color:#DF5c25;}
	
.samesidebar p{ margin-bottom: 5px;}





.footer {
	width: 100%;
	border: 1px solid aqua;
}

.footer p {
	margin: 20px 579px;
}

</style>


<body>
	
<div class="header ">
	
<div class="logo"><img src="review.png"></div>
<div class="title"><h1>FOOD REVIEW</h1></div>
<div class="social">
			<a href="http://www.facebook.com"><img src="training_live_facebook.png" alt="post image" /></a>
		
		<a href="http://www.google.com"><img src="training_live_gplus.png" alt="post image" /></a>
		
		<a href="http://www.linkedin.com"><img src="training_live_linkedin-profile.png" alt="post image" /></a>
		
		<a href="http://www.twitter.com"><img src="training_live_twitt_profile.png" alt="post image" /></a>
		</div>


<div class="register"><a href="reg.php"><p>Register</p></a>Or<a href="home.php"><p>Sign Out</p></a></div>



</div>

<div class="nav  ">
	
	<ul>
		
		<li><a href="f2.php">Home</a></li>
		<li><a href="#">Menu</a>

			<ul> 
		
		<li><a href="im.php ">Fast Food</a>

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
		<li><a href="im1.php ">Set Menu</a>


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
		<li><a href="im2.php ">Soft Drinks</a>

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
		<li><a href="about.php">About Us</a></li>
		<li><a href="contact.php">Contact Us</a></li>

	</ul>

</div>


<div id="slider">
	

	<div id="slider1">
		

		<img src="sld1.jpg"  />
		<img src="sld2.jpg"  />
		<img src="sld4.jpg"  />
		<img src="sld6.jpg"  />
		<img src="sld7.jpg"  />
		
		


	</div>



</div>



<div class="content">

<div class="con">
	
<img src="burger.jpg">
<img src="pizza.jpg">
<img src="pasta.jpg">
<img src="drinks.jpg">
<img src="ndls.jpg">
<img src="set menu.jpg">
<img src="drinks.jpg">
<img src="ndls.jpg">
<img src="set menu.jpg">

</div>





<div class="sidebar ">
<div class="samesidebar ">
			<h2>Popular Food Restaurant Web Page </h2>
			
		<ul>
	    <li><a href="http://www.khazanadhaka.com">Khazana Dhaka Restaurant</a></li>
	    <li><a href="https://www.al-amar-bd.com/">Al-Amar Lebanese Cuisine Bangladesh</a></li>
		<li><a href="https://www.foodpanda.com.bd/">foodpanda: Order online</a></li>
		<li><a href="#">Post Title four will be go here</a></li>
		<li><a href="#">Post Title five will be go here</a></li>
		<li><a href="#">Post Title six will be go here</a></li>
		</ul>
		
		</div>

		</div>



</div>

<div class="footer"><p>&copy; Copyright Food Review.</p></div>


	
	

</body>


</html>