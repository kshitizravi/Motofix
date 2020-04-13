<?php
session_start();
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Welcome Page</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<div class="container">
    <h1 class="text-center text-success">Welcome 
    <?php 
        echo $_SESSION['username']; 
    ?>
    </h1>
    <table border="3">
    <tr>
    <td>Name</td> 
    <td>email</td>
    <td>make</td>
    <td>model</td>
    <td>Service Type</td>
    <td>registration no</td>
    <td>reading</td>
    <td>Service Includes</td>
    <td>additional requirements</td>
    <td>instructions</td>
    <td>preferred date</td>
    </tr>
    <?php
        $user=$_SESSION["username"];
        $conn= mysqli_connect("localhost", "root", "", "motodb");
        $query=mysqli_query($conn,"select * from service where email='$user'");
        $rowcount=mysqli_num_rows($query);
        for($i=1;$i<=$rowcount;$i++)
        {
            $row=mysqli_fetch_array($query);
        }
    ?>
    <tr>
    <td><?php echo $row['name'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['make'] ?></td>
    <td><?php echo $row['model'] ?></td>
    <td><?php echo $row['type'] ?></td>
    <td><?php echo $row['regno'] ?></td>
    <td><?php echo $row['reading'] ?></td>
    <td><?php echo $row['ser'] ?></td>
    <td><?php echo $row['req'] ?></td>
    <td><?php echo $row['inst'] ?></td>
    <td><?php echo $row['date'] ?></td>
    </tr>
    
    
    
    </table>
    <a href="logout.php">LOGOUT</a>


</div>
</body>
</html>