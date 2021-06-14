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
	
	<style>
	#name1{
width:500px;
height:40px;
}
#uname{
width:500px
height:40px;
}
#phno{
width:500px;
height:40px;
}
#email1{
width:500px;
height:40px;
}
#i{
color:white;

}
input{
	width:500px;
height:40px;
	
}
form
{
opacity:0.9;
margin-top:10px;
margin-right:900px;
color:black;
height:500px;  
border:1;
border-radius:4px;
 align-right:0px 
border:1px#cccccc solid;
}
.btn {
  background-color: green;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}fieldset{
background-color:white;
width:500px;

}
legend{
background-color:black;
color:white;
padding: 5px 10px;

}
.im{
margin-left:100px;
margin-bottom:100px;
}
body{
background-size:cover;
background-repeat:no-repeat;
}
form
{
opacity:0.9;
margin-top:10px;
margin-left:900px;
color:black;
height:500px;  
border:1;
border-radius:4px;
align-right:0px 
border:1px#cccccc solid;
}
option{
width:500px;
	
	
}
#e{
color: white;
width:300px;
height:100px;


}
.container{
width:300px;
height:100px;
}

input[type=submit] {
  
  background-color:green;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

input[type=reset] {
background-color:green;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  
}
form
{
opacity:0.9;
margin-top:10px;
margin-right:900px;
color:black;
height:500px;  
border:1;
border-radius:4px;
 align-right:0px 
border:1px#cccccc solid;
}
.btn {
  background-color: green;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

 

.container {
  padding: 16px;
}
#btn {
  background-color:green;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 14px 20px;
  background-color:green;
    width:48%;
margin-left:2px;
}
figure{
margin-left:500px;
float:left;
width:40%;
text-align:center;
font-style:smaller;
text-indent:0;
margin:0.5em;
padding:0.8em;
display:inline-block;
}
figure figcaption{

text-align:center;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

input[type="radio"]{
margin: 30px 20px 30px 50px;
}
#price{
width:500px;
height:50px;

}
input[type="text"]{
margin: 30px 0px 30px 0px;
}
textarea{
margin: 30px 0px 30px 0px;
}
input[type="file"]{
margin: 30px 0px 30px 0px;
}
district{
width:500px;


}
select{
margin: 30px 0px 30px 0px;
}
#i{
color:white;
}
select option{
  font-size: 100px;
}

.vertical{
border-left:5px solid green;
height:60px;

}
table {
  border-collapse: collapse;
  width: 200%;
}

</style>
<script>
      function getdistrict(val) {
      $.ajax({
      type: "POST",
      url: "get_district.php",
      data:'did='+val,
      success: function(data){
        $("#tname").html(data);
		
      }
      })
      }
</script>
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="south-load"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="h-100 d-md-flex justify-content-between align-items-center">
                <div class="email-address">
                    <a href="mailto:contact@southtemplate.com"></a>
                </div>
                <div class="phone-number d-flex">
                    <div class="icon">
                        <img src="img/icons/phone-call.png" alt="">
                    </div>
                    <div class="number">
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Header Area -->
       <header class="header-area">

       

              <div class="main-header-area" id="stickyHeader">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="southNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.html"><H2 id="i">UNIQUE</H2></a>

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
    <section class="breadcumb-area bg-img" style="background-image: url(img/bg-img/hero1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <?php
			

			
$con=mysqli_connect("localhost","root","","project");

																					if(isset($_REQUEST['x']))
																						{
																					$a=intval($_GET['x']);
																					$_SESSION['siji']=$a;
								 													$sql="select * from tbl_addprop where p_id='$a'";
								 													$c=mysqli_query($con,$sql);
																					$row=mysqli_fetch_array($c);
																					$p_id=$row['p_id'];
																					}?>

                           <br><br><br>
						     <figure>

<div class="card-deck" style="width:1400px;">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="project/<?php echo $row['p_img'];?>" style="width:400px;height400px;" class="card-img-top">

	
<div class="card border-secondary">
<br><br>
<b><h5 class="vertical"style="font-family:courier;margin-right:550px;float:right;color:green;"><?php echo $row['p_propertytype'];?> Property For Sale</h5>
<b><h5 style="font-family:courier;margin-right:675px;float:right;color:Black;">Property ID:<?php echo 'PT000'.$row['p_id'];?> </h4>
<b><h5 style="font-family:courier;margin-right:650px;float:right;color:Black;">Posted On:<?php echo $row['date'];?> </h4>

<br><h5 style="font-family:courier;margin-right:650px;float:right;color:Black;">In&nbsp<?php echo $row['d_name'];?>&nbspDistrict</h4>

<h5 style="font-family:courier;margin-right:625px;float:right;color:Black;">&nbspPrice: &#x20B9 <?php echo $row['price'];?><br>
<h5 style="font-family:courier;margin-right:625px;float:right;color:red;"><?php echo $row['likes'];?>&nbspPeople Liked This Property<br>



<br>


</div>

</div><br><table style="margin-left:200px;" >	
<?php
echo "<tr><td></td><td><p><a href='request.php?x=".$row['p_id']."'class='btn btn-success' style='width:250px;'>Send Interest Request</a></td><td>
		

	<a href='contact.php?x=".$row['login_id']."'class='btn btn-success' style='width:250px;'>Contact Details</a></td><td>
    <a href='wishlist.php?x=".$row['p_id']."'class='btn btn-success' style='width:250px;' name='add_to_wishlist;'>Add to wishlist</a></p></td></tr></table>
		
		";?>
<br><br><table style="margin-left:200px;">
<tr><th><h4><u>Property Description</u></h4></th></tr>

<p><h6><tr><td><?php echo $row['p_description'];?></p><br></td></tr>
<center>
<table border='1' style="margin-left:200px;" >
<tr><td><h5><i>Ownership</td>
<td><h6>: <?php echo $row['p_ownershiptype'];?></td></tr>

<tr><td><h5><i>State</td>
<td><h6>: Kerala</td></tr>
<tr><td><h5><i>District</td>
<td><h6>: <?php echo $row['d_name'];?></td></tr>
<tr><td><h5><i>Town</td>
<td><h6>: <?php echo $row['t_name'];?></td></tr>

<tr><td><h5><i>Plot Area</td>
<td><h6>: <?php echo $row['plot_num'].$row['plot_area'];?></td></tr>


</table></center>


        
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
}
else
{

}
?>

