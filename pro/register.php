<?php
$con=mysqli_connect("localhost","root","","project");

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$username=$_POST['username'];
$password=$_POST['password'];
$pass=md5($password);
$usertype="user";
$status=1;

$r="select * from tbl_login where email='$email'";
$p=mysqli_query($con,$r);
$i=mysqli_num_rows($p);
if($i==1)
{

?>
<script>
alert("Email already exist");
location.href="register.html";
exit;
</script>
<?php

}
else{
$r="select * from tbl_reg where username='$username'";
$p=mysqli_query($con,$r);
$i=mysqli_num_rows($p);
if($i==1)
{

?>
<script>
alert("Username already exist");
location.href="register.html";
exit;
</script>
<?php

}
	
else{

$sqli="insert into tbl_login (email,password,usertype,status) values ('$email','$pass','$usertype','$status')";
$result1=mysqli_query($con,$sqli);

$n=mysqli_insert_id($con);
$sqli="insert into tbl_reg (login_id,name,phone,username,status) values ($n,'$name','$phone','$username','$status')";
$result1=mysqli_query($con,$sqli);
header('location:login.html');
}
mysqli_close($con);
}?>

