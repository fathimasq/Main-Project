<?php
session_start();
$con=mysqli_connect("localhost","root","","project");
$b=$_SESSION['uname'];


if(!isset($_SESSION['uname'])){
header('location:test1.php');
}else
{
$p_id=$_GET['x'];
$abc="select login_id from tbl_login where email='$b'"; 
$query=mysqli_query($con,$abc);
while($result=mysqli_fetch_array($query))
{
  $c=$result['login_id'];
  
}
$sql="select * from tbl_wishlist where p_id='$p_id' and login_id='$c'";
$p=mysqli_query($con,$sql);
$i=mysqli_num_rows($p);
if($i==1)
{?>
	<script>alert("Already Exists in Wishlist");
location.href="wish.php";
 exit;
</script><?php
}
else{
	$sqli="insert into tbl_wishlist(p_id,login_id)values('$p_id','$c')";
	if(mysqli_query($con,$sqli)){
		?>
	<script>alert("Inserted to Wishlist");
location.href="wish.php";
 exit;
</script><?php
	}
}}?>