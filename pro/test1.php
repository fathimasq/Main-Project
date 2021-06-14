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
width:950px;
height:170px;
margin-left:500px;

}
#dname{
	
	width:100px;
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
opacity:1;
margin-top:0px;
margin-left:40px;
color:black;
height:500px;  

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
width:200px;
height:100px;
}

input[type=submit] {
  
  background-color:black;
  font-color:white;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 320px;
  height:65px;
  

}
#bts{
  
  background-color:white;
  font-color:black;
  color: black;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 320px;
  height:65px;
  

}

input[type=reset] {
background-color:black;
font-color:white;
  color: white;
  padding: 14px 20px;
  margin: 10px 0;
  border: none;
  cursor: pointer;
  width: 320px;
  height:65px;
  
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
  width: 60%;
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
margin: 50px 0px 50px 0px;
width:500px;
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
#cart_count{
	text-align:center;
	padding:0 0.9rem 0.1rem 0.9rem;
	border-radius:3rem;
	
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
                                <li><a href="test1.php">Home</a></li>
                                 <li><a href="my_prop.php">My Properties</a></li>
								 <li><a href="search.php">Search</a></li>
                                  <li><a href="wish.php"> Wishlist</a></li>
    <li><a href="notification.php"> Notification</a></li>
	 <li><a href="feedback.php"> Feedback</a></li>
	 <li><a href="viewre.php">Report</a></li>
                                    
								                                
                                    
									 <?php
									 $con=mysqli_connect("localhost","root","","project");

                            $sq = "select * from tbl_login where email = '$temp'";

  $rs = mysqli_query($con,$sq);
  $a=mysqli_fetch_array($rs);
if($a['pay_status']==0 || $a['pay_status']=='')
{

  echo "<li><a href='payment.php?x=".$a['login_id']."'>Add Property</a></li>";


}
else{
	 echo "<li><a href='postprop1.php'>Add Property</a></li>";

}
	 ?>
                                        
                                       
                                   
                                

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
		
	 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<fieldset><figcaption><i><b></figcaption>
		<br>
<form action="viewcontra.php" method="POST" align='center'>
	
	

															<table>


	<tr><td>											
	<center><div class="input-group form-group">
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
</div>	</td>
<td>	<div class="input-group form-group">
												<div class="input-group-prepend">
												<span class="input-group-text"><i class="fa fa-map-marker"></i></span>
												</div>
 <select name="t_name" id="tname" class="form-control" required>
            <option value="">Select Town</option>
	
            </select>
		</div></td><td>
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
		
				</fieldset>									
											
</div></td>	</tr>
											
						  <tr>  <td><input type="submit" id="bt1" value="Search" class="btn btn-secondary" ></td><td>

    <input type="reset" class="cancelbtn"></td><td>
	<a href='search.php' id="bts"   >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp| Advanced Search |</a></tr>
						         </table> 
										
											</form>
                <div class="col-12">
                    <div class="breadcumb-content">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->


      <br><br>  <div class="container">
           
                
                    
                        <h2>REAL ESTATE</h2>
                    
           



                        <!-- Single Testimonial Slide -->
                        
                           
                            “Real estate is an imperishable asset, ever increasing in value. It is the most solid security that human ingenuity has devised. It is the basis of all security and about the only indestructible security.” 

                           
                     

                           
                        “Real estate is a numbers game. But that doesn’t mean a few words can’t help investors dominate the market. In fact, real estate investing is an extremely emotional pursuit. Between investors’ swing moods, that many times drives the market, to the risks that are involved with investing, emotions can sometimes run high".
                           
                    

                      

                        
                    </div>
                </div>
            <br><br>
	<br><br><br>
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
if($a['pay_status']==0 || $a['pay_status']=='')
{

  echo "<a href='payment.php?x=".$a['login_id']."'class='btn btn-success' style='width:310px;'>More Details</a><br><br>";


}
else{
	 echo "<a href='morede.php?x=".$row['p_id']."'class='btn btn-success' style='width:310px;'>More Details</a><br><br>";

	 echo "<a href='like.php?x=".$row['p_id']."'class='btn btn-success' style='width:310px;'>Like&nbsp&nbsp<i class='fa fa-thumbs-o-up'></i></a><br><br>";
}
	 ?>
</div>
</div>

</div>
</div>
<?php } ?>
</div>


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