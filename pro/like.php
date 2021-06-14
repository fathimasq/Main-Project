<?php
session_start();
$con=mysqli_connect("localhost","root","","project");
$b=$_SESSION['uname'];


if(!isset($_SESSION['uname'])){
header('location:test1.php');
}else
{
$p_id=$_GET['x'];
$abc="select * from tbl_login where email='$b'"; 
$query=mysqli_query($con,$abc);
while($result=mysqli_fetch_array($query))
{
  $c=$result['login_id'];
  $d=$result['email'];
  
}
$sql="select * from tbl_like where p_id='$p_id' and liked_by='$c'";
$p=mysqli_query($con,$sql);
$i=mysqli_num_rows($p);
if($i==1)
{?>
	<script>alert("Already liked the property");
location.href="test1.php";
 exit;
</script><?php
}
else{
	
	
	$sqli="insert into tbl_like(p_id,liked_by)values('$p_id','$c')";
	
	if(mysqli_query($con,$sqli)){
		?>
	<script>alert("You liked this property");</script>
	<?php
	$get_post="select * from tbl_addprop where p_id='$p_id'";
$run_post=mysqli_query($con,$get_post);
$row=mysqli_fetch_array($run_post);
$post_like=$row['likes'];

$like="update tbl_addprop set likes='$post_like'+1 where p_id='$p_id'";
$run_like=mysqli_query($con,$like);

if($run_like)
{

echo"<script>window.open('test1.php','_self')</script>";
}
	
	






	}
}}?>