<?php
$con=mysqli_connect("localhost","root","","project");

$d_name=$_POST['d_name'];
$status=1;


$r="select * from tbl_district where d_name='$d_name'";
$p=mysqli_query($con,$r);
$i=mysqli_num_rows($p);
if($i==1)
{
?>
<script>
alert("District name already exist");
location.href="add dist.php";
exit;
</script>
<?php

}
else{

$sqli="insert into tbl_district(d_name,status) values ('$d_name','$status')";
$result1=mysqli_query($con,$sqli);

$n=mysqli_insert_id($con);
?>
	<script>alert("successfully inserted");
	location.href="add dist.php";
	</script>
	<?php

mysqli_close($con);
}?>