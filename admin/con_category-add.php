


<?php
     include('config.php');
     extract($_POST);

     $sql= "INSERT INTO category (c_id,c_name, c_img, c_createdDate) VALUES (NULL, '$c_name', '$c_img', '$c_createdDate')";

     $result = mysqli_query($con,$sql);

     header("Location:category-list.php");
?>