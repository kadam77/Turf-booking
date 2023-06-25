<?php
$server='localhost';
$user  = 'root';
$db = 'wp-mini-project';
$pwd = '';

//connection
$conn = new mysqli($server,$user,$pwd,$db);
if(!$conn)
{
    die("Error:".$conn->connect_error);
}
else
{
    //echo "Connected succefully";
}

$id = $_GET['id'];
$query4="SELECT name,contact_no,date_book,hour,no_of_player,game,start_time,total_amount FROM booking";
$comd2=mysqli_query($conn,$query4);

while($row = mysqli_fetch_assoc($comd2))
{
$name=$row['name'];
$contact_no=$row['contact_no'];
$date_book=$row['date_book'];
$hour=$row['hour'];
$no_of_player=$row['no_of_player'];
$game =$row['game'];
$start_time=$row['start_time'];
$total_amount=$row['total_amount']; 


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="bookingform.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TURF|UPDATE</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <script src="C:/xampp/htdocs/wp-project/booking/bookingformvalidation.js"></script> -->
    <script src="bookingformvalidation.js"></script>
</head>

<body>

    <!-- <div class="head1">TURF BOOKING</div> -->
    <div class="container">
        <div class="title">Book now</div>
            <form  method="POST" action="update_bookingform.php" >
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Name</span>
                        <input type="text" placeholder="Enter your name" required name="name" id="name" value="<?php echo $name;
                        ?>
                        ">
        
                        <div class="error" id="err_name"></div>
                    </div>
                   
                   
                   
                    <div class="input-box">
                        <span class="details">Phone no.</span>
                        <input type="number" required name="contact" id="mobno" value="<?php echo $contact_no;?>">
                        <div class="error" id="err_mobno"></div>
                    </div>
                    <div class="input-box">
                        <span class="details">Date of booking</span>
                        <input type="date" required name="dob" id="dob" min="2022-05-12" max="2022-05-19" value="<?php echo $date_book;?>">
                        
                        <div class="error" id="err_dob"></div>
                    </div>
                   
                    
                    <!-- <div class="input-box">
                        <span class="details">Number of hours</span>
                        <select class="selection" name="hours" >
                              <option value="1">1</option>
                              <option value="2">2</option>
                             <option value="3">3</option>
                             <option value="4" >4</option>
                        </select>
                    </div> -->
                    <div class="input-box">
                        <span class="details">No.of Hours(<span style="color: red;">Price:500rs/hour</span>)</span>
                        <input type="number" min="1" max="5" required name="hours" value="<?php echo $hour;?>" onkeyup="Totamt(this.value)" >
                        
                        <!-- <p>Total Amount: <span id="totamt"></span></p>  -->
                        <!-- Price:<b>500rs/hour -->
                    </div>

                    <div class="input-box">
                         <span class="details">Number of players</span>
                        <select  class="selection" name="player"  >
                            <option value="<?php echo $no_of_player;
                        ?>
                        "><?php echo $no_of_player;
                        ?></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                           <option value="3">3</option>
                           <option value="4">4</option>
                           <option value="5">5</option>
                           <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
              
                      </select>
                    </div>
                       
                    <div class="input-box">
                        <span class="details">choose a game</span>
                        <select class="selection" name="game" >
                        <option value="<?php echo $no_of_player;
                        ?>
                        "><?php echo $game;
                        ?></option>
                              <option value="football">football</option>
                              <option value="cricket">cricket</option>
                             <option value="badminton">badminton</option>
                             
                        </select>
                    </div>
                
                    <div class="input-box">
                        <span class="details">Start Time</span>
                        <input type="time" required name="st"  onchange="validTime(this.value)"  min="9:00"  max="20:00" step="3600" value="<?php echo $start_time;?>">
                        <span  id="st"></span>
                    </div>
                    <div class="input-box">
                        <span class="details">Total Amount:</span>
                        <!-- <input id="totamt" name="totamt" value=""> -->
                        <input type="text"  id="totamt" name="totamt" value="<?php echo $total_amount;?>">
                        <!-- </option><span class="box" id="totamt"></span> -->
                    </div>
                    <div class="input-box">
                        <span class="details" style="display: none;">id</span>
                        <!-- <input id="totamt" name="totamt" value=""> -->
                        <input type="text" hidden  name="id" value="<?php echo $id;?>">
                        <!-- </option><span class="box" id="totamt"></span> -->
                    </div>
                 
                </div>
                <div class="button">
                    <input type="submit" value="UPDATE">
                    <!-- <button id="pay" type="submit" value="submit" onsubmit="validateForm()">PAY</button> -->
                </div>
            </form>
       </div>
    
</body>
</html>
