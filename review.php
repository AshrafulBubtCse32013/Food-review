
<?php

//index.php



$error = '';
$output = '';

$connect = new PDO("mysql:host=localhost;dbname=wdr", "root", "");

if(isset($_POST["add"]))
{
    if(empty($_POST["user_review"]))
    {
        $error = '<label class="text-danger">Reviewer Address List is required</label>';
    }
    else
    {
        $array = explode("\r\n", $_POST["user_review"]);

        $email_array = array_unique($array);

        $query = "
        INSERT INTO review 
        (user_review) 
        VALUES ('".implode("'),('", $email_array)."')
        ";

        $statement = $connect->prepare($query);

        $statement->execute();

        $error = '<label class="text-success">Data Inserted Successfully</label>';
    }
}

$query = "
SELECT * FROM review 
ORDER BY user_list_id DESC
";

$statement = $connect->prepare($query);

$statement->execute();

if($statement->rowCount() > 0)
{
    $result = $statement->fetchAll();
    foreach($result as $row)
    {
        $output .= '
        <tr>
            <td>'.$row["user_review"].'</td>
        </tr>
        ';
    }
}
else
{
    $output .= '
        <tr>
            <td>No Data Found</td>
        </tr>
    ';
}

?>

<html>




    <head>
        <title>Food Review</title>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


<style>

body {
    margin: 7px;
}
    
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
    margin-bottom: 12px;
    margin-top: 21px;
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

.rev {
    width: 100%;
    margin-top: 160px;
    margin-bottom: 160px;
}

.footer {
    width: 100%;
    border: 1px solid aqua;
}

.footer p {
    margin: 20px 579px;
}

</style>



    </head>  
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


<div class="register"><a href="reg.php"><p>Register</p></a>Or<a href="home.php"><p>Sign Out</p></a></div>



</div>

<div class="nav">
    
    <ul>
        
        <li><a href="f2.php">Home</a></li>
        <li><a href="#">Menu</a>

            <ul> 
        
        <li><a href="im.php">Fast Food</a>

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
        <li><a href="im1.php">Set Menu</a>


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
        <li><a href="im2.php">Soft Drinks</a>

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


<div class="rev">
    



        
        <div class="container">    
            <div class="row content">
                <div class="col-sm-2">
                    &nbsp;
                </div>
                <div class="col-sm-8 text-left">
                    <br />
                    <h3 align="center">Welcome to Review Section :)</h3>
                    <br />
                    <div align="center"><?php echo $error; ?></div>
                    <form method="post">
                        <div class="row">
                            <label class="col-md-3 text-right">Enter Your Review</label>
                            <div class="col-md-9">
                                 <textarea name="user_review" class="form-control" rows="10"></textarea>
                            </div>
                        </div>
                        <br />
                        <div align="center">
                            <input type="submit" name="add" class="btn btn-primary" value="Add" />
                        </div>
                    </form>
                    <br />
                    <h3 align="center">Reviewer List</h3>
                    <br />
                    <table class="table table-striped table-bordered">
                        <tr>
                            <td>User Review</td>
                        </tr>
                        <?php
                        echo $output;
                        ?>
                    </table>
                </div>
                <div class="col-sm-2">
                    &nbsp;
                </div>
            </div>
        </div>

    </div>

</div>


<div class="footer"><p>&copy; Copyright Food Review.</p></div>



    </body>  
</html>