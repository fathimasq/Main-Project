<?php
session_start();
$con=mysqli_connect("localhost","root","","project");
$d=$_SESSION['login_id'];
	$sql="update tbl_login set pay_status='1' where login_id='$d'";
	mysqli_query($con,$sql);
?>
<script>alert("Payment Done Successfully. You will be redirected to Home Page.");
location.href="test1.php";
 exit;
</script>
<?php
mysqli_close($con);
 ?>