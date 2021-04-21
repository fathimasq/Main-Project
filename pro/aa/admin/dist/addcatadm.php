<?php
include("DbConne.php");
$category_name=$_POST["item"];
$sql="insert into tbl_labour_category(category_name) values('$category_name')";
if(mysqli_query($con,$sql))
{
  ?>
   <script>alert("Successfully inserted");
   location.href="viewcat.php";
   </script>
   <?php
}

mysqli_close($con);
?>
