<?php

DEFINE('DB_USER','dbi403931');
DEFINE('DB_PASS','kalinaevelika');
DEFINE('DB_HOST','studmysql01.fhict.local');
DEFINE('DB_NAME','dbi403931');

$email= $_POST['email'];
$firstName= $_POST['firstName'];
$lastName= $_POST['lastName'];
$password= $_POST['password'];
$username= $_POST['username'];

$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
$sql = "INSERT INTO users (user_first,user_email,user_uid,user_pwd) 
VALUES ('$firstName','$email','$username','$password')";

if  (!mysqli_query($conn,$sql))
{
    echo 'Problem has accured while trying to connect';
}
else
    {
      echo 'You have connected successfully!';
    }

$conn->close();
?>