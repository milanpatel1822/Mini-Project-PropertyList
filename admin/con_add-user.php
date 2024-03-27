
<?php
     include('config.php');
     extract($_POST);

     $sql= "INSERT INTO user (user_id, user_name, user_email, user_password) VALUES (NULL, '$name','$email','$password') ";

     $result = mysqli_query($con,$sql);

     header("Location:user-list.php");
?>