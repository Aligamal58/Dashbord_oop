<?php

session_start();
if((isset($_SESSION['email']))){




	include("header.php");
	include "../class/statistics.php";
	$x=new statistics();
	
	
?>
					<!-- //header-ends -->
						<!--outter-wp-->
							
								   
						<div class="outter-wp">
									<!--sub-heard-part-->
									  <div class="sub-heard-part">
									   <ol class="breadcrumb m-b-0">
											<li><a href="index.php">Home</a></li>
											<li class="active">Profile</li>
										</ol>
									   </div>




										
																
											 	<!--//profile-inner-->
												<!--//profile-->
									</div>
									<!--//outer-wp-->
									 <h3 class="sub-tittle pro"></h3>
									      <div class="profile-widget">
												<div class="pro">	
												<ul>
													<li class="l1"><a href="member.php">Number Member not active</a></li>
													<li class="l2">Number Post <h3><?php echo $x->get_data('post'); ?></h3></li>
													<li class="l3">Number Catagory <h3><?php echo $x->get_data('catagory');?></h3></li>
													<li class="l4">Number User<h3><?php echo $x->get_data('user'); ?></h3> </li>
                                                </ul>
												</div>
													</div>
															
										
									 <!--footer section start-->
									<?php	
									 include("footer.php");
}
else{
	header("location:login.php");
}