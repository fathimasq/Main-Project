<?php
session_start();
$con=mysqli_connect("localhost","root","","project");
$pt_name1=$_POST["pt_name"];
$pt_name=$_POST["pt_name1"];
$status=1;
																					$abc="select pt_id from tbl_propertytype where pt_name='$pt_name1'";
																					$query=mysqli_query($con,$abc);
																					$res=mysqli_fetch_array($query);
																					$b=$res['pt_id'];
$sq="update tbl_propertytype set pt_name='$pt_name' where pt_id='$b'";

mysqli_query($con,$sq);

if(mysqli_query($con,$sq))
{?>
  <script>alert("property type updated successfully");
  location.href="aedit.php";
   exit;
  </script>
  <?php
}
mysqli_close($con);
?>