<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Post Email</title>
</head>
<body>
    <?php
      $myEmailAddress= "kshitiz.ravi@gmail.com";
      $suject = "Question from MOTO FIX";
      $name= $_POST['NAME'];
      $email= $_POST['Email'];
      $message= $_POST['Message'];
      $header= "from: $name <$email>";
      mail($myEmailAddress,$subject,$message,$header);
    ?>
    <p>Thanks for Sending</p>
</body>
</html>