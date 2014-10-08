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
    <title>解决方案</title>
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
	<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" />
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script> 
	<script type="text/javascript" src="js/jquery.hoverIntent.minified.js"></script> 
	<script type="text/javascript" src="js/jquery.naviDropDown.js"></script> 
	<script language="javascript" type="text/javascript" src="js/index1.js"></script>

   
    <script type="text/javascript">
        $(document).ready(function () {
            $('.jjfajsbt3 img').each(function () {
                if ($(this).attr("src").indexOf('/UploadFile/Image') >= 0)
                    $(this).attr("src", "http://www.hikvision.com/" + $(this).attr("src"));
            });
            loadMessage("96", "5","384");
            loadMessage2("96", "6","384");
        });
        function loadMessage2(item, type, id) {
            //异步获取数据
            $.ajax({
                type: "post",
                url: "ashx/jjfazjsj.ashx",
                dataType: 'text',
                data: 'stat=1&item=' + item + '&type=' + type+'&id='+id,
                success: function (data) {
                    var stringArray = data.split("|");
                    cachedate = stringArray[1];
                    $("#prc").html(cachedate);
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    $("#prc").html(textStatus + errorThrown);
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
    <style type="text/css">
.jjfajsbt3 table td {
	border: 1px solid #666;
	padding: 2px;
}
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
	display: none;
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
	color: #666;
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
	color: #666;
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
.xgte1 {
	background: none repeat scroll 0 0 #FFFFFF;
	height: 223px;
	overflow: hidden;
}
.xgte2 {
	float: left;
	height: 32px;
	padding-top: 102px;
	width: 32px;
}
.xgte3 {
	float: left;
	height: 223px;
	position: relative;
	width: 828px;
}
.xgte3 ul li {
	border-right: 1px solid #DEDEDE;
	float: left;
	height: 180px;
	margin-top: 20px;
	padding-left: 18px;
	padding-right: 18px;
	width: 170px;
}
.xgte4 {
	float: left;
	height: 32px;
	padding-top: 102px;
	width: 32px;
}
.xgte5 {
	height: 80px;
	padding-top: 24px;
	position: relative;
	width: 110px;
	padding-left: 32px;
}
.newhot {
	background: url("images/proupic1.png") no-repeat scroll 0 0 rgba(0, 0, 0, 0);
	height: 35px;
	left: 15px;
	position: absolute;
	top: -15px;
	width: 40px;
}
.newhot1 {
	background: url("images/proupic2.png") no-repeat scroll 0 0 rgba(0, 0, 0, 0);
	bottom: 0;
	height: 35px;
	position: absolute;
	right: -35px;
	width: 34px;
}
.xgte6 {
	color: #C4261D;
	font-family: "微软雅黑";
	font-size: 16px;
	line-height: 18px;
	text-align: center;
}
.xgte7 {
	color: #4F4E4E;
	font-family: "微软雅黑";
	line-height: 18px;
	padding-top: 5px;
	text-align: center;
}
.xgte8 {
	background: none repeat scroll 0 0 #FFFFFF;
	height: 223px;
	position: absolute;
	right: 0;
	top: 0;
	width: 1px;
	z-index: 999;
}
.fixed {
	position: fixed;
	top: 5px;
	z-index: 1000;
}
a.jjfajsh5oa {
	background: none repeat scroll 0 0 #D7D7C9;
	border-bottom: 4px solid #464639;
	padding-bottom: 0;
}
</style>
    </head>
    <body>
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
<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script> 
<script type="text/javascript">
    $(document).ready(function () {
        $("a[rel^='prettyPhoto']").prettyPhoto();
    });
</script>
<div class="newsbody clearfix" style="padding-top: 22px;">
      <div class="newsbodyl" style="display: none;">
    <div class="nbltop"></div>
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
	.xgy1{ background:url("images/xgpic7.jpg") no-repeat left; padding-left:26px; height:30px;}
.xgy1 span{ font-size:18px;}
.xgy1 a{ font-size:18px; line-height:30px; color:#3b3b3b;}
.xgy1 a:hover{ text-decoration:underline; color:#C4271E;}
	</style>
    <div class="nbrtop clearfix" style="padding-bottom: 11px;">
          <div class="nbrtopr clearfix" style="width: 140px; position: relative;">
        <div class="iwxt" style="display: none;">
              <div class="iwxt1"> <a id="weixinlogoc" href="javascript:void(0);"></a> </div>
            </div>
        <div  title="订阅电子报">
        <a  rel="prettyPhoto[iframesl]"  href="dingyue.php?c_kind=508&iframe=true&width=520&height=230"> 
        <img src="images/momopic.jpg"></a>
        </div>
        
        <a id="weixinlogo" href="javascript:void(0);"><img src="images/weixinlogo.jpg" /></a> 
        
        <a style="display:none;" href="#"><img src="images/youkulogo.jpg" /></a>
        <a href="http://weibo.com/hikvisionsecu" target="_blank"> <img src="images/sinalogo.jpg"></a> <span>关注我们</span> </div>
        </div>
        <?php 
								$getid = !empty($_GET['id'])?$_GET['id']:154;
								if($getid){
									$where = "and id ='".$getid."'";
								}else{
									$where = "";
								}
								$sql_scheme = "select * from yourphp_article where id!='0' ".$where." limit 0,10"; 
								//echo $sql_news;
								$resutl = mysql_query($sql_scheme);
								$obj = mysql_fetch_array($resutl);
								
								?>
    <div class="jjfajs">
          <div class="jjfajsbt"> <?php echo $obj["title"]; ?> </div>
          <div class="jjfajsbt3"> <?php echo $obj["content"]; ?> </div>
        </div>
    <div style="height: 27px; overflow: hidden;"> </div>
    <div class="xgdg10" style="width: 937px; border-left: 1px solid #DBDBD0; border-right: 1px solid #DBDBD0;
                ">
          <div class="xgdg11 clearfix"> 
          <a class="jjfajsh5oa"  href="#" style="display:none;" onmouseover="showlink(1)" id="tt1">相关产品</a>
          <a class="jjfajsh5oa" href="#"  style="" onmouseover="showlink(2)" id="tt2">最佳实践</a> </div>
        </div>
    <div class="jjfajsh clearfix" style="padding-top: 19px; padding-bottom: 5px; width: 919px;
                margin-top: 0; ">
          <div id="jjfaxs1" style="height: 232px; overflow: hidden; position: relative; width: 919px;display: none; ">
        	<div style="height: 232px;">
              <div class="xgte1 clearfix">
            <div class="xgte2"> <a href="javascript:void(0)" style="display: none; " id="prev"> <img src="images/xgtepic1.png" /></a> </div>
            <div class="xgte3" id="prc"  style="overflow: hidden;"> </div>
            <div class="xgte4"> <a id="next" style="display: none;" href="javascript:void(0)"> <img src="images/xgte2.png" /></a> </div>
          </div>
            </div>
      </div>
          <div class="prxz22" id="jjfaxs2" style="display:block;width:925px;height:217px;padding-bottom:10px;">
		  		<ul class="clearfix">
					<?php
						$typeid=$_GET['typeid'];
						$sql_zj=mysql_query("select * from yourphp_article where catid='".$typeid."' and keywords='实践'");
						while($row_zj=mysql_fetch_array($sql_zj)){
					?>
					<li class="clearfix"><a href="newshd.php?typeid=<?php echo $row_zj['id']; ?>"><?php echo $row_zj['title']; ?></a><span><?php echo date('Y-m-d',$row_zj['updatetime']); ?></span></li>
					<?php } ?>
				</ul>
		  </div>
          <script type="text/javascript">
                    function showlink(no) {
                        for (var iii = 1; iii <= 2; iii++) {
                            if (iii == no) {
                                $("#tt" + no).attr("class", "jjfajsh5oa");
                                $("#jjfaxs" + no).css("display", "block");
                            } else {
                                $("#tt" + iii).attr("class", "");
                                $("#jjfaxs" + iii).css("display", "none");
                            }
                        }
                    }
                </script> 
        </div>
    <form name="form1" method="post" action="jjfajs_96_i384.html" id="form1">
          <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUILTc3MTI5NTUPZBYCAgQPZBYCAgcPFgIeC18hSXRlbUNvdW50ZmRk" />
          <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWCAKMjfeECgLZqs/kCwKYovrCAQKGlNklAqbh0IoMAp+ettwCApvQsuwGAr/T6uQM" />
          <div class="newsxxpl" style="margin-bottom: 29px;display: none;"  >
        <div class="newsxxtck" id="zk" style="display: none;">
              <div class="newsxxtck1 clearfix"> <span>打分</span><a href="javascript:closeDiv();"></a></div>
              <div class="newsxxtck2">
            <div class="newsxxtck3 clearfix">
                  <div class="newsxxtck4">
                <input type="radio" value="5" name="dafen">
              </div>
                  <div class="clearfix"> <a class="newsxxtck3oa" href="#"></a><a class="newsxxtck3oa" href="#"></a><a class="newsxxtck3oa"
                                        href="#"></a><a class="newsxxtck3oa" href="#"></a><a class="newsxxtck3oa" href="#"></a> </div>
                  <div> 太棒了</div>
                </div>
            <div class="newsxxtck3 clearfix">
                  <div class="newsxxtck4">
                <input type="radio" value="4" name="dafen">
              </div>
                  <div class="clearfix"> <a class="newsxxtck3oa" href="#"></a><a class="newsxxtck3oa" href="#"></a><a class="newsxxtck3oa"
                                        href="#"></a><a class="newsxxtck3oa" href="#"></a><a href="#"></a> </div>
                  <div> 很好</div>
                </div>
            <div class="newsxxtck3 clearfix">
                  <div class="newsxxtck4">
                <input type="radio" value="3" name="dafen">
              </div>
                  <div class="clearfix"> <a class="newsxxtck3oa" href="#"></a><a class="newsxxtck3oa" href="#"></a><a class="newsxxtck3oa"
                                        href="#"></a><a href="#"></a><a href="#"></a> </div>
                  <div> 不错哦</div>
                </div>
            <div class="newsxxtck3 clearfix">
                  <div class="newsxxtck4">
                <input type="radio" value="2" name="dafen">
              </div>
                  <div class="clearfix"> <a class="newsxxtck3oa" href="#"></a><a class="newsxxtck3oa" href="#"></a><a href="#"> </a><a href="#"></a><a href="#"></a> </div>
                  <div> 还行吧</div>
                </div>
            <div class="newsxxtck3 clearfix">
                  <div class="newsxxtck4">
                <input type="radio" value="1" name="dafen">
              </div>
                  <div class="clearfix"> <a class="newsxxtck3oa" href="#"></a><a href="#"></a><a href="#"></a><a href="#"></a> <a href="#"></a> </div>
                  <div> 加油吧</div>
                </div>
            <div style="margin-top: 9px; height: 1px; overflow: hidden; background: #CACACA;"> </div>
            <div class="newsxxtck5">
                  <input type="submit" value="提交" id="btnSubmit" style="border: none;" />
                </div>
          </div>
            </div>
        <div class="newsxxpltop clearfix" style="position: relative; width: 905px; height: 25px;">
              <div class="newsxxpltop1"> <span>评论</span> <span style="display:none"> 分</span>
            <div id="ratyresult">
                  <p> <span id="pfshi">0</span><span id="pfge">.0</span> <span class="no">(已有
                    <label id="pfren">0</label>
                    人评分)</span></p>
                </div>
            <div id="ratyimgpanel" style="cursor: pointer; "> </div>
          </div>
              <div id="ratyhint" class="newsxxpltop2"> </div>
              <div class="newsxxpltop2" style="display: none"> <a class="newsxxpltop2oa" href="javascript:openDiv()" id="df">我要打分</a></div>
            </div>
        <div class="inicheng clearfix">
              <div class="inicheng1"> <span>昵称：</span>
            <input name="namex" type="text" id="namex" />
            <font style="color: red;
                                font-family: '宋体'; padding-left: 3px;">*</font></div>
              <div class="inicheng2"> <span>联系方式：</span>
            <input name="link" type="text" id="link" />
          </div>
              <div class="inicheng3"> 建议留下您的联系电话 或 邮箱，我们对此会严格保密!</div>
            </div>
        <div class="newsxxplnr">
              <input name="g_id" type="hidden" id="g_id" value="384" />
              <input name="type" type="hidden" id="type" value="2" />
              <input name="dfValue" type="hidden" id="dfValue" />
              <input name="lanmuid" type="hidden" id="lanmuid" value="96" />
              <textarea name="plcontent" id="plcontent" style="color: #BEBEBE; font-size: 12px; line-height: 22px;" onkeyup="javascript:checkLength(this);" onblur="if (this.value==''){ this.value='请在这里输入您的意见、建议，我们将用心倾听，不断优化产品，为您提供更优质的服务！';this.style.color='#BEBEBE';}" onfocus="if (this.value=='请在这里输入您的意见、建议，我们将用心倾听，不断优化产品，为您提供更优质的服务！') {this.value='';this.style.color='#666';}">请在这里输入您的意见、建议，我们将用心倾听，不断优化产品，为您提供更优质的服务！</textarea>
              <font
                                style="color: red; font-family: '宋体'; padding-left: 3px;">*</font> </div>
        <div class="newsxxpltj2" style="">
              <input type="submit" id="btnSave" value="">
              <span id="tishi">还能输入<font style="font-size: 18px; font-family: '微软雅黑';">120</font>个字</span> </div>
        <div class="newsxxplts" style="">
              <div> 暂无网友评论相关信息！</div>
              <span></span> </div>
        <script type="text/javascript">
                        function checkLength(which) {
                            var maxChars = 120;
                            if (which.value.length > maxChars) which.value = which.value.substring(0, maxChars);
                            var curr = maxChars - which.value.length;
                            document.getElementById("tishi").innerHTML = "还可以输入<font style=\"font-size: 18px; font-family: '微软雅黑';\">" + curr.toString() + "</font>个字";
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
                                if (name == null || name == "") {
                                    alert("你好，还没填写昵称!");
                                    $("#namex").focus();
                                    return false;

                                }
                                else if ((txcontent == null || txcontent == "" || txcontent == "请在这里输入您的意见、建议，我们将用心倾听，不断优化产品，为您提供更优质的服务！")) {
                                    alert("你好，还没选填写内容!");
                                    return false;
                                }
                                else {
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
      </div>
        </form>
  </div>
      <!--右边开始-->
      <div class="prnav5">
    <div id="float">
          
          
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
a.idzqkpic1{background:url(images/idzqkpica.png) no-repeat; padding-left:0; display:block; position:absolute; width:112px; height:44px; padding-top:82px; text-align:center; color:#fff; font-size:13px; line-height:18px; display:none; z-index:999999; left:0; top:15px;}
a.idzqkpic1:hover{ text-decoration:none; color:#fff;}

</style>
          <div class="prnav12">
        <div class="prnav13 clearfix"> <a href="javascript:void(0)"></a><span>产品搜索</span> </div>
        <form action="javascript:qwsearch4();" method="post">
              <div class="prnav14 clearfix">
            <div>
                  <input id="jjfakeynum" type="text" value="按关键字" onblur="if (this.value==''){ this.value='按关键字';}"
                onfocus="if (this.value=='按关键字') {this.value='';}" />
                </div>
            <a href="javascript:qwsearch4();">搜 索</a> </div>
            </form>
        <div class="prnav15">
              <div class="prnav16">合作联系</div>
              <div class="prnav17"><a style="cursor:text; text-decoration:none;">97317421@qq.com</a></div>
              <div class="prnav18">028-65929285</div>
              <div class="prnav16" style="padding-top: 15px; display:none;"><a href="#">联系行业代表</a></div>
              <div class="prnav16" style=" display:none;"><span style="padding-right: 4px;"> <img src="images/prjjpic1.jpg"></span><a href="#">咨询行业代表</a></div>
            </div>
        <div class="prnav22" style="border-bottom: 1px solid #DFDFDF; display:none;">
              <div class="clearfix">
            <div style="float: left;">
                  <div class="prxz6" style="float: none;"> 电子期刊</div>
                  <div class="idzqkpic"> <a href="#" class="idzqkpic1">
                    <div> 期刊名称</div>
                    </a> <img src="images/idzqkpic.jpg" width="112" height="126" /> </div>
                </div>
            <div class="prxz7 clearfix" style="padding-top: 140px;"> <a style="background: none; padding-left: 2px;" href="#"> <img src="images/prjjpic3.jpg" /></a><a style="background: none; padding-left: 0;"
                        href="#"><img src="images/prjjpic2.jpg" /></a></div>
          </div>
            </div>
        <div style="height:1px; overflow:hidden; background:#A4A4A4; margin-top:12px;"></div>
        <div style="height:1px; overflow:hidden; background:#BCBCBC; display:none;"></div>
        <div class="prxz8" style="border-bottom: 1px solid #DFDFDF; display: none;"> <img src="images/prjjpic4.jpg" width="193" height="76" /> </div>
        <div class="prxz9" style="border-bottom: 1px solid #DFDFDF; display: none;"> <a href="#">海康威视</a></div>
        <div class="prnav22" style="display: none;"> <a target="_blank" style="background:url(images/tendzqk.png) no-repeat left;" href="dzqk.aspx?stat=1&c_kind=6">电子期刊</a></div>
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
      
      <!--右边结束--> 
    </div>
<div class="bottom">
      <?php include("public/bottom.php"); ?>
    </div>
</body>
</html>
