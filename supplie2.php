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
    <title>内控部邮箱 </title>
    <link href="css/style.css" type="text/css" rel="stylesheet" />
    <!--[if IE 6]>
	<script type="text/javascript" src="js/DD_belatedPNG_0.0.8a.js" ></script>
	<script type="text/javascript">
	DD_belatedPNG.fix('.index_gdm3,.index_gdm3 a,.index_pathl3,a.index_gdm4,.nav2,img,background');
	</script>
	<![endif]-->
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/My97DatePicker/WdatePicker.js"></script>
    <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" />
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.hoverIntent.minified.js"></script>
	<script type="text/javascript" src="js/jquery.naviDropDown.js"></script>
	<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
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
.iwxt{ position:absolute; width:158px; height:181px; top:30px; left:-18px; z-index:9999999; overflow:hidden; z-index:99999;}
.iwxt1{background:url(images/iweixing.jpg) no-repeat; width:158px; height:181px; position:relative;}
#weixinlogoc{right:7px; bottom:3px; width:11px; height:18px; display:block;position:absolute;}
.xgy1{ background:url("../images/xgpic7.jpg") no-repeat left; padding-left:26px; height:30px;}
.xgy1 span{ font-size:18px;}
.xgy1 a{ font-size:18px; line-height:30px; color:#3b3b3b;}
.xgy1 a:hover{ text-decoration:underline; color:#C4271E;}
</style>
</head>
<script type="text/javascript" >
	function checkFile(fileInput) {
		var filename = fileInput.value;
		var fileText = filename.substring(filename.lastIndexOf("."), filename.length); //获取文件扩展名
		fileText = fileText.toLowerCase();
		if (fileText == '.doc' || fileText == '.docx' || fileText == '.pdf' || fileText == '.zip' || fileText == '.rar') {
			document.getElementById("lab1").innerHTML = "文件已添加,上传中...请稍后...";
		}
		else {
			alert('您选择文件格式不对,只允许上传大小在10M以内的Word,Pdf,rar,zip文件！');
			document.getElementById(fileInput.id).focus();
			fileInput.outerHTML += "";
			document.getElementById("lab1").innerHTML = "请选择文件";
		}

		if (navigator.userAgent.indexOf("MSIE") != -1)//判断条件也可以改为navigator.userAgent.indexOf("MSIE")!=-1
		{
			//IE浏览器
			var vers = $.browser.version;
			if (vers != "8.0" && vers != "9.0" && vers != "10.0") {
				var image = new Image();
				image.dynsrc = fileInput.value;
				if (image.fileSize > 1048576 * 10) {
					alert('附件大小不能超过10M！（您上传的文件大小为' + Math.round((image.fileSize / 1048576) * 100) / 100 + 'MB）');
					fileInput.focus();
					fileInput.outerHTML += "";
					document.getElementById("lab1").innerHTML = "请选择文件";
					return false;
				}
				else {
					shangcc();
					return false;
				}
			}
		}
		else {
			if (fileInput.files[0].size > 1048576 * 10) {
				alert('图片大小不能超过2M！（您上传的文件大小为' + Math.round((fileInput.files[0].size / 1048576) * 100) / 100 + 'MB）');
				fileInput.focus();
				fileInput.outerHTML = fileInput.outerHTML;
				document.getElementById("lab1").innerHTML = "请选择文件";
				return false;
			}
			else {
				shangcc();
				return false;
			}
		}


	}
	function callback(msg, flag) {
		document.getElementById("FileUpload1").outerHTML += "";
		if (flag == "1") {
			document.getElementById("fujian").value = msg;
			document.getElementById("lab1").innerHTML = "已上传文件";
		} else {
			alert(msg);
			document.getElementById("FileUpload1").style.display = "";
			document.getElementById("lab1").innerHTML = "请选择文件";
		}
	}
	function shangcc() {
		document.getElementById("FileUpload1").style.display = "none";
		form1.action = 'http://www.hikvision.com:80/ashx/upjlimg.ashx';
		form1.target = 'frameFileUpload';
		form1.submit();
	}
</script>
<script type="text/javascript">
    function check() {

        if (document.getElementById("gsmc").value == "") {
            alert("公司名称不能为空!");
            document.getElementById("gsmc").focus();
            document.getElementById("gsmc").select();
            return false;
        }
        if (document.getElementById("lxr").value == "") {
            alert("联系人不能为空!");
            document.getElementById("lxr").focus();
            document.getElementById("lxr").select();
            return false;
        }

        if (document.getElementById("phone").value == "") {
            alert("电话不能为空!");
            document.getElementById("phone").focus();
            document.getElementById("phone").select();
            return false;
        }
        if (document.getElementById("phone").value != "") {
            var sRegmob = /(\(\d{3,4}\)|\d{3,4}-|\s)?\d{7,11}/;
            if (!sRegmob.test(document.getElementById("phone").value)) {
                alert("电话格式错误！");
                document.getElementById("phone").focus();
                document.getElementById("phone").select();
                return false;
            }
        }

        if (document.getElementById("yx").value == "") {
            alert("邮箱不能为空!");
            document.getElementById("yx").focus();
            document.getElementById("yx").select();
            return false;
        }
        var sReg = /[_a-zA-Z\d\-\.]+@[_a-zA-Z\d\-]+(\.[_a-zA-Z\d\-]+)+$/;
        if (!sReg.test(document.getElementById("yx").value)) {
            alert("邮箱地址错误！");
            document.getElementById("yx").focus();
            document.getElementById("yx").select();
            return false;
        }

        if (document.getElementById("sxfk").value == "") {
            alert("事项反馈不能为空!");
            document.getElementById("sxfk").focus();
            document.getElementById("sxfk").select();
            return false;
        }
        subProductForm("../ashx/email.ashx");
        return false;

    }
    function subProductForm(url) {
        ajaxSubmit(url, $('#form1'), function (txt) {
            //btnSubmit
            $("#xslayer").css("display", "block");
            if (txt == "true") {
                alert("您的申请已经提交成功！");
                $("#xslayer").css("display", "none");
                form1.reset();
                document.getElementById("fujian").value = "";
                document.getElementById("lab1").innerHTML = "请选择文件";
            }
            else if (txt == "false") {
                alert("提交失败，请重试！");
            }
            else if (txt == "false2") {
                alert("访问路径有误！");
                window.location.href = "/email_43.html";
            }
            else {
                alert(txt);
            }
        });
    }

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
<?php require("public/top.php");?>
    <div style="width: 100%; height: 1px; background: #fff; overflow: hidden;">
    </div>
    <div class="newsbody clearfix">
        <div class="newsbodyl">
            <div class="nbltop">
                
<div style="display:none">
<a href="index.html">首页</a>&nbsp;>&nbsp;<a href="zj_42.html">供应商平台</a>&nbsp;>&nbsp; <a  href="email_43.html">内控部邮箱</a> </div>
            </div>
<div class="nblnav">
   
    <a style="cursor:default">供应商平台</a>
</div>
<div class="nblnav1" ><a  href='supplie.php'>自荐</a></div><div class="nblnav1" ><a class="nblnav1oa" href='supplie2.php'>内控部邮箱</a></div>

        </div>
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

            <div class="lxwm">
                <img src="uploads/20130930025718171.JPG"
                    width="927" height="200" />
            </div>
            <form name="form1" method="post" action="email_43.html" id="form1" enctype="multipart/form-data">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKMTIxMzExOTUyNQ9kFgICBA8WAh4HZW5jdHlwZQUTbXVsdGlwYXJ0L2Zvcm0tZGF0YWRk" />

<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWBgK0/M99AvK41NQBAtSz9JcFArCBu5YNAtfvivAMAvnrrO0C" />
                <div class="zjtop" style="background: #fff;">
                    <div class="zj1">
                        内控部邮箱
                    </div>
                    <div class="zj2">
                    </div>
                    <div class="zj2" style="margin-bottom: 8px;">
                    </div>
                    <div class="dtb1">
                        为了能迅速帮您解决问题，以下信息请如实填写！
                    </div>
                    <div class="email">
                        <table border="0" bgcolor="#E3E3E3" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="115" height="34" align="right">公司名称：</td>
                                <td colspan="3">
                                    <input name="gsmc" type="text" id="gsmc" class="email1" /></td>
                            </tr>
                            <tr>
                                <td width="115" height="34" align="right">联系人：</td>
                                <td width="190">
                                    <input name="lxr" type="text" id="lxr" class="email2" /></td>
                                <td align="right" width="115">电话：</td>
                                <td width="190">
                                    <input name="phone" type="text" id="phone" class="email2" /></td>
                            </tr>
                            <tr>
                                <td width="115" height="34" align="right">邮箱：</td>
                                <td colspan="3">
                                    <input name="yx" type="text" id="yx" class="email2" /></td>
                            </tr>
                            <tr>
                                <td width="115" align="right" height="230">事项反馈：</td>
                                <td colspan="3">
                                    <textarea name="sxfk" id="sxfk" class="email4"></textarea></td>
                            </tr>
                           
                            <tr>
                                <td width="115" align="right">相关证明材料：</td>
                                <td colspan="3" align="center">
                                    <div class="zj19 clearfix" style="padding-bottom: 15px;padding-top:8px">
                                        <div class="zj19 clearfix" style="padding-left:0;">
            <span class="zj20" style="font-family:'微软雅黑';">附件：</span>
                        <input type="hidden" id="fujian" name="fujian" value=""/><input type="hidden" id="mails" name="mails" value="jubao@hikvision.com"/>
             <div style="float:left; width:70px; height:23px; overflow:hidden; position:relative;"><img src="images/zjpic2.jpg">
            <div style="position:absolute; left:0; top:0;"><input type="file" name="FileUpload1" id="FileUpload1" onChange="return checkFile(this)" name="myFile1" size="6" style="font-size:20px;width:70px; cursor:pointer; height:23px;cursor:pointer;filter:alpha(opacity=0);opacity:0;outline:none;hide-focus:expression(this.hideFocus=true); z-index:999;" /></div></div>
            <span class="zj21" style="font-family:'微软雅黑';" id="lab1">未选择文件</span><iframe id="frameFileUpload" name="frameFileUpload" style="display:none;" ></iframe>
             (如有需要可添加附件，附件格式为PDF/WORD/RAR/ZIP,小于400K)</div>
                                        </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="zj22 clearfix" style="padding-left: 290px; position:relative;">
                         <div style="width:82px; height:35px; position:absolute;left:290px;top:45px; display:none;" id="xslayer"></div>
                        <a href="javascript:void(0);"><img src="images/zjpic4.jpg" id="btnSubmit"  onclick="check();" style="border:none;"/>
                        <a href="javascript:form1.reset()"><img src="images/zjpic5.jpg"></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php require("public/bottom.php");?>
</body>
</html>
