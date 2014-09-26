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
    <title>热点产品</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/xgstyle.css" type="text/css" rel="stylesheet" />
    <!--[if IE 6]>
	<script type="text/javascript" src="js/DD_belatedPNG_0.0.8a.js" ></script>
	<script type="text/javascript">
	DD_belatedPNG.fix('.index_gdm3,.index_gdm3 a,.index_pathl3,a.index_gdm4,.nav2,img,background');
	</script>
	<![endif]-->
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" />
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.hoverIntent.minified.js"></script>
	<script type="text/javascript" src="js/jquery.naviDropDown.js"></script>
	<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
<style type="text/css">
.pagelist1{ position:relative; width:947px;}
.jjfajshzd{ right:59px; background:#FAFAFA;}
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
.fixed{position: fixed;top: 5px;z-index: 1000;}
a.navnewoa{font-size:14px; padding-right:30px; display:block; height:35px; line-height:35px; color:#fff; float:left;  padding-left:30px;font-family:"微软雅黑";}
a.navnewoa:hover{ background:#D2332F;}
a.navnewdq{font-size:14px; padding-right:30px; display:block; height:35px; line-height:35px; color:#fff; float:left;  padding-left:30px;font-family:"微软雅黑";background:#D2332F;}
</style>
</head>
<body>
<script type="text/javascript">
    $(function () {
        $('#navigation_horiz').naviDropDown({
        
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $("a[rel^='prettyPhoto']").prettyPhoto();
    });
</script>
<?php require("public/top.php"); ?>
    <div style="width: 100%; height: 1px; background: #fff; overflow: hidden;">
    </div>
    <div class="newsbody clearfix">
        <div class="xgdg4 clearfix">
            <div class="newsbodyr" style="float: left;">
                <div class="nbrtop clearfix">
                    <div class="nbrtopl">
                        <a style="font-size: 14px; font-family: '微软雅黑';">> 热点产品</a>
                    </div>
                    <div class="prdltop clearfix">
                        <a class="prdltop1" target="_blank" href="http://service.weibo.com/share/share.php?url=http%3A%2F%2Fwww.hikvision.com%2Fcn%2FProducts_show.asp%3Fid%3D5031%26showid%3D1&appkey=3797775739&title=&pic=&ralateUid=&language=">
                            分享</a> <a class="prdltop2" href="fk.php?stat=1&iframe=true&width=735&height=440" rel="prettyPhoto[iframesl]">
                                反馈</a> <a class="prdltop3" href="contrast.html">
                                    产品对比</a>
                    </div>
                </div>
                
                <div style="height: 5px; overflow: hidden; background: #D71920;">
                </div>
                <div class="pagelist1 clearfix">
                	<div class="jjfajshzd"></div>
					<!-- 开始显示热点产品 --><!-- 从这里开始循环显示热点产品 -->
					<?php
						$sql_hot=mysql_query("select * from yourphp_product order by rand() limit 0,9");
						while($row_hot=mysql_fetch_array($sql_hot)){
					?>
					<div class="jjfajsh1">
						<div class="prdltop4">
							<div class="jjfajsh2">
								<div class="newhot1"></div>
								<img src="http://localhost/xike<?php echo $row_hot['thumb']; ?>" width="145" height="145" />
							</div>
							<div class="jjfajsh3">
								<div class="jjfajshh3"><?php echo $row_hot['title']; ?></div>
							</div>
						</div>
						<div class="jjfajsh4"><a href="product_info<?php echo $row_hot['catid']; ?>_<?php echo $row_hot['id']; ?>.html" target="_blank">了解详细+</a></div>
					</div><!-- 循环显示结束 -->
					<?php }?>
                </div>
                <div style="clear: both;">
                </div>
            </div>

            <script type="text/javascript">
                $(function(){
                    $("#kz").click(function(event){
                        var e=window.event || event;
                        if(e.stopPropagation){
                            e.stopPropagation();
                        }else{
                            e.cancelBubble = true;
                        }   
                        $("#zk").animate({ height: 'toggle', width: 'toggle' }, "slow");
                    });
 
                    $(".gb").click(function(event){
                        var e=window.event || event;
                        if(e.stopPropagation){
                            e.stopPropagation();
                        }else{
                            e.cancelBubble = true;
                        }
                    });
                    document.onclick = function(){
                        $("#zk").hide();
                    };
                })
            </script>

            <!--右边开始-->
            <div class="prnav5">
                <div class="xlbf" id="zk" style="display: none;">
                    <div class="xlbf2">
                        <div class="xlbf7" style="display: none;">
                            <a href="javascript:void(0)" id="gb"></a>
                        </div>
                        <div class="xlbf3 clearfix">
                            
                        </div>
                    </div>
                    <script type="text/javascript">
                        function  showlink3(no) {
                         
                            for (var iii = 1; iii <= 0; iii++) {
                                var dd = document.getElementById("lanmu" + iii);
                                var bb = document.getElementById("content" + iii);
                                if (iii == no) {
                                    dd.className = "xlbf3oa";
                                    bb.style.display = "block";
                                           
                                } else {
                                    dd.className = "";
                                    bb.style.display = "none";
                                }
                            }

                        }

                    </script>

                    <div class="xlbf1">
                    </div>
                </div>
                <a href="javascript:void(0);" id="kz" class="xgdg19" style="background: none; background-color: #D71920; display:none;">
                    查看全部产品</a>
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
<div class="prnav17">97317421@qq.com</div>
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
					
        </div>
        <div class="prnav22">
            <a target="_blank" href="download_<?php echo "240"; ?>.html">软件下载</a></div>
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
            <!--右边结束-->
        </div>
    </div>
<?php require("public/bottom.php"); ?>
</body>
</html>

