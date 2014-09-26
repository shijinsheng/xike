<?php
require_once('./mydb/db.php');
require_once('./mydb/Paging.php');
$db=new DB();
$id=$_GET['id'];
$pid=$_GET['typeid'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="西科,成都西科,西科光端机,成都西科高新技术有限公司" />
    <meta name="description" content="西科,成都西科,西科光端机,成都西科高新技术有限公司">
    <meta name="baidu-site-verification" content="LD10I6bZyc" />
    <title></title>
    <link href="css/style.css" type="text/css" rel="stylesheet" />
    <!--[if IE 6]>
	<script type="text/javascript" src="js/DD_belatedPNG_0.0.8a.js" ></script>
	<script type="text/javascript">
	DD_belatedPNG.fix('.index_gdm3,.index_gdm3 a,.index_pathl3,a.index_gdm4,.nav2,img,background');
	</script>
	<![endif]-->
	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" />
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.hoverIntent.minified.js"></script>
	<script type="text/javascript" src="js/jquery.naviDropDown.js"></script>
	<script type="text/javascript">$(function () {$('#navigation_horiz').naviDropDown({}); });</script>
</head>
<body>
<?php require("public/top.php");?>
<div class="newsbody clearfix" style="min-height:100px;">
    <a href='http://www.links.cn/' target=_blank>站长工具</a>
</div><!-- newbody -->
<div class="bottom"><?php require("public/bottom.php"); ?></div>
</body>
</html>