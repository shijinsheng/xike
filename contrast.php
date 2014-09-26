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
	DD_belatedPNG.fix('.indexpt,.indexpf,.ibaner1 a.ibaner2,.ibaner1 a,.itj8,.bottomsx,img,background');
	</script>
	<![endif]-->
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/index/index1.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.hoverIntent.minified.js"></script>
    <script type="text/javascript" src="js/jquery.naviDropDown.js"></script>
    <link rel="stylesheet" href="css/index.css" type="text/css" media="screen, project, print" />
	<link href="css/style.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="js/97zzw.js"></script>
	<link href="css/97zzw.css" type="text/css" rel="stylesheet" />
	
<style type="text/css">
.demos ul li{float:left;margin-left:20px;padding-top:45px;}
.pp_pic_holder{width:973px;border:3px solid #7C7C7C;margin:20px auto;border-radius:5px;}
</style>
<script>
	$(function(){
		window.onbeforeunload=function() <!-- 刷新页面的时候让所有的复选框处于未选中状态 -->
		{
		  var inputs=document.getElementsByTagName("input");
		  for(var i=0;i<inputs.length;i++)
		  { 
			if(inputs[i].type=="checkbox"){ inputs[i].checked=false;continue;}
			if(inputs[i].type=="text") inputs[i].value='';
		  }
		}
	});
</script>
<script>
	$(function(){
			var obj=$('.floatdiv p a');
			obj.click(function(){
				var arr = new Array();
				var i =0;
			$("input:checkbox:checked").each(function(){
				var id=$(this).attr('id');
				var str=id.match(/\d+\b/);
				arr[i] = str;
				i++;
			});
			if(arr.length<2){
				alert("您好，请选择大于等于2个的产品对比！");
			}else{
				var arrs='j'+arr+'j';
				obj.attr('href','result_'+arrs.replace(/,/g,'_')+'.html');
			}
			
		});
		//alert(aa.replace(/,/g,'_'));
	});
</script>
<script type="text/javascript">	
	 $(function(){
		$('#producttype1 option').click(function(){
			$('#slide').empty();
		});
	 });
	 
	function show1(){
	var dom=document.getElementById("producttype1").value;
	 $.ajax({
		 url: "./conn.php?sn=" + dom,
		 success: function (context) {
			 $('#slide').html(context);
		 },
		 error:function(){
			alert("错误！");
		 }
	 });
 }
</script>
</head>

<body>
<?php require('public/top.php'); ?>
<div class="pp_pic_holder">
<?php 
$typeid=!empty($_GET['typeid'])?$_GET['typeid']:5;
?>
	<div class="prtc1">选择产品</div>
	<div class="mtgzbt clearfix" style="width:889px;margin:0 auto;padding-top:8px;height:42px;">
		<span>产品类别:</span>
		<div>
			<select id="producttype1" name="producttype1" onclick="javascript:show1()">
			<?php
			$sql_parent=mysql_query("select * from yourphp_category where parentid='4'");
			while($result_parent=mysql_fetch_array($sql_parent)){
			?>
				<option value="<?php echo $result_parent['id']; ?>"><?php echo $result_parent['catname']; ?></option>
			<?php } ?>
			</select>
		</div>
		<!--<div class="prtc7">
			<a href="#"><img src="images/prtcpic2.jpg" /></a>
			<a href="#"><img src="images/prtcpic3.jpg"></a>
		</div>-->
	</div>
	<div id="slide">
	<?php 
	$sql_children=mysql_query("select * from yourphp_category where parentid='".$typeid."'");
	while($result_children=mysql_fetch_array($sql_children)){
	 ?>
	<div class="prtc3 clearfix">
		<div class="prtc4"><?php echo $result_children['catname']; ?></div>
		<ul class="clearfix">
		<?php
		$sql_image=mysql_query("select * from yourphp_product where catid='".$result_children['id']."'");
		while($result_image=mysql_fetch_array($sql_image)){
		?>
			<li planid="<?php echo $result_image['id']; ?>" planname="<?php echo $result_image['xinghao']; ?>">
				<div class="prtc5"><img src="http://localhost/xike<?php echo $result_image['thumb']; ?>" width="110" height="80" /></div>
				<div class="prtc6 clearfix">
					<div style="float:left; width:22px; height:22px;">
						<input type="checkbox" id="planid<?php echo $result_image['id']; ?>" onclick="actionplan(this)" name="compareplan" value="001" />
					</div>
					<span style="height:16px;cursor:pointer"><?php echo $result_image['xinghao']; ?></span>
				</div>
			</li>
		<?php } ?>
		</ul>
	</div>
	<?php } ?>
</div>
</div>
<div class="floatdiv">
	<h5>您已经选择的产品 <a style="cursor:pointer;" onClick="hidediv()"><img src="images/icon_7.gif" alt="" /></a></h5>
	<ul id="selectedplan"></ul>
	<p align="center"><a href=""><img src="images/btn_7.gif" alt="" /></a></p>
</div><!--end floatdiv-->
<?php require('public/bottom.php'); ?>
</body>
