
<?php
	include 'config.php';

	extract($_POST);

	 $sql ="UPDATE category SET c_id = '$c_id', c_name = '$c_name',  c_img = '$c_img', c_createdDate = '$c_createdDate' WHERE category.c_id = $c_id";
	 // echo($sql);
	// print_r($sql)

	mysqli_query($con,$sql);

	 header("Location:category-list.php");
?>  