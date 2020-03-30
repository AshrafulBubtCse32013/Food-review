<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "wdr");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
    // Get image name
    $image = $_FILES['image']['name'];
    // Get text
    $image_text = mysqli_real_escape_string($db, $_POST['image_text']);

    // image file directory
    $target = "images/".basename($image);

    $sql = "INSERT INTO images (image, image_text) VALUES ('$image', '$image_text')";
    // execute query
    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }
  }
  $result = mysqli_query($db, "SELECT * FROM images");
?>

<html>

<head>

<title>
  
  Post

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


.content{
    width: 100%;
    background: #F0FCCF none repeat scroll 0 0;
    margin: 0px 10px 10px 0px;
    border: 1px solid #F0FCB2;}




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



.about h2 {
  border-bottom: 2px solid #E0F79A;
  margin-bottom: 10px;
  padding: 10px;
  font-size: 24px;
  color: #E4B034;
}



.about img{
    float: left;
    width: 300px;
    background: #fff;
    padding: 5px;
    border: 1px solid #E4AF6B;
    margin-right: 10px;}
.about p{
    font-size: 16px;
    line-height: 24px;
    margin-bottom: 10px;
    text-align: justify;}



.footer {
  width: 100%;
  border: 1px solid aqua;
}

.footer p {
  margin: 20px 579px;
}


 #img_div{
    width: 80%;
    padding: 5px;
    margin: 15px auto;
    border: 1px solid #cbcbcb;
   }
   #img_div:after{
    content: "";
    display: block;
    clear: both;
   }
   #img{
    float: left;
    margin: 5px;
    width: 300px;
    height: 140px;
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
    <li><a href="contact.php">Contatc Us</a></li>

  </ul>

</div>






<div class="content">



<div class="about">
  
  <h2>Fast Food</h2>
<?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
        echo "<img src='images/".$row['image']."' >";
        echo "<p>".$row['image_text']."</p>";
      echo "</div>";
    }
  ?>
  
  </div>






</div>

<div class="footer"><p>&copy; Copyright Food Review.</p></div>


  
  

</body>


</html>