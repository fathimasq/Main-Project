<?php
$con=mysqli_connect("localhost","root","","project");
if(!empty($_POST["email"]))
 {

   $a=preg_match("/^(([-\w\d]+)(\.[-\w\d]+)*@([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$/",$_POST['email']);
   if($a==1)
   {
     $query = "SELECT * FROM tbl_login WHERE email='" . $_POST["email"] . "'";
     $res=mysqli_query($con,$query);
     $row=mysqli_fetch_array($res);
     if(mysqli_num_rows($res)>0) {
         echo "<span class='status-not-available'> Email Already Exist.</span>";
     }else{
     }
   }
   else {
     echo "<script>alert('Please Enter Valid Email');</script>";
      }

}
?>
