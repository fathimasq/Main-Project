<?php
$con=mysqli_connect("localhost","root","","project");
if(!empty($_POST["did"]))
{

	$a = $_POST["did"];
	$query1 =mysqli_query($con,"select * FROM tbl_district where d_name = '$a'");
	$res = mysqli_fetch_array($query1);
	$b = $res['did'];
$query =mysqli_query($con,"select * from tbl_town where did = '$b'");
?>
<option value="">Select Town</option>
<?php
while($row=mysqli_fetch_array($query))
{
?>
<option value="<?php echo $row["t_name"]; ?>"><?php echo $row["t_name"]; ?></option>
<?php
}
}
?>