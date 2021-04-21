<?php session_start();

$con=mysqli_connect("localhost","root","","project");

$username=$_POST['uname'];
$password=$_POST["pswrd"];
$_SESSION['uname']=$username;

 $sql="select * from tbl_login where username='$username' and password='$password' and status='1'";

$result=mysqli_query($con,$sql);

$n=mysqli_num_rows($result);

  if($n>0)

{
  while($fin=mysqli_fetch_array($result))
  {
	if($fin['usertype']=="admin")
	{


header("location:index.php");

exit;
    }

	else if($fin['usertype']=="user")
{
	header("location: customer/home.php");
	exit;
}

}}
else

{
  ?>
<script>alert("Invalid Username or Password");
location.href="login.php";
 exit;
</script>
<?php
}

mysqli_close($con);

   ?>
