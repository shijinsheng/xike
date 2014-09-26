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
    <title>最佳实践</title>
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
    <script type="text/javascript" src="js/jquery.raty.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/My97DatePicker/WdatePicker.js"></script>
    <script type="text/javascript" src="../js/jquery_pagination_M/pagination.css"></script>
    <script type="text/javascript" src="../js/jquery_pagination_M/jquery.pagination.js"></script>
	<script type="text/javascript" src="js/jquery.Pages.js"></script>
    <style>
        .nbrtop {
            width: 937px;
        }

        .newsxxpltop2 {
            float: none;
            padding: 0;
        }

        #ratyhint {
            position: absolute;
            left: 73px;
            top: -20px;
        }

        #ratyresult {
            position: absolute;
            left: 175px;
            top: -30px;
        }

            #ratyresult p {
                border: none;
                color: #666666;
                float: left;
                width: 110px;
                margin: 0;
                padding: 0;
            }

            #ratyresult #pfshi {
                font-size: 32px;
                font-weight: bold;
                line-height: 28px;
            }

            #ratyresult p span {
                color: #FF6600;
                font-family: Arial;
                font-style: italic;
            }

            #ratyresult #pfshi {
                font-size: 32px;
                font-weight: bold;
                line-height: 28px;
            }

            #ratyresult p span {
                color: #FF6600;
                font-family: Arial;
                font-style: italic;
            }

            #ratyresult span {
                display: block;
                float: left;
                padding-left: 10px;
                padding-top: 10px;
            }

            #ratyresult #pfge {
                font-size: 18px;
                line-height: 22px;
            }

            #ratyresult p span.no {
                clear: both;
                color: #666666;
                font-size: 12px;
                font-style: normal;
                width: 110px;
                font-weight: normal;
            }

        .inicheng {
            padding-top: 5px;
            height: 24px;
            padding-bottom: 10px;
        }

        .inicheng1 {
            float: left;
        }

            .inicheng1 span {
                color: #666;
            }

            .inicheng1 input {
                width: 100px;
                height: 18px;
                line-height: 18px;
                border: 1px solid #ECECEC;
            }

        .inicheng2 {
            float: left;
            padding-left: 10px;
        }

            .inicheng2 span {
                color: #666;
            }

            .inicheng2 input {
                width: 150px;
                height: 18px;
                line-height: 18px;
                border: 1px solid #ECECEC;
            }

        .inicheng3 {
            float: left;
            color: #BEBEBE;
            line-height: 22px;
            padding-left: 15px;
            height: 22px;
            line-height: 30px;
            overflow: hidden;
        }

        .jjfajsh3 {
            font-size: 12px;
        }

        a.prdltop5oa {
            color: #222;
            border: none;
            font-weight: bold;
            padding: 6px 8px;
        }

            a.prdltop5oa:hover {
            }
    </style>
</head>
<body>

    <link rel="stylesheet" href="../css/prettyPhoto.css" type="text/css" />

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
<?php require("public/top.php"); ?>

<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $("a[rel^='prettyPhoto']").prettyPhoto();
    });
</script>


    <div style="width: 100%; height: 1px; background: #fff; overflow: hidden;"></div>
    <div class="newsbody clearfix" style="padding-top: 22px;">
        <div class="newsbodyl" style="display: none;">
        </div>

        <div class="newsbodyr" style="float: left;">
            

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
	.xgy1{ background:url("../images/xgpic7.jpg") no-repeat left; padding-left:26px; height:30px;}
.xgy1 span{ font-size:18px;}
.xgy1 a{ font-size:18px; line-height:30px; color:#3b3b3b;}
.xgy1 a:hover{ text-decoration:underline; color:#C4271E;}
	</style>
<div class="nbrtop clearfix" style="padding-bottom: 11px;">
    
      <div class="xgy1" style="float: left;">
       <a href="newshd_85.html">
            最佳实践
        </a></div>
    
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

            <div class="jjfajs" style="padding: 0; width: 939px;">
			<?php
				$id=$_GET['typeid'];
				$sql_zjs=mysql_query("select * from yourphp_article where id='".$id."'");
				$row_zjs=mysql_fetch_assoc($sql_zjs);
			?>
               <div style="color: #595959; text-align:center;font-size: 14px;line-height: 21px;padding-bottom:5px; "></div>
			   <div class="jjfajsbt"><?php echo $row_zjs['title']; ?></div>
			   <div class="newsxxtime" style="padding-bottom:12px;  font-size:14px;"></div>
			   <div class="jjfajsbt3">
			   		<p style="text-align:left;text-indent:2em"><span style="color:#494949;"></span></p>
					<p style="text-align:left;text-indent:2em"><span style="color:#494949;"></span></p>
					<p style="text-indent:2em;"><?php echo $row_zjs['content']; ?></p>
					<div style="border-top:1px solid #E8E8E8; padding-top:22px; margin-top:10px;padding-bottom:20px;padding-left:20px;">
						<a href="newshd85.html" style="display:block;"><img src="images/zjsjpicp.jpg" /></a>
					</div>
			   </div>
            </div>


        </div>

        <!--右边开始-->
        <div class="prnav5">
            <div id="float">
                <script type="text/javascript">

                    function fixDiv(div_id) {
                        var offset = arguments[1] ? arguments[1] : 0;
                        var Obj = $('#' + div_id);
                        var ObjTop = Obj.offset().top;
                        var isIE6 = $.browser.msie && $.browser.version == '6.0';
                        if (isIE6) {
                            $(window).scroll(function () {
                                if ($(window).scrollTop() <= ObjTop) {
                                    Obj.attr("class", "prnav5");
                                } else {
                                    Obj.attr("class", "prnav5 fixed");
                                }
                            });
                        } else {
                            $(window).scroll(function () {
                                if ($(window).scrollTop() <= ObjTop) {
                                    Obj.attr("class", "prnav5");
                                } else {
                                    Obj.attr("class", "prnav5 fixed");
                                }
                            });
                        }
                    }
                    fixDiv("float");

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
                <!--<div class="xlbf" id="zk1" style="display: none;">
                    <div class="xlbf4 clearfix" id="conetn">
                        <div class="xlbf7"><a href="javascript:void(0)" id="gb"></a></div>
                        <div class="xlbf8"><div class="xlbf9"><a href='jjfany_74.html'>公安</a></div><ul><li><a href='jjfadl_107.html'>平安城市</a></li><li><a href='jjfadl_109.html'>国标联网</a></li><li><a href='jjfadl_110.html'>图侦实战</a></li><li><a href='jjfadl_378.html'>指挥中心</a></li><li><a href='jjfadl_379.html'>警务督察</a></li><li><a href='jjfadl_380.html'>智能办公</a></li></ul></div><div class="xlbf8"><div class="xlbf9"><a href='jjfany_75.html'>交通</a></div><ul><li><a href='jjfadl_103.html'>卡口</a></li><li><a href='jjfadl_104.html'>电子警察</a></li><li><a href='jjfadl_105.html'>出入口控制与停车诱导系统</a></li><li><a href='jjfadl_377.html'>视频检测违法取证</a></li></ul></div><div class="xlbf8"><div class="xlbf9"><a href='jjfany_76.html'>智能楼宇</a></div><ul><li><a href='jjfadl_101.html'>住宅小区</a></li><li><a href='jjfadl_102.html'>连锁经营（建设中）</a></li><li><a href='jjfadl_515.html'>商业综合体（建设中）</a></li><li><a href='jjfadl_516.html'>企业园区（建设中）</a></li></ul></div><div class="xlbf8"><div class="xlbf9"><a href='jjfany_77.html'>金融</a></div><ul><li><a href='jjfadl_98.html'>银行</a></li><li><a href='jjfadl_100.html'>保险</a></li></ul></div><div class="xlbf8"><div class="xlbf9"><a href='jjfany_79.html'>能源</a></div><ul><li><a href='jjfadl_96.html'>电力</a></li><li><a href='jjfadl_95.html'>石油石化</a></li><li><a href='jjfadl_97.html'>煤炭矿山</a></li></ul></div><div class="xlbf8"><div class="xlbf9"><a href='jjfany_80.html'>司法</a></div><ul><li><a href='jjfadl_91.html'>监狱/劳教</a></li><li><a href='jjfadl_94.html'>公安监管</a></li><li><a href='jjfadl_93.html'>检察院</a></li><li><a href='jjfadl_92.html'>法院</a></li></ul></div><div class="xlbf8"><div class="xlbf9"><a href='jjfany_81.html'>文教卫</a></div><ul><li><a href='jjfadl_87.html'>教育</a></li><li><a href='jjfadl_88.html'>卫生医疗</a></li><li><a href='jjfadl_381.html'>考试培训</a></li><li><a href='jjfadl_89.html'>文博</a></li><li><a href='jjfadl_382.html'>旅游景区</a></li><li><a href='jjfadl_383.html'>文化传媒</a></li></ul></div>
                    </div>
                    <div class="xlbf1"></div>
                </div>-->

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

<style>
.idzqkpic{padding-top:15px; width:112px; height:126px; position:relative;}
a.idzqkpic1{background:url(../images/idzqkpica.png) no-repeat; padding-left:0; display:block; position:absolute; width:112px; height:44px; padding-top:82px; text-align:center; color:#fff; font-size:13px; line-height:18px; display:none; z-index:999999; left:0; top:15px;}
a.idzqkpic1:hover{ text-decoration:none; color:#fff;}

</style>
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
        <div class="prnav16" style="padding-top: 15px; display:none;"><a href="#">联系行业代表</a></div>
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
                    <a target="_blank" style=" background:url(../images/prlbsp1.png) no-repeat;padding-left:0; top:25px; left:70px;" href="newssp_x_440.html" class="itj8">
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
<?php require("public/bottom.php"); ?>
</body>
</html>
