<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>


<style type="text/css">
body {
	margin: 0px;
	padding: 0px;
	font-family: Helvetica, Arial;
	color: #999;
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
	background-color: #FFF;
	position: absolute;
	z-index: 1000;
	padding-top: 30px;
	padding-bottom: 30px;
	left: 0px;
	top: 0px;
	float: left;
	padding-left: 25px;
}
#header img {
	width: 30%;
}
#content {
	float: left;
	width: 100%;
	margin-top: 130px;
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
#content dt img {
	width: 30%;
}
#content dt span {
	width: 100%;
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
.headline {
	font-size: 18px;
	margin-bottom: 5px;
	color: #000;
}
.date {
	font-size: 14px;
	color: #666;
}
#backbar {
	position: absolute;
	width: 30%;
	z-index: 9999;
    text-align: center;
    overflow: hidden;
    top:0;
	right:0;
	height:103px;
}
@media only screen and (max-width : 1920px) {
#backbar {
	position: absolute;
	width: 30%;
	z-index: 9999;
	text-align: center;
	overflow: hidden;
	top: 0;
	right: 0px;
}
#backbar-buttons {
    position: absolute;
    right:10px;
    top:10px;
    font-size:0;
    overflow: hidden;
}
#backbar-buttons span {
	display: inline-block;
	cursor: pointer;
	height: 60px;
	padding-right: 0px;
	padding-left: 0px;
}
#backbar-buttons span img {
	width: 30%;
	float: right;
	border: 1px solid #fff;
	border-radius: 3px;
}
#backbar-buttons span:hover {

}
}
</style>
<head>

<body>
<div id="frame">
<div id="backbar">
	  <div id="backbar-buttons">
            <span><a href="../index.html"><img src="../images/back-button.png"></a></span>
      </div>
    </div>
  <div id="header"><img src="../images/_logo.png"/></div>
  <div id="content">
<?php 

include('config.php');

$sql = "select * from raytech_news order by fdate desc limit 0,20";
$esql = mysql_query($sql);
while($row = mysql_fetch_array($esql)){
		if(strlen($row['headline'])<=100) {
		$c200 = $row['headline']; } else {
		$c200 = substr($row['headline'],0,100) . '...';
		}
			print '
			<dl>
        	<dt>
			<span class="headline">'.$row['ftitle'].'</span><br />
        	  <span class="date">'.date("d-m-Y",strtotime($row['fdate'])).'</span><br />
<br />
			'.$c200.'
			<br />
          <br />
          <span><a href="http://www.mobile360.my/raytech/news/news_details.php?id='.$row['id'].'"><img src="images/btn-more.png" border="0"/></a></span> 
			</dt>
            <dd><img src="'.$row['image'].'"/></dd>
        	</dl>
			';
	} 
?>


</div>
</div>
</body>
</html>
