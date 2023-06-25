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
    echo "Connected succefully";
}

$query1 = "SELECT srno, name, contact_no, date_book, hour, game FROM booking";
$comd = mysqli_query($conn,$query1);
if($conn->query($query1))
{
   echo "<br>Data retrive sucessfully!!!";


}
else{
    echo "Error: ".$query1."<br>".$conn->error ;
}
?>