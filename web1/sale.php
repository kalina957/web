<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link rel="stylesheet" type="text/css" media="screen" href="./styles/sale.css">
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
    <div class="hero-image" style="background-position: center 0px;background-image:url(./images/oo.jpg);">
        <div class="hero-text">
            <h1>Ocean pearls</h1>
            <h3>Get 20% off this pearl collection.<br>Valid until May 1st.</h3>
        </div>
        <div id="sale-sticker"><img src="./images/sale25.png" width=300px height=300px alt=""></div>
        <div id="sale-sticker1"><img src="./images/sale50.png" width=300px height=300px alt=""></div>
        <div id="sale-sticker2"><img src="./images/upto50.png" width=300px height=300px alt=""></div>
    </div>
    <div class="container">
        <h1> Ocean pearl Collection</h1>
        <h4> Waves,waves,waves...</h4>

        <div class="row-wrapper">
            <div class="info-wrapper">
                <img src="./images/salewatch.png" alt=""  class="myImg">
                <div class="text-wrapper">
                    <div class="collection-name">Gold pearl</div>
                    <div class="details">Rosy Sunrise - Gold / 33mm</div>
                    <div class="money">500 eu<span>300 eu</span></div>
                    <div style="text-align: center;">
                        <input type="button" value="Add Item" class="btn-add">
                    </div>
                </div>
            </div>


            <div class="info-wrapper">
                <img src="./images/salewatch1.png" alt="" class="myImg">
                <div class="text-wrapper">
                    <div class="collection-name">Rosy pearl</div>
                    <div class="details">Rosy Sunrise - Gold / 33mm</div>
                    <div class="money">500 eu<span>300 eu</span></div>
                    <div style="text-align: center;">
                        <input type="button" value="Add Item" class="btn-add">
                    </div>
                </div>
            </div>

            <div class="info-wrapper">
                <img src="./images/salewatch2.png" alt=""  class="myImg">
                <div class="text-wrapper">
                    <div class="collection-name">Crystal pearl</div>
                    <div class="details">Rosy Sunrise - Gold / 33mm</div>
                    <div class="money">500 eu<span>300 eu</span></div>
                    <div style="text-align: center;">
                        <input type="button" value="Add Item" class="btn-add">
                    </div>
                </div>
            </div>
        </div>
        <div class="row-wrapper">
            <div class="info-wrapper">
                <img src="./images/salewatch3.png" alt=""  class="myImg">
                <div class="text-wrapper">
                    <div class="collection-name">Black pearl</div>
                    <div class="details">Rosy Sunrise - Gold / 33mm</div>
                    <div class="money">500 eu<span>300 eu</span></div>
                    <div style="text-align: center;">
                        <input type="button" value="Add Item" class="btn-add">
                    </div>
                </div>
            </div>

            <div class="info-wrapper">
                <img src="./images/salewatch4.png" alt=""  class="myImg">
                <div class="text-wrapper">
                    <div class="collection-name">Day pearl</div>
                    <div class="details">Rosy Sunrise - Gold / 33mm</div>
                    <div class="money">500 eu<span>300 eu</span></div>
                    <div style="text-align: center;">
                        <input type="button" value="Add Item" class="btn-add">
                    </div>
                </div>
            </div>

            <div class="info-wrapper">
                <img src="./images/salewatch5.png" alt="" class="myImg">
                <div class="text-wrapper">
                    <div class="collection-name">Stone pearl</div>
                    <div class="details">Rosy Sunrise - Gold / 33mm</div>
                    <div class="money">500 eu<span>300 eu</span> </div>
                    <div style="text-align: center;">
                        <input type="button" value="Add Item" class="btn-add">
                    </div>
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