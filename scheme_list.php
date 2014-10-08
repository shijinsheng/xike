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
	<link href="css/xgstyle1.css" type="text/css" rel="stylesheet" />
	<!--[if IE 6]>
	<script type="text/javascript" src="js/DD_belatedPNG_0.0.8a.js" ></script>
	<script type="text/javascript">
	DD_belatedPNG.fix('.index_gdm3,.index_gdm3 a,.index_pathl3,a.index_gdm4,.nav2,img,background');
	</script>
	<![endif]-->
    <link href="css/page.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script src="js/jquery.Pages.js" type="text/javascript"></script>
	<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" />
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.hoverIntent.minified.js"></script>
	<script type="text/javascript" src="js/jquery.naviDropDown.js"></script>
	<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.Pages.js"></script>
	<link href="css/page.css" type="text/css" rel="stylesheet" />
<style type="text/css">
.xgy1 {background: url("images/xgpic7.jpg") no-repeat left;padding-left: 26px;height: 30px;}
.fixed {position: fixed;top: 5px;z-index: 1000;}
body,td,th {font-family: "微软雅黑", arial;}
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
.idzqkpic{padding-top:15px; width:112px; height:126px; position:relative;}
a.idzqkpic1{background:url(images/idzqkpica.png) no-repeat; padding-left:0; display:block; position:absolute; width:112px; height:44px; padding-top:82px; text-align:center; color:#fff; font-size:13px; line-height:18px; display:none; z-index:999999; left:0; top:15px;}
a.idzqkpic1:hover{ text-decoration:none; color:#fff;}
</style>
</head>
<body>
<script type="text/javascript">
    $(function () {
        $('#navigation_horiz').naviDropDown({
        
        });
		var cTitle=$('.pacs2').text();
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
<?php include("public/top.php"); ?>
<div class="newsbody clearfix">
<div class="newsbodyr" style="float: left; margin-bottom: 45px;">
    <div style="width: 100%; height: 1px; background: #fff; overflow: hidden;">
    </div>
    <div class="newsbody clearfix">
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
    <?php
		$typeid=$_GET['typeid'];
		$sql_solution1=mysql_query("select * from yourphp_category where id='".$typeid."'");
		$row_solution1=mysql_fetch_assoc($sql_solution1);
		$sql_solution2=mysql_query("select * from yourphp_category where id='".$row_solution1['parentid']."'");
		$row_solution2=mysql_fetch_assoc($sql_solution2);
	?>
    <div class="xgy1" style="float: left;"><a class="pacs1"><?php echo $row_solution2['catname']; ?></a>><a class="pacs2"><?php echo $row_solution1['catname']; ?></a></div>
    
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

            </div>
            <div class="xgy2">
            </div>
            <div class="xgy12" style="border-left: 1px solid #EEEEE4; border-right: 1px solid #EEEEE4;">
                <div class="xgy13">
                </div>
                <div style="min-height: 250px; overflow: hidden;">
                    		<?php 
								$getid = !empty($_GET['typeid'])?$_GET['typeid']:154;
								if($getid){
									$where = "and keywords='解决方案' and catid ='".$getid."'";
								}else{
									$where = "";
								}
								$sql_scheme = "select * from yourphp_article where id!='0' ".$where." limit 0,10"; 
								//echo $sql_news;
								$resutl = mysql_query($sql_scheme);
								$count=mysql_num_rows($resutl);
								if($count<=0){echo "<span>相关信息采集中…… </span>";}
								while($obj_scheme = mysql_fetch_array($resutl)){
							?>
                        	<!--循环开始-->
                            <div class="nbrbodynew clearfix">
                                <div style="border: none; width: 218px; height: 119px; " class="nbrbodynewl">
								
                                    <a target="_blank" href="scheme_info<?php echo $getid; ?>_<?php echo $obj_scheme[0] ?>.html"><img width="215" height="120" alt="供电营业厅综合监管系统解决方案"  src="http://localhost/xike<?php echo $obj_scheme['thumb']; ?>" /></a>
                                </div>
                                <div style="width: 640px;" class="nbrbodynewr">
                                    <div class="nbrbodynewr1 clearfix">
                                        <a target="_blank" href="scheme_info<?php echo $getid; ?>_<?php echo $obj_scheme[0] ?>.html"><?php echo $obj_scheme["title"] ?></a>
                                        <div style="clear: both;">
                                        </div>
                                    </div>
                                    <div style="line-height: 22px; padding-top: 10px;" class="nbrbodynewr2">
                                         <?php echo $obj_scheme["description"] ?>
                                    </div>
                                    <div class="nbrbodynewr3 clearfix">
                                        <a target="_blank" href="scheme_info<?php echo $getid; ?>_<?php echo $obj_scheme[0] ?>.html"><font color="#C4261D">查看详细</font></a>
                                    </div>
                                </div>
                  </div>
                            <?php }?>
                        	<!--循环结束-->
                    
              </div>
            </div>

          <script type="text/javascript">
                $('.xgy12').kkPages({
                    PagesClass: '.nbrbodynew', //需要分页的元素
                    PagesMth: 3, //每页显示个数 
                    PagesNavMth: 8 //显示导航个数
                });
            </script>

            <div class="jjfany">
                <div class="xgy10">
                    <div class="xgy4" style="padding-bottom: 0; padding-top: 18px; display: none;">
                        行业新闻
                    </div>
                    <div class="xgdg10">
                        <div class="xgdg11 clearfix">
                            <a id="tt1" onmouseover="showlink(1)" style="cursor:pointer;"
                                class="xgdg11oa" target="_blank">行业新闻</a> <a id="tt2"   onmouseover="showlink(2)" style="cursor:pointer;"
                                    target="_blank">最佳实践</a>
                        </div>
                    </div>
                    <div id="jjfaxs1" class="prxz22" style="padding-top: 17px; padding-bottom: 0;">
						<ul class="clearfix" style="height: 225px;">
							<?php
								$sql_id=mysql_query("select * from yourphp_category where id='23'");
								$row_id=mysql_fetch_assoc($sql_id);
								$sql_news=mysql_query("select * from yourphp_article where catid in(".$row_id['arrchildid'].") and keywords='行业新闻'");
								while($row_news=mysql_fetch_array($sql_news)){
							?>
							<li class="clearfix" style="display: list-item;"><a href="newsinfo<?php echo $row_news['id']; ?>.html"><?php echo $row_news['title']; ?></a><span><?php echo date('Y-m-d',$row_news['updatetime']); ?></span></li>
							<?php } ?>
						</ul>
                    </div>
                    <div id="jjfaxs2" class="prxz22" style="padding-top: 17px; display:none; padding-bottom: 0;">
						<ul class="clearfix" style="height: 225px;">
						<?php
							$sql_zj=mysql_query("select * from yourphp_article where catid='".$typeid."' and keywords='实践'");
							while($row_zj=mysql_fetch_array($sql_zj)){
						?>
							<li class="clearfix" style="display: list-item;"><a href="newshd_<?php echo $row_zj['id']; ?>.html"><?php echo $row_zj['title']; ?></a><span><?php echo date('Y-m-d',$row_zj['updatetime']); ?></span></li>
						<?php } ?>
						</ul>
                    </div>
					<script type="text/javascript">
						$('#jjfaxs1').kkPages({
							PagesClass: 'li', //需要分页的元素
							PagesMth: 7, //每页显示个数 
							PagesNavMth: 8 //显示导航个数
						}); 
					</script> 
                  <script type="text/javascript">
                        function showlink(no) {
                            for (var iii = 1; iii <= 2; iii++) {
                                if (iii == no) {
                                    $("#tt" + no).attr("class", "xgdg11oa");
                                    $("#jjfaxs" + no).css("display", "block");
                                } else {
                                    $("#tt" + iii).attr("class", "");
                                    $("#jjfaxs" + iii).css("display", "none");
                                }
                            }
                        }
                    </script>

                </div>
            </div>
        </div>
        
        <!--右边开始-->
        <div class="prnav5">
            <div id="float">
              <script type="text/javascript">
                    $(function () {
                        $("#kz").click(function (event) {
                            var e = window.event || event;
                            if (e.stopPropagation) {
                                e.stopPropagation();
                            } else {
                                e.cancelBubble = true;
                            }
                            $("#zk1").animate({ height: 'toggle', width: 'toggle' }, "slow");
                            $("#conetn").fadeIn();
                        });

                        $(".gb").click(function (event) {
                            var e = window.event || event;
                            if (e.stopPropagation) {
                                e.stopPropagation();
                            } else {
                                e.cancelBubble = true;
                            }
                        });
                        document.onclick = function () {
                            $("#zk1").hide();
                        };
                    })
                </script>
                <!--<a href="javascript:void(0);" id="kz" class="xgdg19">查看全部解决方案</a>-->
<script type="text/javascript">
$(document).ready(function(){
	 $(".idzqkpic").mousemove(function(){
	   $(".idzqkpic1").css("display","block");
	 });
	 $(".idzqkpic").mouseleave(function(){
	   $(".idzqkpic1").css("display","none");
	 });
});
</script>
<div class="prnav12">
    <div class="prnav13 clearfix">
        <a href="javascript:void(0)"></a><span>产品搜索</span>
    </div>
    <form action="javascript:qwsearch4();" method="post">
    <div class="prnav14 clearfix">
        <div>
            <input id="jjfakeynum" type="text" value="按关键字" onblur="if (this.value==''){ this.value='按关键字';}"
                onfocus="if (this.value=='按关键字') {this.value='';}" /></div>
        <a href="javascript:qwsearch4();">搜 索</a>
    </div>
    </form>
    <div class="prnav15">
         <div class="prnav16">合作联系</div>
        <div class="prnav17">97317421@qq.com</div>
        <div class="prnav18">028-65929285</div>
        <div class="prnav16" style="padding-top:15px;display:none;"><a href="#">联系行业代表</a></div>
        <div class="prnav16" style=" display:none;"><span style="padding-right: 4px;">
            <img src="images/prjjpic1.jpg"></span><a href="#">咨询行业代表</a></div>												
    </div>
    <div class="prnav22" style="border-bottom: 1px solid #DFDFDF; display:none;">
        <div class="clearfix">
            <div style="float: left;">
                <div class="prxz6" style="float: none;">
                    电子期刊</div>
                <div class="idzqkpic">
                    <a href="#" class="idzqkpic1">
                        <div>
                            期刊名称</div>
                    </a>
                    <img src="images/idzqkpic.jpg" width="112" height="126" />
                </div>
            </div>
            <div class="prxz7 clearfix" style="padding-top: 140px;">
                <a style="background: none; padding-left: 2px;" href="#">
                    <img src="images/prjjpic3.jpg" /></a><a style="background: none; padding-left: 0;"
                        href="#"><img src="images/prjjpic2.jpg" /></a></div>
        </div>
    </div>
	<!--<div class="prnav22">
		<div class="prnav16" style="padding-top:8px; padding-bottom:12px;">相关视频</div>
		<div class="itj4" style="float:none; width:173px; height:84px;">
                    <a target="_blank" style=" background:url(images/prlbsp1.png) no-repeat;padding-left:0; top:25px; left:70px;" href="newssp_x_440.html" class="itj8">
                    </a>
                    <img width="173" height="84" src="images/tenpic33.jpg">
          </div>
				
	</div>-->
	<div style="height:1px; overflow:hidden; background:#A4A4A4; margin-top:12px;"></div>
				<div style="height:1px; overflow:hidden; background:#BCBCBC; display:none;"></div>
    <div class="prxz8" style="border-bottom: 1px solid #DFDFDF; display: none;">
        <img src="images/prjjpic4.jpg" width="193" height="76" />
    </div>
    <div class="prxz9" style="border-bottom: 1px solid #DFDFDF; display: none;">
        <a href="#">海康威视</a></div>
    <div class="prnav22" style="display: none;">
        <a target="_blank" style="background:url(images/tendzqk.png) no-repeat left;" href="dzqk.aspx?stat=1&c_kind=6">电子期刊</a></div>
</div>
<script language="javascript" type="text/javascript">
    function qwsearch4() {
        var keycp = document.getElementById("jjfakeynum");
        if (keycp.value != null && keycp.value != "" && keycp.value != "按关键字") {
            window.location.href = "prSearch_"+keycp.value+".html";
        }
        else {
            alert("请输入关键字");
        }
    }

</script>
            </div>
        </div>
        <!--右边结束-->
        </div>
    <div class="bottom">
        <?php include("public/bottom.php"); ?>
    </div>
</body>
</html>
