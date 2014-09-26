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
    <title>公司新闻</title>
    <link href="css/style.css" type="text/css" rel="stylesheet" />
 <!--[if IE 6]> 
<script src="http://jt.875.cn/js/iepng.js" type="text/javascript"></script> 
<script type="text/javascript">
   EvPNG.fix('div, ul, img, li, input,span,p,a');  
</script>
<![endif]-->

    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.raty.min.js" ></script>
    <script type="text/javascript" >
        $(document).ready(function () {
            $('.newsxxbody img').each(function () {
                if (($(this).attr("src").indexOf('/UploadFile/Image') >= 0) && ($(this).attr("src").indexOf('http://') < 0) )
                $(this).attr("src", "http://www.hikvision.com/" + $(this).attr("src"));
            })
            
            $('.newsxxbody a').each(function () {
                if($(this).attr("href").indexOf('http://') < 0 )
                $(this).attr("href", "http://www.hikvision.com/" + $(this).attr("href"));
            })
            gethit(782,"1");

        });
        function gethit(id, type) {
            $.ajax({
                url: "ashx/updatehit.ashx?id=" + id + "&type=" + type,
                success: function (context) {
                    $('#updatehit').html("");
                    $('#updatehit').html("浏览数：" + context);
                }
            });
        }
     </script>
     <script type="text/javascript">
         $(function () {
             $('#ratyimgpanel').raty({
                 width: 200,
                 path: 'images/',
                 starOff: 'newsxxxxm.jpg',
                 starOn: 'newsxxxxl.jpg',
                 hints: ['毫无价值', '有点价值', '一般', '有价值', '非常有价值'],
                 target: '#ratyhint',
                 targetKeep: true,
                 click: function (score, evt) {
                     $("#dfValue").val(score);
                     $('#ratypanel').raty('readOnly', true);

                 }
             });
         })
</script>
<style>
.newsxxpltop2{ float:none; padding:0; }
#ratyhint{position:absolute; left:73px; top:-20px;}
#ratyresult{ position:absolute; left:175px; top:-30px;display:none;}
#ratyresult p {
    border:none;
    color: #666666;
    float: left;
    width: 110px;
	margin:0; padding:0;}
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
}
.inicheng{ padding-top:5px;height:24px; padding-bottom:10px;}
.inicheng1{ float:left;}
.inicheng1 span{ color:#666;}
.inicheng1 input{ width:100px; height:18px; line-height:18px;border:1px solid #ECECEC;}
.inicheng2{ float:left; padding-left:10px;}
.inicheng2 span{ color:#666;}
.inicheng2 input{ width:150px; height:18px; line-height:18px;border:1px solid #ECECEC;}
.inicheng3{ float:left; color:#BEBEBE; line-height:22px; padding-left:15px; height:22px; line-height:30px; overflow:hidden;}
</style>
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

    
	
<div style="height: 1px; background: #fff; overflow: hidden;"></div>
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
		<div  title="订阅电子报"><a  rel="prettyPhoto[iframesl]"  href="dingyue.php?c_kind=508&iframe=true&width=520&height=230"> 
                    <img src="images/momopic.jpg"></a></div> 
        <a id="weixinlogo" href="javascript:void(0);">
            <img src="images/weixinlogo.jpg" /></a> <a style="display:none;" href="#">
                <img src="images/youkulogo.jpg" /></a> <a href="http://weibo.com/hikvisionsecu" target="_blank">
                    <img src="images/sinalogo.jpg"></a> <span>关注我们</span>
    </div>
</div>

            		<?php
					$getnewsid = !empty($_GET['id'])?$_GET['id']:0;
					$sql_newsobj = "select * from yourphp_article where id = ".$getnewsid.""; 
					$resut = mysql_query($sql_newsobj);
					$obj_news = mysql_fetch_object($resut);
					$sql_newsobj1=mysql_query("select * from yourphp_category where id='".$obj_news->catid."'");
					$obj_news1=mysql_fetch_assoc($sql_newsobj1);
					?>
                <div class="newsxx" style="border:none; padding-bottom: 0; padding-top:0;">
				<div class="lmbk">公司新闻</div>
                    <div class="newsxxtop" style="font-size: 20px; font-family: '微软雅黑'; padding-bottom:6px;">
                        <div style="font-size:14px; color:#595959; line-height:21px; width:780px; margin:0 auto; padding-bottom:10px; "></div>
                         <?php echo $obj_news->title ?>
                    </div>
					<div class="newsxxtime" style="padding-bottom:5px; font-size:14px;"></div>
                    <div class="newsxxtime" style="background:#F1F1F1; padding-top:5px; padding-bottom:5px; margin-top:8px;">
                        <span>时间：<?php echo date("Y-m-d H:i:s",$obj_news->createtime) ?></span><span>来源：<?php echo $obj_news->copyfrom ?></span><span id="updatehit"></span>
                    </div>
					 <div style="font-size:14px; color:#595959; line-height:21px; width:780px; margin:0 auto; padding-top:10px; padding-bottom:20px; text-align:center;"></div>
                    <div class="newsxxbody" style="font-size: 14px; border-bottom: none; padding-bottom: 20px;">
                    <?php echo $obj_news->content ?>
                    </div>
                    <div class="clearfix" style="border-bottom: 1px solid #D9D9D9; padding-bottom: 14px;">
                        <div style="width: 1px; height: 1px; overflow: hidden; float: left;">
                        </div>
                        <div class="newsxxey">
                            <!-- Baidu Button BEGIN -->
                            <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare">
                                <span class="bds_more">分享到：</span> <a class="bds_qzone"></a><a class="bds_tsina"></a>
                                <a class="bds_tqq"></a><a class="bds_renren"></a><a class="bds_t163"></a><a class="shareCount">
                                </a>
                            </div>

                            <script type="text/javascript" id="bdshare_js" data="type=tools&uid=752675"></script>

                            <script type="text/javascript" id="bdshell_js"></script>

                            <script type="text/javascript">
							document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
							</script>

                            <!-- Baidu Button END -->
                        </div>
                    </div>
                </div>
                    <form name="form1" method="post" action="news_detail_63_i782.html" id="form1">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwULLTExODUzMzQ4NjEPZBYEAgMPFgIeC18hSXRlbUNvdW50AgEWAmYPZBYCZg8VAyRhNGZlOTRlMi0wOWFhLTQ4ZDctOWEwYi1mZmEyNzY0OWY2YWMXc18yMDE0MDExNjE0Mzg0NzA0Ny5qcGcAZAIED2QWAgIHDxYCHwBmZGQ=" />

<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWCALfwPmxCwLZqs/kCwKYovrCAQKGlNklAqbh0IoMAp+ettwCApvQsuwGAr/T6uQM" />
                <div class="newsxxpl" style="margin-top: 0; border: none; padding-bottom: 156px;display:none;">
                    <div style="padding-left: 23px; width: 823px;">
                        <div class="newsxxtck" style=" display:none;" id="zk" >
                            <div class="newsxxtck1 clearfix">
                                <span>打分</span><a  href="javascript:closeDiv();"></a></div>
                            <div class="newsxxtck2" >
                                <div class="newsxxtck3 clearfix">
                                    <div class="newsxxtck4">
                                         <input type="radio" value="5" name="dafen"></div>
                                    <div class="clearfix">
                                        <a class="newsxxtck3oa" href="#"></a><a class="newsxxtck3oa" href="#"></a><a class="newsxxtck3oa"
                                            href="#"></a><a class="newsxxtck3oa" href="#"></a><a class="newsxxtck3oa" href="#"></a>
                                    </div>
                                    <div>
                                        太棒了</div>
                                </div>
                                <div class="newsxxtck3 clearfix">
                                    <div class="newsxxtck4">
                                         <input type="radio" value="4" name="dafen"></div>
                                    <div class="clearfix">
                                        <a class="newsxxtck3oa" href="#"></a><a class="newsxxtck3oa" href="#"></a><a class="newsxxtck3oa"
                                            href="#"></a><a class="newsxxtck3oa" href="#"></a><a href="#"></a>
                                    </div>
                                    <div>
                                        很好</div>
                                </div>
                                <div class="newsxxtck3 clearfix">
                                    <div class="newsxxtck4">
                                         <input type="radio" value="3" name="dafen"></div>
                                    <div class="clearfix">
                                        <a class="newsxxtck3oa" href="#"></a><a class="newsxxtck3oa" href="#"></a><a class="newsxxtck3oa"
                                            href="#"></a><a href="#"></a><a href="#"></a>
                                    </div>
                                    <div>
                                        不错哦</div>
                                </div>
                                <div class="newsxxtck3 clearfix">
                                    <div class="newsxxtck4">
                                         <input type="radio" value="2" name="dafen"></div>
                                    <div class="clearfix">
                                        <a class="newsxxtck3oa" href="#"></a><a class="newsxxtck3oa" href="#"></a><a href="#">
                                        </a><a href="#"></a><a href="#"></a>
                                    </div>
                                    <div>
                                        还行吧</div>
                                </div>
                                <div class="newsxxtck3 clearfix">
                                    <div class="newsxxtck4">
                                         <input type="radio" value="1" name="dafen"></div>
                                    <div class="clearfix">
                                        <a class="newsxxtck3oa" href="#"></a><a href="#"></a><a href="#"></a><a href="#"></a>
                                        <a href="#"></a>
                                    </div>
                                    <div>
                                        加油吧</div>
                                </div>
                                <div style="margin-top: 9px; height: 1px; overflow: hidden; background: #CACACA;">
                                </div>
                                <div class="newsxxtck5">
                                    <input type="submit" value="提交" id="btnSubmit" style="border: none;" /></div>
                            </div>
                        </div>
                        <div class="newsxxpltop clearfix" style="position:relative; width:823px; height:25px;">
                            <div class="newsxxpltop1 clearfix">
                                <span>评论</span>
                                 <span style="display:none"> 分</span>
                                <div id="ratyimgpanel"  style="cursor: pointer; ">
                               </div></div>
                             <div id="ratyhint" class="newsxxpltop2"></div>
							 <div id="ratyresult">
            <p><span id="pfshi">0</span><span id="pfge">.0</span><span class="no">(已有<label id="pfren">0</label>人评分)</span></p>
        </div>
                            <div class="newsxxpltop2" style="display:none">
                                <a class="newsxxpltop2oa" href="javascript:openDiv()" id="df">我要打分</a></div>
                        </div>
						<div class="inicheng clearfix">
						<div class="inicheng1"><span>昵称：</span><input name="namex" type="text" id="namex" /><font style="color:red; font-family:'宋体'; padding-left:3px;">*</font></div>
						<div class="inicheng2"><span>联系方式：</span><input name="link" type="text" id="link" /></div>
						<div class="inicheng3">建议留下您的联系电话 或 邮箱，我们对此会严格保密!</div>
					</div>
                        <div class="newsxxplnr"  >
                        <input name="g_id" type="hidden" id="g_id" value="782" />
                        <input name="type" type="hidden" id="type" value="4" />
                        <input name="dfValue" type="hidden" id="dfValue" />
                        <input name="lanmuid" type="hidden" id="lanmuid" value="63" />
                        <textarea name="plcontent" id="plcontent" style="width: 802px; color:#BEBEBE;" onkeyup="javascript:checkLength(this);" onblur="if (this.value==''){ this.value='请在这里输入您的意见、建议，我们将用心倾听，不断优化产品，为您提供更优质的服务！';this.style.color='#BEBEBE';}" onfocus="if (this.value=='请在这里输入您的意见、建议，我们将用心倾听，不断优化产品，为您提供更优质的服务！') {this.value=''; this.style.color='#666';}">请在这里输入您的意见、建议，我们将用心倾听，不断优化产品，为您提供更优质的服务！</textarea><font style="color:red; font-family:'宋体';padding-left:3px;">*</font>
                           
                        </div>
                            <div class="newsxxpltj2" style="width:823px; "><input type="submit" id="btnSave" value=""><span id="tishi">还能输入<font style="font-size:18px; font-family:'微软雅黑';">120</font>个字</span></div>
                             
                          
                   
                                <div class="newsxxplts" style="background: none; border-bottom: 1px dotted #DBDBDB; padding-bottom: 10px; padding-top: 10px; width: 800px; padding-right: 0;width:823px; ">
                           
                            <div>暂无网友评论相关信息</div>
                        </div>
                        
                    </div>
                </div>
                 <script type="text/javascript">
        function checkLength(which) {
            var maxChars = 120;
            if (which.value.length > maxChars) which.value = which.value.substring(0, maxChars);
            var curr = maxChars - which.value.length;
            document.getElementById("tishi").innerHTML = "还可以输入<font style=\"font-size: 18px; font-family: '微软雅黑';\">"+curr.toString()+"</font>个字";
        }
    </script>

                <script type="text/javascript">
                        function closeDiv() {
                            $("#zk").hide();
                        }
                        function openDiv() {
                            $("#zk").show();
                        }

                        $(function () {
                        
                            $("#btnSubmit").click(function () {
                                var val = $('input:radio[name="dafen"]:checked').val();
                                if (val == null) {
                                    alert("没选中分数!");
                                    return false;
                                }
                                else {
                                
                                    $("#dfValue").val(val);
                                    $("#df").html("已打分");
                                    alert("你好，你打了：" + val + " 分");
                                    closeDiv();
                                    return false;
                                }

                            });
                            
                            $("#btnSave").click(function () {
                                var name = $("#namex").val();
                                var fzvalue = $("#dfValue").val();
                                var txcontent = $("#plcontent").val();
                                if (name == null || name == "")
                                {
                                    alert("你好，还没填写昵称!");
                                    $("#namex").focus();
                                    return false;

                                }
                                else if ((txcontent == null || txcontent == "" || txcontent == "请在这里输入您的意见、建议，我们将用心倾听，不断优化产品，为您提供更优质的服务！")) {
                                 alert("你好，还没选填写内容!");
                                 return false;
                                }
                                else
                                {
                                       if (fzvalue == null || fzvalue == "") {
                                        $("#dfValue").val("0");
                                       }
                                       if (txcontent == null || txcontent == "" || txcontent == "请在这里输入您的意见、建议，我们将用心倾听，不断优化产品，为您提供更优质的服务！") {
                                           $("#plcontent").val(" ");
                                       }
                                        ajaxSubmit("ashx/pingf.ashx", $('#form1'), function (txt) {
                                        if (txt != "flase") {
                                            alert('谢谢！你的评论已提交，通过审核之后才能显示。');
                                              $("#namex").val('');
                                             $("#link").val('');
                                             $("#dfValue").val('');
                                             $("#plcontent").val('请在这里输入您的意见、建议，我们将用心倾听，不断优化产品，为您提供更优质的服务！');
                                           
                                             return true;
                                           
                                        }
                                        else {
                                            alert('Error');
                                            return false;
                                        }
                                    });
                                }
                                
                            });
                        });

                        function ajaxSubmit(url, frm, fn) {
                            var dataPara = getFormJson(frm);
                            $.ajax({
                                url: url,
                                type: 'post',
                                data: dataPara,
                                async: false,
                                dataType: 'text',
                                success: fn
                            });
                        }
                        function getFormJson(frm) {
                            var o = {};
                            var a = $(frm).serializeArray();
                            $.each(a, function () {
                                if (o[this.name] !== undefined) {
                                    if (!o[this.name].push) {
                                        o[this.name] = [o[this.name]];
                                    }
                                    o[this.name].push(this.value || '');
                                } else {
                                    o[this.name] = this.value || '';
                                }
                            });
                            return o;
                        }

                </script>

          </form>
        </div>
    </div>
    <div class="bottom">
        <?php include("public/bottom.php"); ?>

    </div>
        
</body>
</html>
