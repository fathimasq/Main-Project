<?php
 session_start();
include("DbConne.php");
$cust_name=$_POST["name"];
$address=$_POST['address'];
$post_office=$_POST['post_office'];
$PIN_Code=$_POST["pincode"];
$phno=$_POST["phone"];
$email_id=$_POST["email"];
$dist_name=$_POST["district"];
$state_name=$_POST["state"];
$username=$_POST["uname"];
$password=$_POST["pswrd"];
$user_type="customer";
$status=0;

$r="select * from tbl_login where username='$username'";
$result=mysqli_query($con,$r);
$num=mysqli_num_rows($result);
if($num==1)
{
  ?>
<script>alert("Username already exists");
location.href="index2.php";
 exit;
</script>
<?php
}
else
{

$sqli="insert into tbl_login(username,password,user_type,status) values ('$username','$password','$user_type','$status')";
$result1=mysqli_query($con,$sqli);
$n=mysqli_insert_id($con);
$sq="insert into tbl_customer_reg(login_id,cust_name,address,post_office,PIN_Code,phno,email_id,dist_name,state_name,status) values('$n','$cust_name','$address','$post_office','$PIN_Code','$phno','$email_id','$dist_name','$state_name','$status')";
if(mysqli_query($con,$sq))
{
  ?>
  <script>alert("successful inserted");
  location.href="lo.html";
   exit;
  </script>
  <?php
}
}
mysqli_close($con);
?>
