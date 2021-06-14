<?php
session_start();
if(isset($_SESSION['uname']))
{
$temp=$_SESSION['uname'];
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>South - Real Estate Agency Template | Listings</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">
	
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


	<style>
	fieldset{
background-color:white;
width:1600px;

}
legend{
background-color:black;
color:white;}
padding: 5px 10px;
#i{
color:white;
}
.vertical{
border-left:5px solid green;
height:60px;

}

</style>
<script type="text/javascript">
    $(document).ready(function(){
	
		$(".product_check").click(function(){
			var action = 'data';
			var p_transactiontype = get_filter_text('p_transactiontype');
			var p_ownershiptype = get_filter_text('p_ownershiptype');
			var p_propertytype = get_filter_text('p_propertytype');
			var d_name = get_filter_text('d_name');
			var price = get_filter_text('price');
			
			
		$.ajax({
			url:'action.php',
			method:'POST',
			data:{action:action,p_transactiontype:p_transactiontype,p_ownershiptype:p_ownershiptype,p_propertytype:p_propertytype,d_name:d_name,price:price},
			success:function(response){
				$("#result").html(response);
				$("#textChange").text("Filtered Properties");
			}
		});
		});
		function get_filter_text(text_id){
	var filterData = []; 
	$('#'+text_id+':checked').each(function(){
	filterData.push($(this).val());	
	});
	return filterData;
	}
});
</script>
        
</head>

<body>
       <!-- Preloader -->
    <div id="preloader">
        <div class="south-load"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

       

       <!-- Main Header Area -->
          <div class="main-header-area" id="stickyHeader">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="southNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.html"><H2 style="color:white;">UNIQUE</H2></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="test1.php" id="i">Home</a></li>
                                 <li><a href="my_prop.php" id="i">My Properties</a></li>
								 <li><a href="search.php" id="i">Search</a></li>
                                  <li><a href="wish.php" id="i"> Wishlist</a></li>
    <li><a href="notification.php" id="i"> Notification</a></li>
	 <li><a href="feedback.php" id="i"> Feedback</a></li>
	 <li><a href="viewre.php" id="i">Report</a></li>
                                    
								                                
                                    
									 <?php
									 $con=mysqli_connect("localhost","root","","project");

                            $sq = "select * from tbl_login where email = '$temp'";

  $rs = mysqli_query($con,$sq);
  $a=mysqli_fetch_array($rs);
if($a['pay_status']==0 || $a['pay_status']=='')
{

  echo "<li><a href='payment.php?x=".$a['login_id']." 'id='i'>Add Property</a></li>";


}
else{
	 echo "<li><a href='postprop1.php' id='i' >Add Property</a></li>";

}
	 ?>
                                        
                                       
                                   
                                

                                <li class="dropdown" ><a href="#" id="i"> 
                                      <?php
                                      echo "welcome " .$temp;
?></a>
<ul class="dropdown" >
<li><a href="my_profile.php" >My Profile</a></li>

<li><a href="change.php" >Change Password</a></li>

<li><a href="logout.php" >Sign out</a></li></ul>
                                   </div>
                                
                                  

 
                           </ul>

                          
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <!-- ##### Breadcumb Area Start ##### -->
    
    <!-- ##### Breadcumb Area End ##### -->
<br><br><br><br><br><br>


   

<div class="container-fluid">
<div class="row">
<div class="col-lg-3">
<legend><b><i><center>Find Properties</center></i></b></legend>
<hr><br>
<h5 style="color:black;">Select Transaction Type</h5>
<ul class="list-group">
<?php
$con=mysqli_connect("localhost","root","","project");
$sql="select distinct p_transactiontype from tbl_addprop order by p_transactiontype";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{


?>
<li class="list-group-item">
<div class="form-check">
<label class="form-check-label">
<input type="checkbox" class="form-check-input product_check" value="<?php echo $row['p_transactiontype'];?>" id="p_transactiontype"><?php echo $row['p_transactiontype'];?> 
</label>
</div>

</li>
<?php } ?>
</ul>
<br>
<h5 style="color:black;">Select Ownership Type</h5>
<ul class="list-group">
<?php
$con=mysqli_connect("localhost","root","","project");
$sql="select distinct p_ownershiptype from tbl_addprop order by p_ownershiptype";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{


?>
<li class="list-group-item">
<div class="form-check">
<label class="form-check-label">
<input type="checkbox" class="form-check-input product_check" value="<?php echo $row['p_ownershiptype'];?>" id="p_ownershiptype"><?php echo $row['p_ownershiptype'];?> 

</label>
</div>

</li>
<?php } ?>
</ul>
<br>
<h5 style="color:black;">Select Property Type</h5>
<ul class="list-group">
<?php
$con=mysqli_connect("localhost","root","","project");
$sql="select distinct p_propertytype from tbl_addprop order by p_propertytype";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{


?>
<li class="list-group-item">
<div class="form-check">
<label class="form-check-label">
<input type="checkbox" class="form-check-input product_check" value="<?php echo $row['p_propertytype'];?>" id="p_propertytype"><?php echo $row['p_propertytype'];?> 
</label>
</div>

</li>
<?php } ?>
</ul>
<br>
<h5 style="color:black;">Select District</h5>
<ul class="list-group">
<?php
$con=mysqli_connect("localhost","root","","project");
$sql="select distinct d_name from tbl_district order by d_name";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{


?>
<li class="list-group-item">
<div class="form-check">
<label class="form-check-label">
<input type="checkbox" class="form-check-input product_check" value="<?php echo $row['d_name'];?>" id="d_name"><?php echo $row['d_name'];?> 
</label>
</div>

</li>
<?php } ?>
</ul>
<h5 style="color:black;">Select Price</h5>
<ul class="list-group">
<?php
$con=mysqli_connect("localhost","root","","project");
$sql="select distinct price from tbl_price";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{


?>
<li class="list-group-item">
<div class="form-check">
<label class="form-check-label">
<input type="checkbox" class="form-check-input product_check" value="<?php echo $row['price'];?>" id="price"><?php echo $row['price'];?> 
</label>
</div>

</li>
<?php } ?>
</ul>
</div>
<div class="col-lg-9">
<h5 class="text-center" id="textChange"></h5>
<hr>
<div class="row" id="result">
<?php 

                            $sq = "select * from tbl_login where email = '$temp'";

  $rs = mysqli_query($con,$sq);
  $a=mysqli_fetch_array($rs);
  $b=$a['login_id'];
  $sql="select * from tbl_addprop where login_id != '$b' and status='1'";
$c=mysqli_query($con,$sql);
$n=mysqli_num_rows($c);
if($n>0){
while($row=mysqli_fetch_array($c))
{

?>
<div class="col-md-3 mb-3">
<div class="card-deck">
<div class="card border-secondary">
<img src="project/<?php echo $row['p_img'];?>" style="width:300px;height:200px;" class="card-img-top"><br><br>

<div class="card-body">
<h5 class="vertical"style="font-family:courier;font-size:15px;"><b>&nbsp<?php echo $row['p_propertytype'];?>&nbspProperty,<br>&nbsp<?php echo $row['d_name'];?><br></h5>


<p style="color:black;font-size:17px;">
    &nbspPrice: &#x20B9 <?php echo $row['price'];?></b><br>
    <img src="l.png" style="width:20px;height:20px;">&nbsp&nbsp<?php echo $row['t_name'];?><br>
	 
</p>
<?php
if($a['pay_status']==0 || $a['pay_status']=='')
{

  echo "<a href='payment.php?x=".$a['login_id']."'class='btn btn-success' style='width:210px;'>More Details</a><br><br>";


}
else{
	 echo "<a href='morede.php?x=".$row['p_id']."'class='btn btn-success' style='width:210px;'>More Details</a><br><br>";

	 echo "<a href='contact.php?x=".$row['login_id']."'class='btn btn-success' style='width:210px;'>View Contact Details</a><br><br>";
}
	 ?>
</div>
</div>

</div>
</div>
<?php } ?>
</div></div>
</div></div>
</form>

    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <script src="js/classy-nav.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>



</body>
</html>

<?php
}}
else
{
header("location:login.html");
}
?>

