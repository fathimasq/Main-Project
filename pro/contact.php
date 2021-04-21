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
fieldset{
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
margin-left:500px;
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
  width: 48%;
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

</style>

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
                                <li><a href="test1.php">Home</a></li>
								<li><a href="my_prop.php">My Properties</a></li>
                               
                                        
                                    
								                                <li><a href="#">Properties</a>
                                    <ul class="dropdown">
									 
                                        <li><a href="postprop1.php">Add Property</a></li>
                                        <li><a href="login.html">Buy Property</a></li>
                                     <li><a href="login.html">Rent Property</a></li>
                                    </ul>
                                </li>
 <i class="fa fa-print fa-2x" style="cursor: pointer;color:grey"  OnClick="CallPrint(this.value)" ></i>

                                <li class="dropdown"><a href="#"> 
                                      <?php
                                      echo "welcome " .$temp;
?></a>
<ul class="dropdown">
<li><a href="my_profile.php">My Profile</a></li>
<li><a href="change.php">Change Password</a></li>
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
					 <h5 class="breadcumb-title">contact</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <br><br><br><br><i>
	<div class="graph-visual tables-main" id="exampl">
	 <form action="" method="post">
    <?php
			
$con=mysqli_connect("localhost","root","","project");

																					if(isset($_REQUEST['x']))
																						{
																					$a=intval($_GET['x']);
																					$_SESSION['siji']=$a;
								 													$sql="select * from tbl_reg where login_id='$a'";
								 													$c=mysqli_query($con,$sql);
																			
																					$row=mysqli_fetch_array($c);
																					}?>

			   <figure>

<figcaption><i><b></figcaption>
																	
						  
 <fieldset><legend><b>Contact Details</b></legend>
<table align="left">
	<tr><i>
		<td><h3><i>Name  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   :&nbsp&nbsp&nbsp </h3></td>
		
		<td><h5><?php echo $row['name'];?></i></h5></td><br>
	</tr>
	
	<tr>
		<td><h3><i>Phone No :&nbsp&nbsp&nbsp </h3></td>
<td><h5><?php echo $row['phone'];?></h5></td>
	</tr>
</form>

																			
				<script>
function CallPrint(strid) {
var prtContent = document.getElementById("exampl");
var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
WinPrint.document.write(prtContent.innerHTML);
WinPrint.document.close();
WinPrint.focus();
WinPrint.print();
WinPrint.close();
}
</script>																		

																			
	

        
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

