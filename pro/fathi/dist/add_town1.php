<?php
session_start();
$con=mysqli_connect("localhost","root","","project");
$b=$_POST['d_name'];
$status=1;
$abc="select did from tbl_district where d_name='$b'";
$query=mysqli_query($con,$abc);
while($result=mysqli_fetch_array($query))
{
  $c=$result['did'];
  
}
$t_name=$_POST["t_name1"];

$r="select * from tbl_town where t_name='$t_name'";
$result=mysqli_query($con,$r);
$num=mysqli_num_rows($result);
if($num==1)
{
  ?>
<script>alert("Town Name Already Exists");
location.href="add_town.php";
 exit;
</script>
<?php
}
else {


$sql="insert into tbl_town(did,t_name,status) values('$c','$t_name','$status')";
if(mysqli_query($con,$sql))
{
  ?>
   <script>alert("Successfully Inserted");
   location.href="add_town.php";
   </script>
   <?php
}}
mysqli_close($con);
?>