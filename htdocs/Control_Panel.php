 <?php   
        session_start();
        // require"Config.php";
         if($_SESSION['admin']!== 1) 
         {
         // echo"<script>alert('INVALID AUTHORIZATION')</script>";
          header("Location:Home.php");
          exit();
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



<body  class="body" style="background-color:#4B9DA9;">
  

    <center> 
  <h2 class="mes" >Welcome to Control Panel </h2>
   </center>
    <center>
     
    <div>
      <br>
      <br>
      <br>
     <img src="user.jpg">
     <br>
     <br>
    </div>
    
       <a href="Add.php">
       <input type="button" value="ADD  USER" class="Bttn" style="background-color:#2c974b;height:60px;width:300px;">
       </a>
       <br>
       <br>
       <a href="Delete.php">
       <input type="button" value="DELETE USER" class="Bttn" style="background-color:#2c974b;height:60px;width:300px;">
       <br>
       </a>
       <br>
       <a href="Update.php">
       <input type="button" value="UPDATE USER" class="Bttn" style="background-color:#2c974b;height:60px;width:300px;">
       </a>
       <br>
       <br>
       <a href="Show.php">
       <input type="button" value="SHOW USERS" class="Bttn"  style="background-color:#2c974b;height:60px;width:300px;">
       </a>
       <br>
       <br>
       <a href="Admin_Login.php">
       <input type="button" value="Back" class="Bttn" style="background-color:#2c974b;height:60px;width:300px;">
       </a>

       </center>
  </body>
</html>