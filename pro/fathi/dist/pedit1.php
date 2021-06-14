<?php
session_start();
$con=mysqli_connect("localhost","root","","project");
$plot_area2=$_POST["plot_area"];
$plot_area=$_POST["plot_area1"];
$status=1;
																					$abc="select * from tbl_plot where plot_area='$plot_area2'";
																					$query=mysqli_query($con,$abc);
																					$res=mysqli_fetch_array($query);
																					$b=$res['plot_id'];
$sq="update tbl_plot set plot_area='$plot_area' where plot_id='$b'";

mysqli_query($con,$sq);

if(mysqli_query($con,$sq))
{?>
  <script>alert("Area updated successfully");
  location.href="pedit.php";
   exit;
  </script>
  <?php
}
mysqli_close($con);
?>