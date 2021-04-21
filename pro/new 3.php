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
	

</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script type="text/javascript">
     $(document).ready(function(){
		$("#dname").change(function(){
			var d_id=$(this).val();
			$.ajax({
				url:"loadstate.php",
				method:"POST",
				data:{did:d_id},
				success:function(data){
					$("#tname").html(data);
					alert(data);
				}
			
		});
});	});
</script>


</head>
<form action="viewcontra.php" method="POST">
	 <fieldset><legend><b>Search Property</b></legend>

															<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">


												
<div class="input-group form-group">
												<div class="input-group-prepend">
												<span class="input-group-text"><i class="fa fa-map-marker"></i></span>
												</div>
			<select name="dname1" id="dname" class="form-control" required>
            <option value="">Select District</option>
		 <?php 
			$con=mysqli_connect("localhost","root","","project");
			$r="select * from tbl_district where status=1";
			$query=mysqli_query($con,$r);
            while($row=mysqli_fetch_array($query))
            { ?>
            <option value="<?php echo $row['did'];?>"><?php echo $row['d_name'];?></option>
            <?php
            }
            ?>
            </select>
</div>	
<div class="input-group form-group">
												<div class="input-group-prepend">
												<span class="input-group-text"><i class="fa-map-marker"></i></span>
												</div>
 <select name="tname1" id="tname" class="form-control" required>
            <option value="">Select Town</option>
	
            </select>
			<center> <input type="submit" id="bt" value="Search" class="btn btn-secondary">

    <input type="reset" class="cancelbtn"></center>
						            
											</table>
											</form>
																	 



 
     
    <!-- ##### Footer Area End ##### -->


</body>

</html>






			
			</body>

</html>

