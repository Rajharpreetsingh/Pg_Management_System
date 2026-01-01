 <?php   
        session_start();
         require"Config.php";
         if($_SESSION['admin'] !== 1|| $_SESSION['loggedin'] !== 1) 
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
     <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body  style="background-color:#4B9DA9;">

<center>
<h2>PG FOOD MENU</h2>
<table class="table table-hover">
    <tr >
         <h2>This Menu is Valid For 1 to 15 Each Month</h2>
        <th style="background-color:green;border:2px solid black;color:white;">TIME</th>
        <th style="background-color:green;border:2px solid black;color:white;">MONDAY</th>
        <th style="background-color:green;border:2px solid black;color:white;">TUESDAY</th>
        <th style="background-color:green;border:2px solid black;color:white;">WEDNESDAY</th>
        <th style="background-color:green;border:2px solid black;color:white;">THRUSDAY</th>
        <th style="background-color:green;border:2px solid black;color:white;">FRIDAY</th>
        <th style="background-color:green;border:2px solid black;color:white;">SATURDAY</th>
        <th style="background-color:green;border:2px solid black;color:white;">SUNDAY</th>
    </tr>
      <tr>
      <td style='border:2px solid black;'>BreakFast 8:00 to 9:00 AM</td>
      <td style='border:2px solid black;'>Aloo Paratha + Tea / Curd</td>
      <td style='border:2px solid black;'>Idli SAMBHAR</td>
      <td style='border:2px solid black;'>Sandwich + Tea</td>
      <td style='border:2px solid black;'>Mix Paratha + Tea</td>
      <td style='border:2px solid black;'>Besan Chilla </td>
      <td style='border:2px solid black;'>Pav Bhaji</td>
      <td style='border:2px solid black;'>Poha + TEA </td>
      </tr>
      
      <tr>
      <td style='border:2px solid black;'>Lunch 1:00 to 1:00 PM</td>
      <td style='border:2px solid black;'>Dal Tadka,Mix Veg,Roti, Salad ,Rice , Achaar</td>
      <td style='border:2px solid black;'>Patta Gobhi Matar,Dal, Roti , Salad , Rice , Achar</td>
      <td style='border:2px solid black;'>Ghiya Kofte, Aloo ShimlaMirch,Salad,Rice,Roti,Achar</td>
      <td style='border:2px solid black;'>Poori Sabji ,Raita , Salad</td>
      <td style='border:2px solid black;'>Lobhia,Tori,Rice , Roti , salad , Achar</td>
      <td style='border:2px solid black;'>Veg Biryani , Raita</td>
      <td style='border:2px solid black;'>Chole Bhature , Rice , Raita</td>
      </tr>  
         
      <tr>
      <td style='border:2px solid black;'>Snacks 5:00 PM</td>
      <td style='border:2px solid black;'>Bread Pakoda + Tea</td>
      <td style='border:2px solid black;'>Black Chane,Tea</td>
      <td style='border:2px solid black;'>Chilli Potato + Tea</td>
      <td style='border:2px solid black;'>Samosa,Tea</td>
      <td style='border:2px solid black;'>Veg Noodles,Tea</td>
      <td style='border:2px solid black;'>Aloo Pyaaj Pakodi , Tea</td>
      <td style='border:2px solid black;'>Macroni,Tea</td>
      </tr>     
      
      <tr>
      <td style='border:2px solid black;'>Dinner 8:30 to 10:00 PM</td>
      <td style='border:2px solid black;'>Rajma , Bhindi Fry , Rice ,Roti , Salad , Achaar</td>
      <td style='border:2px solid black;'>Dal Makhni,Loki, Roti,Salad, Achaar, Rice</td>
      <td style='border:2px solid black;'>Matar Paneer , Dum Aloo ,Roti ,Rice, Salad , Achaar</td>
      <td style='border:2px solid black;'>Matar Mushroom, Chole,Roti,Salad, Rice</td>
      <td style='border:2px solid black;'>Arhar Dal,Aloo Matar, Rice,Roti,Achaar</td>
      <td style='border:2px solid black;'>Ghiya Kofte , Chana Dal,Rice , Roti , Salad , Achaar</td>
      <td style='border:2px solid black;'>Aloo+Vegetable,Dal ,Roti , Rice , Sweet Dish</td>
      </tr>    
          
</table>
<br>
<br>
<table style="background-color:white;border:2px solid black;">
    <tr class="Table">
         <h2>This Menu is Valid For 16 to 30 Each Month</h2>
        <th style="background-color:green;border:2px solid black;color:white;">TIME</th>
        <th style="background-color:green;border:2px solid black;color:white;">MONDAY</th>
        <th style="background-color:green;border:2px solid black;color:white;">TUESDAY</th>
        <th style="background-color:green;border:2px solid black;color:white;">WEDNESDAY</th>
        <th style="background-color:green;border:2px solid black;color:white;">THRUSDAY</th>
        <th style="background-color:green;border:2px solid black;color:white;">FRIDAY</th>
        <th style="background-color:green;border:2px solid black;color:white;">SATURDAY</th>
        <th style="background-color:green;border:2px solid black;color:white;">SUNDAY</th>
    </tr>
      <tr>
      <td style='border:2px solid black;'>BreakFast 8:00 to 9:00 AM</td>
      <td style='border:2px solid black;'>Veg Mayo Sandwich ,Tea</td>
      <td style='border:2px solid black;'>Pyaj Paratha,Curd/Tea</td>
      <td style='border:2px solid black;'>Bread Pakoda,Tea</td>
      <td style='border:2px solid black;'>Dal Paratha , Tea</td>
      <td style='border:2px solid black;'>Dosa</td>
      <td style='border:2px solid black;'>Aloo Sabji,Paratha , Tea</td>
      <td style='border:2px solid black;'>Pasta + TEA </td>
      </tr>
      
      <tr>
      <td style='border:2px solid black;'>Lunch 1:00 to 1:00 PM</td>
      <td style='border:2px solid black;'>Aloo Soyabeen ,Rajma ,Roti, Salad ,Rice , Achaar</td>
      <td style='border:2px solid black;'>Dal Tadka ,Baigan Bharta, Roti , Salad , Rice , Achar</td>
      <td style='border:2px solid black;'>Ghiya Kofte, Aloo ShimlaMirch,Salad,Rice,Roti,Achar</td>
      <td style='border:2px solid black;'>Poori Sabji ,Raita , Salad</td>
      <td style='border:2px solid black;'>Rajma Aloo Gobhi Rice ,Roti,Salad, Achar</td>
      <td style='border:2px solid black;'>Veg Biryani , Raita</td>
      <td style='border:2px solid black;'>Chole Bhature , Rice , Raita</td>
      </tr>  
         
      <tr>
      <td style='border:2px solid black;'>Snacks 5:00 PM</td>
      <td style='border:2px solid black;'>Chilli Potato + Tea</td>
      <td style='border:2px solid black;'>Black Chane,Tea</td>
      <td style='border:2px solid black;'>Veg Noodles</td>
      <td style='border:2px solid black;'>Samosa,Tea</td>
      <td style='border:2px solid black;'>Veg Sandwich</td>
      <td style='border:2px solid black;'>Aloo Pyaaj Pakodi Tea</td>
      <td style='border:2px solid black;'>Poha,Tea</td>
      </tr>     
      
      <tr>
      <td style='border:2px solid black;'>Dinner 8:30 to 10:00 PM</td>
      <td style='border:2px solid black;'>Shahi Paneer , Kale Chane , Rice ,Roti , Salad , Achaar ,Rice</td>
      <td style='border:2px solid black;'>Sitafal, Aloo Methi, Roti,Salad, Achaar, Rice</td>
      <td style='border:2px solid black;'>Bhindi , Mix-Dal , Roti, Rice , Salad , Achaar</td>
      <td style='border:2px solid black;'>Matar Mushroom, Chole,Roti,Salad, Rice</td>
      <td style='border:2px solid black;'>Manchurian , Fried Rice</td>
      <td style='border:2px solid black;'>Mix Veg , Chana Dal,Rice , Roti , Salad , Achaar</td>
      <td style='border:2px solid black;'>Aloo+Vegetable,Dal ,Roti , Rice , Sweet Dish</td>
      </tr>    
          
</table>
<br>
<a href="User_Control.php">
<input type="button"class="Bttn" value="Back"></input>
</a>
</center>




</body>
</html>
