<?php
$username=$_POST['username'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'kv_db');
$q="insert into user(username,password) values('$username','$password')";
$status=mysqli_query($con,$q);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
 <head>
 <title></title>
 </head>
 <body>
 <h1>Kolkata-places to visit</h1>
 <p><?php 
 if($status ==1)
 {
	 echo "Signup Successful ";
     echo"</br>";	 
    echo "Want to login?";
	
	echo '<a href="home.php">Login</a>';
 }
 else 
 {
	 echo"Signup failed ";
	 echo "try again";
	echo"</br>";
	echo '<a href="signupform.php">sign up </a>';
 }?>
 </p>
 </body>
 </html>