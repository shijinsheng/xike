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
    <title>解决方案|最佳实践</title>
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


    
    <div class="newsbody clearfix" style="padding-top: 22px;">
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
       <a href="">
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
                <form action="javascript:seach();" method="post" id="form1">
                    <div style="border: none; margin-top: 0; height: 30px;" class="mtgzbt2 clearfix">
                        <span>资料搜索：</span>
                        <div style="padding-right: 0;">
                            <input type="text" value="开始日期" onclick="WdatePicker()" id="starttime">
                        </div>
                        <span style="padding-left: 5px; padding-right: 5px;">至</span>
                        <div>
                            <input type="text" value="结束日期" onclick="WdatePicker()" id="endtime">
                        </div>
                        <input type="text" value="关键字" onfocus="if (this.value=='关键字') {this.value='';}" onblur="if (this.value==''){ this.value='关键字';}" id="key">
                        <a href="javascript:seach();">搜索</a>
                    </div>
                </form>
                <div class="mtgzxw">
                    <div class="mtgzxw1" id="page">
                        <ul class="clearfix" id="Result">
						<?php 
						$article=mysql_query("select * from yourphp_article where keywords='最佳实践'");
						while($row_article=mysql_fetch_array($article)){
						?>
                            <li><a href="newshd_<?php echo $row_article['id']; ?>.html"><?php echo $row_article['title']; ?></a><span><?php echo date('Y-m-d',$row_article['createtime']); ?></span></li>
						<?php } ?>
                        </ul>
                    </div>
					<script type="text/javascript">
					$('#page').kkPages({
						PagesClass: 'li', //需要分页的元素
						PagesMth: 18, //每页显示个数 
						PagesNavMth: 8 //显示导航个数
					}); 
				</script> 
                </div>
            </div>


        </div>

        <!--右边开始-->
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
				window.location.href = "prSearch.php?stat=1&c_kind=2&key=" + keycp.value;
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
        <!--右边结束-->

    </div>
<?php require("public/bottom.php"); ?> 
</body>
</html>
