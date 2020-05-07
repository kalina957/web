<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Amira Watches</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="./styles/about us.css">
  <link rel="icon" href="./images/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="main.js"></script>
</head>

<body background="./images/opo.jpg" style="background-position: center;background-attachment: fixed;">
  <header>

  <nav class="buttons">
                    <ul id='buttons-menu'>
                        <li id='./images/logo'><a class="logo" href="index.php">
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
  <div id='pictures'>
    <div class="pic"><img src="./images/pic1.jpg" alt=""></div>
    <div class="pic"><img src="./images/pic2.jpg" alt=""></div>
      <div class="pic"><img src="./images/pic3.jpg" alt=""></div>
        <div class="pic"><img src="./images/pic7.jpg" alt=""></div>
          <div class="pic"><img src="./images/pic5.jpg" alt=""></div>
            <div class="pic"><img src="./images/pic6.jpg" alt=""></div>
</div>
 <div style="display:flex;">
      <div class="container-right">
        <h3>With our HQ based just off the canals of Amsterdam we believe in a collaborative and positive work
          environment. We have a team of young individuals from all over the world and have led a global approach from
          day 1. Working in a relaxed, social atmosphere we believe “team” comes first and regularly hang out at Friday
          drinks and host fun company events. Our employees are our brand ambassadors, meaning you’ll never be without a
          Rosefield watch!
        </h3>
      </div>
      <div class="container-right-down">
        <h3>With our HQ and warehouse infrastructure both located in Amsterdam, we’re never far away from each other
          whether you work in the Creative Marketing team or the Warehouse Logistics team. This unique set-up allows for
          insight into all aspects of the business for a 360° approach, no matter what department you’re a part of.
        </h3>
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
      <div id='contact-buttons'>
        <a href="http://www.insta.com"><img src="./images/insta.png" alt="" class="contact-pics"></a>
        <a href="http://www.facebook.com"><img src="./images/icon-fb.png" alt="" class="contact-pics"></a>
        <a href="http://www.twitter.com"><img src="./images/twitter-icon.png" alt="" class="contact-pics"></a>
      </div>
    </div>
  </footer>
  <script src="./aboutus.js"></script>
</body>

</html>