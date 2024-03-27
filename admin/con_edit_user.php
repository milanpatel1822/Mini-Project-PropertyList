

<?php
	include 'config.php';

	extract($_POST);

	 $sql ="UPDATE user SET user_id = '$user_id', user_name = '$name', user_email = '$email', user_password = '$password' WHERE user.user_id = $user_id";


	mysqli_query($con,$sql);

	 header("Location:user-list.php");
?>  