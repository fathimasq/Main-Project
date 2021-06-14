<?php
session_start();
$con=mysqli_connect("localhost","root","","project");
$b=$_SESSION['uname'];
$abc="select * from tbl_login where email='$b'"; 
$query=mysqli_query($con,$abc);
while($result=mysqli_fetch_array($query))
{
  $c=$result['email'];
  
}

$feedback=$_POST['pt2'];

$sugession=$_POST['sugession'];
$sq="insert into tbl_feedback(email,feedback,suggestions)values('$c','$feedback','$sugession')";
$result1=mysqli_query($con,$sq);

$n=mysqli_insert_id($con);
?>
	<script>alert("successfully sended your feedback");
	location.href="feedback.php";
	</script>
	<?php

mysqli_close($con);
?>
 
