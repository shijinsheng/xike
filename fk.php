

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="content-type" content="text/html; charset=utf-8" /><title>
	
        西科通讯科技有限公司
    
</title><meta name="keywords" content="&lt;%=Keywordsp %>" /><meta name="description" content="&lt;%=Descriptionp %>" /><link href="css/fanku.css" type="text/css" rel="stylesheet" />

    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>

</head>
<body>
    <form name="form1" method="post" action="fk.php?stat=1&amp;c_kind=2&amp;c_kind2=115&amp;c_kind3=134&amp;c_kind4=238&amp;id=&amp;type=2&amp;iframe=true&amp;width=735&amp;height=420" id="form1">
<div>
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUJNDk0OTM3NzM1ZGQ=" />
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

	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWBgL2gN/rBgKZ/cauAQKPirATAo+KtBMCj4q4EwKM/vmmDw==" />
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
                if (document.getElementById("c_title").value == null || deletespace(document.getElementById("c_title").value) == "") {
                    alert("公司名称不能为空，请重新填写");
                    document.getElementById("c_title").focus();
                    document.getElementById("c_title").select();
                    return false;
                }
                if (document.getElementById("c_name").value == null || deletespace(document.getElementById("c_name").value) == "") {
                    alert("姓名不能为空，请重新填写");
                    document.getElementById("c_name").focus();
                    document.getElementById("c_name").select();
                    return false;
                }
                if (document.getElementById("C_LIANXI").value == "" || document.getElementById("C_LIANXI").value == null) {
                    alert("电话不能为空，请重新填写");
                    document.getElementById("C_LIANXI").focus();
                    document.getElementById("C_LIANXI").select();
                    return false;
                }
                if (document.getElementById("C_LIANXI").value != "" && document.getElementById("C_LIANXI").value != null) {
                    var re2 = /^(\d{3,4}-)?\d{7,8}$/;
                    var re = /^[1][3-8]\d{9}$/;
                    var nubmer = document.getElementById("C_LIANXI").value;
                    if (!re.test(nubmer) && !re2.test(nubmer)) {
                        alert("请输入正确的联系方式！格式：13988888888或010-88888888或88888888");
                        document.getElementById("C_LIANXI").value = "";
                        document.getElementById("C_LIANXI").focus();
                        document.getElementById("C_LIANXI").select();
                        return false;
                    }
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


                if (document.getElementById("C_CONTENT").value == null || deletespace(document.getElementById("C_CONTENT").value) == "") {
                    alert("事项反馈内容不能为空，请重新填写");
                    document.getElementById("C_CONTENT").focus();
                    document.getElementById("C_CONTENT").select();
                    return false;
                }

                subProductForm("../ashx/fk.ashx?kind=416");
             
                return false;
            }
            function subProductForm(url) {
                ajaxSubmit(url, $('#form1'), function (txt) {
                    $("#tjxs").show();
                    if (txt == "true") {
                        alert("感谢您的留言，我们会尽快处理！");
                        $("#tjxs").hide();
                        form1.reset();
                        parent.$.prettyPhoto.close();
                        //parent.location.href = document.getElementById("fkmessage").value;

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
        </style>
        <div>
            <div class="dtb1">
                为了能迅速帮您解决问题，以下信息请如实填写！</div>
            <input name="fkmessage" type="hidden" id="fkmessage" value="prlb.aspx?c_kind=2&amp;c_kind2=115&amp;c_kind3=134&amp;c_kind4=238" />
               <input name="pkind3" type="hidden" id="pkind3" value="134" />
                <input name="pkind2" type="hidden" id="pkind2" value="115" />
                 <input name="pkind1" type="hidden" id="pkind1" value="2" />
            <table width="726px" border="0" cellspacing="0" cellpadding="0" style="font-family: '微软雅黑';">
                <tbody>
                    <tr>
                        <td width="113" class="labelTd">
                            <label for="rs_enterprise">
                                公司名称：</label></td>
                        <td colspan="3">
                            <input name="c_title" id="c_title" type="text" class="fan_mian_input" style="width: 400px;
                                padding: 2px;"></td>
                    </tr>
                    <tr>
                        <td class="labelTd">
                            <label>
                                联系人：</label></td>
                        <td width="248">
                            <input name="c_name" id="c_name" type="text" class="fan_mian_input" style="width: 150px;
                                padding: 2px;"></td>
                        <td width="58" class="labelTd">
                            <label>
                                电话：</label></td>
                        <td width="307">
                            <input name="C_LIANXI" id="C_LIANXI" type="text" class="fan_mian_input" style="width: 150px;
                                padding: 2px;"></td>
                    </tr>
                    <tr>
                        <td class="labelTd">
                            <label>
                                邮箱：</label></td>
                        <td colspan="3">
                            <input name="rs_email" id="rs_email" type="text" class="fan_mian_input" style="width: 200px;
                                padding: 2px;"></td>
                    </tr>
                    <tr>
                        <td class="labelTd">
                            <label>
                                事项反馈：</label></td>
                        <td colspan="3">
                            <textarea name="C_CONTENT" id="C_CONTENT" cols="65" style="width: 600px; height: 205px;"
                                rows="10"></textarea>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div style="padding-left: 220px; padding-top: 15px; position:relative;">
                 <div  id="tjxs" style="width:95px; height:34px; position:absolute;left:220px;top:14px; display:none;"></div>
                <a onclick="return check();" id="linkbutton1" href="javascript:__doPostBack('linkbutton1','')"><img src="images/tj.jpg" style="border:none;"></a>
                <a href="javascript:form1.reset();">
                    <img src="images/cz.jpg" style="border: none;"></a>
            </div>
        </div>
    </form>
</body>
</html>
