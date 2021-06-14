<?php
session_start();
$con=mysqli_connect("localhost","root","","project");
$b=$_SESSION['uname'];


if(!isset($_SESSION['uname'])){
header('location:test1.php');
}else
{
$p_id=$_GET['x'];
$abc="select * from tbl_login l,tbl_reg r where l.login_id=r.login_id and l.email='$b'"; 
$query=mysqli_query($con,$abc);
while($result=mysqli_fetch_array($query))
{
  $c=$result['login_id'];
  $d=$result['email'];
    $ph=$result['phone'];
  
}

$sql="select * from tbl_request where p_id='$p_id' and sending_from='$c'";
$p=mysqli_query($con,$sql);



$i=mysqli_num_rows($p);
if($i==1)
{?>
	<script>alert("Already sended request");
location.href="test1.php";
 exit;
</script><?php
}
else{

	
	$message = $d . " has send an interest request on your property with property ID PT000" . $p_id." and contact him on ".$ph;
	$sqli="insert into tbl_request(sending_from,p_id,message)values('$c','$p_id','$message')";
	if(mysqli_query($con,$sqli)){
		?>
	<script>alert("Sended Request Successfully");
location.href="test1.php";
 exit;
</script><?php
	}
}}?>