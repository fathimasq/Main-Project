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
	
 .b{
	 float:left;
	 display:block;
	 width:500px;
	 border:inset;
	  background-color:#f5ecd5;
 }




	#name1{
width:500px;
}
#username1{
width:500px

}
#phno{
width:500px;
}
#i{
color:white;

}

form
{
opacity:0.9;
margin-top:30px;

margin-left:0px;
color:black;
height:0px; 

 align-right:50px 
border:1px#cccccc solid;
}
.btn {
  background-color: green;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 80%;
  opacity: 0.9;
}
.vertical{
border-left:5px solid green;
height:60px;

}
a{

font-color:black;
}

</style>

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="south-load"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
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
    
    <!-- ##### Breadcumb Area End ##### -->
<br><br><br><br><br><br><br>
 <center><h1><i></i></h1></center>
    <form action="contact.php" method="post"> 
    <?php
			
$con=mysqli_connect("localhost","root","","project");

$d_name=$_POST["d_name"];
$t_name=$_POST["t_name"];

$pt_name=$_POST["pt_name"];


																					$abc="select login_id from tbl_login where email='$temp'";
																					$query=mysqli_query($con,$abc);
																					$res=mysqli_fetch_array($query);
																					$b=$res['login_id'];

$query = "select * from tbl_addprop where d_name='$d_name' and t_name='$t_name' and p_propertytype='$pt_name' and login_id!='$b'";

$results = mysqli_query($con,$query);


while($row=mysqli_fetch_array($results))
{

	?>

                           
	<div class="col-md-3 mb-3">
<div class="card-deck">
<div class="card border-secondary">
<img src="project/<?php echo $row['p_img'];?>" style="width:355px;height:200px;" class="card-img-top"><br>

<div class="card-body">
<b><h5 class="vertical"style="font-family:courier">&nbsp&nbsp&nbsp<?php echo $row['p_propertytype'];?>&nbsp Property,<br>&nbsp&nbsp&nbsp<?php echo $row['d_name'];?><br></h5>


<p style="color:black;font-size:17px;">
    &nbspPrice: &#x20B9 <?php echo $row['price'];?></b><br> 
    <img src="l.png" style="width:20px;height:20px;">&nbsp&nbsp<?php echo $row['t_name'];?><br>
	 
</p><?php
if($a['pay_status']==0 || $a['pay_status']=='')
{

  echo "<a href='payment.php?x=".$a['login_id']."'class='btn btn-success' style='width:210px;'>More Details</a><br><br>";


}
else{
	 echo "<a href='morede.php?x=".$row['p_id']."'class='btn btn-success' style='width:210px;'>More Details</a><br><br>";

	 echo "<a href='contact.php?x=".$row['login_id']."'class='btn btn-success' style='width:210px;'>View Contact Details</a><br><br>";
}?>
</div>
</div>

</div>
</div>
<?php } ?>
</div>   



  
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
}
else
{
header("location:login.html");
}
?>

