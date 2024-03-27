
<?php
   	session_start();


        include ('config.php');
        $e = $_POST['email'];
        $p = $_POST['password'];
  
        $sql = "SELECT * FROM admin WHERE admin_email = '$e' && admin_password = '$p'";
  
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_assoc($result);
  
        if ($row) {
             $_SESSION['Em'] = $e;
             header("Location:index.php");
        }
  
        else{
             $_SESSION['err'] = "* Email/Password does not match *";
             header("Location:login.php");
        }
        
?>