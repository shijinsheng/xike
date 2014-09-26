<?php
require_once('./mydb/db.php');
require_once('./mydb/Paging.php');
$db=new DB();
/*
$type=isset($_GET['type'])? intval($_GET['type']):93;
//公司资讯catid=48;
//常见问题catid=55;
$sql="SELECT catname,keywords,description FROM yourphp_category WHERE id='".$type."' limit 0,10";
//$seo=$db->get_one($sql); //存放SEO信息
$sql="SELECT id,title,updatetime FROM yourphp_article WHERE catid='".$type."'";
//$infos=$db->get_all($sql);
$pageCurrent=isset($_GET['p'])?intval($_GET['p']):1; 
$page_size=10; //每页显示条数
$sub_pages=5;  //每次显示多少页
//$nums=count($infos); //总条数
//$useinfo=array_slice($infos,($pageCurrent-1)*$page_size,$page_size);
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="西科,成都西科,西科光端机,成都西科高新技术有限公司" />
    <meta name="description" content="西科,成都西科,西科光端机,成都西科高新技术有限公司">
    <meta name="baidu-site-verification" content="LD10I6bZyc" />
    <title>工业级光纤以太网交换机|光端机生产厂家-成都西科科技有限公司</title>
	<link href="css/global.css" type="text/css" rel="stylesheet" />
    <link href="css/style.css" type="text/css" rel="stylesheet" />
<!--[if IE 6]>
<script type="text/javascript" src="js/DD_belatedPNG_0.0.8a.js" ></script>
<script type="text/javascript">
DD_belatedPNG.fix('.index_gdm3,.index_gdm3 a,.index_pathl3,a.index_gdm4,.nav2,img,background');
</script>
<![endif]-->
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<script language="javascript" type="text/javascript" src="js/My97DatePicker/WdatePicker.js"></script>
	<script src="js/slides.min.jquery.js"></script>
	<script type="text/javascript">
		$(function(){
			$('#slides').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				play: 5000,
				pause: 2500,
				hoverPause: true,
				animationStart: function(current){
					$('.caption').animate({
						bottom:-35
					},100);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationStart on slide: ', current);
					};
				},
				animationComplete: function(current){
					$('.caption').animate({
						bottom:0
					},200);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationComplete on slide: ', current);
					};
				},
				slidesLoaded: function() {
					$('.caption').animate({
						bottom:0
					},200);
				}
			});
		});
	</script>
</head>
<style>
.pdyaoa{ position:absolute; top:9px; right:19px;}
.pdyaoa a{background:url(images/pdypic1023.jpg) no-repeat right; padding-right:18px; color:#6f6f6f; font-size:12px; font-family:"宋体"; line-height:18px;}
.pdyaoa a:hover{ text-decoration:underline;}
</style>
<body>
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" />
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.hoverIntent.minified.js"></script>
<script type="text/javascript" src="js/jquery.naviDropDown.js"></script>
<script type="text/javascript">
    $(function () { $('#navigation_horiz').naviDropDown({ }); });
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
</style>
<?php require("public/top.php");?>
<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
<script type="text/javascript">$(document).ready(function () {  $("a[rel^='prettyPhoto']").prettyPhoto(); });</script>
<div style="width: 100%; height: 1px; background: #fff; overflow: hidden;"> </div>
<div class="newsbody clearfix">

<?php include("public/nleft.php"); ?>

<div class="newsbodyr">
            

<script type="text/javascript">
$(document).ready(function(){
	$("#weixinlogo").click(function(){$(".iwxt").show();});
	$("#weixinlogoc").click(function(){$(".iwxt").hide();});
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
		<div  title="订阅电子报">
        <a  rel="prettyPhoto[iframesl]"  href="dingyue.aspx?c_kind=508&iframe=true&width=520&height=230"><img src="images/momopic.jpg"></a></div>
        <a id="weixinlogo" href="javascript:void(0);">
            <img src="images/weixinlogo.jpg" /></a> <a style="display:none;" href="#">
            <img src="images/youkulogo.jpg" /></a> <a href="http://weibo.com/hikvisionsecu" target="_blank">
            <img src="images/sinalogo.jpg"></a> <span>关注我们</span>
    </div>
</div>
           <!-- <div class="lxwm">
                <img src="upload/" 
                    width="927" height="200" />
            </div>-->
            <div class="pdy">
                <div class="pdy1" style="position:relative;">公司新闻<div class="pdyaoa"><a href="news_m1.php?typeid=93">更多</a></div></div>
                <div class="pdy2 clearfix">
					<div class="pdy3">
						<div id="container">
                        <!--中间图片轮换显示开始 -->
		<div id="example">
			<div id="slides">
				<div class="slides_container">
                    <?php 
					$sql_newstype = "select * from yourphp_article where catid='93' limit 0,6"; 
					$resutl = mysql_query($sql_newstype);
					?>
					<?php 
                        while($obj = mysql_fetch_array($resutl)){
                    ?>
                    <!--一个div是一个图片滚动 用for循环读出来 至少两张 -->
					<div class="slide">
						<a href="newsinfo.php?id=<?php echo $obj['id']; ?>" title="<?php echo $obj["title"] ?>" target="_blank"><img src="<?php echo $obj["thumb"] ?>" width="420" height="298" alt="<?php echo $obj["title"] ?>"></a>
						<div class="caption" style="bottom:0">
							<p><?php echo $obj["title"] ?></p>
						</div>
					</div>
                    <?php }?> 
				</div>
				<a href="#" class="prev"><img src="images/pdypic5.jpg" width="13" height="21" alt="Arrow Prev"></a>
				<a href="#" class="next"><img src="images/pdypic6.jpg" width="13" height="21" alt="Arrow Next"></a>
				
			</div>
		</div>
        <!--中间图片轮换显示结束 -->
        
	</div>
					</div>
               
                    <div class="pdy10">
                        <div class="pdy11"><a href="newsinfo.php?id=264">公司新闻第一篇</a></div>
                        <div class="pdy12">日期：2014-01-15</div>
                        <div class="pdy13">&nbsp;&nbsp;&nbsp; 近日，由智能交通网与中国工控网共同主办的2013中国ITS年度盛典落幕，海康威视荣膺优秀解决方案、技术创新、人物奖三项大奖。&nbsp;.....</div>
                        <div class="pdy14">
                            <ul>
                                 <?php
								 $sql_news = "select id,title from yourphp_article limit 0,6";
								 $result = mysql_query($sql_news);
								 
									while($obj_news_a = mysql_fetch_array($result)){ ?>
                                        <li><a href="newsinfo.php?id=<?php echo $obj_news_a['id']?>"> <?php echo $obj_news_a['title']?> </a></li>

                                  <?php } ?> 

                                    
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="pdy15 clearfix">
                    <div class="pdy16">
					<div class="pdyaoa" style="top:-22px; right:0;"><a href="news_m1.php?typeid=98">更多</a></div>
                        <div class="pdy24 clearfix">
                            <a class="pdy24oa" href="http://localhost/news_m1.php?typeid=98">市场活动</a>
                        </div>
                        <div class="pdy17 clearfix">
                            <div class="pdy18">
                                <img src="uploads/62310153-7817-42b4-a8b9-a88497ab2eb9/131114040940940.jpg" width="160" height="113" />
                            </div>
                            <div class="pdy19">
                                <div class="pdy20"><a href="newsinfo.php?id=217&typeid=98">市场活动第一篇</a></div>
                                <div class="pdy21">日期：2013-11-05</div>
                                <div class="pdy22">文章来源：10月29日-.....</div>

                            </div>
                        </div>
                        <div class="pdy23">
                        <?php 
							$id = 98;
							$sql_huodong = "select id,title from yourphp_article where catid = '".$id."'";
							$resutl_huodong = mysql_query($sql_huodong);
						?>
                            <ul>
                            <?php 
								while($obj = mysql_fetch_array($resutl_huodong)){
							?>
                                <li><a href="newsinfo.php?id=<?php echo $obj['id']; ?>&typeid=<?php echo $id; ?>"><?php echo $obj['title'] ?></a></li>
                                <?php }?>
                            </ul>
                        </div>

                    </div>
                    <div class="pdy16" style="float: right;">
                        <div class="pdy24 clearfix">
                            <a href="news_m2.php?typeid=94" class="pdy24oa" id="glxx1" onmouseover="showlink2(1)">媒体报道</a>
                            <span></span><a href="news_m2.php?typeid=95" id="glxx2" onmouseover="showlink2(2)">行业资讯</a>
                        </div>
                        <div id="cs1" style="position:relative; width:431px;">
						<div style="right: 0px; top: -42px;" class="pdyaoa"><a href="news_m2.php?typeid=94">更多</a></div>
                            <div class="pdy17 clearfix">
                                <div class="pdy18"><img src="uploads/62310153-7817-42b4-a8b9-a88497ab2eb9/131114040940940.jpg" width="160" height="113" /></div>
                                <div class="pdy19">
                                    <div class="pdy20"><a href="newsinfo.php?id=220">媒体报道第一篇</a></div>
                                    <div class="pdy21">日期：2013-08-14</div>
                                    <div class="pdy22">文章来源：2013年8月刊《哈佛商业评论》 “领头羊不敢说，我们在安防产业里仍是追赶者。”坐在位于总.....</div>

                                </div>
                            </div>
                            <div class="pdy23">
                            <?php 
							$id = 94;
							$sql_huodong = "select id,title from yourphp_article where catid = '".$id."'";
							$resutl_huodong = mysql_query($sql_huodong);
							
							?>
                                <ul>
<?php while($obj = mysql_fetch_array($resutl_huodong)){ ?><li><a href="newsinfo.php?typeid=<?php echo $id ?>&id=<?php echo $obj['id']; ?>"><?php echo $obj['title'] ?></a></li><?php }?>
                                </ul>
                            </div>
                        </div>

                        <div id="cs2" style="display: none;position:relative; width:431px;">
						<div style="right: 0px; top: -42px;" class="pdyaoa"><a href="news_m2.php?typeid=95">更多</a></div>
                            <div class="pdy17 clearfix">
                                <div class="pdy18">
                                   	<img src="uploads/62310153-7817-42b4-a8b9-a88497ab2eb9/131114040940940.jpg" width="160" height="113" />
                                </div>
                                <div class="pdy19">
                                    <div class="pdy20"><a href="newsinfo.php?id=221">行业资讯第一篇</a></div>
                                    <div class="pdy21">日期：2013-06-20</div>
                                    <div class="pdy22">文章来源：2013(第二届)全国公安系统警用装备品牌推选活动定于6月15日启动，中国警用装备发展论坛暨全国公安.....</div>

                                </div>
                            </div>
                            <div class="pdy23">
                           	<?php 
							$id = 95;
							$sql_huodong = "select id,title from yourphp_article where catid = '".$id."'";
							$resutl_huodong = mysql_query($sql_huodong);
							?>
                                <ul>
<?php while($obj = mysql_fetch_array($resutl_huodong)){ ?><li><a href="newsinfo.php?typeid=<?php echo $id ?>&id=<?php echo $obj['id']; ?>"><?php echo $obj['title'] ?></a></li><?php }?>      
                                </ul>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        function showlink2(no) {
                            for (var iii = 1; iii <= 2; iii++) {
                                if (iii == no) {
                                    $("#glxx" + no).attr("class", "pdy24oa");
                                    $("#cs" + no).css("display", "block");
                                } else {
                                    $("#glxx" + iii).attr("class", "");
                                    $("#cs" + iii).css("display", "none");
                                }
                            }
                        }
                    </script>
                </div>

                <div class="pdy25">
                    <div class="pdy26" style="position:relative;width:912px;height:22px;">多媒体资源
                    	<div style="top:14px;right:18px;" class="pdyaoa"><a href="news_m3.php?typeid=100">更多</a></div>
                    </div>
                    <div class="pdy27"></div>
                    <div class="pdy28"></div>
                    <div class="pdy29">
                    <!--多媒体资源 -->
                      		<?php 
							
							$sql_huodong = "select * from yourphp_duomeiti limit 0,15";
							$resutl_huodong = mysql_query($sql_huodong);
							?>
                        <ul class="clearfix">
                            <?php  while($obj = mysql_fetch_array($resutl_huodong)){ ?>
                                    <li>
                                        <div class="pdy30">
                                            <img width="140" height="80" src="<?php echo $obj["thumb"]?>" />
                                           
                                            <a href="news_m3.php?id=<?php echo $obj["id"]?>" class="pdy33"></a>
                                        </div>
                                        <div class="pdy31"><a href="#" title="<?php echo $obj["title"]?>"><?php echo $obj["title"]?></a></div>
                                    </li>
 								<?php }?>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="bottom"><?php require("public/bottom.php");?></div>
</body>
</html>

