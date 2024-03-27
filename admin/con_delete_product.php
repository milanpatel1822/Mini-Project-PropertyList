
<?php 
	session_start();
	include 'config.php';

	$sql ="DELETE FROM product WHERE product.product_id =".$_GET['product_id'];
 // echo ($sql);
	$result =mysqli_query($con,$sql);


  header("Location:product-list.php"); 
?>