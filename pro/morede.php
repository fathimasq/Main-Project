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

    <?php
			

			
$con=mysqli_connect("localhost","root","","project");

																					if(isset($_REQUEST['x']))
																						{
																					$a=intval($_GET['x']);
																					$_SESSION['siji']=$a;
								 													$sql="select * from tbl_addprop where p_id='$a'";
								 													$c=mysqli_query($con,$sql);
																					$row=mysqli_fetch_array($c);
																					}?>

                           <br><br><br>
						     <figure>

<div class="card-deck" style="width:1400px;">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="project/<?php echo $row['p_img'];?>" style="width:400px;height400px;" class="card-img-top">
<div class="card border-secondary">
<br><br>
<b><h5 class="vertical"style="font-family:courier;margin-right:550px;float:right;color:green;"><?php echo $row['p_propertytype'];?> Property For Sale</h5>
<br><h4 style="font-family:courier;margin-right:600px;float:right;color:Black;">In&nbsp<?php echo $row['d_name'];?>&nbspDistrict</h4>
<br><h4 style="font-family:courier;margin-right:600px;float:right;color:Black;">&nbspPrice: &#x20B9 <?php echo $row['price'];?><br>


&nbsp&nbsp
<br>
<?php
	

	 echo "<a href='contact.php?x=".$row['login_id']."'class='btn btn-success' style='width:250px;'>Contact Details</a>";
	 ?>
</div>

</div>
<br><br>
<h4><u>Property Description</u></h4><br>

<p><?php echo $row['p_description'];?></p><br><br>
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
<td><h6>: <?php echo $row['plot'];?></td></tr>


</table></center>


    <script>
        function validate()
        {
        var name=document.getElementById("name1").value;
        var letters=/^[a-zA-Z\s]*$/;
        if(!name.match(letters))
        {
        alert("Please enter valid name");
        document.getElementById("name1").value="";
        }
        }
        
        
        function validate2()
        {
        var phone = document.getElementById("phno").value;
        var ph=/^(9|8|7|6)[0-9]{9}$/;
         if(!phone.match(ph))
        {
        alert("enter valid phone number");
        document.getElementById("phno").value="";
        }
        }
        function validate6()
        {
        var email=document.getElementById("email1").value;
        var pat=/^(([-\w\d]+)(\.[-\w\d]+)*@([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$/;
         if(!email.match(pat))
        {
        alert("Please enter valid email");
        document.getElementById("email1").value="";
        }
        }
        function validate1()
        {
        var name=document.getElementById("uname1").value;
        var letters=/^[0-9a-zA-Z]+$/;
        if(!name.match(letters))
        {
        alert("Please enter valid username");
        document.getElementById("uname1").value="";
        }
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

}
?>
