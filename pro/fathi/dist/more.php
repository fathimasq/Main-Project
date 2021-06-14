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
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Static Navigation - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous">
	</script>
	<style>



	
 .b{
	 float:middle;
	 display:block;
	 width:1500px;
	 border:inset;
	 background-color:#e3ffe6;
 }
.im{
margin-left:100px;
margin-bottom:100px;
}
body{
background-size:cover;
background-repeat:no-repeat;
}
p{
	float:center;
	
}



</style>
    </head>
    <body>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">UNIQUE</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                
            </form>
             <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<?php
echo $temp;
?>

</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
         <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="sb-sidenav-menu">
                        <div class="nav">
                           
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                         
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                              Property Type
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="add_type.php">Add Property Type</a>
									<a class="nav-link" href="mtype.php">Manage Property Type</a>
                                    
                                </nav>
                            </div>
							  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                               District
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="add dist.php">Add District</a>
									<a class="nav-link" href="add_town.php">Add Town</a>
									<a class="nav-link" href="mdist.php">Manage District</a>

                                    
                                </nav>
                            </div>
							<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                               Price
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="add_price.php">Add Price Range</a>
									

                                    
                                </nav>
                            </div>
														<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                               Plot Area
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="plot.php">Add Plot Area</a>
									<a class="nav-link" href="mplot.php">Manage Plot Area</a>
									

                                    
                                </nav>
                            </div>
							
							  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                               Users
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="viewcust.php">View User</a>
									<a class="nav-link" href="mcust.php">Manage User</a>
                                    
                                </nav>
                            </div>
							  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                               Properties
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="viewprop.php">View Property</a>
                                   
                                </nav>
                            </div>
                            
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                               Feedback
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="viewfeed.php">View Feedback</a>
                                   
                                </nav>
                            
                          
                        </div>
						
                           
                    </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        ADMIN
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Properties</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"><b>Manage Properties</b></li>
                        </ol>
                       
                            	
	

<form action="." method="POST">

<?php
$con=mysqli_connect("localhost","root","","project");
$abc="select login_id from tbl_login where email='$temp'";
																					$query=mysqli_query($con,$abc);
																					$res=mysqli_fetch_array($query);
																					$b=$res['login_id'];
																				
$sqli="select * from tbl_addprop";

 $result = mysqli_query($con,$sqli);
while($row=mysqli_fetch_array($result))
{?>

						  <div class="b">
     <img src="../../project/<?php echo $row['p_img'];?>"  style="width:300px;height:300px;margin-right:100px;"><?php echo "<a href='m.php?x=".$row['login_id']."'>View Owner Details</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";

                    if($row['status'] == 0 || $row['status'] =='')
                             {

                               echo "<a href='more.php?x=" .$row['p_id']." 'class='btn btn-success'>Active</a>";
                               }
                               else
                                {
                                  echo "<a href='more.php?y=" .$row['p_id']." 'class='btn btn-success'>Inactive</a>";
                                }

	 
	 
	 ?>
	  <br><br>
	  <div><p><?php echo $row['p_propertytype'];?> &nbspProperty <br>
    Ownership Type :<?php echo $row['p_ownershiptype'];?>  <br>
     Expected Price&nbsp :<img src="r.jpg" style="width:20px;height:20px;"> </h5> <?php echo $row['price'];?> <br>
<img src="l.png" style="width:20px;height:20px;">Place : </h5> <?php echo $row['d_name'];}?><br><br></p>

	 </div>

</form>
																			
            

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
<?php
}
else
{
header("location: ../../login.html");
}
?>
