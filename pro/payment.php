<?php
session_start(); 
$con=mysqli_connect("localhost","root","","project");
if(isset($_REQUEST['x']))
{
	$a=$_GET['x'];
	$_SESSION['login_id']=$a;
	$d=$_SESSION['login_id'];
	
}
 ?>

 
 <body bgcolor='#528072'>
 <center><br><br><br><br><br><form>
 <fieldset style="height:500px;width:500px;">
 <legend style="color:white">Payment</legend>
 <p><center><br><br><br><br><br><br><h3 style="color:white">In order to see more details about the property, <br>want to pay a premium amount of Rs.500.
 <br>If you want to proceed ,<br>Please click PayNow button.</h3><br><br>
<form ><button id="rzp-button1" style="height:50px;width:500px;">PayNow</button>
</fieldset></form>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "rzp_test_CGeqqN15LxMcSU", // Enter the Key ID generated from the Dashboard
    "amount": "50000", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Unique",
    //"description": "Test Transaction",
    //"image": "pt.png",
    //"order_id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "handler": function (response){
          //alert(response.razorpay_payment_id);
        if (typeof response.razorpay_payment_id == 'undefined' ||  response.razorpay_payment_id < 1) {

} else {
  redirect_url = 'p.php';
}
location.href = redirect_url;
        //alert(response.razorpay_order_id);
        //alert(response.razorpay_signature)
    },
   
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#012e0d"
    }
};
var rzp1 = new Razorpay(options);
rzp1.on('payment.failed', function (response){
        
        (response.error.description);
        (response.error.source);
        (response.error.step);
        (response.error.reason);
        (response.error.metadata.order_id);
        (response.error.metadata.payment_id);
		    location.href='failed.php';
});
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}</script></script> </form></center>