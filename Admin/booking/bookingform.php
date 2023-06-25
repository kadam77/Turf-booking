<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="pd.css">
</head>
<body>
<div class="container">
        <div class="title">PayMent Done Sucefully!!!!</div>
            <!-- <div class="button"><a href="ticket\ " download style="color:white;text-decoration:none; margin-top :10px;">Download<a></div> -->
       </div>
</body>
</html>
<?php
$server = 'localhost';
$user = 'root';
$pwd = '';
$database_name = 'wp-mini-project';

$conn = new mysqli($server,$user,$pwd,$database_name);
if(!$conn)
{
    die("Error: ".$conn->connect_error);
}
else{
   // echo "Coneccted sucessfully!!!";
}

//data retrive
$name= $_POST['name'];
$contact_no=$_POST['contact'];
$date_book=$_POST['dob'];
$hour=$_POST['hours'];
$no_of_player=$_POST['player'];
$game=$_POST['game'];
$st=$_POST['st'];
$totamt=$_POST['totamt'];

// /////////////////TICKET GENERATOR////////////////////////////////
//header('content-type:image/jpeg');
$font = realpath("CALISTB.TTF");
$img = imagecreatefromjpeg("ticket.jpg");
$color = imagecolorallocate($img,38,2,146);
// $name="DHANANJAY KISAN JADHAV";
// $conct='981873850';
// $start='11:00 PM';
// $dob='13-05-2022';
// $noh='3';
// $totamt='1000'.'/-';
 imagettftext($img,38,0,319,515,$color,$font,$name);
 imagettftext($img,38,0,392,650,$color,$font,$contact_no);
 imagettftext($img,38,0,367,780,$color,$font,$st);
imagettftext($img,38,0,428,925,$color,$font,$date_book);
imagettftext($img,38,0,408,1050,$color,$font,$hour);
imagettftext($img,38,0,460,1260,$color,$font,$totamt);
imagejpeg($img,"ticket/".$name."-".$date_book.".jpg");
//imagejpeg($img);
//readfile($img);
//echo $img;
$link="ticket/".$name."-".$date_book.".jpg";
"<link rel='stylesheet' href='bookingform.css'>";
echo "<a class='button' href='$link' download
style='
height: 15%;
    width: 80%;
    outline: none;
    color: #fff;
    border: none;
    font-size: 24px;
    font-weight: 500;
    letter-spacing: 2px;
    border-radius: 5px;
    background:linear-gradient(135deg,#0000ff,#66ffff);
    position: relative;
    top:-35%;
    left: -22%;
    text-align: center;
    text-decoration: none;
    justify-content: center;
    margin:5%;
    padding:2% ;
'

>Download</a>";
imagedestroy($img);



/////////////////////////////////////////////////
//insertion

$query1="INSERT INTO booking(name,contact_no,date_book,hour,no_of_player,game,start_time,total_amount) VALUES('$name','$contact_no','$date_book','$hour','$no_of_player','$game','$st','$totamt')";
if($conn->query($query1))
{
   //echo "Record inserted sucefully";


}
else{
    echo "Error: ".$query1."<br>".$conn->error ;
}

?>
<!-- <html>
<body> 
 <div class="back">
   </ <a href="user.html"><h3>Back</h3></a> 
   <<a href=""><h3>Download</h3></a> 
     <script>
               
                  alert("Turf Booked Successfully, Thank you!!!")
                  window.location='bookingform.html';
            </script> 
    </div> 
    
    </div>
</body>
</html>  -->
