
<?php
session_start();

if(isset($_SESSION['uname']))
{
	$temp=$_SESSION['uname'];
	?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>South - Real Estate Agency Template | Contact</title>

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
margin: 50px 0px 50px 0px;
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
                    
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <section class="south-contact-area section-padding-100">
	<figure>
<img src="my.jpg" alt="im" style="float:left;width:600px;height:300px;" class="im">
<figcaption><i><b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp“Real estate sales was perfect training for the &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp experience to go into public life because you learn to accept rejection,<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp learn to meet new people, learn to work with people, and find common ground.<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp That's the way you sell houses ... that's also the way you win over constituency.”</b></i></figcaption></figure>
        
                        <form action="postprop.php" method="post" enctype="multipart/form-data">
                            <fieldset><legend><b><i>Post Your Property</i></b></legend>
<table align="left">
	<tr>
		<i><td><h5>Transaction Type</h5></td>
</tr>
<tr>
		
		<td><input type="radio" name="pt1"  id="sell" value="Sell"    required >Sell
			<input type="radio" name="pt1"  id="rent" value="Rent"    required>Rent</td>

	</tr>
	
	<tr>
		<td><h5>Ownership Type</h5></td></tr>
		
		<td><input type="radio" name="pt2"  id="single" value="Single"  onblur="validate()" required>Single
			<input type="radio" name="pt2"  id="joint" value="Joint"  onblur="validate()" required>Joint
		<input type="radio" name="pt2"  id="others" value="Others"  onblur="validate()" required>Others</td>

	</tr>
	<tr>
		<td><h5>Property Type</h5></td></tr>
		<tr><td><label for="type"></label>
		<select id="pt" name="propertytype" class="form-control" required>
		
		<option value="">Select</option>
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
		
		
	</tr><tr></tr>
	
	
	<tr>
		<td><h5>Price</h5></td></tr><tr></tr>
		<tr><td><label for="type"></label>
		<select id="price" name="price" class="form-control" required>
		
		<option value="">Select</option>
            <?php 
			$con=mysqli_connect("localhost","root","","project");
			$r="select * from tbl_price where status=1";
			$query=mysqli_query($con,$r);
            while($row=mysqli_fetch_array($query))
            { ?>
            <option value="<?php echo $row['price'];?>"><?php echo $row['price'];?></option>
            <?php
            }
            ?>
		</select>
		
		
	</tr><tr></tr>
	
	<tr>
		<td><h5>District</h5></td></tr><br>
		<tr><td><label for="district"></label>
		<select id="dname" name="district" onChange="getdistrict(this.value);" class="form-control" required>
		
		<option value="">Select</option>
		
            <?php
$con=mysqli_connect("localhost","root","","project");
			$query =mysqli_query($con,"select * from tbl_district where status=1");
            while($row=mysqli_fetch_array($query))
            { ?>
            <option value="<?php echo $row['d_name'];?>"><?php echo $row['d_name'];?></option>
            <?php
            }
            ?>
		</select>
		
		
	</tr><tr></tr>
	<tr>
		<td><h5>Town</h5></td></tr><br>
		<tr><td><label for="town"></label>
		<select id="tname" name="tname1" class="form-control" required>
		
		<option value="">Select</option>
		
		</select>
		
		
	</tr><tr></tr>
	
	<tr>
		<td><h5>Plot Area (in Number)</h5></td></tr>
		<tr><td><input type="text" id="plot" name="plot" style="width:500px;"  required></td>
	</tr><tr></tr>
	
	<tr>
		<td><h5>Area</h5></td></tr><br>
		<tr><td><label for="area"></label>
		<select id="area" name="area" class="form-control" required>
		
		<option value="">Select</option>
		
            <?php
$con=mysqli_connect("localhost","root","","project");
			$query =mysqli_query($con,"select * from tbl_plot where status=1");
            while($row=mysqli_fetch_array($query))
            { ?>
            <option value="<?php echo $row['plot_area'];?>"><?php echo $row['plot_area'];?></option>
            <?php
            }
            ?>
		</select>
		
		
	</tr><tr></tr>
	<tr>
		<td><h5>Property Description</h5></td></tr>
		<tr><td><textarea id="des" name="prtydes"  rows="6" cols="60" required></textarea></td>
	</tr><tr></tr>
	<tr>
		<td><h5>Choose Image</h5></td></tr>
		<tr><td><input type="file" name="img" id="file1" placeholder="select folder" onchange="valproof()" required>		         
</td>
	</tr><tr></tr>
	
	
	</table><br></i>


    <input type="submit" id="bt" value="Submit" class="btn btn-secondary">

    <input type="reset" class="cancelbtn"><br><br>
</fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<script>
function valproof()
      {
      var proof = document.getElementById("file1").value;
      var pat=/^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.png)$/;
      if(!proof.match(pat))
      {
      alert("Enter Valid File Type Eg: .jpg/.jpeg/.png");
      document.getElementById("file1").value="";
      }}
    function validate3()
  {
  var name=document.getElementById("price").value;
  var letters=/^[0-9 a-zA-Z]+$/;
  if(!name.match(letters))
  {
  alert("Please enter valid price");
  document.getElementById("price").value="";
  }
  }
   

</script>
   

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/classy-nav.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/active.js"></script>
    <!-- Google Maps -->
    

</body>

</html>
<?php
}
else
{
header("location:login.html");

}
?>