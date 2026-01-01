 <?php   
        session_start();
        require"Config.php";
         if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== 1) 
         {
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
       <a href="User_Show.php">
       <input type="button" value="SHOW USERS" class="Bttn"  style="background-color:#2c974b;">
       </a>
       <br>
       <br>
         <a href="Food_Menu.php">
       <input type="button" value="FOOD_MENU" class="Bttn"  style="background-color:#2c974b;">
       </a>
       <br>
       <br>
       <a href="User_Login.php">
       <input type="button" value="Back" class="Bttn" style="background-color:#2c974b;">
       </a>

       </center>
  </body>
</html>