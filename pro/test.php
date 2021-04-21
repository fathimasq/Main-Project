<?php
session_start();
$con=mysqli_connect("localhost","root","","project");
$login_id=0;
$email=$_POST["email"];
$password=$_POST["npass"];
$pass=md5($password);
$r="select login_id from tbl_reg where email='$email'";
$result=mysqli_query($con,$r);
$n=mysqli_num_rows($result);
if($n>0)
{
  $a=mysqli_fetch_array($result);
  $login_id=$a['login_id'];
}
if($login_id)
{


$sq="update tbl_login set password='$pass' where login_id='$login_id'";
if(mysqli_query($con,$sq))
{
  ?>
  <script>alert("password successfully changed");
  location.href="login.html";
   exit;
  </script>
  <?php
}}
else {
  ?>
  <script>alert("invalid email");
  location.href="forgot1.html";
   exit;
  </script>
  <?php
}




mysqli_close($con);
   ?>
