<?php
session_start();
//start of the session -> if we don't mention start of session then the session_destroy() function is not working
session_destroy();
//session ends and the user is logged out
header("LOCATION:index.php");
//after the session is destroyed the user goes back to our homepage
?>