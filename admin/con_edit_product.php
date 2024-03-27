

<?php
	include 'config.php';

	extract($_POST);

	 $sql ="UPDATE product SET product_id = '$product_id', p_name = '$p_name', c_id = '$c_id', p_img = '$p_img' , p_discription = '$p_discription', p_price = '$p_price', p_createdDate = '$p_createdDate' WHERE product.product_id = $product_id";
	 // echo($sql);
	// print_r($sql)

	mysqli_query($con,$sql);

	 header("Location:product-list.php");
?>  