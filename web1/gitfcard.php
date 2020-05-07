<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Amira Watches</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./styles/giftcard.css">
    <link rel="icon" href="./images/logo.png" type="image/x-icon">
    <script src="main.js"></script>
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
    
    <div class="flip-box">
                        <div class="flip-box-inner">
                            
                   <div class="flip-box-front">
                       <img src ="./images/amiravoucher.png" alt="">
                    </div>  
                
                <div class="flip-box-back">
                        <img src ="./images/amiraterms.png" alt="" left="40px"> 
                    </div> 
                    </div>
                </div>
    <div class="container">

        <form action="action_page.php">
                
      <h1 >Gift voucher</h1>
      <h4>This voucher will be sent to you by email</h4>
          <label for="fname">First Name</label>
          <input type="text" id="fname" name="firstname" placeholder="Your name..">
      
          <label for="lname">Last Name</label>
          <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      
          <label for="country">Country</label>
          <select id="country" name="country">
            <option value="australia">Australia</option>
            <option value="canada">Canada</option>
            <option value="usa">USA</option>
          </select>
      
          <label for="subject">Subject</label>
          <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      
          <input type="submit" value="Submit">
      
        </form>
      </div>
      
      <div id='pictures'>
            <img src="./images/jew1.jpg" alt="">
            <img src="./images/jew2.jpg" alt="">
            <img src="./images/jew3.jpg" alt="">
            <img src="./images/jew4.jpg" alt="">
            <img src="./images/jew5.jpg" alt="">
            <img src="./images/jew6.jpg" alt="">
        </div>
    <footer style="width:100%; ">
        <div style="display:flex;  justify-content: flex-start; ">
            <div id="contact-block-1" class="contact-block">
                <h2>Contact us</h2>
                <address style="font-size: 18px">
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
</body>

</html>
