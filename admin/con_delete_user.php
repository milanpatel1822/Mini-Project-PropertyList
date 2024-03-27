
<?php 
	session_start();
	include 'config.php';

	$sql ="DELETE FROM user WHERE user.user_id =".$_GET['user_id'];
 // echo ($sql);
	$result =mysqli_query($con,$sql);


	
  header("Location:user-list.php"); 
?>