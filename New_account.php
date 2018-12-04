<!DOCTYPE HTML>
<?php
session_start();
?>
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
						<!--outter-wp-->
							<div class="outter-wp">
										<!--/profile-->
										<br/>
										<h3 class="sub-tittle pro" style="text-align: center;"><b>Accounts</b></h3>
														<!--/profile-inner-->
														 <div class="profile-section-inner">
														       <div class="col-md-12 ">
																	<h3 class="inner-tittle" style="text-align: center;">Create Account For New Admin</h3>
																	<div class="main-grid3">
																     <div class="p-20">	
																	 <div class="login" >
				<?php
        if(isset($_POST["submit"])){
		
		$full_name=$_POST["full_name"];
		$password=$_POST["password"];
		$email=$_POST["email"];
        
    include('config.php'); 
	if($full_name && $password && $email){
    $sql="INSERT INTO `admin`(`email`, `password`, `full_name`) VALUES ('$email','$password','$full_name')";
    $result=mysql_query($sql);
	    if($result){
			echo '<p style="text-align:center; font-size: 20px;">' ;
			echo "Created Successfully";
			echo '</p><br>';
			} else {
				echo '<p style="text-align:center; color: red; font-size: 20px;">' ;
				echo "Error Try again";
				echo '</p><br>';
				}
	}
	}
?>																	 
																	<form action="New_account.php" method="post"> 
																		<div class="about-info-p">
																			<strong>Admin Full Name</strong>
																			<input type="text" name="full_name" style="background: none;">
																		</div>
																		<div class="about-info-p">
																			<strong>Email</strong>
																			<input type="text" name="email" style="background: none;">
																		</div>
																		<div class="about-info-p m-b-0">
																			<strong>Password</strong>
																			<input type="text" name="password" style="background: none;">
																		</div>
																		<input type="submit" name="submit" value="submit">
																		</form>
	
																	</div>
																	</div>
																 </div>
															  </div>
																<div class="clearfix"></div>
															</div>
															
											 	<!--//profile-inner-->
												<!--//profile-->
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
</body>
</html>