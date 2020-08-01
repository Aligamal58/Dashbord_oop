

<footer>
										   <p>&copy 2016 Augment . All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">W3layouts.</a></p>
										</footer>
									<!--//footer section end-->
								</div>
							</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo">
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.html"> <span id="logo"> <h1>Augment</h1></span> 
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a> 
				</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
							<!--<div class="down">	
									  <a href="index.html"><img src="images/admin.jpg"></a>
									  <a href="index.html"><span class=" name-caret">Jasmin Leo</span></a>
									 <p>System Administrator in Company</p>
									<ul>
									<li><a class="tooltips" href="index.html"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
										<li><a class="tooltips" href="index.html"><span>Settings</span><i class="lnr lnr-cog"></i></a></li>
										<li><a class="tooltips" href="index.html"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
										</ul>
									</div>-->
							   <!--//down-->
								<div class="menu">
									<ul id="menu" >
										
										 <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span> Catagory</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										   <ul id="menu-academico-sub" >

										   <li id="menu-academico-avaliacoes" ><a href="catagory.php">show_catagory</a></li>
											<li id="menu-academico-avaliacoes" ><a href="catagory.php?do=add"> add_catagory</a></li>
										
											
											
										  </ul>
										</li>
										 <li id="menu-academico" ><a href="#"><i class="fa fa-file-text-o"></i> <span>posts</span> <span class="fa fa-angle-right" style="float: right"></span></a>
											 <ul id="menu-academico-sub" >
												
												<li id="menu-academico-boletim" ><a href="post.php?do=add">add_post</a></li>
												<li id="menu-academico-boletim" ><a href="post.php">showpost</a></li>
											
											  </ul>
										 </li>
								
									 <li><a href="#"><i class="lnr lnr-envelope"></i> <span>Member</span><span class="fa fa-angle-right" style="float: right"></span></a>
									   <ul>
										<li><a href="member.php"><i class="fa fa-inbox"></i> Member.php</a></li>
									
									  </ul>
									</li>
							    
								</div>
							  </div>
							  <div class="clearfix"></div>		
                            </div>
</div>
</div>
</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
	<script src="../js/jquery.nicescroll.js"></script>
	<script src="../js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="../js/bootstrap.min.js"></script>
                                    </div>
                                    </div>
                                    </div>
</body>
</html>