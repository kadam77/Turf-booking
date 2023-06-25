<?php
//echo "hello world!!!!!!";
//db connection code
$database_name = "wp-mini-project";
$server_name = "localhost";
$user = "root";
$pwd = "";

$conn = new mysqli($server_name,$user,$pwd,$database_name);

if($conn -> connect_error){
    die("connection failed: ".$conn->connect_error);
    
}
//echo "connected successfully";
//////////////////////////////////

// fetching html data
$id= $_POST['contactno'];
$fname= $_POST['fname'];
$lname= $_POST['lname'];
$age= $_POST['age'];
$contact_no= $_POST['contactno'];
$email= $_POST['email'];
$location= $_POST['location'];
$gender= $_POST['gender'];
$iid="";
// echo " contct no is $contact_no $id<br>";
// $fname= 'Dhananjay';
// $lname= 'Jadhav';
// $age= 20;
// $contact_no= 9920082614;
// $email= 'djadhav20comp@gmail.com';
// $location= 'Panvel';
// $gender= 'Male';


// $stmt = $conn->prepare("INSERT INTO business (first_name,last_name,age,contact-no,email,location,gender) VALUES (?,?,?,?,?,?,?)");
// //$stmt->bind_param("ssiisss", $fname , $lname , $age , $contact_no , $email , $location , $gender );
// $stmt->bind_param("ssiisss", "dhananjay" , "Jadhav" , "20" , 9819873850 , "dj20com@gmail.com" , "Panvel" , "Male" );
// //$ID_NO= $_POST[''];

//Insert command
// echo " <br>$iid<br>";
if($iid ===""){
$query1="INSERT INTO business (ID_NO,first_name,last_name,age,contact_no,email,location,gender) VALUES ('$id','$fname' , '$lname' , '$age' , '$contact_no' , '$email' , '$location' , '$gender')";
if($conn->query($query1)=== true)
{
    "
    <div><script>
               
    alert('New record added Successfully, Thank you!!!')
    window.location='form.html';
</script></div>";

    echo "New recored inserted successfully!!!!!";
    echo "<br>YOUR ID NO: <b>$id</b>";
}
else{
    echo "Error: " . $query1 . "<br>" . $conn->error;
}
}

elseif($fname=="" && $iid!=""){
    $flag1=0;
    $query6="SELECT ID_NO FROM business";
    $comD1= mysqli_query($conn,$query6);
    while($row = mysqli_fetch_assoc($comD1))
    {
        if($row['ID_NO']==$iid)
        {
            $query5="DELETE FROM business WHERE ID_NO='$iid'";
    if($conn->query($query5))
    {
        echo "Record Delete Successfully!!!";
    }
    else{
        echo "Error: ".$query5."<br>".$conn->error;
    }
    $flag1=1;
    break;
        }
    }
    if($flag==0)
    {
        echo "Record Not Found!!!";
    }
    
    
}
else{
    //retrive data
    echo "<br>";
    $flag=0;
    $query2="SELECT ID_NO FROM business";
    $comD= mysqli_query($conn,$query2);
    while($row = mysqli_fetch_assoc($comD))
    {
        if($iid === $row["ID_NO"])
        {
            $query3="UPDATE business SET        
            first_name='$fname',
            last_name='$lname',
            age='$age',
            contact_no='$contact_no',
            email='$email',
            location='$location',
            gender='$gender'
            WHERE ID_NO='$iid'
            ";
            //$comd2= mysqli_query($conn,$query3);

            $query4="UPDATE business SET ID_NO=$contact_no where contact_no='$contact_no'";
           // $comd3= mysqli_query($conn,$query4);
           if($conn->query($query3) && $conn->query($query4))
           {
               echo "sucess";
           }
           else
           {
            echo "Error: " . $query3 . "<br>" . $conn->error;
            echo "<br>q4-><br>";
            echo "Error: ".$query4."<br>".$conn->error;
           }
            $flag=1;
            break;
        }
        
        
    }
if($flag==0)
{
    echo "No record Found";
}

}
$conn->close();
?>