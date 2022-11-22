<?php
session_start();
error_reporting(0);
include('includes/config.php');

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Trocken Travels Package Details</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<link rel="stylesheet" href="css/jquery-ui.css" />
	<script>
		 new WOW().init();
	</script>
	<script src="js/jquery-ui.js"></script>
	 <style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>	
		<script type="text/javascript">
		  function valid()
{
if(document.paymentpage.cardnumber.value=="")
{
alert("Please enter card number!");
document.paymentpage.cardnumber.focus();
return false;
}
else if(isNaN(document.paymentpage.cardnumber.value))
{
alert("Please enter card number in numeric format!!");
document.paymentpage.cardnumber.focus();
return false;
}
else if(document.paymentpage.cvv.value=="")
{
alert("Please enter cvv number!");
document.paymentpage.cvv.focus();
return false;
}
return true;
}
		</script>			
</head>




<body>
<?php include('includes/header.php');?>
<div class="banner-3">
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> Trocken Travels</h1>
	</div>
</div>
<div style="padding-top:20px">
<form name="paymentpage" method="post" action="bookingconfirmation.php" onSubmit="return valid();">
<p style="width: 350px;padding-left:20px">
		
			<b>Card Number</b>  <input type="text" name="cardnumber" class="form-control" id="cardnumber" placeholder="Cardnumber" required="">
	</p> 
	<br><br<>
<p style="width: 350px;padding-left:20px">
<b>CVV</b>  <input type="password" name="cvv" class="form-control" id="cvv" placeholder="Valid CVV" required="">
	</p> 
	<br><bR>
<p style="width: 350px;padding-left:20px">
<button type="submit" name="submit1" class="btn-primary btn">Pay</button>
			</p>
			</form>
			</div>
	