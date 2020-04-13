<?php 

if(isset($_POST['submit'])){
$servername= "localhost";
$dbusername= "root";
$dbpassword= "";
$dbname= "motodb";

$name= $_POST['textnames'];
$address= $_POST['personaladdress'];
$gender= $_POST['sex'];
$city= $_POST['City'];
$state= $_POST['State'];
$pincode= $_POST['pincode'];
$email= $_POST['emailid'];
$pass= $_POST['pass'];
$dob= $_POST['dob'];
$phoneno= $_POST['mobileno'];

$conn= new mysqli($servername, $dbusername, $dbpassword, $dbname);
if($conn->connect_error)
{
    die("connection failed:".$conn->connect_error);
}

$sql= "INSERT INTO users (name, address, gender, city,state, pincode, email, password, dob, phoneno)
VALUES ('$name','$address','$gender','$city','$state','$pincode','$email', '$pass', '$dob', '$phoneno')";

if($conn->query($sql)=== TRUE)
{
    echo "Thank You For Registering With Us, You can now use your E-mail address to login!";
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

