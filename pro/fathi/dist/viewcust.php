<?php
session_start();
$con=mysqli_connect("localhost","root","","project");

if(isset($_SESSION['uname']))
{
	$temp=$_SESSION['uname'];
	if(isset($_REQUEST['x']))
	{
		$a=intval($_GET['x']);
		$sql="update tbl_reg set status='1' where login_id='$a'";
		$sqli="update tbl_login set status='1' where login_id='$a'";
		mysqli_query($con,$sql);
		mysqli_query($con,$sqli);
	}
	if(isset($_REQUEST['y']))
	{
		$a=intval($_GET['y']);
		$sql="update tbl_reg set status='0' where login_id='$a'";
		$sqli="update tbl_login set status='0' where login_id='$a'";
		mysqli_query($con,$sql);
		mysqli_query($con,$sqli);
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">UNIQUE REAL ESTATE MANAGEMENT SYSTEM</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
			
			<p style="color:red;size:10px;">
 <i class="fa fa-print fa-2x" style="cursor: pointer;"  OnClick="CallPrint(this.value)" ></i>
</p>
     
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
                        <h1 class="mt-4">Users</h1>
						             <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"><b>Details</b></li>
							
                        </ol>
                       
                              <form action="register.php" method="POST">
							     <div class="graph-visual tables-main" id="exampl">
                            	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                             <?php
			$con=mysqli_connect("localhost","root","","project");
                            $query = "select * from tbl_reg";
                            $results = mysqli_query($con,$query);
							$counter=1;
                            echo "<h2><center>Registered Users</center></h2>";
                            echo "<tr><th>Sl.No</th><th>Name</th><th>Username</th><th>Phone</th></tr>";
                            while($fin=mysqli_fetch_array($results))
                            {
                            echo "<tr>";
                            echo "<td>".$counter."</td><td>"
                                     .$fin['name']."</td><td>"
                                   .$fin['username']."</td><td>"
                                   .$fin['phone']."</td>";
                    
                          echo "</tr>";$counter++;
                            }
                             ?>
                          </table>
                          </form>
                          </div>
                        
                    
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
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
    </body>
</html>
<?php
}
else
{

 header("location: ../../login.html");

}
?>
