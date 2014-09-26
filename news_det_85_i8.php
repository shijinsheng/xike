<?php
require_once('./mydb/db.php');
require_once('./mydb/Paging.php');
$db=new DB();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="西科,成都西科,西科光端机,成都西科高新技术有限公司" />
    <meta name="description" content="西科,成都西科,西科光端机,成都西科高新技术有限公司">
    <meta name="baidu-site-verification" content="LD10I6bZyc" />
	<title>光端机|光纤收发器|光纤交换机|poe交换机|工业交换机|网络摄像机-成都西科高新技术有限公司</title>
    <link href="css/style.css" type="text/css" rel="stylesheet" />
	<link href="css/xgstyle1.css" type="text/css" rel="stylesheet" />
	<link href="css/page.css" type="text/css" rel="stylesheet" />
    <!--[if IE 6]>
	<script type="text/javascript" src="js/DD_belatedPNG_0.0.8a.js" ></script>
	<script type="text/javascript">
	DD_belatedPNG.fix('.indexpt,.indexpf,.ibaner1 a.ibaner2,.ibaner1 a,.itj8,.bottomsx,img,background');
	</script>
	<![endif]-->
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/index/index1.js"></script>
    <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" />
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.hoverIntent.minified.js"></script>
    <script type="text/javascript" src="js/jquery.naviDropDown.js"></script>
    <link rel="stylesheet" href="css/index.css" type="text/css" media="screen, project, print" />
</head>

<body>
<?php require("public/top.php"); ?>
<div class="newsbody clearfix">
	<div class="newsbodyr" style="float:left">
		<div class="nbrtop clearfix" style="padding-bottom:11px;">
				<div class="xgy1" style="float:left"><a href="#">最佳实践</a></div>
				<?php require("public/share.php"); ?>
		</div>
		<?php
			$id=$_GET['typeid'];
			$sql_practice=mysql_query("select * from yourphp_article where id='".$id."'");
			$row_practice=mysql_fetch_assoc($sql_practice);
		?>
		<div class="jjfajs">
			<div class="jjfajsbt"><?php echo $row_practice['title']; ?></div>
			<div class="jjfajsbt3"><?php echo $row_practice['content']; ?></div>
		</div>
	</div>
</div>
<?php require("public/bottom.php"); ?>
</body>