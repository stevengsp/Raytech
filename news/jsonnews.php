<?php
	include ('config.php');
	
   //Execute the query
   $rs = mysql_query("SELECT id,ftitle,headline,image FROM raytech_news order by fdate desc limit 0,10");
   
   // Add the rows to the array 
   while($obj = mysql_fetch_object($rs)) {
   $arr[] = $obj;
   }
   
   //return the json result. The string users is just a name for the container object. Can be set anything.
   echo '{"raytech_news":'.json_encode($arr).'}';

?>

