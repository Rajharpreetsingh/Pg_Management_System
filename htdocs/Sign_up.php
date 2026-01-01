<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>



<center>

<div  class="fixed-element">
<center>
<h2 class="pg_title">Sunrise_PG Online Managment System</h2>
</center>
</div>
<?php 

require_once "Config.php";
global $conn;
session_start();
if($_SERVER["REQUEST_METHOD"]==="POST")
{
 global $conn;
 $user = $_POST['user'];
 $pass = $_POST['pass'];
 $query="INSERT INTO admin(user_name,password)values('$user','$pass');";
 if(empty($user) || empty($pass) )
 {
     echo "<script>alert('Error:Enter All the Details to Register')</script>";
 }
 else
  {
   if(mysqli_query($conn,$query))
   {
       $_POST['user']="";
       $_POST['pass']="";
       echo "<script>alert('Registration Sucessfull')</script>";   
    }
    else
    {
    echo "<script>alert('Registration UnSucessfull')</script>";
    }
  }
}

?>



<body style="background-color:#4B9DA9;">



<?php 


?>


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
<form method="post" >
<div class="form_style">
<br>

<h2 style="font-size:22px;font-family:sans-serif">Sign up</h2>

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
<input type="submit" value="Sign up" class="login" >
<br>
<br>
<label>Already have an account?</label>

<a href="index.php">Login.</a

</div>
</form>



    
</body>
</center>

</html>