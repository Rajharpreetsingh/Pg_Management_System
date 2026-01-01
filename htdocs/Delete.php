 <?php   
         session_start();
         require"Config.php";
         if($_SESSION['admin'] !== 1) 
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



<body style="background-color:#4B9DA9;">
    <center>

    <div>
      <br>
      <br>
      <br>
     <img src="user.jpg">
     <br>
     <br>
    <h2 class="mes" >Enter Details For Deleting User</h2>
    
    </div>
     <?php  
       require"Config.php";
       session_start(); 
       error_reporting(E_ALL);
       ini_set('display_errors', 1);
       function au()
       {
        global $conn; 
        $un=$_POST['u_name'];
        $pn=$_POST['phno'];
        $rn=$_POST['rn'];
        if(empty($un) || empty($pn) || empty($rn))
        {
        echo '<script>alert("Error:Fill All the Deatils of User ")</script>';
        }
        else 
        {
        try
        {
        $query1="DELETE FROM pg_users WHERE NAME='$un' AND PHONE_NUMBER='$pn' AND ROOM_NO=$rn;";    
        $query2="SELECT *FROM pg_users WHERE NAME='$un' AND PHONE_NUMBER='$pn' AND ROOM_NO=$rn;";
        $result=mysqli_query($conn,$query2); 
        if($result->num_rows === 0)
        {
          echo '<script>alert("ERROR:No user With the Mentioned Details ")</script>';
        }
        else
        {
          mysqli_query($conn,$query1); 
          echo '<script>alert("User Has been Successfully Deleted")</script>';
        }
        }
        catch(Exception $e)
        {
            echo '<script>alert("ERROR:Make Sure Entered Details are Correct")</script>';
        }
        }
        
       }
      
       if($_SERVER["REQUEST_METHOD"] == "POST") 
       {
            au();
       }
     

     ?>

     <form method="post">
     
         <br>
         <br>
         
      <label class="user_style">Name</label>
      <input type="text"  class="user_style" name="u_name">

         
      <br>
      <br>
      <br>
         
      <label class="user_style">Phone_No</label>
      <input type="text"  class="user_style" name="phno">

         
         
      <br>
      <br>
      <br>
         
      <label class="user_style">Room_No</label>
      <input type="text"  class="user_style" name="rn">
     
      
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      
      <input type="submit" value="DELETE USER" class="Bttn" >
      <br>
      <br>
      <a href="Control_Panel.php">
      <input type="button" name="bufun" value="Back" class="Bttn" >
      </a>
      </form>




       </center>
</body>
</html>