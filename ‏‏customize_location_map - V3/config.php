<?php
 error_reporting(E_ALL ^ E_DEPRECATED);
	########### Configuration DB
		$DBHostName="localhost";//database host
		$DBUserName="root";//database username
        $DBName="customize_location_map";// database name
		$DBPassword="";
########### Connect DB
$Connect =mysql_connect($DBHostName,$DBUserName,$DBPassword, $DBName);
{$Select =mysql_select_db($DBName,$Connect);}
//else{mysql_error();}
mysql_query("SET character_set_server='utf8'");
mysql_query("SET names utf8");
date_default_timezone_set('Asia/Riyadh');
error_reporting(0);//no warnings to display
?>