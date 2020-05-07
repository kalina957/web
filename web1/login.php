<?php

echo 'hello'; 

$email = $_POST['email'];
$submittedword = $_POST['password'];

$username ='dbi403931';
$dbpassword = 'kalinaevelika';
$dbname = 'dbi403931';
 // Create DB connection
$conn = new PDO('mysql:host=studmysql01.fhict.local;dbname='.$dbname, $username,  $dbpassword);

$sql = "select * from users where user_email=:name and user_pwd=:password;";

$stmt = $conn->prepare($sql);
$stmt->execute([':name'=> $email, ':password'=>$submittedword]);

$result = $stmt->fetchAll();

if (count($result)== 1)
{

//  go to the secret page
 echo'success';
  session_start();
 $_SESSION['loggedin'] = 'true';

 //setcookie('loggedin','true');
 header("Location: index.php");
}
else
{
  echo'error';
// credentials wrong => go back to welcome
  setcookie('error',"Login credentials wrong");
 header("Location: register-form.php");
}
$conn->close();
?>