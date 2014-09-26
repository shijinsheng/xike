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
<title>产品对比</title>
<script type="text/javascript" src="js/jquery.1.4.2-min.js"></script>
<script type="text/javascript" src="js/97zzw.js"></script>
<link href="css/97zzw.css" type="text/css" rel="stylesheet" />
<style type="text/css">
.demo ul:first-child{margin-left:0px;}
.demo ul li{float:left;margin-left:20px;padding-top:45px;}
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
		
			var obj=$('.floatdiv p a');
			obj.click(function(){
				var arr = new Array();
				var i =0;
			$("input:checkbox:checked").each(function(){
				var id=$(this).attr('id');
				var str=id.match(/\d+\b/);
				arr[i] = str;
				i++;
			})
			
			$.ajax({
					type:'get',
					url:'so.php?sn='+arr,
					success: function(context){
						$('#getinfo').html(context);
					}
				})
		})
	});
</script>
</head>
<body>
<div style="width:100%;height:40px;background:#333333;"></div>
<div style="margin:0 auto;width:200px;color:#C4261D;font-size:33px;margin-top:5px;">对比产品</div>
<div class="demo">
	<ul>
	<?php
		$images=mysql_query("select * from yourphp_product");
		while($row_images=mysql_fetch_array($images)){
			if(!empty($row_images['thumb'])){
	?>
		<li planname="<?php echo $row_images['xinghao'];?>" planid="<?php echo $row_images['id']; ?>">
			<img src="<?php echo $row_images['thumb']; ?>" width="110" height="80" /><br />
			<input type="checkbox" id="planid<?php echo $row_images['id']; ?>" onclick="actionplan(this)" name="compareplan" value="001" />
		</li>
	<?php
			}
		}
	?>
	</ul>
</div>
<div id="getinfo" style="background:#FF9900;"></div>
<div class="floatdiv">
	
	<h5>您已经选择的产品 <a style="cursor:pointer;" onClick="hidediv()"><img src="images/icon_7.gif" alt="" /></a></h5>
	
	<ul id="selectedplan"></ul>
	
	<p align="center"><a style="cursor:pointer"><img src="images/btn_7.gif" alt="" /></a></p>

</div><!--end floatdiv-->

<div style="min-height:209px;"></div>
</body>
</html>
