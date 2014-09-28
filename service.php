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
<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $("a[rel^='prettyPhoto']").prettyPhoto();
    });
</script>

    <div>
    <div style="width: 100%; height: 1px; background: #fff; overflow: hidden;">
    </div>
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

<style>
	.iwxt{ position:absolute; width:158px; height:181px; top:30px; left:-18px; z-index:9999999; overflow:hidden; z-index:99999;}
	.iwxt1{background:url(images/iweixing.jpg) no-repeat; width:158px; height:181px; position:relative;}
	#weixinlogoc{right:7px; bottom:3px; width:11px; height:18px; display:block;position:absolute;}
	.xgy1{ background:url("images/xgpic7.jpg") no-repeat left; padding-left:26px; height:30px;}
	.xgy1 span{ font-size:18px;}
	.xgy1 a{ font-size:18px; line-height:30px; color:#3b3b3b;}
	.xgy1 a:hover{ text-decoration:underline; color:#C4271E;}
	</style>
<div class="nbrtop clearfix" style="padding-bottom: 11px;">
    
    <div class="nbrtopr clearfix" style="width: 140px; position: relative;">
        <div class="iwxt" style="display: none;">
            <div class="iwxt1">
                <a id="weixinlogoc" href="javascript:void(0);"></a>
            </div>
        </div>
		<div  title="订阅电子报"><a rel="prettyPhoto[iframesl]" href="dingyue.php?c_kind=508&iframe=true&width=520&height=230"><img src="images/momopic.jpg"></a></div> 
        <a id="weixinlogo" href="javascript:void(0);"><img src="images/weixinlogo.jpg" /></a>
        <a style="display:none;" href="#"><img src="images/youkulogo.jpg" /></a>
        <a href="http://weibo.com/hikvisionsecu" target="_blank"><img src="images/sinalogo.jpg"></a>
        <span>关注我们</span>
    </div>
</div>

			<div>
			<div style="float:right; width:927px;">
            <div class="lxwm"> <img src="images/fuwuqi.jpg" width="927" height="200" /> </div>
			<div class="pzp" style="padding-bottom:1px;"> </div>
				
                <div class="pzp1" style="width:916px;">
                    <span>
                        服务与支持
                    </span>
                </div>

                <div class="tzgx">
                    <div class="tzgx1">
                        <ul class="clearfix">
           	<?php
			//$typeid = 4;//产品中心
            $sql_about = "select * from yourphp_article where catid = ".$id." limit 0,10";
			//echo $sql_about;exit;
			$result_about = mysql_query($sql_about);
			while($obj_about = mysql_fetch_array($result_about)){
			?>
							<li class="clearfix"><a href="#"><?php echo $obj_about['title'] ?></a><span>2011-10-09</span></li>
			<?php }?> 
                        </ul>
                    </div>
                </div>
                
            </div>
			</div>
			<div style="clear:both;"></div>
			</div>
        </div>
    </div>
    <div class="bottom"><?php require("public/bottom.php");?></div>
</body>
</html>
