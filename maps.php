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
<!--[if IE 6]>
<script type="text/javascript" src="js/DD_belatedPNG_0.0.8a.js" ></script>
<script type="text/javascript">
DD_belatedPNG.fix('.index_gdm3,.index_gdm3 a,.index_pathl3,a.index_gdm4,.nav2,img,background');
</script>
<![endif]-->
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script language="javascript" type="text/javascript" src="js/My97DatePicker/WdatePicker.js"></script>
</head>
<body>
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" />
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.hoverIntent.minified.js"></script>
<script type="text/javascript" src="js/jquery.naviDropDown.js"></script>
<script type="text/javascript">
    $(function () {
        $('#navigation_horiz').naviDropDown({});
    });
</script>
<style type="text/css">
    .indexpf4 a {
        background-image: none;
        height: auto;
        width: auto;
    } .indexpf4 a:hover {
            background: none;
            height: auto;
            width: auto;
        }
    .indexpf3 ul li a {
        background-image: none;
        height: auto;
        width: auto;
    }
        .indexpf3 ul li a:hover {
            background-image: none;
            height: auto;
            width: auto;
        }
		.yuyan{ float:right; width:185px; height:20px; z-index:1001;}
		.yuyan1{ width:175px; height:20px; background:url(images/xl_03.jpg) no-repeat; padding-left:10px; line-height:20px; color:#333; cursor:pointer; font-size:11px; font-family:Verdana; position:relative; z-index:1001;}
		.yuyan2{ position:absolute; top:19px; left:0; width:183px; border:1px solid #C4BDAA;z-index:1001; background:#fff; padding-bottom:6px; display:none;}
		.yuyan2 ul li{  float:left; width:183px; height:20px; line-height:20px;}
		.yuyan2 ul li a{padding:3px 0 0 8px; color:#333; display:block; width:175px;font-family:Verdana;}
		.yuyan2 ul li a:hover{ background:#EBEBEB;}
</style>
<?php require("public/top.php");?>
	<div class="wzdt">
		<div class="wzdt1">网站地图</div>
		<!-- 产品中心 -->
		<div class="wzdt2">
			<div class="wzdt3"><a href="product.html">产品中心</a></div>
			<?php
				$sql_product=mysql_query("select * from yourphp_category where parentid=4");
				while($row_product=mysql_fetch_array($sql_product)){
				switch($row_product['id']){
					case 5:
						$number=175;
						break;
					case 6:
						$number=168;
						break;
					case 179:
						$number=180;
						break;
					case 185:
						$number=186;
						break;
					default:
						$number=$a['id'];
						}
			?>
			<div class="wzdt4">
				<ul class="clearfix">
					<li><a class="wzdt5" href="product_list_<?php echo $number; ?>.html"><?php echo $row_product['catname']; ?></a></li>
					<?php 
					$sql_child_product=mysql_query("select * from yourphp_category where id in(".$row_product['arrchildid'].")");
					$i=0;
					while($row_child_product=mysql_fetch_array($sql_child_product)){
					$i++;
					if($i==1){continue;}
					?>
					<li>·<a href="product_list_<?php echo $row_child_product['id']; ?>.html"><?php echo $row_child_product['catname']; ?></a></li>
					<?php } ?>
				</ul>
			</div>
			<?php } ?>
		</div>
		
		<!-- 解决方案 -->
		<div class="wzdt2">
			<div class="wzdt3"><a href="scheme.html">解决方案</a></div>
			<?php
				$sql_solution=mysql_query("select * from yourphp_category where parentid=23");
				while($row_solution=mysql_fetch_array($sql_solution)){
			?>
			<div class="wzdt4">
				<ul class="clearfix">
					<li><a class="wzdt5" href="scheme23_<?php echo $row_solution['id']; ?>.html"><?php echo $row_solution['catname']; ?></a></li>
					<?php 
					$sql_child_solution=mysql_query("select * from yourphp_category where id in(".$row_solution['arrchildid'].")");
					$i=0;
					while($row_child_solution=mysql_fetch_array($sql_child_solution)){
					$i++;
					if($i==1){continue;}
					?>
					<li>·<a href="scheme_list_<?php echo $row_child_solution['id']; ?>.html"><?php echo $row_child_solution['catname']; ?></a></li>
					<?php } ?>
				</ul>
			</div>
			<?php } ?>
		</div>
		
		<!-- 服务支持 -->
		<div class="wzdt2">
			<div class="wzdt3"><a href="service.html">服务器支持</a></div>
			<?php
				$sql_service=mysql_query("select * from yourphp_category where parentid=17");
				while($row_service=mysql_fetch_array($sql_service)){
					switch ($row_service['id'])
						{
						case 36:
							$pagetype = "download";
							$number=240;
							break;
						case 55:
							$pagetype = "problem";
							$number=125;
							break;
						case 131:
							$pagetype = "video";
							$number=246;
							break;
						case 268:
							$pagetype = "notice";
							$number=268;
							break;
						default:
						 $pagetype="service";//默认跑到news.php页面
					}
			?>
			<div class="wzdt4">
				<ul class="clearfix">
					<li><a class="wzdt5" href="<?php echo $pagetype; ?>_<?php echo $number; ?>.html"><?php echo $row_service['catname']; ?></a></li>
					<?php 
					$sql_child_service=mysql_query("select * from yourphp_category where id in(".$row_service['arrchildid'].")");
					$i=0;
					while($row_child_service=mysql_fetch_array($sql_child_service)){
					$i++;
					if($i==1){continue;}
					?>
					<li>·<a href="<?php echo $pagetype; ?>_<?php echo $row_child_service['id']; ?>.html"><?php echo $row_child_service['catname']; ?></a></li>
					<?php } ?>
				</ul>
			</div>
			<?php } ?>
		</div>
		
		<!-- 关于我们 -->
		<div class="wzdt2">
			<div class="wzdt3"><a href="about.html">关于我们</a></div>
			<?php
				$sql_about=mysql_query("select * from yourphp_category where parentid=44");
				while($row_about=mysql_fetch_array($sql_about)){
				switch($row_about['id']){
					case 53:
						$number=53;
						break;
					case 112:
						$number=249;
						break;
				}
			?>
			<div class="wzdt4">
				<ul class="clearfix">
					<li><a class="wzdt5" href="about_<?php echo $number; ?>.html"><?php echo $row_about['catname']; ?></a></li>
					<?php 
					$sql_child_about=mysql_query("select * from yourphp_category where id in(".$row_about['arrchildid'].")");
					$i=0;
					while($row_child_about=mysql_fetch_array($sql_child_about)){
					$i++;
					if($i==1){continue;}
					?>
					<li>·<a href="about_<?php echo $row_child_about['id']; ?>.html"><?php echo $row_child_about['catname']; ?></a></li>
					<?php } ?>
				</ul>
			</div>
			<?php } ?>
		</div>
		
		<!-- 供应商平台 -->
		<div class="wzdt2">
				<div class="wzdt3"><a href="supplie.html">供应商平台</a></div>
				<div class="wzdt4">
					<ul class="clearfix">
						<li><a class="wzdt5" href="supplie.html">自荐</a></li>
					</ul>
					<ul class="clearfix">
						<li><a class="wzdt5" href="supplie2.html">内控部邮箱</a></li>
					</ul>
				</div>
			</div>
		</div>
 <div class="bottom"><?php require("public/bottom.php");?></div>
</body>
</html>
