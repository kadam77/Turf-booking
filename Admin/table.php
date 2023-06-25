<?php
include 'admin.php';
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="table.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>TURF|BOOKING|DETAILS</title>
</head>
<body>
<!-- <div class="nav">
        <a href="newhome.html" class="batton">Home</a> 
        <a href="Adminhome.html" class="batton">Home</a>
        <a href="../business/form.html" class="batton">Business</a>
        <a href="../shop1/Shop.html" class="batton">Shop</a>
        <a href="../about/video.html" class="batton">About Us</a>
         <a href="" class="batton"></a> 
        <input class="sign" type="button" value="sign in"> 
    </div> -->
    <div class="filter">
    <div class="nav">
        <!-- <a href="newhome.html" class="batton">Home</a> -->
        <a href="Adminhome.html" class="batton">Home</a>
        <a href="../Admin/business/form.html" class="batton">Business</a>
        <a href="../Admin/shop1/Shop.html" class="batton">Shop</a>
        <a href="../Admin/about/video.html" class="batton">About Us</a>
        <!-- <a href="" class="batton"></a> -->
        <!-- <input class="sign" type="button" value="sign in"> -->
    </div>
    </div>
    
    <div class="container1">
        <table class="tab1">
            <caption class="title1">Booking information</caption>
            <tr>
                <th>Sr no.</th>
                <th>Cutomer name</th>
                <th>Contact no.</th>
                <th>Date of booking</th>
                <th>No. of hours</th>
                <th>Game</th>
                <th>Action</th>
            </tr>
            <!-- <tr>
                <td>1</td>
                <td>dhanu Jadhav</td>
                <td>123456789</td>
               <td> 12/23/2002</td>
                <td>10</td>
                <td>football</td>
            </tr> -->
            <tr>
                <?php
                while($row = mysqli_fetch_assoc($comd))
                {echo "<tr>";
                    echo " <td>"; echo $row["srno"]; echo"</td>";
                    echo "<td>";  echo $row["name"] ;echo"</td>";
                    echo "<td>";  echo $row["contact_no"]; echo" </td>"; 
                    echo "<td>" ; echo $row["date_book"]; echo"</td>"; 
                    echo "<td>"; echo $row["hour"] ; echo"</td>";
                     echo"<td>"; echo $row["game"]; echo"</td>";
                    //  echo"<td>"; echo $row["Email"] ; echo"</td>";
                    //  echo"<td>"; echo $row["Address"]; echo"</td>";
                     echo "<td>";?> <a href="ticdelete.php?id=<?php echo $row["srno"];?>" onclick="myfunc()"><button type="button" class="order_button">DELETE</button></a>
                     <a href="updateform.php?id=<?php echo $row["srno"];?>" ><button type="button" class="order_button">UPDATE</button></a>
                     <script>
                         function myfunc(){
                            //  alert("Are you sure, want to cancel booking?")
                            
                             alert("Booking CANCELLED Successfully");
                         }
                     </script>
                     <?php
                    }
                     
                     ?>
            </tr>
          
        </table>
    </div>

    
    
</body>
</html>