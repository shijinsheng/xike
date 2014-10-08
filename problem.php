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
<title></title>
    <link href="css/style.css" type="text/css" rel="stylesheet" />
    <!--[if IE 6]>
	<script type="text/javascript" src="js/DD_belatedPNG_0.0.8a.js" ></script>
	<script type="text/javascript">
	DD_belatedPNG.fix('.index_gdm3,.index_gdm3 a,.index_pathl3,a.index_gdm4,.nav2,img,background');
	</script>
	<![endif]-->
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/My97DatePicker/WdatePicker.js"></script>
    <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" />
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.hoverIntent.minified.js"></script>
	<script type="text/javascript" src="js/jquery.naviDropDown.js"></script>
	<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.Pages.js"></script>
	<link href="css/page.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript">
		function seach()
		{
		var key=document.getElementById("key");
		var starttime=document.getElementById("starttime");
		var endtime=document.getElementById("endtime");
		
		if(starttime.value!=null&&starttime.value!=""&&endtime.value!=null&&endtime.value!=""&&endtime.value!="结束日期"&&starttime.value!="开始日期"&&key.value!=""&&key.value!="关键字")
		{
		if(endtime.value<starttime.value)
		{
		alert("结束时间不能小于开始时间");
		document.getElementById("endtime").focus();
		}
		else
		{
		window.location.href = "newsmt_x_44.html&key=" + escape(key.value)+"&starttime="+escape(starttime.value)+"&endtime="+escape(endtime.value);
		
		}
		}
		else
		{
		if(key.value!=null&& key.value!="" &&key.value!="关键字")
		{
		 window.location.href = "newsmt_x_44.html&key=" + escape(key.value);
		
		}
		else
		{
		
		if(starttime.value!=null&&starttime.value!=""&&endtime.value!=null&&endtime.value!=""&&endtime.value!="结束日期"&&starttime.value!="开始日期")
		{
		if(endtime.value<starttime.value)
		{
		alert("结束时间不能小于开始时间");
		document.getElementById("endtime").focus();
		}
		else
		{
		window.location.href = "newsmt_x_44.html&starttime="+escape(starttime.value)+"&endtime="+escape(endtime.value);
		
		}
		}
		else
		{
		if(starttime.value!=null&&starttime.value!="" &&starttime.value!="开始日期")
		{
		if(endtime.value==null||endtime.value==""||endtime.value=="结束日期")
		{
		 alert("请输入结束时间");
		 document.getElementById("endtime").focus();
		 
		}
		else
		{
		 if(endtime.value<starttime.value)
		{
		alert("结束时间不能小于开始时间");
		document.getElementById("endtime").focus();
		}
		else
		{
		window.location.href = "newsmt_x_44.html&starttime="+escape(starttime.value)+"&endtime="+escape(endtime.value);
		
		}
		}
		}
		else if(endtime.value!=null&&endtime.value!="" &&endtime.value!="结束日期")
		{
		if(starttime.value==null||starttime.value==""||starttime.value=="开始日期")
		{
		 alert("请输入开始时间");
		 document.getElementById("starttime").focus();
		}
		else
		{
		 if(endtime.value<starttime.value)
		{
		alert("结束时间不能小于开始时间");
		document.getElementById("endtime").focus();
		}
		else
		{
		window.location.href = "newsmt_x_44.html&starttime="+escape(starttime.value)+"&endtime="+escape(endtime.value);
		
		}
		}
		}
		else
		{
		 alert("请输入搜索条件");
		 window.location.href = "newsmt_x_44.html";
		}
		
		 }
		}
		
		}
		}
    </script>
<style type="text/css">
.indexpf4 a {background-image: none;height: auto;width: auto;}
.indexpf4 a:hover {background: none;height: auto;width: auto;}
.indexpf3 ul li a {background-image: none;height: auto;width: auto;}
.indexpf3 ul li a:hover {background-image: none;height: auto;width: auto;}
.yuyan{ float:right; width:185px; height:20px; z-index:1001;}
.yuyan1{ width:175px; height:20px; background:url(images/xl_03.jpg) no-repeat; padding-left:10px; line-height:20px; color:#333; cursor:pointer; font-size:11px; font-family:Verdana; position:relative; z-index:1001;}
.yuyan2{ position:absolute; top:19px; left:0; width:183px; border:1px solid #C4BDAA;z-index:1001; background:#fff; padding-bottom:6px; display:none;}
.yuyan2 ul li{  float:left; width:183px; height:20px; line-height:20px;}
.yuyan2 ul li a{padding:3px 0 0 8px; color:#333; display:block; width:175px;font-family:Verdana;}
.yuyan2 ul li a:hover{ background:#EBEBEB;}
.iwxt{ position:absolute; width:158px; height:181px; top:30px; left:-18px; z-index:9999999; overflow:hidden; z-index:99999;}
.iwxt1{background:url(images/iweixing.jpg) no-repeat; width:158px; height:181px; position:relative;}
#weixinlogoc{right:7px; bottom:3px; width:11px; height:18px; display:block;position:absolute;}
.xgy1{ background:url("images/xgpic7.jpg") no-repeat left; padding-left:26px; height:30px;}
.xgy1 span{ font-size:18px;}
.xgy1 a{ font-size:18px; line-height:30px; color:#3b3b3b;}
.xgy1 a:hover{ text-decoration:underline; color:#C4271E;}
</style>
</head>
<body>
<script type="text/javascript">
    $(function () {
        $('#navigation_horiz').naviDropDown({
        });
		var cTitle=$('.newsbodyllia').text();
		$(document).attr('title',cTitle);
    });
</script>
<script language="javascript" type="text/javascript">
    function qwsearch() {
        var keycp = document.getElementById("qwsearch");
        if (keycp.value != null && keycp.value != "" && keycp.value != "请输入关键字") {
            window.location.href = "search.aspx?stat=1&id=1&key=" + keycp.value;
        }
        else {
            alert("请输入关键字");
        }
    }
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $("a[rel^='prettyPhoto']").prettyPhoto();
    });
</script>
<?php require("public/top.php");?>
<div class="newsbody clearfix">
    <?php include("public/sleft.php"); ?>
        <div class="newsbodyr">
<script type="text/javascript">
	$(document).ready(function(){
	
	  $("#weixinlogo").click(function(){
	     $(".iwxt").show();
	  });

	  $("#weixinlogoc").click(function(){
	        $(".iwxt").hide();
	  });

});
</script>
<div class="nbrtop clearfix" style="padding-bottom: 11px;">
    
    <div class="nbrtopr clearfix" style="width: 140px; position: relative;">
        <div class="iwxt" style="display: none;">
            <div class="iwxt1">
                <a id="weixinlogoc" href="javascript:void(0);"></a>
            </div>
        </div>
		<div  title="订阅电子报"><a  rel="prettyPhoto[iframesl]"  href="dingyue.php?c_kind=508&iframe=true&width=520&height=230"> 
                    <img src="images/momopic.jpg"></a></div> 
        <a id="weixinlogo" href="javascript:void(0);">
            <img src="images/weixinlogo.jpg" /></a> <a style="display:none;" href="#">
                <img src="images/youkulogo.jpg" /></a> <a href="http://weibo.com/hikvisionsecu" target="_blank">
                    <img src="images/sinalogo.jpg"></a> <span>关注我们</span>
    </div>
</div>
		<div>
			<div style="float:right; width:927px;">
            <div class="mtgzban"><img src="images/support1.jpg"  width="927" height="200" /></div>
            <div class="mtgzxw" style="width:927px;">
            <div class="pzp1" style=" width:916px;">
                    <span>
                        <?php
							$sql_load=mysql_query("select * from yourphp_category where id='".$id."'");
							$row_load=mysql_fetch_assoc($sql_load);
							echo $row_load['catname'];
						?>
                    </span>
              </div>
               <div class="tzgx">
                    <div class="tzgx1">
                        <ul class="clearfix">
							<?php
							//$typeid = 4;//产品中心
							$sql_about = "select * from yourphp_article where catid = '".$id."'";
							//echo $sql_about;exit;
							$result_about = mysql_query($sql_about);
							while($obj_about = mysql_fetch_array($result_about)){
							?>
											<li class="clearfix"><a href="answer<?php echo $row_load['id']; ?>_<?php echo $obj_about['id']; ?>.html" target="_blank"><?php echo $obj_about['title'] ?></a><span><?php echo date('Y-m-d',$obj_about['updatetime']); ?></span></li>
							<?php }?> 
						</ul>
					</div>
				</div>
				<script type="text/javascript">
					$('.tzgx1').kkPages({
						PagesClass: 'li', //需要分页的元素
						PagesMth: 10, //每页显示个数 
						PagesNavMth: 8 //显示导航个数
					}); 
				</script> 
            </div>
			</div>
		  </div>
        </div>
</div>
<?php require("public/bottom.php");?>
</body>
</html>
