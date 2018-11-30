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
<script type="text/javascript" src="js/modernizr.custom.04022.js"></script>
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
										<!--/tabs-->
										 <div class="tab-main">
											 <!--/tabs-inner-->
												<div class="tab-inner">
												<h4 align="center" style="font-size:2em; color:#20B2AA; line-height:1em; font-weight:700;">Add Events</i></h4><br/><br/>
													<div class="col-md-6 login">
			<?php
		$id=$_GET["id"];
        if(isset($_POST["submit"])){
		$name=$_POST['name'];
		$des=$_POST['des'];
		$sTime=$_POST['sTime'];
		$eTime=$_POST['eTime'];
		$att1=$_POST['att1'];
		$att2=$_POST['att2'];
		$att3=$_POST['att3'];
		$att4=$_POST['att4'];
		$att5=$_POST['att5'];
        
    include('config.php'); 
	
	if($name&& $des&& $sTime&& $eTime){
    $sql="INSERT INTO `event`(node_id,event_name,des,start_time,end_time,attribute1,attribute2,attribute3,attribute4,attribute5) VALUES ('$id','$name','$des','$sTime','$eTime','$att1','$att2','$att3','$att4','$att5')";
    $result=mysql_query($sql);
	    if($result){
			echo '<p style="text-align:center; color: green; font-size: 20px;">' ;
			echo "Event Information Saved Successfully";
			echo '</p><br>';
			} else {
				echo '<p style="text-align:center; color: red; font-size: 20px;">' ;
				echo "Erorr, Try Again";
				echo '</p><br>';
				}
    }						
	else{
		echo '<p style="text-align:center; color: red; font-size: 20px;">' ;
        echo "Please Fill All the Fields";
		echo '</p>'; }
	}
?>
																<form method="post" action="Add_event1.php?id=<?php echo $id;?>">
																		<input type="text" Placeholder="Event Name" name="name" style="background: none;">
																		<input type="text" Placeholder="Description" name="des" style="background: none;">
																		Start Time<input type="datetime-local" name="sTime" style="text-align: center; font-size: 0.9em;
																		padding: 5px 20px;width: 100%;color:#8C8C8C;outline: none; border: 1px solid #D3D3D3;  border-radius: 5px; margin: 0em 0em 1.5em 0em;">
																		End Time <input type="datetime-local" name="eTime" style="text-align: center; font-size: 0.9em;
																		padding: 5px 20px;width: 100%;color:#8C8C8C;outline: none; border: 1px solid #D3D3D3;  border-radius: 5px; margin: 0em 0em 1.5em 0em;">
																		<input type="text" Placeholder="Attribute 1" name="att1" style="background: none;">
																		<input type="text" Placeholder="Attribute 2" name="att2" style="background: none;">
																		<input type="text" Placeholder="Attribute 3" name="att3" style="background: none;">
																		<input type="text" Placeholder="Attribute 4" name="att4" style="background: none;">
																		<input type="text" Placeholder="Attribute 5" name="att5" style="background: none;">
							
																		<div class="sign-up">
																					<input type="reset" value="Reset">
																					<input type="submit" name="submit" value="Save">
																		</div>
																	</form>
														</div>
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