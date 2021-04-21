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
}
#email1{
width:500px

}
#phno{
width:500px;
}
#i{
color:white;

}</style>

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
        <div class="main-header-area" id="stickyHeader">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="southNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.html"><H2 id="i">UNIQUE REAL ESTATE MANAGEMENT SYSTEM</H2></a>

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
                                <li><a href="index.html">Home</a></li>
                               
                                        
                                    
								                                <li><a href="#">Properties</a>
                                    <ul class="dropdown">
									 
                                        <li><a href="postprop1.php">Add Property</a></li>
                                        <li><a href="login.html">Buy Property</a></li>
                                     <li><a href="login.html">Rent Property</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown"><a href="#"> 
                                      <?php
                                      echo "welcome " .$temp;
?></a>
<ul class="dropdown">
<li><a href="logout.php">Sign out</a></li></ul>
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
			
$con=mysqli_connect("localhost","root","","test");

                            $sq = "select * from tbl_login where email = '$temp'";

  $rs = mysqli_query($con,$sq);
  $a=mysqli_fetch_array($rs);
  $b=$a['login_id'];
  $sql="select * from tbl_reg where login_id = '$b'";
$c=mysqli_query($con,$sql);
while($result=mysqli_fetch_array($c))
{
                           ?>
						   <form action="register.php" method="post">

<br><br><center><table align="center">
	<tr>
		<td><h5>Name</h5></td>
</tr>
<tr>
		<td><input type="text" name="name"  id="name1" value="<?php echo $result['name'];?>" placeholder="Enter the Name" required  onblur="validate()" height="60" width="100"></td>
	</tr>
	
	<tr>
		<td><h5>Email</h5></td></tr>
		<tr><td><input type="email" name="email" value="<?php echo $result['email'];?>" placeholder="abc@gmail.com" id="email1" onblur="validate1()"  height="60" width="30" required></td>
	</tr>
	<tr>
		<td><h5>Phone No</h5></td></tr>
		<tr><td><input type="text" name="phone" value="<?php echo $result['phone'];?>" placeholder="Enter phone number" id="phno" onblur="validate2()" height="60" width="30" required></td>
	</tr>
</table></center>
</form>
<?php
}
                             ?>

  
                           
   

        
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

