<?php
$con=mysqli_connect("localhost","root","","project");

$plot_area=$_POST['plot_area'];
$status=1;


$r="select * from tbl_plot where plot_area='$plot_area'";
$p=mysqli_query($con,$r);

if(mysqli_num_rows($p)>0)
{
?>
<script>
alert("Plot Area already exist");
location.href="plot.php";
exit;
</script>
<?php

}
else{

$sqli="insert into tbl_plot(plot_area,status) values ('$plot_area','$status')";
$result1=mysqli_query($con,$sqli);

$n=mysqli_insert_id($con);
?>
	<script>alert("successfully inserted");
	location.href="plot.php";
	</script>
	<?php

mysqli_close($con);
}?>