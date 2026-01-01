


<?php 

$DB_HOST = "sql100.infinityfree.com";
$DB_USER = "if0_40738784";
$DB_PASS = "Inki2003";
$DB_NAME = "if0_40738784_pg_database";

    
$conn=mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);



if(!$conn)
{
 echo "<script>alert('Error:Could_not_Connect_to_database');</script>";
}



?>




