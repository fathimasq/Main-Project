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
	<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
	
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
margin-left:50px;
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
.b{
	 float:left;
	 display:block;
	 width:500px;
	 border:inset;
	 color:blue;
	 background-color:#f5ecd5;
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
  font-size: 20px;
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

.btn {
  background-color: green;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 80%;
  opacity: 0.9;
}
p{
	font-size: 15px;
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
.vertical{
border-left:5px solid green;
height:60px;

}
a{

font-color:black;
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


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
								 <li><a href="search.php"> <span class="glyphicon glyphicon-filter"></span>Filter</a></li>
                                       
                                    
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

   <center>
	<figcaption><i><b></figcaption>
		<br><br>

    <form action="viewcontra.php" method="POST">
	 <fieldset><legend><b>Search Property</b></legend>

															<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">


												
<div class="input-group form-group">
												<div class="input-group-prepend">
												<span class="input-group-text"><i class="fa fa-map-marker"></i></span>
												</div>
			<select name="d_name" id="dname" onChange="getdistrict(this.value);" class="form-control" required>
            <option value="">Select District</option>
		 <?php 
			$con=mysqli_connect("localhost","root","","project");
			$r="select * from tbl_district where status=1";
			$query=mysqli_query($con,$r);
            while($row=mysqli_fetch_array($query))
            { ?>
            <option value="<?php echo $row['d_name'];?>"><?php echo $row['d_name'];?></option>
            <?php
            }
            ?>
            </select>
</div>	
<div class="input-group form-group">
												<div class="input-group-prepend">
												<span class="input-group-text"><i class="fa fa-map-marker"></i></span>
												</div>
 <select name="t_name" id="tname" class="form-control" required>
            <option value="">Select Town</option>
	
            </select>
		</div>
	<div class="input-group form-group">
												<div class="input-group-prepend">
												<span class="input-group-text"><i class="fa-map-marker"></i></span>
												</div>
												<select name="pt_name" id="state" class="form-control"  required>
												<option value="">Select Property Type</option>
            <?php 
			$con=mysqli_connect("localhost","root","","project");
			$r="select * from tbl_propertytype where status=1";
			$query=mysqli_query($con,$r);
            while($row=mysqli_fetch_array($query))
            { ?>
            <option value="<?php echo $row['pt_name'];?>"><?php echo $row['pt_name'];?></option>
            <?php
            }
            ?>
		</select>
		
												
												
</div>
												
						            <center> <input type="submit" id="bt" value="Search" class="btn btn-secondary">

    <input type="reset" class="cancelbtn"></center>
						            
											</table>
											</form>

  
                         </center>
	
<div class="row" id="result">
 <?php
			
$con=mysqli_connect("localhost","root","","project");

                            $sq = "select * from tbl_login where email = '$temp'";

  $rs = mysqli_query($con,$sq);
  $a=mysqli_fetch_array($rs);
  $b=$a['login_id'];
  $sql="select * from tbl_addprop where login_id != '$b'";
$c=mysqli_query($con,$sql);
$n=mysqli_num_rows($c);
if($n>0){
while($row=mysqli_fetch_array($c))
{
                           ?>
<div class="col-md-3 mb-3">
<div class="card-deck">
<div class="card border-secondary">
<img src="project/<?php echo $row['p_img'];?>" style="width:355px;height:200px;" class="card-img-top"><br>

<div class="card-body">
<b><h5 class="vertical"style="font-family:courier">&nbsp&nbsp<?php echo $row['p_propertytype'];?>&nbsp Property,<br>&nbsp&nbsp&nbsp<?php echo $row['d_name'];?><br></h5>


<p style="color:black;font-size:17px;">
    &nbspPrice: &#x20B9 <?php echo $row['price'];?></b><br> 
    <img src="l.png" style="width:20px;height:20px;">&nbsp&nbsp<?php echo $row['t_name'];?><br>
	 
</p>
<?php
	 echo "<a href='morede.php?x=".$row['p_id']."'class='btn btn-success' style='width:310px;'>More Details</a><br><br>";

	 echo "<a href='contact.php?x=".$row['login_id']."'class='btn btn-success' style='width:310px;'>View Contact Details</a>";
	 ?>
</div>
</div>

</div>
</div>
<?php } ?>
</div>   


<?php
}
else

{
?>
<script>alert('No Properties Found');
window.location="test1.php";
</script>
                             
<?php

}


?>
 
     
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    
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





<?php
}
else
{
header("location:login.html");
}
?>

