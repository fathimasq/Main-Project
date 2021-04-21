<?php
session_start();
$con=mysqli_connect("localhost","root","","project");
$b=$_SESSION['uname'];
$abc="select login_id from tbl_login where email='$b'"; 
$query=mysqli_query($con,$abc);
while($result=mysqli_fetch_array($query))
{
  $c=$result['login_id'];
  
}

$p_transactiontype=$_POST['pt1'];
$p_ownershiptype=$_POST['pt2'];
$p_propertytype=$_POST['propertytype'];
$price=$_POST['price'];
$d_name=$_POST['district'];
$p_description=$_POST['prtydes'];
$t_name=$_POST['tname1'];
$plot=$_POST['plot'];

$p_img=$_FILES['img']['name'];
$fileloc="project/";
move_uploaded_file($_FILES["img"]["tmp_name"],$fileloc.$p_img);
$status=1;


$sq="insert into tbl_addprop(login_id,p_transactiontype,p_ownershiptype,p_propertytype,price,d_name,t_name,plot,p_description,p_img,status) values('$c','$p_transactiontype','$p_ownershiptype','$p_propertytype','$price','$d_name','$t_name','$plot','$p_description','$p_img','$status')";
if(mysqli_query($con,$sq))
  {
  
    header("location:test1.php"); 
  }
    mysqli_close($con);
     ?>
