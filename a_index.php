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
												<!--/charts-->
												<div class="charts">
												  <div class="chrt-inner">	
													<!--//weather-charts-->
														<div class="graph-visualization">
														<div class="col-md-12">
														<br/><br/><br/>
														 <h3 class="sub-tittle" style="text-align:center;"><b>Introduction</b></h3>
														 <br/><p>Maps have become very important for people to know information about the specific places and how to route them, also to know whether there are two or more paths to the same place and which is the shortest and we can get information about public places such as hospitals, schools, institutes, malls or other. Unfortunately, some people are forced to ask others maybe take many time to get the correct direction of their destination and this may consume a lot of time and effort to reach. And others may also, want to know if there is any event / course to get new knowledge in their free time but, the correct destination and time for these events is missing. </p>
														 <br/><p>In general idea for our project is trying to solve this problems by develop a mobile application is easy to use and convenient for user. </p>
														 <br/><p>Customized location app will serve everyone whose looking for help finding events and navigation services. our app will provide navigation service based on google map. this service will reduce time and effort for search about building or event especially if a new student or employee. The app will be synced with cloud and the information will update when the user has internet connection.</p>
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
										<li><a href="https://drive.google.com/open?id=1RQtiuoRQ9sdYRUZ6iITvJq5nGsA3aArT&usp=sharing"><i class="fa fa-cog"></i> <span>Nodes</span></a></li>
										<li><a href="New_account.php"><i class="fa fa-table"></i> <span>Create Account For Admin</span></a></li>
										<li><a href="tutorial.php"><i class="fa fa-camera-retro"></i> <span>Tutorial Video</span></a></li>
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
</body>
</html>