<?php
session_start();
$con=mysqli_connect("localhost","root","","project");

if(isset($_SESSION['uname']))
{
	$temp=$_SESSION['uname'];
	if(isset($_REQUEST['x']))
	{
		$a=intval($_GET['x']);
		$sql="update tbl_addprop set status='1' where p_id='$a'";
		
		mysqli_query($con,$sql);
		
	}
	if(isset($_REQUEST['y']))
	{
		$a=intval($_GET['y']);
		$sql="update tbl_addprop set status='0' where p_id='$a'";
		
		mysqli_query($con,$sql);
		
	}
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
	<style>
fieldset{
background-color:white;
width:700px;
height:500px;

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
height:100px;}
li{
	color: black;
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

	
 .b{
	 float:left;
	 display:block;
	 width:500px;
	 border:inset;
	 color:blue;
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
#a{
	color:black;
}
.vertical{
border-left:5px solid green;
height:60px;

}

</style>

</head>

<body>
  

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
    <!-- ##### Breadcumb Area Start ##### -->
    
    <!-- ##### Breadcumb Area End ##### -->
<br><br><br><br><br><br>
<div class="graph-visual tables-main" id="exampl">

						  <form action="" method="POST">   
						 <center> <fieldset><legend><b><i>My Properties</i></b></legend></center><br><br><br>
<div class="row" id="result">
 <?php
			
$con=mysqli_connect("localhost","root","","project");

                            $sq = "select * from tbl_login where email = '$temp'";

  $rs = mysqli_query($con,$sq);
  $a=mysqli_fetch_array($rs);
  $b=$a['login_id'];
  $sql="select * from tbl_addprop where login_id = '$b'";
$c=mysqli_query($con,$sql);
$n=mysqli_num_rows($c);
if($n>0){
while($row=mysqli_fetch_array($c))
{
                           ?>
<div class="col-md-3 mb-3">
<div class="card-deck">
<div class="card border-secondary">
<img src="project/<?php echo $row['p_img'];?>" style="width:355px;height:200px;" class="card-img-top"><br><br>

<div class="card-body">
<b><h5 class="vertical"style="font-family:courier">&nbsp&nbsp&nbsp<?php echo $row['p_propertytype'];?>&nbsp Property,<br>&nbsp&nbsp&nbsp<?php echo $row['d_name'];?><br></h5>


<p style="color:black;font-size:17px;">
&nbspProperty ID: PT000<?php echo $row['p_id'];?><br>
&nbspPosted On: <?php echo $row['date'];?><br>
    &nbspPrice: &#x20B9 <?php echo $row['price'];?></b><br> 
    <img src="l.png" style="width:20px;height:20px;">&nbsp&nbsp<?php echo $row['t_name'];?><br>
	
	 
</p><?php
                    
                             if($row['status'] == 0 || $row['status'] =='')
                             {

                               echo "<a href='my_prop.php?x=" .$row['p_id']." 'class='btn btn-success' style='width:280px;' >Not Sold</a>";
                               }
                               else
                                {
                                  echo "<a href='my_prop.php?y=" .$row['p_id']."'class='btn btn-success' style='width:280px;'>Sold Out</a>
                                  </td>";
}?>
                         </center></div>
</div>

</div>
</div>
<?php } ?>
</div>   





<?php
} 
?><script>alert("You have not added any properties");
location.href="test1.php";
 exit;
	</script><?php

}

?>


  
                           
  </form> 
			<script>

function myFunction() {
  document.getElementById("myBtn").disabled = true;
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

