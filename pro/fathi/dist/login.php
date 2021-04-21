<?php
session_start();
$con=mysqli_connect("localhost","root","","project");

$username=$_POST['username'];
$password=$_POST['password'];

$sql="select * from tbl_login where username='$username' and password='$password' and status='1'";
$result=mysqli_query($con,$sql);
$n=mysqli_num_rows($result);
$_SESSION['username']=$username;
if($n>0)
{
	while($row=mysqli_fetch_array($result))
	{
		if($row['usertype']=='user')
		{
			$_SESSION['uname']=$username;
			header("location:test1.php");

		}
		if($row['usertype']=='admin')
		{
			$_SESSION['uname']=$username;
			header("location:index.php");
		}


	}


}
else
{
?>
<script>alert("no user found");
</script><?php
header("location:login.html");
}


mysqli_close($con);
?>
