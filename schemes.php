<?php
require_once('./mydb/db.php');
require_once('./mydb/Paging.php');
$db=new DB();
$id=$_GET['id'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf8" />
        <meta name="keywords" content="西科,成都西科,西科光端机,成都西科高新技术有限公司" />
        <meta name="description" content="西科,成都西科,西科光端机,成都西科高新技术有限公司">
        <meta name="baidu-site-verification" content="LD10I6bZyc" />
	<title></title>
	<link href="css/style.css" type="text/css" rel="stylesheet" />
	<link href="css/page.css" type="text/css" rel="stylesheet" />
	<link href="css/pager.css" type="text/css" rel="stylesheet" />
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
	<style type="text/css">
	.xgy7{ color:#666;line-height:26px; width:272px; overflow:hidden;height:30px;}
	.xgy7 a{ color:#666; font-size:14px; line-height:26px; background:url("../images/libg1.png") no-repeat left; padding-left:12px;}
	.xgy7 a:hover{ text-decoration:underline; color:#C4261D;}
	</style>
	
	<!-- 按钮的jQuery -->
	<script type="text/javascript">
		$(function () {
            //加载最佳实践
            loadMessage("75", "1");
            loadMessage2("75", "2");
           
            //@Mr.Think***变量
            var $cur = 1;//初始化显示的版面
            var $i = 3;//每版显示数
            var $len = $('.xgy5>ul>li').length;//计算列表总长度(个数)
            var $pages = Math.ceil($len / $i);//计算展示版面数量
            var $w = $('.xgyx').width();//取得展示区外围宽度
            var $showbox = $('.xgy5');
            var $num = $('span.num li')
            var $pre = $('span.pre')
            var $next = $('span.next');
            var $autoFun;
            //@Mr.Think***调用自动滚动
            // autoSlide();
            //@Mr.Think***向前滚动
            $pre.click(function () {
                if (!$showbox.is(':animated')) {  //判断展示区是否动画
                    if ($cur == 1) {   //在第一个版面时,再向前滚动到最后一个版面
                        $showbox.animate({
                            left: '-=' + $w * ($pages - 1)
                        }, 1000); //改变left值,切换显示版面,500(ms)为滚动时间,下同
                        $cur = $pages; //初始化版面为最后一个版面
                    }
                    else {
                        $showbox.animate({
                            left: '+=' + $w
                        }, 1000); //改变left值,切换显示版面
                        $cur--; //版面累减
                    }
                    $num.eq($cur - 1).addClass('numcur').siblings().removeClass('numcur'); //为对应的版面数字加上高亮样式,并移除同级元素的高亮样式
                }
            });
            //@Mr.Think***向后滚动
            $next.click(function () {
                if (!$showbox.is(':animated')) { //判断展示区是否动画
                    if ($cur == $pages) {  //在最后一个版面时,再向后滚动到第一个版面
                        $showbox.animate({
                            left: 0
                        }, 1000); //改变left值,切换显示版面,500(ms)为滚动时间,下同
                        $cur = 1; //初始化版面为第一个版面
                    }
                    else {
                        $showbox.animate({
                            left: '-=' + $w
                        }, 1000);//改变left值,切换显示版面
                        $cur++; //版面数累加
                    }
                    $num.eq($cur - 1).addClass('numcur').siblings().removeClass('numcur'); //为对应的版面数字加上高亮样式,并移除同级元素的高亮样式
                }
            });
            //@Mr.Think***数字点击事件
            $num.click(function () {
                if (!$showbox.is(':animated')) { //判断展示区是否动画
                    var $index = $num.index(this); //索引出当前点击在列表中的位置值
                    $showbox.animate({
                        left: '-' + ($w * $index)
                    }, 1000); //改变left值,切换显示版面,500(ms)为滚动时间
                    $cur = $index + 1; //初始化版面值,这一句可避免当滚动到第三版时,点击向后按钮,出面空白版.index()取值是从0开始的,故加1
                    $(this).addClass('numcur').siblings().removeClass('numcur'); //为当前点击加上高亮样式,并移除同级元素的高亮样式
                }
            });
            //@Mr.Think***停止滚动
            //clearFun($showbox);
            clearFun($pre);
            clearFun($next);
            clearFun($num);
            //@Mr.Think***事件划入时停止自动滚动
            function clearFun(elem) {
                elem.toggle(function () {
                    clearAuto();
                }, function () {
                    autoSlide();
                });
            }
            //@Mr.Think***自动滚动
            function autoSlide() {
                $next.trigger('click');
                $autoFun = setTimeout(autoSlide, 5000);//此处不可使用setInterval,setInterval是重复执行传入函数,这会引起第二次划入时停止失效
            }
            //@Mr.Think***清除自动滚动
            function clearAuto() {
                clearTimeout($autoFun);
            }
        });
        function loadMessage(item, type)
        {
            //异步获取数据
            $.ajax({ 
                type: "post", 
                url: "../ashx/jjfazjsj.ashx", 
                dataType: 'text', 
                data: 'stat=1&item=' + item + '&type=' + type,
                success: function (data) {
                    var stringArray = data.split("|");
                    cachedate=stringArray[1];
                    $("#zjsj").html(cachedate);
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    $("#zjsj").html(textStatus + errorThrown);
                }
            });
        }
        function loadMessage2(item, type) {
            //异步获取数据
            $.ajax({
                type: "post",
                url: "../ashx/jjfazjsj.ashx",
                dataType: 'text',
                data: 'stat=1&item=' + item + '&type=' + type,
                success: function (data) {
                    var stringArray = data.split("|");
                    cachedate = stringArray[1];
                    $("#jjfaxs1").html(cachedate);
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    $("#jjfaxs1").html(textStatus + errorThrown);
                }
            });
        }
	</script>
	<script>
		$(function(){
			var cTitle=$('.xgy1').children().text();
			$(document).attr('title','解决方案|'+cTitle);
		});
	</script>
</head>

<body>
<?php require('public/top.php'); ?>
<div class="newsbody clearfix">
	<div class="newsbodyr">
	<?php 
		$query=mysql_query("select * from yourphp_category where id='".$id."'");
		$row=mysql_fetch_array($query);
	?>
		<div class="xgy1"><a href="#"><?php echo $row['catname']; ?></a></div>
	<?php 
		$query_image=mysql_query("select * from yourphp_attachment where catid='".$id."'");
		$row_image=mysql_fetch_array($query_image);
	?>
		<div class="jjfanyba"><img src="<?php echo $row_image['filepath']; ?>" width="948" height="257" /></div>
		<div class="xgy2"></div>
		<div class="jjfany">
			<div class="jjfany1">
			<?php
			$description=mysql_query("select * from yourphp_category where id='".$id."'");
			$row_description=mysql_fetch_array($description);
			echo $row_description['description'];
			?>
			</div>
		<div class="xgy3">
			<div class="xgy4" style="position: relative; width: 915px; height: 26px;">
                        解决方案<div class="famore">
                            <span class="num">
                                <ol>
								<li class="numcur">1</li>
								<?php 
								$solution=mysql_query("select * from yourphp_category where parentid='".$id."'");
								$count=mysql_num_rows($solution);  //获得纪录的总数
								$preNumber=3;	//没页显示的数量
								$totalPage=ceil($count/$preNumber);
								$i='';
								for($i=2;$i<=$totalPage;$i++){
								?>
								<li><?php echo $i; ?></li><?php } ?></ol>
                            </span>
                        </div>
                    </div>
			<div class="xgyx">
				<div class="xgy5">
					<ul class="clearfix">
					<?php 
					$solution=mysql_query("select * from yourphp_category where parentid='".$id."' order by id");
					while($rows=mysql_fetch_array($solution)){
					?>
						<li>
							<div class="xgy6"><a href="scheme_list_<?php echo $rows['id']; ?>.html"><?php echo $rows['catname']; ?></a></div>
							<div style="height: 79px; overflow: hidden;">
							<?php
								$sql_so=mysql_query("select * from yourphp_article where catid='".$rows['id']."' and keywords='解决方案'");
								while($row_so=mysql_fetch_array($sql_so)){
							?>
								<div class="xgy7"><a href="scheme_info<?php echo $rows['id']; ?>_<?php echo $row_so['id']; ?>.html" title="<?php echo $row_so['title']; ?>" target="_blank"><?php echo $row_so['title']; ?></a></div>
							<?php } ?>
							</div>	
						</li>
					<?php } ?>
					</ul>
				</div>
			</div>
		</div>
		<div class="xgy9">
			<div class="xgy4" style="padding-bottom: 6px; position: relative; width: 915px; height: 26px;">最佳实践<a href="newshd85.html" class="tena" target="_blank">全部<font style="color: #c4261d; font-family: '宋体';">>></font></a></div>
			<div class="zjsj" style="height:336px;">
					<?php
					$category=mysql_query("select * from yourphp_category where id='".$id."'");
					$row_category=mysql_fetch_assoc($category);
					$article=mysql_query("select * from yourphp_article where catid in(".$row_category['arrchildid'].") and keywords='最佳实践' limit 0,3");
					while($row_article=mysql_fetch_array($article)){
					?>
				<div class="xgdg9 clearfix">
					<div class="nbrbodynewl" style="width:140px;height:80px;"><a href="newshd_<?php echo $row_article['id']; ?>.html"><img src="<?php echo $row_article['thumb']; ?>" width="140" height="80" /></a></div>
					<div class="xgdg6">
						<div class="xgdg7 clearfix"><a href="newshd_<?php echo $row_article['id']; ?>.html"><?php echo $row_article['title']; ?></a><div style="clear:both"></div></div>
						<div class="xgdg8"><?php echo $row_article['description']; ?></div>
					</div>
				</div>
				<?php } ?>
			</div>
			<div class="xgy10">
				<div class="xgy4" style="padding-bottom: 6px; position: relative; width: 915px; height: 26px;">行业新闻<a href="news_m1.php?typeid=93" class="tena" target="_blank"><font style="color: #c4261d; font-family: '宋体';"></font></a></div>
				<div id="jjfaxs2" class="prxz22">
					<ul class="clearfix" style="height:225px;">
						<?php
						$news=mysql_query("select * from yourphp_article where catid in(".$row_category['arrchildid'].") and keywords='行业新闻'");
						while($row_news=mysql_fetch_array($news)){
						?>
						<li class="clearfix"><a href="newsinfo<?php echo $row_news['id']; ?>.html" target="_blank"><?php echo $row_news['title']; ?></a><span><?php echo date('Y-m-d',$row_news['createtime']); ?></span></li>
						<?php } ?>
					</ul>
				</div>
				<script type="text/javascript">
					$('#jjfaxs2').kkPages({
						PagesClass: 'li', //需要分页的元素
						PagesMth: 8, //每页显示个数 
						PagesNavMth: 8 //显示导航个数
					}); 
				</script> 
				</div>
			</div>
		
		</div>
		</div>
		<!-- 右边开始 -->
		<div class="prnav5"><div class="prnav12">
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
	<script language="javascript" type="text/javascript">
		function qwsearch4() {
			var keycp = document.getElementById("jjfakeynum");
			if (keycp.value != null && keycp.value != "" && keycp.value != "请输入产品型号") {
				window.location.href = "prSearch_"+keycp.value+".html";
			}
			else {
				alert("请输入产品型号查询");
			}
		}
	
	</script>
    <div class="prnav15">
         <div class="prnav16">合作联系</div>
        <div class="prnav17">97317421@qq.com</div>
        <div class="prnav18">028-65929285</div>
      								
    </div>
    
	<!-- <div class="prnav22">
		<div class="prnav16" style="padding-top:8px; padding-bottom:12px;">相关视频</div>
		<div class="itj4" style="float:none; width:173px; height:84px;">
                    <a target="_blank" style=" background:url(images/prlbsp1.png) no-repeat;padding-left:0; top:25px; left:70px;" href="#" class="itj8">
                    </a>
                    <img width="173" height="84" src="images/tenpic33.jpg">
              </div>
				
	</div>-->
	</div>
	</div>
</div>
<?php require("public/bottom.php");?>
</body>
</html>