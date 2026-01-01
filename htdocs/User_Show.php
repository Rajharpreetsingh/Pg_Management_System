 <?php   
        session_start();
         require"Config.php";
         if($_SESSION['loggedin'] !== 1) 
         {
          header("Location:Home.php");
          exit();
        }      
?>


<!DOCTYPE html>
<html>
<head>
    <title>PG Users</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body  style="background-color:#4B9DA9;">

<center>
<h2>PG User Details</h2>
<table style="background-color:white;border:2px solid black;">
    <tr class="Table">
        <th style="background-color:green;border:2px solid black;color:white;">User_id</th>
        <th style="background-color:green;border:2px solid black;color:white;">Name</th>
        <th style="background-color:green;border:2px solid black;color:white;">Phone</th>
        <th style="background-color:green;border:2px solid black;color:white;">Room No</th>
    </tr>

<?php
    
         error_reporting(E_ALL);
         ini_set('display_errors', 1);
         require"Config.php";
         $sql = "SELECT *FROM pg_users;";
         $result = mysqli_query($conn, $sql);
       
    if (mysqli_num_rows($result) >= 0) 
    {
        while ($row = mysqli_fetch_assoc($result)) 
        {
            echo "<tr>
                    <td style='border:2px solid black;'>{$row['USER_ID']}</td>
                    <td style='border:2px solid black;'>{$row['NAME']}</td>
                    <td style='border:2px solid black;'>{$row['PHONE_NUMBER']}</td>
                    <td style='border:2px solid black;'>{$row['ROOM_NO']}</td>
                  </tr>";
        }
    } 
    else 
    {
        echo "<tr><td colspan='4'>No records found</td></tr>";
    }
    

?>

</table>
<br>
<a href="User_Control.php">
<input type="button"class="Bttn" value="Back"></input>
</a>
</center>



</body>
</html>
