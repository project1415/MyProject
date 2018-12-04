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
							<!--//outer-wp-->
									<div class="outter-wp">
										<!--/tabs-->
										 <div class="tab-main">
											 <!--/tabs-inner-->
												<div class="tab-inner">
												<h4 align="center" style="font-size:2em; color:#20B2AA; line-height:1em; font-weight:700;">Tutorial Videos</i></h4><br/><br/>
							<?php		 
include("config.php");
$result5 = mysql_query("SELECT * FROM tutorial");
while($rows5 = mysql_fetch_array($result5)){
?>										 
																	 <div class="col-md-6">
																		<div class="panel panel-primary">
																			<div class="panel-heading"><b>Video Name:</b> <?php echo $rows5['name'];?></div>
																			<div class="panel-body"><b>Video Description:</b> <?php echo $rows5['des'];?>
																			<br/>
																			<video width="400" controls>
																			  <source src="video/<?php echo $rows5['video'];?>" type="video/mp4">
																			  <source src="video/<?php echo $rows5['video'];?>" type="video/ogg">
																			  Your browser does not support HTML5 video.
																			</video>
																			</div>
																		</div>
																	</div>
<?php
}
?>																	
																 <div class="clearfix"> </div>
														</div>
												</div>
											  <!--//tabs-inner-->
										 </div>	
										<!--//tabs-->
									</div>
								<!--//outer-wp-->
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
<!--js -->
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>