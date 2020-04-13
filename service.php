<?php


if(isset($_POST['submit'])){
$servername= "localhost";
$dbusername= "root";
$dbpassword= "";
$dbname= "motodb";

$name= $_POST['textnames'];
$email= $_POST['emailid'];
$make= $_POST['YearofMake'];
$model= $_POST['Model'];
$type= $_POST['ser'];
$regno= $_POST['regno'];
$reading= $_POST['reading'];
if(!empty($_POST['includes'])) 
{
 $chk= $_POST['includes'];
 $ser=null;
 foreach($chk as $i)
 {
  $ser.= $i.",";
 }
}
$req= $_POST['Add'];
$inst= $_POST['instruction'];
$date= $_POST['date'];



$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
if($conn->connect_error)
{
    die("connection failed:".$conn->connect_error);
}

$sql= "INSERT INTO service (name, email, make, model, type, regno, reading, ser, req, inst, date)
VALUES ('$name','$email','$make','$model','$type','$regno','$reading', '$ser', '$req', '$inst', '$date')";

if($conn->query($sql)=== TRUE)
{
    echo "Thank You! your records are saved with us, We will contact you shortly";
}

else
{
    echo "Error: ".$sql . "<br>" . $conn->error;
}
}
else{
    echo "error:";
    }

?>


