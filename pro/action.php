<?php
$con=mysqli_connect("localhost","root","","project");
if(isset($_POST['action'])){
	$sql="select * from tbl_addprop where p_transactiontype !=''";
	
	if(isset($_POST['p_transactiontype'])){
	$p_transactiontype=implode("','",$_POST['p_transactiontype']);
	$sql .="AND p_transactiontype IN('".$p_transactiontype."')";
	
	}
	if(isset($_POST['p_ownershiptype'])){
	$p_ownershiptype=implode("','",$_POST['p_ownershiptype']);
	$sql .="AND p_ownershiptype IN('".$p_ownershiptype."')";
	
	}
	if(isset($_POST['p_propertytype'])){
	$p_propertytype=implode("','",$_POST['p_propertytype']);
	$sql .="AND p_propertytype IN('".$p_propertytype."')";
	
	}
	if(isset($_POST['d_name'])){
	$d_name=implode("','",$_POST['d_name']);
	$sql .="AND d_name IN('".$d_name."')";
	
	}
	if(isset($_POST['price'])){
	$price=implode("','",$_POST['price']);
	$sql .="AND price IN('".$price."')";
	
	}
	$result=mysqli_query($con,$sql);
	$output='';
   
	if(mysqli_num_rows($result)>0){
		while($row=mysqli_fetch_array($result)){
		$output .='<div class="col-md-3 mb-2">
<div class="card-deck">
<div class="card border-secondary">
<img src="project/'.$row['p_img'].'" style="width:300px;height:200px;" class="card-img-top"><br><br>

<div class="card-body">
<h5 class="vertical"style="font-family:courier;font-size:15px;"><b>&nbsp'.$row['p_propertytype'].'&nbspProperty,<br>&nbsp'.$row['d_name'].'<br></h5>


<p style="color:black;font-size:17px;">
    &nbspPrice: &#x20B9 '. $row['price'].'</b><br>
    <img src="l.png" style="width:20px;height:20px;">&nbsp&nbsp'.$row['t_name'].'<br>
	 
</p>
<a href="contact.php?x='.$row['p_id'].'"class="btn btn-success" style="width:210px;">More Details</a><br><br>

<a href="contact.php?x='.$row['login_id'].'"class="btn btn-success" style="width:210px;">View Contact Details</a>

</div>
</div>

</div>
</div>';
		}
	}
	else{
		$output="<h3>No Properties Found!</h3>";
	}
	echo $output;
}


?>