<?php
if(isset($_POST["data"]) && strlen($_POST["data"])>0) {

$type= $_POST["data"];
$name= $_POST["name"];
$Latitude= $_POST["Latitude"];
$longitude= $_POST["longitude"];
$x= $_POST["x"];
$y= $_POST["y"];

include("config.php");

$query = "SELECT * FROM `node` WHERE x='$x' and y='$y' ";//select x & y and compare them
$result = mysql_query($query) or die(mysql_error());
$count = mysql_num_rows($result);
if ($count==1 || $count>1){
echo "This node has been saved";
header("Location:welcome.php");
}
else{
$query = "insert into `node` (x,y,floor_id,type,name,Latitude,longitude) values ('$x','$y','1','$type','$name','$Latitude','$longitude')";
$result = mysql_query($query);
if ($result) {
echo '<font style="font-size:100%" color="#20B2AA">' ;
Echo' Node Successfully Saved';
echo '</font><br><br><br>';
}
}


if (!$result) {
echo '<font style="font-size:100%" color="red">' ;
echo "Failure! something bad happen (Try again)";
echo '</font><br><br><br>';
}
}
?>