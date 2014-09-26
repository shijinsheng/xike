<?php
require_once('./mydb/db.php');
require_once('./mydb/Paging.php');
$db=new DB();
$id=$_GET['id'];
$imageid=$_GET['pid'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="西科,成都西科,西科光端机,成都西科高新技术有限公司" />
<meta name="description" content="西科,成都西科,西科光端机,成都西科高新技术有限公司">
<meta name="baidu-site-verification" content="LD10I6bZyc" />
<title></title>
<!--[if IE 6]>
<script type="text/javascript" src="js/DD_belatedPNG_0.0.8a.js" ></script>
<script type="text/javascript">
DD_belatedPNG.fix('.index_gdm3,.index_gdm3 a,.index_pathl3,a.index_gdm4,.nav2,img,background');
</script>
<![endif]-->
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<link rel="stylesheet" href="../css/prettyPhoto.css" type="text/css" />
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.hoverIntent.minified.js"></script>
<script type="text/javascript" src="js/jquery.naviDropDown.js"></script>
<link href="css/xgstyle3.css" type="text/css" rel="stylesheet" />
<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function () {
        $('#navigation_horiz').naviDropDown({
        
        });
		var cTitle=$('.nbrtopl').children().text();
		$(document).attr('title',cTitle);
    });
</script>
<script type="text/javascript">
	 function sk2(dom) {
		 $.ajax({
			 url: "localhost/admin.php?type=" + dom,
			 success: function (context) {
				 $('#getinfo').html("");
				 var htmlxs = "";
				 htmlxs += " <div class=\"lxwm11\">";
				 htmlxs += context + "</div>";
				 $('#getinfo').html(htmlxs);
			 }
		 });
	 }
</script>
<script type="text/javascript">
	var cachedate="";
	var content1="";
	var content2="";
	var content3="";
	var content4="";
	var content5="";
	var content6="";
	var content7="";
	var content8="";
	var content9="";
	var mesf="";
	var content2="";
	$(function(){
		getMessage2(2419,'2');
		mesf=$("#message").html();
	   
		content3=$("#xz").html();
		cachedate=$("#bigmessage").html();
		content5=$("#yp").html();
		content9=$("#syt").html();
		content6=$("#c_info_content1").html();
		content7=$("#c_info_content2").html();
		content8=$("#c_info_content3").html();
		$(".prgs img").each(function () {
			if (($(this).attr("src").indexOf('/UploadFile/Image') >= 0) && ($(this).attr("src").indexOf('http://') < 0) )
				$(this).attr("src", "http://www.hikvision.com/" + $(this).attr("src"));
		});
		
		$(".prgs span").each(function () {
			if (($(this).css("font-size").indexOf('3px') > 0) || ($(this).css("font-size").indexOf('2px') > 0)|| ($(this).css("font-size").indexOf('7.5pt') < 0) )
				$(this).css("font-size", "12px");
		});
		  $(".prgs span").each(function () {
			if ($(this).css("width").indexOf('796pt') > 0)
				$(this).css("width", "876px");
		});
	})
	window.onload = function() {
		$("#glxx1").show();
		$("#glxx2").show();
		$("#glxx3").show();
		$("#glxx4").show();
		$("#glxx5").show();
		$("#glxx6").show();
		$("#glxx7").show();
		$("#glxx8").show();
	}; 
</script>
<style type="text/css">
.newsxxpltop2 {float: none;padding: 0;}
#ratyhint {position: absolute;left: 73px;top: -20px;}
#ratyresult {position: absolute;left: 175px;top: -30px;display: none;}
#ratyresult p {border: none;color: #666666;float: left;width: 110px;margin: 0;padding: 0;}
#ratyresult #pfshi {font-size: 32px;font-weight: bold;line-height: 28px;}
#ratyresult p span {color: #FF6600;font-family: Arial;font-style: italic;}
#ratyresult #pfshi {font-size: 32px;font-weight: bold;line-height: 28px;}
#ratyresult p span {color: #FF6600;font-family: Arial;font-style: italic;}
#ratyresult span {display: block;float: left;padding-left: 10px;padding-top: 10px;}
#ratyresult #pfge {font-size: 18px;line-height: 22px;}
#ratyresult p span.no {clear: both;color: #666666;font-size: 12px;font-style: normal;width: 110px;}
.inicheng {padding-top: 5px;height: 24px;padding-bottom: 10px;}
.inicheng1 {float: left;}
.inicheng1 span {color: #666;}
.inicheng1 input {width: 100px;height: 18px;line-height: 18px;color: #666;font-size: 12px;border: 1px solid #ECECEC;}
.inicheng2 {float: left;padding-left: 10px;}
.inicheng2 span {color: #666;}
.inicheng2 input {width: 150px;height: 18px;line-height: 18px;color: #666;font-size: 12px;border: 1px solid #ECECEC;}
.inicheng3 {float: left;color: #BEBEBE;line-height: 22px;padding-left: 15px;height: 22px;line-height: 30px;overflow: hidden;}
.nbrtop {width: 912px;}
.prgs ul li {line-height: 22px;}
.prdltop10 {}
.prdltop10 a {border-bottom: none;}
#cs2 table{background:#e3e3e3;border-left:1px solid #e3e3e3;border-bottom:1px solid #e3e3e3;border-right:1px solid #e3e3e3;}
#cs2 table tr td{padding-left: 5px; border-right:1px solid #DEDEDE;border-top:1px solid #DEDEDE;padding-top: 0;text-align:center;border-left:1px solid #DEDEDE;}
.prcs2 p{padding-left:25px;}
</style>

<script type="text/javascript" language="javascript">
	function deletespace(string) {
		var temp = "";
		string = '' + string;
		splitstring = string.split(" ");
		for (i = 0; i < splitstring.length; i++)
			temp += splitstring[i];
		return temp;
	}
	function getMessage(id, type) {
		//异步获取数据
		var tt="";
		if(type==4)
		{
			var html2 = $("#bigmessage").html();
			if (html2.length > 0) {
				$("#message").empty();tt="";
				tt += "<div class=\"prgs\"  style=\"color:#333;\" >";
				tt +=html2+"</div>";
			   
				$("#message").html(tt);
				shezhupic();
			}
			else
			{
				tt += "<div class=\"prgs\"  style=\"color:#333;\" >";
				tt +="无相关数据</div>";
				$("#message").html(tt);
			}
		}
		else  if(type==1)
		{
			if(mesf.length>0)
			{
				$("#message").html('');tt="";
				tt += mesf ;
				$("#message").html(tt);
				shezhupic();

			}
			else
			{
				//getdate(id, type);

			}

		}
		else  if(type==2)
		{
			if(content2.length>0)
			{
				$("#message").empty();tt="";
				tt += "<div class=\"prcs\" id=\"content\" >" + content2 ;
				tt +="</div>";
				$("#message").html(tt);
				shezhupic();

			}
			else
			{

			   // getdate(id, type);

			}

		}
		else  if(type==3)
		{
			if(content3.length>0)
			{
				$("#message").empty();tt="";
				tt +="<div style=\"padding-top: 7px;\" class=\"jjfany8\">"
				tt +="<div style=\"padding-left: 7px; padding-top: 0;\" class=\"jjfany10\">"
				tt +="<ul class=\"clearfix\">"
				tt += content3;
				tt +="</ul>"
				tt +="</div>"
				tt +="</div>"
				$("#message").html(tt);
				shezhupic();

			}
			else
			{
				//getdate(id, type);

			}

		}
		else  if(type==5)
		{
			if(content5.length>0)
			{
				$("#message").empty();tt="";
				 tt += "<div class=\"prgs\"  style=\"color:#333;\" >" +content5;
				 tt +="</div>";
				$("#message").html(tt);
				shezhupic();
			}
			else
			{
				//getdate(id, type);

			}

		}
		else  if(type==6)
		{
			if(content6.length>0)
			{
				$("#message").empty();tt="";
				 tt += "<div class=\"prgs\"  style=\"color:#333;\" >" +content6;
				 tt +="</div>";
				$("#message").html(tt);
				shezhupic();
			}
			else
			{
				//getdate(id, type);

			}

		}
		else  if(type==7)
		{
			if(content7.length>0)
			{
				$("#message").empty();tt="";
				 tt += "<div class=\"prgs\"  style=\"color:#333;\" >" +content7;
				 tt +="</div>";
				$("#message").html(tt);
				shezhupic();
			}
			else
			{
				//getdate(id, type);
			}

		}
		else  if(type==8)
		{
			if(content8.length>0)
			{
				$("#message").empty();tt="";
				 tt += "<div class=\"prgs\"  style=\"color:#333;\" >" +content8;
				 tt +="</div>";
				$("#message").html(tt);
				shezhupic();
			}
			else
			{
				//getdate(id, type);
			}

		}
		else  if(type==9)
		{
			if(content9.length>0)
			{
				$("#message").empty();tt="";
				 tt += "<div class=\"prgs\"  style=\"color:#333;\" >" +content9;
				 tt +="</div>";
				$("#message").html(tt);
				shezhupic();
			}
			else
			{
				//getdate(id, type);
			}

		}
		else
		{
			getdate(id, type);
		}
		

	} 

	function getdate(id, type)
		{
			$.ajax({ 
				type: "post", 
				url: "../ashx/message.ashx",
				dataType: 'text', 
				data: 'stat=1&item=' + id + '&type=' + type,
				success: function (data) {
					$("#message").empty();
					var html = "";
					var stringArray = data.split("|");
					switch(type)
					{
						case 1:
							html += "<div class=\"prgs\"  style=\"color:#333;\" >" + stringArray[1];
							html +="</div>"
							content1=stringArray[1];

							break;
						case 2:
							html += " <div class=\"prcs\" id=\"content\">" + stringArray[1];
							html +="</div>"
							content2=stringArray[1];
							break;
						case 3:
							html +="<div style=\"padding-top: 7px;\" class=\"jjfany8\">"
							html +="<div style=\"padding-left: 7px; padding-top: 0;\" class=\"jjfany10\">"
							html +="<ul class=\"clearfix\">"
							html += stringArray[1];
							html +="</ul>"
							html +="</div>"
							html +="</div>"
							content3=stringArray[1];
							break;
						case 4:
							if (cachedate.length > 0) {
								html += "<div class=\"prgs\"  style=\"color:#333;\" >" + cachedate ;
								html +="</div>"
							}
							else
							{
								html += "<div class=\"prgs\"  style=\"color:#333;\" >";
								html +="无相关数据</div>";
							}
							content4=stringArray[1];
							break;
						default:
							html += "<div class=\"prgs\"  style=\"color:#333;\" >" + stringArray[1];
							html +="</div>";
							break;
				  
					}
			
					$("#message").html(html);
					shezhupic();

				},
				error: function (XMLHttpRequest, textStatus, errorThrown) {
					$("#message").html(textStatus + errorThrown);
				}
			});
		}

	function getMessage2(id, type) {
			//异步获取数据
			$.ajax({ 
				type: "post", 
				url: "../ashx/message.ashx", 
				dataType: 'text', 
				data: 'stat=1&item=' + id + '&type=' + type,
				success: function (data) {
					var stringArray = data.split("|");
				  content2=stringArray[1];
					$("#canshulists").html(stringArray[1]);
				},
				error: function (XMLHttpRequest, textStatus, errorThrown) {
					$("#canshulists").html(textStatus + errorThrown);
				}
			});
		
		}
	function getCans(item1, tt) {
			//异步获取数据
			$.ajax({ 
				type: "post", 
				url: "../ashx/canshu.ashx", 
				dataType: 'text', 
				data: 'item1=' + item1 + '&tt=' + tt,
				success: function (data) {
					$("#cs1").empty();
					var html = "";
					var stringArray = data.split("|");
					html += "<table width=\"100%\" border=\"0\" style=\"border-left:1px solid #e3e3e3;border-bottom:1px solid #e3e3e3\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#e3e3e3\">";
					html += "<tbody>";
					html += stringArray[1];
					html += "</tbody>";
					html += "</table>";
					$("#cs1").html(html);

				},
				error: function (XMLHttpRequest, textStatus, errorThrown) {
					$("#cs1").empty();
					$("#cs1").html(textStatus + errorThrown);
				}
			});

		}
	function shezhupic()
		{
			$(".prgs img").each(function () {

				if (($(this).attr("src").indexOf('/UploadFile/Image') >= 0) && ($(this).attr("src").indexOf('http://') < 0) )
					$(this).attr("src", "http://www.hikvision.com/" + $(this).attr("src"));

		   
			});
		
			$(".prgs span").each(function () {
				if (($(this).css("font-size").indexOf('3px') > 0) || ($(this).css("font-size").indexOf('2px') > 0)|| ($(this).css("font-size").indexOf('7.5pt') < 0) )
					$(this).css("font-size", "12px");
			});
			 $(".prgs span").each(function() {
			if ($(this).css("width").indexOf('796pt') > 0)
				$(this).css("width", "876px");
		});
	  }
    </script>
</head>
<body>
<style type="text/css">.indexpf4 a {background-image: none;height: auto;width: auto;}
.indexpf4 a:hover {background: none;height: auto;width: auto;}
.indexpf3 ul li a {background-image: none;height: auto;width: auto;}
.indexpf3 ul li a:hover {background-image: none;height: auto;width: auto;}
.yuyan{ float:right; width:185px; height:20px; z-index:1001;}
.yuyan1{ width:175px; height:20px; background:url(images/xl_03.jpg) no-repeat; padding-left:10px; line-height:20px; color:#333; cursor:pointer; font-size:11px; font-family:Verdana; position:relative; z-index:1001;}
.yuyan2{ position:absolute; top:19px; left:0; width:183px; border:1px solid #C4BDAA;z-index:1001; background:#fff; padding-bottom:6px; display:none;}
.yuyan2 ul li{  float:left; width:183px; height:20px; line-height:20px;}
.yuyan2 ul li a{padding:3px 0 0 8px; color:#333; display:block; width:175px;font-family:Verdana;}
.yuyan2 ul li a:hover{ background:#EBEBEB;}
</style>
<?php 
require("public/top.php");
$image=mysql_query("select * from yourphp_product where id='".$id."'");
$row_image=mysql_fetch_assoc($image);
$parent=mysql_query("select * from yourphp_category where id='".$imageid."'");
$row_parent=mysql_fetch_assoc($parent);
 ?>
<script type="text/javascript">
    $(document).ready(function () {
        $("a[rel^='prettyPhoto']").prettyPhoto();
    });
</script>

    
    <div style="width: 100%; height: 1px; background: #fff; overflow: hidden;"></div>
    <div class="newsbody clearfix" style="padding-top: 22px;">
    <?php include("public/pleft_child.php"); ?>
      <div class="newsbodyr" style="float: right; width: 912px;">
  <div class="nbrtop clearfix">
    <div class="nbrtopl">
        <a style="font-size: 14px; font-family: '微软雅黑';cursor:text;"><?php echo $row_parent['catname']; ?> </a>
    </div>
    <form action="javascript:prsera4();" method="post">
    <div class="prdltop clearfix">
        <a class="prdltop1" target="_blank" href="http://service.weibo.com/share/share.php?url=http%3A%2F%2Fwww.hikvision.com%2Fcn%2FProducts_show.asp%3Fid%3D5031%26showid%3D1&appkey=3797775739&title=&pic=&ralateUid=&language=">分享</a>
        <a class="prdltop2" href="fk.php?stat=1&c_kind=2&c_kind2=114&c_kind3=128&c_kind4=168&id=2419&type=2&iframe=true&width=735&height=420"  rel="prettyPhoto[iframesl]">反馈</a>
        <a class="prdltop3"  href="contrast_<?php echo $row_parent['parentid']; ?>.html">产品对比</a>
		<div class="tsss"><div class="tsss2"><input type="text" value="请输入产品型号" onblur="if (this.value==''){ this.value='请输入产品型号';}"
                    onfocus="if (this.value=='请输入产品型号') {this.value='';}" id="prkeynum2" /><a class="tsss1" href="javascript:prsera4()"><img src="images/indexinuput1.png"></a></div></div>

    </div>
    </form>
</div>
<script language="javascript" type="text/javascript">
    function prsera4() {
        var keycp = document.getElementById("prkeynum2");
        if (keycp.value != null && keycp.value != "" && keycp.value != "请输入产品型号") {
            window.location.href = "prSearch.php?stat=1&c_kind=2&key=" + keycp.value;
        }
        else {
            alert("请输入产品型号查询");
        }
    }

</script>


            <div class="prdo" style="padding-bottom: 0; border-bottom: none;">
                <div class="prdo1"><a href="comparelist.aspx?stat=1&c_kind=2&c_kind2=114&c_kind3=128&c_kind4=168&id=2419" style="display: none"></a></div>
                <div class="prdo2 clearfix" style="padding-top: 35px; padding-bottom: 20px;">
                    <div class="prdo3" style="width: 253px; height: 184px; overflow: hidden; padding-right: 50px;">
                        <a style="display: block; width: 253px; height: 184px; position: relative;" href="<?php echo $row_image['thumb']; ?>" rel="prettyPhoto[iframes]" id="bigpic">

                            
                            
                            <img src="<?php echo $row_image['thumb']; ?>"  width="184" height="184" id="middlepic" /></a>
                    </div>

                    <div class="prdo4">
                        <div class="prdo5" style="padding-bottom: 0; line-height: 28px; font-size: 18px;">型号：<?php echo $row_image['xinghao']; ?></div>
                        <div class="prdo6" style="margin-top:10px;"><?php //echo $row_image['title']; ?></div>
                        <div class="prdo66"></div>
                        <div class="prdo7 clearfix">
                            <div class="prdo9" id="box">
                                <ul class="clearfix">
								<?php
									$small=$row_image['pics'];
									$e_small=explode(':::',$small);
									$count=count($e_small);
									for($i=0;$i<=$count-1;$i++){
										$e_smalls=explode('|',$e_small[$i]);
								?>
                                     <li><a class="prdo9oa" href="javascript:void(0)" id="tt1"  onmouseover="showlink(1,'<?php echo $e_smalls[0]; ?>','<?php echo $e_smalls[0]; ?>')"><img src="<?php echo $e_smalls[0]; ?>"  width="63" height="63" /></a></li>
							    <?php } ?>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>


            </div>
            <script type="text/javascript">
                function showlink(no, m, b) {
                    for (var iii = 1; iii <= 8; iii++) {
                        if (iii == no) {
                            $("#tt" + no).attr("class", "prdo9oa");
                            $("#middlepic").attr("src", m);
                            $("#bigpic").attr("href", b);

                        } else {
                            $("#tt" + iii).attr("class", "");
                        }
                    }
                }
            </script>
<div class="prdltop9" style="margin-bottom: 5px; margin-top: 0; border-top: none;">
	<div class="xgdg10" style="width: 910px; border-right: 1px solid #E1E1E1; border-top: none;">
		<div class="xgdg11 clearfix">
			<a id="glxx1" class="xgdg11oa" onclick="showlink2(1)" href="javascript:void(0)">产品概述</a>
			<a id="glxx2" onclick="showlink2(2)" href="javascript:void(0)">详细参数</a>
			<a id="glxx3" onclick="showlink2(3)" href="javascript:void(0)">资料下载</a>
		</div>
	</div><!-- xgdg10 -->
	<div id="message" style="width: 910px;overflow: hidden;">
			<div class="prgs" style="color:#333;" id="cs1">
				<div style="margin: 13pt 0cm"><?php echo $row_image['description']; ?></div>
			</div>
			<div class="prcs" id="cs2" style="display:none;">
				<div class="prcs1 clearfix"><a class="prcs1oa"><?php echo $row_image['title']; ?></a></div>
				<div class="prcs2">
					<?php echo $row_image['cankao']; ?>
				</div>
			</div>
			<div class="prcs" id="cs3" style="display:none;">
				<div class="jjfany10">
					<ul class="clearfix">
					<?php
					 $download=explode(':::',$row_image['adddoc']);
					 $im=implode($download);
					
					 if(empty($im)){
					 	
					 }else{
					 $count=count($download);
					for($i=0;$i<$count;$i++){
						$expload=explode('|',$download[$i]);
					?>
					<li class="clearfix"><a href="<?php echo $expload[0]; ?>"><?php echo $expload[1]; ?></a><br /></li>
					<?php } }?>
					</ul>
				</div>
			</div>
	</div>
</div><!-- prdltop -->
   <script type="text/javascript">
		function showlink2(no) {
			for (var iii = 1; iii <= 3; iii++) {
				if (iii == no) {
					$("#glxx" + no).attr("class", "xgdg11oa");
					$("#cs" + no).css("display", "block");
					sk2(no-1);
				} else {
					$("#glxx" + iii).attr("class", "");
					$("#cs" + iii).css("display", "none");
				}
			}
		}
	</script>﻿
</div>
</div>
<div style="clear: both;"></div>
<div class="bottom">
	<?php include("public/bottom.php"); ?>
</div>
</body>
</html>