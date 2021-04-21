<?php
session_start();
$con=mysqli_connect("localhost","root","","project");
$name=$_POST["name"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$username=$_POST["username"];

$user_type="user";
$status=1;

$temp=$_SESSION['uname'];
$h="select login_id from tbl_login where email='$temp'";
$res=mysqli_query($con,$h);
$a=mysqli_fetch_array($res);
$b=$a['login_id'];
$sq="update tbl_reg set name='$name',phone='$phone',username='$username' where login_id='$b'";
$m="update tbl_login set email='$email' where login_id='$b'";
mysqli_query($con,$m);

if(mysqli_query($con,$sq))
{
$_SESSION['uname']=$email;
  ?>
  <script>alert("profile updated successfully");
  location.href="test1.php";
   exit;
  </script>
  <?php
}
mysqli_close($con);
?>
