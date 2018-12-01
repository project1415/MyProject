<!DOCTYPE HTML>
<html>
<head>
<title>Customize Location App</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->


<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" media="screen">
<style type="text/css" media="all">@import "lib/imgNotes.css";</style>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="https://unpkg.com/jquery-mousewheel@3.1.13"></script>
<script type="text/javascript" src="lib/hammer.min.js"></script>
<script type="text/javascript" src="https://unpkg.com/jquery-hammerjs@2.0.0"></script>
<script type="text/javascript" src="lib/imgViewer.js"></script>
<script type="text/javascript" src="lib/imgNotes.js"></script>

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
														<div id="page-wrapper">
			<div class="main-page">
			
			<div class="charts">		
			<div class="mid-content-top charts-grids">
				<div class="middle-content">
					<div class="owl-carousel" align="center" >
				<h4 align="center" style="font-size:2em; color:#20B2AA; line-height:1em; font-weight:700;">Add Nodes</i></h4><br/><br/>
						<button onclick="getLocation()" style="display: block; background: #2C3E50; padding: 0.7em 0em; width: 100%; font-size: 0.875em; text-transform: uppercase; color: #FFF; font-weight: 700;
	display: inline-block; margin-top: 0.5em; text-decoration: none; border-radius: 0.5em; -webkit-border-radius: 0.5em; -moz-border-radius: 0.5em;
	-o-border-radius: 0.5em; -ms-border-radius: 0.5em; border: none; outline: none; transition: 0.5s all; -webkit-transition: 0.5s all;
	-moz-transition: 0.5s all; -o-transition: 0.5s all; -ms-transition: 0.5s all; cursor: pointer;">Get Your Location</button>
	<option id="demo" name="name" value="">your location</option>
	<script>
var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    x.innerHTML = position.coords.latitude + 
    "," + position.coords.longitude;	
						
						}
						</script>
					<?php		 
include("config.php");
$rs=mysql_query("select * from floor where floor_id='1'") or die(mysql_error());

 while($row= mysql_fetch_row($rs)){
$rows[] = $row;
?> 
		<div class="mainContainer" ><img id="image" src="images/<?php echo $row[4];?>" style="width: 80%;height: 80%;"></div>
 <div align="center">
 <br/>
	<button id="toggleEdit">Edit</button> <button id="export">Export</button> <button id="clear">Clear</button>
	<div id="result"></div>
</div>
 <?php } ?>	
<div id=txt align="center"></div>

<!--market updates end here-->
					</div>
				</div>
					<!--//sreen-gallery-cursual---->
			</div>
		</div>				
			</div>
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
<!--js -->
<script type="text/javascript">
		;(function($) {
						var notes = [<?php		 
include("config.php");
$rs=mysql_query("select * from node") or die(mysql_error());

 while($row= mysql_fetch_row($rs)){
$rows[] = $row;
?> {x: "<?php echo $row[1];?>", y:"<?php echo $row[2];?>", note:"<?php echo $row[4];?> - <?php echo $row[5];?>"}, 
<?php }  ?>		];

				$(window).load(function() {

					var $img = $("#image").imgNotes({
						onEdit: function(ev, elem) {
							var $elem = $(elem);
							$('#NoteDialog').remove();
							return $('<div id="NoteDialog"></div>').dialog({
								title: "Note Editor",
								resizable: false,
								modal: true,
								height: "300",
								width: "450",
								position: { my: "left bottom", at: "right top", of: elem},
								buttons: {
									"Save": function() {
										var txt = $('textarea', this).val();
										$elem.data("note").note = txt;
										
										var type = $('#type').val();
										var name = $('#name').val();
										var id = $('#id').val();
										var Latitude = $('#Latitude').val();
										var longitude = $('#longitude').val();
										var notes = $img.imgNotes('export');
										$.each(notes, function(index, item) {
											
										var x = this.x;
										var y = this.y;
						
										$.ajax({
										type: "POST",
										url: "addnode.php",
										data: {
										data: type,
										name: name,
										id: id,
										Latitude: Latitude,
										longitude: longitude,
										x: x,
										y: y
										},
										success: function (msg){
										$('#result').html(msg);
										$(this).dialog("close");
										},
										error: function () {
										alert('error');
										}
										});
									});
									},
									"Delete": function() {
										$elem.trigger("remove");
										$(this).dialog("close");
									},
									Cancel: function() {
										$(this).dialog("close");
									}
								},
									open: function() {
										$(this).css("overflow", "hidden");
										var input = $('<form><select id="type" name="type" style="width:100%;height:30%;"><option value="Room">Room</option><option value="Stairs">Stairs</option></select>'
														+ '<br/><br/>'+  '<input type="text" placeholder="Node Name" id="name" name="name" style="width:100%;height:30%;">'
														+ '<br/><br/>'+  '<input type="text" placeholder="Latitude " id="Latitude" name="Latitude" style="width:100%;height:30%;">'
														+ '<br/><br/>'+  '<input type="text" placeholder="longitude" id="longitude" name="longitude" style="width:100%;height:30%;">'
														+ '<br/><br/>'+  '<input type="hidden" value="<?php echo $id;?>" id="id" name="id" style="width:100%;height:30%;"></form>');
										$(this).html(input);
										input.val($elem.data("note").note);
									}
							});
						}
					});
					
					$img.imgNotes("import", notes);

					var $toggle = $("#toggleEdit");
					if ($img.imgNotes("option","canEdit")) {
						$toggle.text("View");
					}
					$toggle.on("click", function() {
						var $this = $(this);
						if ($this.text()=="View") {
							$this.text("View");
							$img.imgNotes("option", "canEdit", true);
						} else {
							$this.text('View');
							$img.imgNotes('option', 'canEdit', true);
						}
					});
					
					var $export = $("#export");
					$export.on("click", function() {
						var $table = $("<table/>").addClass("gridtable");
						var notes = $img.imgNotes('export');
						$table.append("<th>X</th><th>Y</th><th>NOTE</th>"); 
						$.each(notes, function(index, item) {
							$table.append("<tr><td>" + item.x + "</td><td>" + item.y + "</td><td>" + item.note + "</td></tr>");
						});
						$('#txt').html($table);
					});
					
					var $clear = $("#clear");
					$clear.on("click", function() {
						$img.imgNotes('clear');
					});
					

				});
		})(jQuery);
		</script>
</body>
</html>