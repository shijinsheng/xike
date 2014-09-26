<?php
require_once('./mydb/db.php');
require_once('./mydb/Paging.php');
$db=new DB();
$keywords=trim($_GET['key']);
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
	<script type="text/javascript" src="js/jquery.Pages.js"></script>
    <link rel="stylesheet" href="css/index.css" type="text/css" media="screen, project, print" />
	<link href="css/page.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript">
		function qwss1(dom){
		for (var iii = 1; iii <= 4; iii++) {
					if (iii == dom) {
						$("#d" + dom).css("display", "block");
					} else {
						$("#d" + iii).css("display", "none");
					}
				}
			}
	</script>
</head>

<body>
<?php 
require('public/top.php');
$sql_search=mysql_query("select * from yourphp_product where concat(`title`,`xinghao`) like '%".$keywords."%'");
$count_search=mysql_num_rows($sql_search);
$sql_solution=mysql_query("select * from yourphp_article where catid=24 and title like '%".$keywords."%'");
$count_solution=mysql_num_rows($sql_solution);
$sql_media=mysql_query("select * from yourphp_duomeiti where title like '%".$keywords."%'");
$count_media=mysql_num_rows($sql_media);
$sql_download=mysql_query("select * from yourphp_download where title like '%".$keywords."%'");
$count_download=mysql_num_rows($sql_download);
?>
<div class="newsbody clearfix">
	<div class="newsbodyl">
		<div class="nblnav"><a href="javascript:void(0);" style="cursor:default;">按类别过滤</a></div>
		<div class="qwss12"><a href="#" onclick="qwss1(1)">产品展示（<?php echo $count_search; ?>）</a></div>
		<div class="qwss12"><a href="#" onclick="qwss1(2)">解决方案（<?php echo $count_solution; ?>）</a></div>
		<div class="qwss12"><a href="#" onclick="qwss1(4)">下载（<?php echo $count_download; ?>）</a></div>
		<div class="nblnav" style="margin-top: 11px;"><a href="javascript:void(0);" style="cursor:default;">时间类别</a></div>
		<div class="qwss12"><a href="#">一周内</a></div>
		<div class="qwss12"><a href="#">一个月内</a></div>
		<div class="qwss12"><a href="#">一个季度内</a></div>
		<div class="qwss12"><a href="#">一年内</a></div>
	</div><!-- newsbody1 -->
	<div class="newsbodyr">
		<div class="nbrtop clearfix" style="padding-bottom: 11px;">
			<div class="nbrtopr clearfix" style="width: 140px; position: relative;">
				<div title="订阅电子报"><a href="#"><img src="images/momopic.jpg" /></a></div>
				<a href="#" id="weixinlogo"><img src="images/weixinlogo.jpg" /></a>
				<a target="_blank" href="#"><img src="images/sinalogo.jpg" /></a>
				<span>关注我们</span>
			</div>
		</div>
		<div class="qwss clearfix">
			<div class="qwss1">
				<form action="javascript:qwsearchxx();">
					<div class="qwss2">
						<div class="qwss3 clearfix">
							<div class="qwss11">
								<input type="text" id="qwsskey" value="" onfocus="if (this.value=='请输入关键字') {this.value='';}" onblur="if (this.value==''){ this.value='请输入关键字';}" style="border: none;" name="qwsskey" />
							</div>
							<a href="javascript:qwsearchxx();"><img src="images/qwsspic1.jpg" /></a>
						</div>
					</div>
				</form>
				<script language="javascript" type="text/javascript">
					function qwsearchxx() {
						var keycp = document.getElementById("qwsskey");
						if (keycp.value != null && keycp.value != "" && keycp.value != "请输入关键字") {
							window.location.href = "search_"+keycp.value+".html";
						} else { alert("请输入关键字"); }
					}
				</script>
				<div class="qwss4"></div>
				<div class="qwss5">找到关于<?php echo $keywords; ?>的结果数约<?php echo $count_search+$count_solution+$count_media+$count_download; ?>条</div>
				<div class="qwss6"></div>
				<div class="qwss7 clearfix">
					<div class="qwss8">标题</div>
					<div class="qwss9">发布时间</div>
				</div>
				<div class="qwss10" id="d1">
					<ul class="clearfix">
					<?php 
					while($result_search=mysql_fetch_array($sql_search)){
					?>
						<li class="clearfix"><a href="product_info<?php echo $result_search['catid']; ?>_<?php echo $result_search['id']; ?>.html"><?php echo $result_search['xinghao']; ?></a><span><?php echo date('Y-m-d',$result_search['createtime']); ?></span></li>
					<?php } ?>
					</ul>
				</div>
				<div class="qwss10" id="d2" style="display:none;">
					<ul class="clearfix">
					<?php 
					while($result_solution=mysql_fetch_array($sql_solution)){
					?>
						<li class="clearfix"><a href="scheme_list.php?typeid=<?php echo $result_solution['id']; ?>"><?php echo $result_solution['title']; ?></a><span><?php echo date('Y-m-d',$result_solution['createtime']); ?></span></li>
					<?php } ?>
					</ul>
				</div>
				<div class="qwss10" id="d3" style="display:none;">
					<ul class="clearfix">
					<?php 
					while($result_media=mysql_fetch_array($sql_media)){
					?>
						<li class="clearfix"><a href="#"><?php echo $result_media['title']; ?></a><span><?php echo date('Y-m-d',$result_media['createtime']); ?></span></li>
					<?php } ?>
					</ul>
				</div>
				<div class="qwss10" id="d4" style="display:none;">
					<ul class="clearfix">
					<?php 
					while($result_download=mysql_fetch_array($sql_download)){
					?>
						<li class="clearfix"><a href="#"><?php echo $result_download['title']; ?></a><span><?php echo date('Y-m-d',$result_download['createtime']); ?></span></li>
					<?php } ?>
					</ul>
				</div>
			</div>
			<script type="text/javascript">
				$('#d1,#d2,#d3,#d4').kkPages({
					PagesClass: 'li', //需要分页的元素
					PagesMth: 18, //每页显示个数 
					PagesNavMth: 8 //显示导航个数
				}); 
			</script> 
		</div>
	</div><!-- newsbodyr -->
</div><!-- newsbody -->
<?php require('public/bottom.php'); ?>
</body>