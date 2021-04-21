<?php
$con=mysqli_connect("localhost","root","","project");
$output='';
$sql="select * from tbl_town where did='".$_POST['did']."'order by t_name";
$result=mysqli_query($con,$sql);
$output .='<option value="">-Select Town-</option>';
while($row=mysqli_fetch_array($result))
{
$output .='<option value="'.$row['did'].'">'.$row['t_name'].'</option>';
	
	
}
echo $output;
?>