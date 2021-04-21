<?php
session_start();
$con=mysqli_connect("localhost","root","","project");
$d_name1=$_POST["district"];
$d_name=$_POST["d_name"];

$r="select d_name from tbl_district where d_name='$d_name1'";
$result=mysqli_query($con,$r);
$n=mysqli_num_rows($result);
if($n>0)
{
  $a=mysqli_fetch_array($result);
  $d_name=$a['d_name'];
}


$sq="update tbl_district set d_name='$d_name' where d_name=$d_name1";
if(mysqli_query($con,$sq))
{
  ?>
  <script>alert("district successfully changed");
  location.href="edist.php";
   exit;
  </script>
  <?php
}
mysqli_close($con);
   ?>
