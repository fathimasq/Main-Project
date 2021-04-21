<?php
$con=mysqli_connect("localhost","root","","project");

$pt_name=$_POST['pt_name'];
$status=1;


$r="select * from tbl_propertytype where pt_name='$pt_name'";
$p=mysqli_query($con,$r);
$i=mysqli_num_rows($p);
if($i==1)
{
?>
<script>
alert("Property Type already exist");
location.href="add_type.php";
exit;
</script>
<?php

}
else{

$sqli="insert into tbl_propertytype(pt_name,status) values ('$pt_name','$status')";
$result1=mysqli_query($con,$sqli);

$n=mysqli_insert_id($con);
?>
	<script>alert("successfully inserted");
	location.href="add_type.php";
	</script>
	<?php

mysqli_close($con);
}?>