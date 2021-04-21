<?php
session_start();
$con=mysqli_connect("localhost","root","","project");

$email=$_POST['email'];
$password=$_POST['password'];
$pass=md5($password);
$sql="select * from tbl_login where email='$email' and password='$pass' and status='1'";
$result=mysqli_query($con,$sql);
$n=mysqli_num_rows($result);
if($n>0)
{
	while($row=mysqli_fetch_array($result))
	{
		if($row['usertype']=='user')
		{
			$_SESSION['uname']=$email;
			header("location:test1.php");

		}
		if($row['usertype']=='admin')
		{
			$_SESSION['uname']=$email;
			header("location:fathi/dist/index.php");
		}


	}


}
else
{
?>
<script>
alert('Incorrect email or password');
location.href="login.html";
</script>
<?php	


}


mysqli_close($con);
?>
