<?php
session_start();
$con=mysqli_connect("localhost","root","","project");
$d_name1=$_POST["d_name"];
$d_name=$_POST["d_name1"];
$status=1;
																					$abc="select did from tbl_district where d_name='$d_name1'";
																					$query=mysqli_query($con,$abc);
																					$res=mysqli_fetch_array($query);
																					$b=$res['did'];
$sq="update tbl_district set d_name='$d_name' where did='$b'";

mysqli_query($con,$sq);

if(mysqli_query($con,$sq))
{?>
  <script>alert("District updated successfully");
  location.href="medit.php";
   exit;
  </script>
  <?php
}
mysqli_close($con);
?>