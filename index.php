<?php

$host="localhost";
$user="root";
$password="";
$db="demo";

$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,$db);

if(isset($_POST['username'])){
	$uname=$_POST['username'];
	$password=$_POST['password'];
	
	$sql="select* from loginform where user='".$uname."'AND pass='".$password."' limit 1";
	
	$result=mysql_query($sql);
	
	if(mysqli_num_rows($result)==1){
		echo "you Have Successfuly Logged in";
		exit();
	}
else{
	echo"You Have Entered Incorrect Password";
	exit();
}
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<div class="login-box">
  <h1>Login</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Username">
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Password">
  </div>
  
  
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="Email" placeholder="Email">
  </div>
  
   <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="Mobile Number" placeholder="Mobile Number">
  </div>

  <input type="button" class="btn" value="Sign in">
</div>
  </body>
</html>
