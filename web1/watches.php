<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link rel="stylesheet" type="text/css" media="screen" href="./styles/watches.css">
    <link rel="icon" href="./images/logo.png" type="image/x-icon">
    <script src="main.js"></script>
    <script src="cart.js">async</script>
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
                        <li><a href='gitfcard.php' class='link-buttons'>Gift card</a></li>
                        <li ><div class='cart'><a href='index.php'>
                                <img src="./images/caart.png" alt="" width="50px" height="40px">
                                </a></div></li>
                    </ul>
            </nav>
  
  </header>
    <div style="padding: 20px 20px 40px 20px ; margin: 20px 20px 20px 20px">
        <div class="container">
        <h1 style="text-align: center"> Spring Collection</h1>
        <h4> A creative look over the fresh and rosy springtime where you can enjoy the flowers blooming</h4>
        <div class="shop-item" style="display: inline-block; width: 14%; margin: 0px 60px  ">
            <img class="image"src="./images/watchrow1.png" alt="" style="width: 250px; " >
            <div class="collection-name">SpringTime</div >
                <div class="details">Rosy Sunrise - Gold / 33mm</div >
                    <div class="money">500 eu</div >
            <div class="button"style="text-align: center;">
                <button type="button" class="btn-add"> Add Item </button>
             </div>
        
    </div>
        <div class="shop-item"style="display: inline-block; width: 14%;margin: 0px 60px   ">
            <img class="image"src="./images/watch2row1.png" alt=""style="width: 250px; ">
            <div class="collection-name">SpringTime</div >
                <div class="details">Rosy Sunrise - Gold / 33mm</div >
                    <div class="money">500 eu</div >
            <div class="button"style="text-align: center;">
                <button type="button" class="btn-add"> Add Item </button>
             </div>
        </div>
        <div class="shop-item" style="display: inline-block; width: 14%; margin: 0px 60px  ">
            <img class="image"src="./images/watch3row1.png" alt=""style="width: 250px; ">
            <div class="collection-name">SpringTime</div >
                <div class="details">Rosy Sunrise - Gold / 33mm</div >
                    <div class="money">500 eu</div >
            <div class="button"style="text-align: center;">
                <button type="button" class="btn-add"> Add Item </button>
             </div>
        </div>
        <div class="shop-item" style="display: inline-block; width: 14%; margin: 0px 60px  ">
            <img class="image"src="./images/watch4row1.png" alt=""style="width: 250px; ">
            <div class="collection-name">SpringTime</div >
                <div class="details">Rosy Sunrise - Gold / 33mm</div >
                    <div class="money">500 eu</div >
            <div class="button"style="text-align: center;">
                <button type="button" class="btn-add"> Add Item </button>
             </div>
        </div>
    </div>
    <div class="container">
        <h1 style="text-align: center"> Black Chic Collection</h1>
        <h4> Glancing over the beautiful starry sky and hypnotize by the chic and bold moves</h4>
        <div class="shop-item" style="display: inline-block;width: 14%; margin: 0px 60px  ">
            <img class="image"src="./images/watchrow2.png" alt=""style="width: 250px;  ">
            <div class="collection-name">Night Chic</div >
                <div class="details">Rosy Sunrise - Gold / 33mm</div >
                    <div class="money">500 eu</div >
            <div class="button"style="text-align: center;">
                <button type="button" class="btn-add"> Add Item </button>
             </div>
        </div> <div class="shop-item" style="display: inline-block; width: 14%; margin: 0px 60px  ">
            <img class="image"src="./images/watch2row2.png" alt="" style="width: 250px; " >
            <div class="collection-name">Night Chic</div >
                <div class="details">Rosy Sunrise - Gold / 33mm</div >
                    <div class="money">500 eu</div >
            <div class="button"style="text-align: center;">
                <button type="button" class="btn-add"> Add Item </button>
             </div>
        </div >
        <div class="shop-item" style="display: inline-block; width: 14%;margin: 0px 60px   ">
            <img class="image"src="./images/watch3row2.png" alt=""style="width: 250px; ">
            <div class="collection-name">Night Chic</div >
                <div class="details">Rosy Sunrise - Gold / 33mm</div >
                    <div class="money">500 eu</div >
            <div class="button" style="text-align: center;">
                <button type="button" class="btn-add"> Add Item </button>
             </div>
        </div>
        <div class="shop-item" style="display: inline-block; width: 14%; margin: 0px 60px  ">
            <img class="image"src="./images/watch4row2.png" alt=""style="width: 250px; ">
            <div class="collection-name">Night Chic</div >
                <div class="details">Rosy Sunrise - Gold / 33mm</div >
                    <div class="money">500 eu</div >
            <div class="button"style="text-align: center;">
                <button type="button" class="btn-add"> Add Item </button>
             </div>
        </div>
    </div>
    <div class="container">
        <h1 class="shop-item" style="text-align: center"> Visual Paradise Collection</h1>
        <h4> Comibining the modern and retro look creating the perfect balance</h4>
        <div style="display: inline-block; width: 14%; margin: 0px 60px  ">
            <img class="image"src="./images/watchrow3.png" alt=""style="width: 250px; ">
            <div class="collection-name">Paradise</div >
                <div class="details">Rosy Sunrise - Gold / 33mm</div >
                    <div class="money">500 eu</div >
            <div class="button"style="text-align: center;">
                <button type="button" class="btn-add"> Add Item </button>
             </div>
        </div>
        <div class="shop-item" style="display: inline-block; width: 14%; margin: 0px 60px  ">
            <img class="image"src="./images/watch2row3.png" alt=""style="width: 250px; ">
            <div class="collection-name">Paradise</div >
                <div class="details">Rosy Sunrise - Gold / 33mm</div >
                    <div class="money">500 eu</div >
            <div class="button"style="text-align: center;">
                <button type="button" class="btn-add"> Add Item </button>
             </div>
        </div>
        <div class="shop-item" style="display: inline-block; width: 14%; margin: 0px 60px  ">
            <img class="image"src="./images/watch3row3.png" alt=""style="width: 250px; ">
            <div class="collection-name">Paradise</div >
                <div class="details">Rosy Sunrise - Gold / 33mm</div >
                    <div class="money">500 eu</div >
            <div style="text-align: center;">
                <button type="button" class="btn-add"> Add Item </button>
             </div>
        </div>
        <div class="shop-item" style="display: inline-block; width: 14%; margin: 0px 60px  ">
            <img class="image"src="./images/watch4row3.png" alt=""style="width: 250px; ">
            <div class="collection-name">Paradise</div >
                <div class="details">Rosy Sunrise - Gold / 33mm</div >
                    <div class="money">500 eu</div >
            <div style="text-align: center;">
                <button type="button" class="btn-add"> Add Item </button>
             </div>
        </div>
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
</body>

</html>