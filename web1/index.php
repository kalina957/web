<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Amira Watches</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./styles/styles.css">
    <link rel="icon" href="./images/logo.png" type="image/x-icon">
    <script src="main.js"></script>
</head>

<body>
<div class="hero-image" style="background-position: center 0px;background-image:url(./images/opo.jpg)";>
        <header>
                  
            <nav class="buttons">
                    <ul id='buttons-menu'>
                        <li id='logo'><a class="logo" href="index.php">
                            <img src="./images/amiralogo.PNG" alt="" width="230px" height="60px">
                            </a></li>
                        <li><a href="watches.php"class="link-buttons">Watches</a></li>
                        <li><a href="aboutus.php"class="link-buttons">About us</a></li>
                        <?php
									if(isset($_SESSION['loggedin']))
									{
										echo "<li><a href='logout.php'class='link-buttons'>Log out</a></li>";
									}
									else
									{
										echo	"<li><a href='login-form.php'class='link-buttons'>Log in</a></li>";
									}
									?>
                        <li><a href="sale.php"class="link-buttons">Sale</a></li>
                        <li><a href="gitfcard.php"class="link-buttons">Gift card</a></li>
                        <li ><div class="cart"><a href="index.php">
                                <img src="./images/caart.png" alt="" width="50px" height="40px">
                                </a></div></li>
                    </ul>
            </nav>
      
      </header>
<div class="centered">Welcome to Amira</div>


   
</div>
<div class="text">
        <h2>Watch our video</h2>
       <img src="play.png" alt=""class="contact-pics">
    </div>
    <div class="vl"></div>
    <div id='video-wrap'>
        <video id='video' controls>
            <source src="galaxy.mp4" type="video/mp4">
        </video>
    </div>
    <div class="text">
        <h1>Follow us</h1>
        <a href="http://www.insta.com"><img src="insta5.png" alt=""class="contact-pics"></a>
    </div>
    <div class="vl"></div>
    <div id='pictures'>
        <img src="./images/jew1.jpg" alt="" class="pic">
        <img src="./images/jew2.jpg" alt=""class="pic">
        <img src="./images/jew3.jpg" alt=""class="pic">
        <img src="./images/jew4.jpg" alt=""class="pic">
        <img src="./images/jew5.jpg" alt=""class="pic">
        <img src="./images/jew6.jpg" alt=""class="pic">
    </div>
    <footer style="width:100%; ">
        <div style="display:flex;  justify-content: flex-start; ">
            <div id="contact-block-1">
                <h2>Contact us</h2>
                <address style="font-size: 18px">
                    126, Geldropseweg <br>
                    5611SL, Eindhoven
                </address>
            </div>
            <div id="contact-block-2">
                <h3>Send us your picture with one of our watches here:</h3>
                <form action="">
                    <button class="btn-enter">Upload</button>
                </form>
                <h3>See pictures of our clients:</h3>
                <img src="./images/hazar.png" height=300px width=450px></img>

            </div>
        </div>
        <div id='contact-buttons-wrap'>
            <div id='contact-buttons '>
                <a href="http://www.insta.com"><img src="insta5.png" alt="" class="contact-pics"></a>
                <a href="http://www.facebook.com"><img src="fb1.png" alt="" class="contact-pics"></a>
                <a href="http://www.twitter.com"><img src="twitter.jpg" alt="" class="contact-pics"></a>
            </div>
        </div>
    </footer>
</body>

</html>