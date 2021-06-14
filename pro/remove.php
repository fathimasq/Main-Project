<?php
session_start();
$con=mysqli_connect("localhost","root","","project");
if(!isset($_SESSION['uname'])){
header('location:test1.php');
}
else
{$temp=$_SESSION['uname'];
	
$sq = "select * from tbl_login where email = '$temp'";

  $rs = mysqli_query($con,$sq);
  $a=mysqli_fetch_array($rs);
  $b=$a['login_id'];
$p_id=$_GET['p_id'];
$sql="delete from tbl_wishlist where p_id='$p_id' and login_id='$b'";
if(mysqli_query($con,$sql))
{
header('location:wish.php');
}}?>