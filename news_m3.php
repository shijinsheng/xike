<?php
require_once('./mydb/db.php');
require_once('./mydb/Paging.php');
$db=new DB();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="成都西科" />
    <meta name="description" content="成都西科">
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
    <script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
</head>
<body>
    
    <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" />

<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

<script type="text/javascript" src="js/jquery.hoverIntent.minified.js"></script>

<script type="text/javascript" src="js/jquery.naviDropDown.js"></script>

<script type="text/javascript">
    $(function () {
        $('#navigation_horiz').naviDropDown({
        
        });
    });
</script>
<style type="text/css">
    .indexpf4 a {
        background-image: none;
        height: auto;
        width: auto;
    }

        .indexpf4 a:hover {
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
<?php include("public/top.php"); ?>

<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $("a[rel^='prettyPhoto']").prettyPhoto();
    });
</script>

    
    <div style="width: 100%; height: 1px; background: #fff; overflow: hidden;">
    </div>
    <div class="newsbody clearfix">
        <?php include("public/nleft.php"); ?>
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
		<div  title="订阅电子报"><a  rel="prettyPhoto[iframesl]"  href="dingyue.aspx?c_kind=508&iframe=true&width=520&height=230"> 
                    <img src="images/momopic.jpg"></a></div> 
        <a id="weixinlogo" href="javascript:void(0);">
            <img src="images/weixinlogo.jpg" /></a> <a style="display:none;" href="#">
                <img src="images/youkulogo.jpg" /></a> <a href="http://weibo.com/hikvisionsecu" target="_blank">
                    <img src="images/sinalogo.jpg"></a> <span>关注我们</span>
    </div>
</div>

            	<div class="newssp2" style=" border-top:none; padding-top:0; background:none;">
				<div class="lmbk" style=" border-bottom:1px solid #DEDEDE; padding-bottom:3px; margin-bottom:20px;">媒体报道</div>
			 <!--<iframe  name="gl_f" id="gl_f"  width="937px"  height="570px"  MARGINWIDTH=0 MARGINHEIGHT=0 HSPACE=0 VSPACE=0 FRAMEBORDER=0 SCROLLING="no" SRC="#"></iframe> -->
             <div style="width:937px;  height:570px ">
             <?php 
			 		//$getid = !empty($_GET['typeid'])?$_GET['typeid']:4;
					$id = 4;
					if($id){
						$where = "and id ='".$id."'";
					}else{
						$where = "";
					}
					$sql_duomeiti = "select * from yourphp_duomeiti where id!='0' ".$where;
					$result_duomeiti = mysql_query($sql_duomeiti);
					$obj_duomeiti = mysql_fetch_array($result_duomeiti);
			 ?>
             <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="840" height="480" id="FLVPlayer">
               <param name="movie" value="FLVPlayer_Progressive.swf" />
               <param name="quality" value="high" />
               <param name="wmode" value="opaque" />
               <param name="scale" value="noscale" />
               <param name="salign" value="lt" />
               <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Halo_Skin_3&amp;streamName=<?php echo $obj_duomeiti["duomeitisrc"] ?>&amp;autoPlay=false&amp;autoRewind=false" />
               <param name="swfversion" value="8,0,0,0" />
               <!-- 此 param 标签提示使用 Flash Player 6.0 r65 和更高版本的用户下载最新版本的 Flash Player。如果您不想让用户看到该提示，请将其删除。 -->
               <param name="expressinstall" value="Scripts/expressInstall.swf" />
               <!-- 下一个对象标签用于非 IE 浏览器。所以使用 IECC 将其从 IE 隐藏。 -->
               <!--[if !IE]>-->
               <object type="application/x-shockwave-flash" data="FLVPlayer_Progressive.swf" width="840" height="480">
                 <!--<![endif]-->
                 <param name="quality" value="high" />
                 <param name="wmode" value="opaque" />
                 <param name="scale" value="noscale" />
                 <param name="salign" value="lt" />
                 <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Halo_Skin_3&amp;streamName=<?php echo $obj_duomeiti["duomeitisrc"] ?>&amp;autoPlay=false&amp;autoRewind=false" />
                 <param name="swfversion" value="8,0,0,0" />
                 <param name="expressinstall" value="Scripts/expressInstall.swf" />
                 <!-- 浏览器将以下替代内容显示给使用 Flash Player 6.0 和更低版本的用户。 -->
                 <div>
                   <h4>此页面上的内容需要较新版本的 Adobe Flash Player。</h4>
                   <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="获取 Adobe Flash Player" /></a></p>
                 </div>
                 <!--[if !IE]>-->
               </object>
               <!--<![endif]-->
             </object>
             </div>
			<div class="newssp9">
			<div class="newssp10">
            <?php
					$getid = !empty($_GET['typeid'])?$_GET['typeid']:0;
					if($getid){
						$where = "and catid ='".$getid."'";
					}else{
						$where = "";
					}
					if($getid==97){$where = "";}
					$sql_news = "select * from yourphp_duomeiti where id!='0' ".$where." limit 0,10"; 
					//echo $sql_news;
					$resutl = mysql_query($sql_news);
			?>
			<ul class="clearfix">
			  	<?php 
                        while($obj = mysql_fetch_array($resutl)){
                ?>
				<li>
				<div class="newssp11"><img src="<?php echo $obj["thumb"]?>"   width="140" height="80" />
					<a class="newssp14" href="news_m3.php?id=<?php echo $obj["id"]?>&typeid=<?php echo $obj["catid"]?>" target="gl_f"></a>
					</div>
					<div class="newssp12"><a href="news_m3.php?id=<?php echo $obj["id"]?>&typeid=<?php echo $obj["catid"]?>" target="gl_f" ><?php echo $obj["title"]?></a></div>
				</li>
				<?php } ?>
			
			</ul>
			</div>
			</div>
			</div>
        </div>
    </div>
    <div class="bottom">
		<?php include("public/bottom.php"); ?>
    </div>
<script type="text/javascript">
swfobject.registerObject("FLVPlayer");
swfobject.registerObject("FLVPlayer");
</script>
</body>
</html>