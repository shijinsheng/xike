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
	 <link href="css/xgstyle.css" type="text/css" rel="stylesheet" />
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
	<link href="css/page.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="css/index.css" type="text/css" media="screen, project, print" />
</head>

<body>
<?php require("public/top.php"); ?>
<div class="newsbody clearfix">
	<div class="xgdg4 clearfix">
		<div class="newsbodyr" style="float:left;">
			<div class="nbrtop clearfix">
				<div class="nbrtopl"><a style="font-size: 14px; font-family: '微软雅黑';">> 产品搜索</a></div>
				<div class="prdltop clearfix">
					<a class="prdltop1" href="#" target="_blank">分享</a>
					<a class="prdltop2" href="">反馈</a>
					<a class="prdltop3" href="contrast.html">产品对比</a>
				</div>
			</div>
			<div style="height: 5px; overflow: hidden; background: #D71920;"></div>
            <div class="sers">
	<?php
	$xinghao=trim($_GET['key']);
	$sql_xinghao=mysql_query("select * from yourphp_product where xinghao like '%".$xinghao."%'");
	while($result_xinghao=mysql_fetch_array($sql_xinghao)){
	?>
		<div class="clearfix sers1">
			<div class="sers2">
				<div class="sers3">
					<img src="<?php echo $result_xinghao['thumb']; ?>" height="110" width="110" />
					<div class="sers4"><img src="images/proupic1.png"  height="40" width="50"/></div>
					<div class="sers5"></div>
				</div>
			</div>
			<div class="sers6">
				<div class="sers7"><a href="product_info<?php echo $result_xinghao['catid']; ?>_<?php echo $result_xinghao['id']; ?>.html" target="_blank"><?php echo $result_xinghao['xinghao']?></a></div>
				<div class="sers9"><p><?php echo $result_xinghao['description']; ?></p></div>
				<div class="sers10"><a href="product_info<?php echo $result_xinghao['catid']; ?>_<?php echo $result_xinghao['id']; ?>.html">查看详细>></a></div>
			</div>
		</div>
	<?php } ?>
	</div>
		</div>
		<script type="text/javascript">
			$('.sers').kkPages({
				PagesClass: '.sers1', //需要分页的元素
				PagesMth: 6, //每页显示个数 
				PagesNavMth: 8 //显示导航个数
			}); 
		</script> 
        <div class="prnav5">
                
                
<style type="text/css">
.fixed{
    position: fixed;
    top: 5px;
    z-index: 1000;
}
a.navnewoa{font-size:14px; padding-right:30px; display:block; height:35px; line-height:35px; color:#fff; float:left;  padding-left:30px;font-family:"微软雅黑";}
a.navnewoa:hover{ background:#D2332F;}
a.navnewdq{font-size:14px; padding-right:30px; display:block; height:35px; line-height:35px; color:#fff; float:left;  padding-left:30px;font-family:"微软雅黑";background:#D2332F;}
</style>


<div style="height: 390px; width: 193px;">
    <div class="prnav12" id="float">
        <div class="prnav13 clearfix">
            <a href="javascript:void(0)"></a><span>产品搜索</span>
        </div>
        <form action="javascript:prsera();"  method="post">
        <div class="prnav14 clearfix">
            <div>
                <input type="text" id="prkeynum" value="按型号查询" onblur="if (this.value==''){ this.value='按型号查询';}"
                    onfocus="if (this.value=='按型号查询') {this.value='';}" />
            </div>
            <a href="javascript:prsera();">搜 索</a>
        </div>
        </form>
        <div class="prnav15">
            <div class="prnav16">技术咨询</div>
<div class="prnav17"><a style="cursor:text;text-decoration:none;">97317421@qq.com</a></div>
<div class="prnav18">028-65929285</div>							
        </div>
        <div class="prnav19">
            <div class="prnav16">
                常见问题解答</div>
            
                    <div class="prnav20">
                        <a target="_blank"  href="answer<?php echo "125"; ?>_<?php echo "246"; ?>.html">
                            清除控件的方法
                        </a>
                    </div>
                
                    <div class="prnav20">
                        <a target="_blank"  href="product_list_<?php echo "175"; ?>.html">
                            高清网络枪机列表
                        </a>
                    </div>
                
                    <div class="prnav20">
                        <a target="_blank"  href="answer<?php echo "125"; ?>_<?php echo "248"; ?>.html">
                           使用IE访问前的注意事项
                        </a>
                    </div>
					<div class="prnav22"><a target="_blank" href="download_<?php echo "240"; ?>.html">软件下载</a></div>
        </div>
    </div>
</div>

<script language="javascript" type="text/javascript">
    function prsera() {
        var keycp = document.getElementById("prkeynum");
        if (keycp.value != null && keycp.value != "" && keycp.value != "按型号查询") {
            window.location.href = "prSearch_"+keycp.value+".html";
        }
        else {
            alert("请输入型号查询");
        }
    }

</script>


<script language="javascript" type="text/javascript">
     function fixDiv(div_id) {
                        var offset = arguments[1] ? arguments[1] : 0;
                        var Obj = $('#' + div_id);
                        var ObjTop = Obj.offset().top;
                        var isIE6 = $.browser.msie && $.browser.version == '6.0';
                        if (isIE6) {
                            $(window).scroll(function () {
                                if ($(window).scrollTop() <= ObjTop) {
                                    Obj.attr("class", "prnav12");
                                } else {
                                    Obj.attr("class", "prnav12 fixed");
                                }
                            });
                        } else {
                            $(window).scroll(function () {
                                if ($(window).scrollTop() <= ObjTop) {
                                    Obj.attr("class", "prnav12");
                                } else {
                                     Obj.attr("class", "prnav12 fixed");
                                }
                            });
                        }
                    }

                    //fixDiv("float");

</script>
            </div>
	</div><!-- xgdg4 -->
</div><!-- newsbody -->
<?php require("public/bottom.php"); ?>
</body>
</html>