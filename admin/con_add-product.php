
<?php

include 'config.php';

extract($_POST);

$sql = "INSERT INTO product (product_id, p_name, c_id, p_img, p_discription, p_price, p_createdDate) VALUES (NULL, '$p_name',$c_id, '$p_img', '$p_discription', '$p_price', '$p_createdDate')";

$result=mysqli_query($con,$sql);


header("Location:product-list.php");

?>