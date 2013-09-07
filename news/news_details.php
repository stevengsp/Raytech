<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>


<style type="text/css">
body {
	margin: 0px;
	padding: 0px;
}
#frame {
	width: 95%;
	margin-right: auto;
	margin-left: auto;
}
#header {
	width: 100%;
	margin-top: 0px;
	margin-bottom: 30px;
	position: fixed;
	z-index: 1;
	padding-top: 30px;
	padding-bottom: 30px;
	left: 0px;
	top: 0px;
	float: left;
	padding-left: 25px;
	background-color: #fff;
}
#header img {
	width: 60px;
}
#content {
	float: left;
	width: 100%;
	margin-top: 80px;
	margin-bottom: 20px;
}

#content img {
	width: 100%;
}
#content dl {
	float: left;
	width: 45%;
	padding-top: 0px;
	padding-right: 5%;
	padding-bottom: 0px;
	padding-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 30px;
	margin-left: 0px;
}
#content dt {
	margin: 0px;
	float: left;
	width: 40%;
	padding-top: 0px;
	padding-right: 5%;
	padding-bottom: 0px;
	padding-left: 0px;
}
#content dd {
	margin: 0px;
	padding: 0px;
	float: left;
	width: 55%;
}
#content dd img {
	width: 100%;
}
</style>
</head>

<body>
<div id="frame">
  <div id="header"><img src="images/btn-back.png" onclick="history.back();"/></div>
  <div id="content">
<?php 

include('config.php');

$sql = "select * from raytech_news where id =". $_GET['id'];
$esql = mysql_query($sql);
while($row = mysql_fetch_array($esql)){
		
			print $row['article'];
}
?>


</div>
</div>
</body>
</html>
