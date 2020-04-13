<html>
<body>
    <form method="post">
        <input type="checkbox" name="a[]" value="h">
        <input type="checkbox" name="a[]" value="f">
        <input type="checkbox" name="a[]" value="j">
        <input type="submit" name="ft" value="ok">
    </form>
    <?php
    if(isset($_POST['ft'])) {
        $con= new mysqli("localhost", "root", "", "test");
        if(!empty($_POST['a'])) {
                $chk= $_POST['a'];
            
            $n=null;
            foreach($chk as $i)
            {
                    $n.= $i.", ";
            }
        }
        $ins= "insert into data values('$n')";
        $l=mysqli_query($con, $ins);
        if($l)
        {
            echo "data inserted.";
        }
    }
    ?>
</body>
</html>