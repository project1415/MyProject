<!DOCTYPE HTML>
<html>
<head>
<title>Customize Location APP</title>
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
		<div class="error_page">
			<div class="error-top">
				<h2 style="font-size: 1.8em; font-weight: 400;  text-align: center; color: #00C6D7;"><b>Customize Location App</b></h2>
					<div class="login" >
					<?php
error_reporting(E_ALL); ini_set('display_errors', 'On');
//error_reporting(0);
session_start();// session start
include('config.php');// connect to database
if (isset($_POST['id']) and isset($_POST['password'])){
$username = $_POST['id'];
$password = $_POST['password'];
$query = "SELECT * FROM `admin` WHERE email='$username' and password='$password' ";//select username & password and compare them
$result = mysql_query($query) or die(mysql_error());
$count = mysql_num_rows($result);
if ($count == 1){
$_SESSION['id'] = $username;
header("Location:a_index.php");
}
else{
echo '<font style="font-size:100%; margin-left: -20px;" color="#00C6D7">' ;
echo "please enter correct username and password";
echo '</font><br><br><br>';
}
}
else{
}
mysql_close(); //close database*/
?>
					<form action="index.php" method="post"> 
							<input type="text" class="text" name="id" placeholder="E-mail address">
							<input type="password" name="password" placeholder="Password">
							<div class="submit"><input type="submit" value="Login" ></div>
							<div class="clearfix"></div>
						</form>
					</div>
			</div>
		</div>
										<div class="footer">
										</div>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>