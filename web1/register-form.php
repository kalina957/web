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
                                <img src="caart.png" alt="" width="50px" height="40px">
                                </a></div></li>
                    </ul>
            </nav>
  
  </header>
  <h1 style="text-align: left;">Create or login an account</h1>
      <div class="vl"></div>

    <div style="width: 100%;">
        
        <div style="display: inline-block; width: 10px; height:inherit; "></div>
        <div class="container-register">
            <form  style="display: inline-block; width: 40vw;vertical-align: top" method="POST" action="register.php" >
                <h1>New here?</h1>
                <h3 style="text-align: center;">Registration is free and easy</h3>
                <h3>First Name</h3>
                <input name= "firstName" type="text" id="firstName" onfocusout="checkFirstName()" placeholder="firstName">
                <span id="wrongfName" style="display:none;color: red">Incorrect first name!</span>
                <h3>Last Name</h3>
                <input name= "lastName"  type="text" id="lastName" onfocusout="checkLastName()" placeholder="lastName">
                <span id="wronglName" style="display:none;color: red">Incorrect last name!</span>
                <h3>Email</h3>
                <input name= "email"  type="text" id="emailInput" onfocusout="checkEmail()" placeholder="email">
                <span id="wrongEmail" style="display:none;color: red">Incorrect email!</span>
                <h3>Username</h3>
                <input  name= "username" type="text" id="username" placeholder="username">
                <h3>Password</h3>
                <input  name= "password" type="password" style="display:block" id="passwordInput" placeholder="password">

                <progress max="100" value="0" id="strength" style="width:230px;margin: 20px 0px 0px 0px"></progress>
                <div style="text-align: center;">
                    <input type="submit" value="Register" class="btn-enter" >
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
    <script src='./main.js'> </script>
    
</body>

</html>