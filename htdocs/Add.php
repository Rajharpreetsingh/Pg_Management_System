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
    <h2 class="mes" >Add Details Of User</h2>
    </div>
     <?php  
       require"Config.php";
      
       session_start();
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
           $query3="SELECT *FROM pg_users WHERE PHONE_NUMBER='$pn';";
           $r=mysqli_query($conn,$query3);
           if($r->num_rows===1)
           {
               echo "<script>alert('Error:A User With This Phone Number Already Exist')</script>";
           }
           else
           {
           try
           {
           $query="INSERT INTO pg_users(NAME,PHONE_NUMBER,ROOM_NO) values('$un','$pn',$rn);";
        
           if(mysqli_query($conn,$query))
           {
                echo '<script>alert("User Has been Successfully added")</script>';
           }
           else
           {
                
                $err=mysqli_error($conn);
                echo "<script>alert('$err')</script>";
           }
           }
           catch(Exception $e)
           {
               $mes=$e->getMessage();
               echo "<script>alert('Error:Make Sure Correct Details are Entered')</script>";
           }
           
        }
        }
       }
      
       if($_SERVER["REQUEST_METHOD"] == "POST") 
       {
            au();
       }
     

     ?>

     <form method="post">
      <label class="user_style">Username</label>
      <input type="text"  class="user_style" name="u_name">
      <br>
      <br>
      <br>
      <label class="user_style">Phone No</label>
      <input type="text"  class="user_style" name="phno">
      <br>
      <br>
      <br>
      <label class="user_style">Room No</label>
      <input type="text"  class="user_style" name="rn">
      
      
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      
      <input type="submit" value="ADD  USER" class="Bttn" >
      <br>
      <br>
      <a href="Control_Panel.php">
      <input type="button" name="bufun" value="Back" class="Bttn" >
      </a>
      </form>




       </center>
</body>
</html>