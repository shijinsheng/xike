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
    <!--[if IE 6]>
<script type="text/javascript" src="js/DD_belatedPNG_0.0.8a.js" ></script>
<script type="text/javascript">
DD_belatedPNG.fix('.index_gdm3,.index_gdm3 a,.index_pathl3,a.index_gdm4,.nav2,img,background');
</script>
<![endif]-->

    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/My97DatePicker/WdatePicker.js"></script>
    <script type="text/javascript" src="js/pcasunzip.js"></script>
    <script type="text/javascript" >
        function checkFile(fileInput) {
            var filename = fileInput.value;
            var fileText = filename.substring(filename.lastIndexOf("."), filename.length); //获取文件扩展名
            fileText = fileText.toLowerCase();
            if (fileText == '.doc' || fileText == '.docx' || fileText == '.pdf' || fileText == '.zip' || fileText == '.rar') {
                document.getElementById("lab1").innerHTML = "文件已添加.上传中...请稍后...";
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
                        function deletespace(string) {
                            var temp = "";
                            string = '' + string;
                            splitstring = string.split(" ");
                            for (i = 0; i < splitstring.length; i++)
                                temp += splitstring[i];
                            return temp;
                        }

                        function check() {

                            var fzvalue = $("#rs_enterprise").val();
                            var rs_establishdate = $("#rs_establishdate").val();
                            var pu=document.getElementById("Province");
                            if (fzvalue == null || fzvalue == "") {
                                alert("请输入公司名称!");
                                $("#rs_enterprise").focus();
                                $("#rs_enterprise").select();
                                return false;
                            }
                            if ($("#rs_establishdate").val() == null || $("#rs_establishdate").val() == "") {
                                alert("请输入成立时间!");
                                $("#rs_establishdate").focus();
                                $("#rs_establishdate").select();
                                return false;
                            }
                             if (pu.options[pu.selectedIndex].value== null || pu.options[pu.selectedIndex].value == "") {
                                alert("请选择所在城市!");
                                $("#Province").focus();
                                $("#Province").select();
                                return false;
                            }
                             if ($("#rs_products").val() == null || $("#rs_products").val() == "") {
                                alert("请输入拟合作产品!");
                                $("#rs_products").focus();
                                $("#rs_products").select();
                                return false;
                            }
                           
                            if ($("#rs_factory1").val() == null || $("#rs_factory1").val() == "") {
                                alert("请输入工厂1!");
                                $("#rs_factory1").focus();
                                $("#rs_factory1").select();
                                return false;
                            }
                            if ($("#rs_approve").val() == null || $("#rs_approve").val() == "") {
                                alert("请输入体系认证情况!");
                                $("#rs_approve").focus();
                                $("#rs_approve").select();
                                return false;
                            }
                            if ($("#rs_patent").val() == null || $("#rs_patent").val() == "") {
                                alert("请输入拥有专利情况!");
                                $("#rs_patent").focus();
                                $("#rs_patent").select();
                                return false;
                            }
                            if ($("#rs_yuechanneng").val() == null || $("#rs_yuechanneng").val() == "") {
                                alert("请输入拟合作产品月产能!");
                                $("#rs_yuechanneng").focus();
                                $("#rs_yuechanneng").select();
                                return false;
                            }
                            if ($("#rs_nianchanzhi").val() == null || $("#rs_nianchanzhi").val() == "") {
                                alert("请输入企业年产值!");
                                $("#rs_nianchanzhi").focus();
                                $("#rs_nianchanzhi").select();
                                return false;

                            }
                            if ($("#rs_ninianchanzhi").val() == null || $("#rs_ninianchanzhi").val() == "") {
                                alert("请输入拟合作产品月产值!");
                                $("#rs_ninianchanzhi").focus();
                                $("#rs_ninianchanzhi").select();
                                return false;
                            }
                            if ($("#rs_kehuquan").val() == null || $("#rs_kehuquan").val() == "") {
                                alert("请输入主要客户群!");
                                $("#rs_kehuquan").focus();
                                $("#rs_kehuquan").select();
                                return false;
                            }
                            if ($("#rs_contact").val() == null || $("#rs_contact").val() == "") {
                                alert("请输入联系人!");
                                $("#rs_contact").focus();
                                $("#rs_contact").select();
                                return false;
                            }
                            if ($("#rs_position").val() == null || $("#rs_position").val() == "") {
                                alert("请输入职位!");
                                $("#rs_position").focus();
                                $("#rs_position").select();
                                return false;
                            }
                            if ($("#rs_phone").val() == null || $("#rs_phone").val() == "") {
                                alert("请输入电话!");
                                $("#rs_phone").focus();
                                $("#rs_phone").select();
                                return false;
                            }
               
                            if (!(/^(\d{3,4}-)?\d{7,8}$/.test(document.getElementById("rs_phone").value))) {
                                alert("请输入电话号码 格式：010-88888888或88888888");
                                document.getElementById("rs_phone").focus();
                                document.getElementById("rs_phone").select();
                                return false;
                            }
                            if ($("#rs_mobile").val() == null || $("#rs_mobile").val() == "") {
                                alert("请输入手机!");
                                $("#rs_mobile").focus();
                                $("#rs_mobile").select();
                                return false;
                            }
                            if (!(/^[1][3-8]\d{9}$/.test($("#rs_mobile").val()))) {
                                alert("请输入手机号码 格式：13988888888");
                                $("#rs_mobile").focus();
                                $("#rs_mobile").select();
                                return false;
                            }
                            if ($("#rs_email").val() == null || $("#rs_email").val() == "") {
                                alert("请输入Email!");
                                $("#rs_email").focus();
                                $("#rs_email").select();
                                return false;
                            }
                            if (!(/^[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)+$/.test($("#rs_email").val()))) {
                                alert("请输入正确的邮箱!");
                                $("#rs_email").focus();
                                $("#rs_email").select();
                                return false;
                            }

                            subProductForm("../ashx/zj.ashx");
                           
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
                window.location.href = "/zj_42.html";
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
<?php require("public/top.php");?>
<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $("a[rel^='prettyPhoto']").prettyPhoto();
    });
</script>

    
    <div style="width: 100%; height: 1px; background: #fff; overflow: hidden;">
    </div>
    <div class="newsbody clearfix">
        <div class="newsbodyl">
            <div class="nbltop">
                
<div style="display:none">
<a href="index.html">首页</a>&nbsp;>&nbsp;<a href="zj_42.html">供应商平台</a>&nbsp;>&nbsp; <a  href="zj_42.html">自荐</a> </div>


 
            </div>
            

<div class="nblnav">
   
    <a style="cursor:default">供应商平台</a>
</div>
<div class="nblnav1" ><a class="nblnav1oa" href='supplie.php'>自荐</a></div><div class="nblnav1" ><a  href='supplie2.php'>内控部邮箱</a></div>

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
                <img src="images/20130930025718171.JPG" width="927" height="200" />
            </div>
            <form name="form1" method="post" action="zj_42.html" id="form1" enctype="multipart/form-data">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKLTE3MDU2NDYxMA9kFgICBA8WAh4HZW5jdHlwZQUTbXVsdGlwYXJ0L2Zvcm0tZGF0YWRk" />

<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWGgKcquljAont6dcOAsbSpN4KAtXh5OEJAqOGuNcIAvCC77QEAvSw5Z8JAubFu5sCApuR2mICmPWG4QcCs96k9gECzsfCiwwCi9OUhAoCg8qriwkCzvrfmwUC3pf+zw0CvcueiAIC/b7qxAwCje690AcC58fg3wIC5ZPOlAcCs5/ckAsCoruYpwkCg82rvwgCuu7OkwgCyey6oA4=" />
                <div class="zjtop">
                    <div class="zj1">
                        供应商自荐</div>
                    <div class="zj2">
                    </div>
                    <div class="zj2" style="margin-bottom: 8px;">
                    </div>
                    <div class="zj3">
                        <div class="zj4">
                            基本情况</div>
                        <div class="zj5 clearfix">
                            <div class="zj6 clearfix">
                                <span>公司名称:</span><div>
                                    <input name="rs_enterprise" type="text" id="rs_enterprise" /></div>
                            </div>
                            <div class="zj7 clearfix">
                                <span>成立时间:</span><div>
                                    <input name="rs_establishdate" type="text" id="rs_establishdate" /></div>
                            </div>
                        </div>
                        <div class="zj5 clearfix">
                            <div class="zj8 clearfix">
                                <span>所在城市:</span><div>
                                    <select name="Province" id="Province">
</select>
                                    <select name="City" id="City">
</select>
                                    <select name="Area" id="Area">
</select>
                                </div>
                            </div>
                            <div class="zj9 clearfix">
                                <span>入安防行业年限:</span><div>
                                    <select id="rs_year" name="rs_year" >
                                        
                                        <option value="0">
                                            0
                                        </option>
                                        
                                        <option value="1">
                                            1
                                        </option>
                                        
                                        <option value="2">
                                            2
                                        </option>
                                        
                                        <option value="3">
                                            3
                                        </option>
                                        
                                        <option value="4">
                                            4
                                        </option>
                                        
                                        <option value="5">
                                            5
                                        </option>
                                        
                                        <option value="6">
                                            6
                                        </option>
                                        
                                        <option value="7">
                                            7
                                        </option>
                                        
                                        <option value="8">
                                            8
                                        </option>
                                        
                                        <option value="9">
                                            9
                                        </option>
                                        
                                        <option value="10">
                                            10
                                        </option>
                                        
                                        <option value="11">
                                            11
                                        </option>
                                        
                                        <option value="12">
                                            12
                                        </option>
                                        
                                        <option value="13">
                                            13
                                        </option>
                                        
                                        <option value="14">
                                            14
                                        </option>
                                        
                                        <option value="15">
                                            15
                                        </option>
                                        
                                        <option value="16">
                                            16
                                        </option>
                                        
                                        <option value="17">
                                            17
                                        </option>
                                        
                                        <option value="18">
                                            18
                                        </option>
                                        
                                        <option value="19">
                                            19
                                        </option>
                                        
                                        <option value="20">
                                            20
                                        </option>
                                        
                                        <option value="21">
                                            21
                                        </option>
                                        
                                        <option value="22">
                                            22
                                        </option>
                                        
                                        <option value="23">
                                            23
                                        </option>
                                        
                                        <option value="24">
                                            24
                                        </option>
                                        
                                        <option value="25">
                                            25
                                        </option>
                                        
                                        <option value="26">
                                            26
                                        </option>
                                        
                                        <option value="27">
                                            27
                                        </option>
                                        
                                        <option value="28">
                                            28
                                        </option>
                                        
                                        <option value="29">
                                            29
                                        </option>
                                        
                                        <option value="30">
                                            30
                                        </option>
                                        
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="zj5 clearfix">
                            <div class="zj10 clearfix">
                                <span>企业性质:</span><div>
                                    <input name="rs_kind" type="text" id="rs_kind" /></div>
                            </div>
                            <div class="zj11 clearfix">
                                <span>公司网站:</span><div>
                                    <input name="rs_web" type="text" id="rs_web" /></div>
                            </div>
                        </div>
                        <div class="zj12">
                        </div>
                        <div class="zj13">
                        </div>
                    </div>
                    <div class="zj3">
                        <div class="zj4">
                            竞争力</div>
                        <div class="zj14 clearfix">
                            <span>拟合作产品:</span><div>
                                <input name="rs_products" type="text" id="rs_products" /></div>
                        </div>
                        <div class="zj15">
                            工厂分布及规模（每个工厂的所在地、面积、人数、主做产品）：</div>
                        <div class="zj16 clearfix">
                            <div class="zj17 clearfix">
                                <span style="padding-right: 18px; padding-left: 28px;">工厂1:</span><div>
                                    <input name="rs_factory1" type="text" id="rs_factory1" /></div>
                            </div>
                            <div class="zj18 clearfix">
                                <span>工厂2:</span><div style="background: none;">
                                    <input name="rs_factory2" type="text" id="rs_factory2" /></div>
                            </div>
                        </div>
                        <div class="zj16 clearfix">
                            <div class="zj17 clearfix">
                                <span style="padding-right: 18px; padding-left: 28px;">工厂3:</span><div style="background: none;">
                                    <input name="rs_factory3" type="text" id="rs_factory3" /></div>
                            </div>
                        </div>
                        <div class="zj16 clearfix">
                            <div class="zj17 clearfix">
                                <span style="padding-right: 6px;">体系认证情况:</span><div>
                                    <input name="rs_approve" type="text" id="rs_approve" /></div>
                            </div>
                        </div>
                        <div class="zj16 clearfix">
                            <div class="zj17 clearfix">
                                <span style="padding-right: 6px;">拥有专利情况:</span><div>
                                    <input name="rs_patent" type="text" id="rs_patent" /></div>
                            </div>
                        </div>
                        <div class="zj5 clearfix">
                            <div class="zj8 clearfix">
                                <span style="padding-left: 25px; padding-right: 6px;">模具能力:</span><div style="background: none;">
                                    <select name="rs_mould" id="rs_mould">
	<option value="外包">外包</option>
	<option value="自主">自主</option>
</select>
                                </div>
                            </div>
                        </div>
                        <div class="zj14 clearfix">
                            <span>拟合作产品月产能:</span><div>
                                <input name="rs_yuechanneng" type="text" id="rs_yuechanneng" /></div>
                        </div>
                        <div class="zj16 clearfix">
                            <div class="zj17 clearfix" style="padding-right: 5px;">
                                <span style="padding-right: 18px; padding-left: 37px;">企业年产值:</span><div>
                                    <input name="rs_nianchanzhi" type="text" id="rs_nianchanzhi" style="width: 118px;" /></div>
                            </div>
                            <div class="zj18 clearfix">
                                <span style="padding-right: 5px;">其中出口比例：</span><div style="background: none;">
                                    <input name="rs_chukou" type="text" id="rs_chukou" style="width: 104px;" /></div>
                            </div>
                        </div>
                        <div class="zj16 clearfix">
                            <div class="zj17 clearfix" style="padding-left: 5px;">
                                <span>拟合作产品月产值:</span><div>
                                    <input name="rs_ninianchanzhi" type="text" id="rs_ninianchanzhi" /></div>
                            </div>
                        </div>
                        <div class="zj16 clearfix">
                            <div class="zj17 clearfix">
                                <span style="padding-left: 41px;">主要客户群:</span><div>
                                    <input name="rs_kehuquan" type="text" id="rs_kehuquan" /></div>
                            </div>
                        </div>
                        <div class="zj16 clearfix">
                            <div class="zj17 clearfix">
                                <span style="padding-right: 8px;">行业、区域排名情况:</span><div style="background: none;">
                                    <input name="rs_paiming" type="text" id="rs_paiming" /></div>
                            </div>
                        </div>
                        <div class="zj12">
                        </div>
                        <div class="zj13">
                        </div>
                        <div class="zj3">
                            <div class="zj4">
                                联络</div>
                            <div class="zj14 clearfix">
                                <span>联系人:</span><div>
                                    <input name="rs_contact" type="text" id="rs_contact" /></div>
                            </div>
                            <div class="zj14 clearfix">
                                <span style="padding-right: 27px;">职位:</span><div>
                                    <input name="rs_position" type="text" id="rs_position" /></div>
                            </div>
                            <div class="zj14 clearfix">
                                <span style="padding-right: 27px;">电话:</span><div>
                                    <input name="rs_phone" type="text" id="rs_phone" /></div>
                            </div>
                            <div class="zj14 clearfix">
                                <span style="padding-right: 27px;">手机:</span><div>
                                    <input name="rs_mobile" type="text" id="rs_mobile" /></div>
                            </div>
                            <div class="zj14 clearfix">
                                <span style="padding-right: 20px;">Email:</span><div>
                                    <input name="rs_email" type="text" id="rs_email" /></div>
                            </div>
                            <div class="zj12">
                            </div>
                            <div class="zj13">
                            </div>
                        </div>
                    </div>
                    <div class="zj19 clearfix" style="height:43px;"><div class="zj19 clearfix" style="padding-left:0;">
            <span class="zj20" style="font-family:'微软雅黑';">附件：</span>
                        <input type="hidden" id="fujian" name="fujian" value=""/><input type="hidden" id="mails" name="mails" value="sourcing@hikvision.com"/>
             <div style="float:left; width:70px; height:23px; overflow:hidden; position:relative;"><img src="images/zjpic2.jpg">
            <div style="position:absolute; left:0; top:0;">
            <input type="file" name="FileUpload1" id="FileUpload1" onChange="return checkFile(this)" name="myFile1" size="6" style="font-size:20px;width:70px; cursor:pointer; height:23px;cursor:pointer;filter:alpha(opacity=0);opacity:0;outline:none;hide-focus:expression(this.hideFocus=true); z-index:999;" />
            </div></div>
            <span class="zj21" style="font-family:'微软雅黑';" id="lab1">未选择文件</span><iframe id="frameFileUpload" name="frameFileUpload" style="display:none;" ></iframe>
             (如有需要可添加附件，附件格式为PDF/WORD/RAR/ZIP,小于400K)</div></div>
                    <div class="zj22 clearfix" style="position:relative; padding-top:15px;">
                        <div style="width:82px; height:35px; position:absolute;left:13px;top:45px; display:none;" id="xslayer"></div>
                        <a href="javascript:void(0);"><img src="images/zjpic4.jpg" id="btnSubmit"  onclick="check();" style="border:none;"/>
                            </a><a href="javascript:form1.reset()"><img src="images/zjpic5.jpg"></a></div>
                </div>
            </form>
        </div>
    </div>

    <script language="javascript">
        //省市区
        new PCAS("Province","City","Area");
    </script>
<div class="bottom"><?php require("public/bottom.php");?></div>
</body>
</html>
