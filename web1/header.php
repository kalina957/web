<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php 
if(isset($title) && !empty($title)) { 
   echo $title; 
} 
else { 
   echo "Default title tag"; 
} ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./styles/styles.css">
    <link rel="stylesheet" type="text/css" media="screen" href="./styles/giftcard.css">
    <link rel="icon" href="logo.png" type="image/x-icon">
    <script src="main.js"></script>
</head>

<body>
<div class="hero-image" style="background-position: center 0px;background-image:url(./images/opo.jpg)";>
        <header>
                  
            <nav class="buttons">
                    <ul id='buttons-menu'>
                        <li id='logo'><a class="logo" href="index.php">
                            <img src="amiralogo.PNG" alt="" width="230px" height="60px">
                            </a></li>
                        <li><a href="watches.html"class="link-buttons">Watches</a></li>
                        <li><a href="aboutus.html"class="link-buttons">About us</a></li>
                        <li><a href="login.html"class="link-buttons">Log in</a></li>
                        <li><a href="sale.html"class="link-buttons">Sale</a></li>
                        <li><a href="gitfcard.php"class="link-buttons">Gift card</a></li>
                        <li ><div class="cart"><a href="index.html">
                        <img src="caart.png" alt="" width="50px" height="40px">
                                </a></div></li>
                    </ul>
            </nav>
      
      </header>