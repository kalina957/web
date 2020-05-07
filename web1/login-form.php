<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link rel="stylesheet" type="text/css" media="screen" href="./styles/styles.css">
    <link rel="stylesheet" type="text/css" media="screen" href="./styles/login.css">
    <link rel="icon" href="./images/logo.png" type="image/x-icon">


</head>

<body background="./images/opo.jpg" style="background-position: center;background-attachment: fixed;">
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
  <div class="vl"></div>
  <h1 style="margin-top:30px;color:white;font-weight: bold;font-size:40px;">
  Create or login an account
</h1>
      <div class="vl"></div>

    <div style="width: 100%; display:flex;" >
        <div class="container-left">
            <form action="login.php" method="POST" style="display: inline-block; width: 40vw; vertical-align: top;text-align: center; ">
                <h1 style="padding-right: 30px">Have an account?</h1>
                <div class="vl"></div>
                <h3 style="text-align: center;">If u have an account, please log in.</h3>
                <h3>Email Address</h3>
                <input name="email" type="text" style="border-color:white; border-style:solid;"onfocusout="checkEmail()" >
                <h3>Password</h3>
                <input name= "password" type="password" style="border-color:white; border-style:solid;">
                <button type="submit" name="submit" value="Submit" class="btn-enter"  >Login</button>
                
            </form>
        </div>
        <div class="container-right">
            <form action="register-form.php" method="GET" style="display: inline-block; width: 40vw;vertical-align: top">
                <h1 style="margin-top:-70px;">New here?</h1>
                <div class="vl"></div>
                <h3 style="text-align: center;">Registration is free and easy</h3>
                <h3 style="text-align: center;">Click here</h3>
                <div style="text-align: center;">
                   
                    <button type="submit" value="Register" class="btn-enter"> 
                 Register</button>
                </div>
            </form>
        </div>
    </div>
    <footer style="width:100%; ">
        <div style="display:flex;  justify-content: flex-start; ">
            <div id="contact-block-1" class="contact-block">
                <h2>Contact us</h2>
                <address style="font-size: 20px">
                    126, Geldropseweg <br>
                    5611SL, Eindhoven
                </address>
            </div>
            <div id="contact-block-2" class="contact-block">
                <h3>Send us your picture with one of our watches here:</h3>
                <form action="">
                    <button class="btn-enter">Upload</button>
                </form>
                <h3>See pictures of our clients:</h3>
                <img src="./images/hazar.png" height=300px width=450px id="pic-client"></img>

            </div>
        </div>
        <div id='contact-buttons-wrap'>
            <div id='contact-buttons '>
                <a href="http://www.insta.com"><img src="./images/insta.png" alt="" class="contact-pics"></a>
                <a href="http://www.facebook.com"><img src="./images/icon-fb.png" alt="" class="contact-pics"></a>
                <a href="http://www.twitter.com"><img src="./images/twitter-icon.png" alt="" class="contact-pics"></a>
            </div>
        </div>
    </footer>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script src='./main.js'> </script>
    
</body>

</html>