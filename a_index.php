<!DOCTYPE HTML>
<html>
<head>
<title>Customize Location App</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>
<!--clock init-->
<script src="js/css3clock.js"></script>
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
			<div class="header-section">
						<!--menu-right-->
						<div class="top_menu">
							<!--/profile_details-->
								<div class="profile_details_left">
									<ul class="nofitications-dropdown">
											<li class="dropdown note">
													   <div class="wrapper-dropdown-3" tabindex="1">
																			<p>Welcome</p>
																		</div>
										    </li>
										   							   		
							<div class="clearfix"></div>	
								</ul>
							</div>
							<div class="clearfix"></div>	
							<!--//profile_details-->
						</div>
						<!--//menu-right-->
					<div class="clearfix"></div>
				</div>
					<!-- //header-ends -->
						<div class="outter-wp">
						<!--custom-widgets-->
												<div class="custom-widgets">
												   <div class="row-one">
														<a href="a_index.php"><div class="col-md-2 widget">
															<div class="stats-left">
																<h5><span>Home</span></h5>
															</div>
														</div></a>
														<a href="map.php"><div class="col-md-2 widget">
															<div class="stats-left">
																<h5><span>Add New Node</span></h5>
															</div>
														</div></a>
														<a href="Delete_node.php"><div class="col-md-2 widget">
															<div class="stats-left">
																<h5></i><span>Delete Node</span></h5>
															</div>
														</div></a>
														<a href="Add_event.php"><div class="col-md-2 widget">
															<div class="stats-left">
																<h5><span>Add New Events</span></h5>
															</div>
														</div></a>
														<a href="Delete_event.php"><div class="col-md-2 widget">
															<div class="stats-left">
																<h5><span>Delete Events</span></h5>
															</div>
														</div></a>
														<a href="user_view.php"><div class="col-md-2 widget">
															<div class="stats-left">
																<h5><span>User View</span></h5>
															</div>
														</div></a>
														<div class="clearfix"> </div>	
													</div>
												</div>
												<!--//custom-widgets-->
												<!--/charts-->
												<div class="charts">
												  <div class="chrt-inner">	
													<!--//weather-charts-->
														<div class="graph-visualization">
															<div class="col-md-3 ">
																	<section class="panel">
																		<div class="user-heading alt clock-row terques-bg">
																			<h3 style="color:#fff; font-size: 22pt; margin:-30pt 0 30pt 0;">Easy Clock </h3>
																		</div>
																			<ul id="clock">
																				<li id="sec"></li>
																				<li id="hour"></li>
																				<li id="min"></li>
																			</ul>
																	</section>
															</div>
														<div class="col-md-9">
														 <h3 class="sub-tittle">User View </h3>
																<iframe src="https://www.google.com/maps/d/embed?mid=1RQtiuoRQ9sdYRUZ6iITvJq5nGsA3aArT&hl=ar" width="100%" height="480"></iframe>
															
														</div>
															<div class="clearfix"></div>		
													</div>
									</div>
									<!--/charts-inner-->
									</div>
										<!--//outer-wp-->
									</div>
									 <!--footer section start-->
										<footer>
										   <p>&copy 2018 Customize Location App</a></p>
										</footer>
									<!--footer section end-->
								</div>
							</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo">
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="a_index.php"> <span id="logo"> <h1></h1></span> </a> 
				</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
							<div class="down">	
									  <a href="a_index.php"><img src="images/admin.jpg"></a>
									 <p>Customize Location App</p>
									<ul>
									<li><a class="tooltips" href="profile.php"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
										<li><a class="tooltips" href="logout.php"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
										</ul>
									</div>
							   <!--//down-->
                           <div class="menu">
									<ul id="menu" >
										<li><a href="a_index.php"><i class="fa fa-tachometer"></i> <span>Home</span></a></li>
										 <li id="menu-academico" ><a href="#"><i class="lnr lnr-highlight"></i> <span> Nodes </span> <span class="fa fa-angle-right" style="float: right"></span></a>
										   <ul id="menu-academico-sub" >
											<li id="menu-academico-avaliacoes" ><a href="map.php"> Add New Node</a></li>
											<li id="menu-academico-avaliacoes" ><a href="Delete_node.php">Delete Node</a></li>
											
										  </ul>
										</li>
										 <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span>Events</span> <span class="fa fa-angle-right" style="float: right"></span></a>
											 <ul id="menu-academico-sub" >
												<li id="menu-academico-avaliacoes" ><a href="Add_event.php">Add New Events</a></li>
												<li id="menu-academico-boletim" ><a href="Delete_event.php">Delete Events</a></li>
											  </ul>
										 </li>
									<li><a href="user_view.php"><i class="lnr lnr-map"></i> <span>User View</span></a></li>
									
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
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
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>