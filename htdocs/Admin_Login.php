<?php 
session_start();
require_once "Config.php";
global $conn;
if($_SERVER["REQUEST_METHOD"]==="POST")
{
 $user = $_POST['user'];
 $pass = $_POST['pass'];
 $query="SELECT *FROM admin WHERE user_name='$user' AND password='$pass'";
 $result = mysqli_query($conn,$query);
 if($result && mysqli_num_rows($result)===1)
 {
  $_SESSION['admin'] = 1;
  header("Location:Control_Panel.php");
  //session_destroy();
  exit();
 }
 else
 {
   echo "<script>alert('Invalid Username or Password')</script>";
 }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>



<center>

<div  class="fixed-element" style="height:80px;">
<center>
<h2 class="pg_title">Sunrise_PG Online Managment System</h2>
</center>
</div>



<body style="background-color:#4B9DA9;">






<script>

    function showpass()
    {
      let pass=document.getElementById("pass");
      if(pass.type==="password")
      {
        pass.type="text";
       }
       else
        {
        pass.type="password";
        }
    }
</script>



<br>
<br>    

<br>
<br>

<form method="post" class="form_style" style="height:450px;">

<br>
<h2 style="font-size:22px;font-family:sans-serif">Admin Login</h2>
<br>
<label class="u_label">Username:</label>
<br>
<input type="text" placeholder="Enter Username" class="user_style" name="user">
<br>
<br>
<label class="p_label">Password:</label>
<br>
<input type="password" placeholder="Enter Password" class="pass_style" id="pass" name="pass">
<br>
<br>
<input type="checkbox" onclick="showpass()">
<label>Show Password</label>
<br>
<br>
<input type="submit" value="Login" class="login" >
<br>
<br>
<a href="index.php">
<input type="button" value="Back" class="login" >
</a>
<br>


</form>
  
</body>
</center>

</html>