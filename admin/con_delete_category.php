<?php 
	session_start();
	include 'config.php';

	$sql ="DELETE FROM category WHERE category.c_id =".$_GET['c_id'];

	$result =mysqli_query($con,$sql);

  header("Location:category-list.php"); 
?>