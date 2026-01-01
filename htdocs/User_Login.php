<?php 
session_start();
require_once "Config.php";
global $conn;
error_reporting(E_ALL);
ini_set('display_errors', 1);

if($_SERVER["REQUEST_METHOD"]==="POST")
{
 $user = $_POST['user'];
 $pass = $_POST['pass'];
 $query="SELECT *FROM pg_users WHERE NAME='$user' AND PHONE_NUMBER='$pass';";
 $result = mysqli_query($conn,$query);
 if($result && mysqli_num_rows($result)===1)
 {
 $_SESSION['loggedin']=1;
 header("Location:User_Control.php");
 exit();
 }
 else
 {
   echo "<script>alert('Invalid NAME or PHONENUMBER')</script>";
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
<br>
<br>



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
<form method="post" class="form_style" style="height:500px;" autocomplete="on">

<br>

<h2 style="font-size:22px;font-family:sans-serif">User Login</h2>

<label class="u_label">Username:</label>
<br>
<input type="text" placeholder="Enter Username" class="user_style" name="user" autocomplete="given-name">
<br>
<br>
<label class="p_label">Phone Number:</label>
<br>
<input type="text" placeholder="Enter Phone Number" class="pass_style" id="pass" name="pass" autocomplete="given-name">
<br>
<br>
<br>
<br>
<input type="submit" value="Login" class="login" >
<br>
<br>
<br>
<a href="index.php">
<input type="button" value="Back" class="login" >
</a>
<br>
<br>
<label>Dont Have an account?</label>

<a href="User_Signup.php">Sign Up</a>
<br>
<br>
    
<a href="User_Signup.php">
<input type="button" value="Register" class="login" >
</a>


</form>



    
</body>
</center>

</html>