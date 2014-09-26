

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta http-equiv="content-type" content="text/html; charset=utf-8" />
   <title>光端机|光纤收发器|光纤交换机|poe交换机|工业交换机|网络摄像机-成都西科高新技术有限公司</title>
   <meta name="keywords" content="西科,成都西科,西科光端机,成都西科高新技术有限公司" />
   <meta name="description" content="西科,成都西科,西科光端机,成都西科高新技术有限公司">
   <meta name="baidu-site-verification" content="LD10I6bZyc" />
   <link href="css/fanku.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
</head>
<body>
    <form name="form1" method="post" action="dingyue.aspx?c_kind=508&amp;iframe=true&amp;width=520&amp;height=230" id="form1">
<div>
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwULLTE1NzMwNjM4NjlkZA==" />
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['form1'];
if (!theForm) {
    theForm = document.form1;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<div>

	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWAwLD1o+bCAKZ/cauAQKM/vmmDw==" />
</div>
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
                if (document.getElementById("c_name").value == null || deletespace(document.getElementById("c_name").value) == "") {
                    alert("姓名不能为空，请重新填写");
                    document.getElementById("c_name").focus();
                    document.getElementById("c_name").select();
                    return false;
                }

                if (document.getElementById("c_title").value == null || deletespace(document.getElementById("c_title").value) == "") {
                    alert("公司名称不能为空，请重新填写");
                    document.getElementById("c_title").focus();
                    document.getElementById("c_title").select();
                    return false;
                }
                
               
                if (document.getElementById("rs_email").value == "" || document.getElementById("rs_email").value == null) {
                    alert("请输入Email!");
                    document.getElementById("rs_email").focus();
                    document.getElementById("rs_email").select();
                    return false;
                }

                if (document.getElementById("rs_email").value != "" && document.getElementById("rs_email").value != null) {
                    var re3 = /^[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)+$/;

                    var nubmer = document.getElementById("rs_email").value;
                    if (!re3.test(nubmer)) {
                        alert("请输入正确的邮箱!");
                        document.getElementById("rs_email").value = "";
                        document.getElementById("rs_email").focus();
                        document.getElementById("rs_email").select();
                        return false;
                    }
                }
                subProductForm("../ashx/dingyue.ashx?kind=508");
                $(":input").attr("disabled", true);
                return false;
            }
            function subProductForm(url) {             
                ajaxSubmit(url, $('#form1'), function (txt) {
                    if (txt == "true") {
                        alert("感谢您的留言，我们会尽快处理！");
                        $(":input").removeAttr('disabled');
                        form1.reset();
                         parent.$.prettyPhoto.close();
                        //parent.location.href ="/cn/index.html" //document.getElementById("fkmessage").value;

                    }
                    else {
                        alert("留言提交失败，请重试！");
                    }

                });
            }

            //将form转为AJAX提交
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

            //将form中的值转换为键值对。
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
        <style>
            .dtb1 {
                color: #ff6600;
                font-weight: bold;
                line-height: 20px;
                font-size: 12px;
                padding-top: 5px;
                padding-bottom: 5px;
            }

            .labelTd {
                font-size: 12px;
                color: #666;
            }
			td{ border:none;}
			.labelTd{ width:60px;}
        </style>
        <div>
            <div class="dtb1" style="padding-bottom:6px; padding-left:20px; border-bottom:1px solid #BEBEBE; margin-bottom:12px;">订阅电子报<font style="color:#666;">（为了使你获得更好的服务，请你仔细填写以下信息）</font>
</div>
            <input name="fkmessage" type="hidden" id="fkmessage" />
			<div style="padding-left:20px;">
            <table width="620px" border="0" cellspacing="0" cellpadding="0" style="font-family: '微软雅黑';">
                <tbody>
                    <tr>
                        <td width="60" class="labelTd" align="right">
                            <label for="rs_enterprise">姓名：</label></td>
                        <td colspan="3">
                            <input name="c_name" id="c_name" type="text" class="fan_mian_input" style="width: 160px; padding: 2px; height:20px;"></td>
                    </tr>
                    <tr>
                        <td class="labelTd" align="right">
                            <label>公司名称：</label></td>
                        <td width="248" colspan="3">
                            <input name="c_title" id="c_title" type="text" class="fan_mian_input" style="width: 250px; padding: 2px;height:20px;"></td>
                       
                    </tr>
                    <tr>
                        <td class="labelTd" align="right">
                            <label>邮箱：</label></td>
                        <td colspan="3">
                            <input name="rs_email" id="rs_email" type="text" class="fan_mian_input" style="width: 250px; padding: 2px; height:20px;"></td>
                    </tr>
                  
                </tbody>
            </table>
			</div>
            <div style="padding-left: 110px; padding-top: 15px;">
                <a onclick="return check();" id="linkbutton1" href="javascript:__doPostBack('linkbutton1','')"><img src="images/tj.jpg" style="border:none;"></a>
                <a href="javascript:form1.reset();">
                    <img src="images/cz.jpg" style="border: none;"></a>
            </div>
        </div>
    </form>
</body>
</html>
