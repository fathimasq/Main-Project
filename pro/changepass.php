<?php
session_start();
$con=mysqli_connect("localhost","root","","project");

$password=$_POST["new"];
$pass=md5($password);

$a=$_SESSION['uname'];
$b="update tbl_login set password='$pass' where email='$a'";
if(mysqli_query($con,$b))
{
  ?>
  <script>alert("Password Updated Successfully");
  location.href="test1.php";
   exit;
  </script>
  <?php
}
mysqli_close($con);
?>
