<?php
require "functions.php";

session_start();
if(isset($_POST['password']) && isset($_POST['cpassword']))
{
$username=$_POST['username'];
$password = $_POST['password'];
$h_pass = md5($password);
$cpassword = $_POST['cpassword'];


$sql="select * from project where username='$username'";
$res=mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($res);

 if ($password != $cpassword) 
  {
    header("Location: forgot.php?error=Both password doesn't match");
  }
else if (strlen($password)<8) 
  {
    header("Location: forgot.php?error=Password length is lessthan 8");
  }
  else{
  $result = mysqli_query($conn,"update project set password = '$h_pass' where username = '$username'");
  header("Location: http://localhost/crypto/Home_page/Login/login.php");
  }
}




?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <link rel="stylesheet" href="forgot.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Reset password</div>
    <div class="content">
      <form action="#" method="post">
        <div class="user-details">
        <div class="input-box">
            <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
          </div>
          <div class="input-box">
            </div>
            <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" name="username" required>
            </div>
          
          <div class="input-box">
            <span class="details">New Password</span>
            <input type="password" placeholder="Enter your new password" name="password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" placeholder="Confirm your password" name="cpassword" required>
          </div>
        </div>
        
        <div class="button">
          <input type="submit" value="Reset">
        </div>
        
      </form>
    </div>
  </div>

</body>
</html>