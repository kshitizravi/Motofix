<?php
$host="localhost";
$user="root";
$password="";
$db="motodb";

session_start();
$conn= mysqli_connect($host, $user, $password, $db);
if($conn)
{
    echo "Connection Successful!";
}
else
{
    echo "Connection Failed!";
}

    $uname=$_POST['Email'];
    $pass=$_POST['Password'];
    $sql="select * from users where email= '$uname' && password= '$pass' ";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
        if($num==1)
        {
            $_SESSION['username']= $uname;
            echo "You are successfully logged in! ";
            header('location:welcome.php');
        }
        else
        {
            echo "Account Invalid!";
            header('location:Home.html');
        }


?>