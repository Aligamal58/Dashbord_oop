<?php session_start();
if(isset($_SESSION['email'])){
	header("location:admin/dashbord.php");
}
else{


?>
<!DOCTYPE HTML>
<html>
<head>
<title>Augment an Admin Panel Category Flat Bootstrap Responsive Web Template | Register :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="../css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="../css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="../css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="../css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<script src="../js/jquery-1.10.2.min.js"></script>
<!--clock init-->
</head> 
<body>

<?php include "../class/login.php";
$x=new user();
if($_SERVER['REQUEST_METHOD']=='POST'){
if(isset($_POST['save'])){
$date=$_POST;
$x->check($date);




}
}

   






?>


										

								<!--/login-->
								
									   <div class="error_page">
												<!--/login-top-->
												
													<div class="error-top">
												
													    <div class="login">
														<h3 class="inner-tittle t-inner">Login Admin</h3>
																<form action="" method="POST">
																		<input type="text" class="text" placeholder="email" name="email"  >
																		<input type="password" placeholder="password" name="password" >
																		<div class="sign-up">
																					<input type="reset" value="Reset">
																					<input type="submit"  name="save" value="Register">
																			
																		</div>
																		<div class="clearfix"></div>
																		
																		<div class="new">
																			<p><label class="checkbox11"><input type="checkbox" name="checkbox"><i> </i>I agree with the terms</label></p>
																		
																			<div class="clearfix"></div>
																		</div>
																	</form>
														</div>
														
													</div>
													 </div>
												<!--//login-top-->
										  
										  	<!--//login-->
										    <!--footer section start-->
										<div class="footer">
										          <div class="error-btn">
															<a class="read fourth" href="index.html">Return to Home</a>
															</div>
										   <p>&copy 2016 Augment . All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">W3layouts.</a></p>
										</div>
									<!--footer section end-->
									<!--/404-->
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>

<?php }?>