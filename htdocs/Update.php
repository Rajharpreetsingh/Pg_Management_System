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
    <h2 class="mes" >Update Details Of User</h2>
    
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
        $Nun=$_POST['Nu_name'];
        $Npn=$_POST['Nphno'];
        $Nrn=$_POST['Nrn'];
        if(empty($un) || empty($pn) || empty($rn) || empty($Nun) || empty($Npn) || empty($Nrn))
        {
        echo '<script>alert("Error:Fill All the Deatils of User ")</script>';
        }
        else 
        {
        try
        {
        $query="UPDATE pg_users SET NAME='$Nun',PHONE_NUMBER='$Npn',ROOM_NO=$Nrn WHERE NAME='$un' AND PHONE_NUMBER='$pn' AND ROOM_NO=$rn;";    
      
        mysqli_query($conn,$query); 
        $query2="SELECT *FROM pg_users WHERE NAME='$Nun' AND PHONE_NUMBER='$Npn' AND ROOM_NO=$Nrn;";
        $result=mysqli_query($conn,$query2); 
        if($result->num_rows === 0)
        {
             echo '<script>alert("ERROR:No user With the Mentioned Details Found Check Details Entered")</script>';
        }
        else
        {
          echo '<script>alert("User Has been Successfully added")</script>';
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
         
      <label class="user_style">Old_Username</label>
      <input type="text"  class="user_style" name="u_name">
      <label class="user_style">New_Username</label>
      <input type="text"  class="user_style" name="Nu_name">
         
      <br>
      <br>
      <br>
         
      <label class="user_style">Old_Phone_No</label>
      <input type="text"  class="user_style" name="phno">
      <label class="user_style">New_Phone_No</label>
      <input type="text"  class="user_style" name="Nphno">
         
         
      <br>
      <br>
      <br>
         
      <label class="user_style">Old_Room_No</label>
      <input type="text"  class="user_style" name="rn">
      <label class="user_style">New_Room_No</label>
      <input type="text"  class="user_style" name="Nrn">
      
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      
      <input type="submit" value="UPDATE USER" class="Bttn" >
      <br>
      <br>
      <a href="Control_Panel.php">
      <input type="button" name="bufun" value="Back" class="Bttn" >
      </a>
      </form>




       </center>
</body>
</html>