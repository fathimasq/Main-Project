<?php
$con=mysqli_connect("localhost","root","","project");

$price=$_POST['price'];
$status=1;


$r="select * from tbl_price where price='$price'";
$p=mysqli_query($con,$r);
$i=mysqli_num_rows($p);
if($i==1)
{
?>
<script>
alert("Price Range already exist");
location.href="add_price.php";
exit;
</script>
<?php

}
else{

$sqli="insert into tbl_price(price,status) values ('$price','$status')";
$result1=mysqli_query($con,$sqli);

$n=mysqli_insert_id($con);
?>
	<script>alert("successfully inserted");
	location.href="add_price.php";
	</script>
	<?php

mysqli_close($con);
}?>