<?php      
	$generalfilepath = '/home/roboticd/public_html/mobile360.my/raytech/userfiles/';
	$dbserver   = 'localhost';     
	$dbname   = 'robotic1_mobile360';     
	$dbuname   = 'robotic1_m360';    
	$dbpass = 'itpass123*';          
	mysql_connect ($dbserver, $dbuname, $dbpass); mysql_select_db($dbname) or die('Cannot select database'); 
?>