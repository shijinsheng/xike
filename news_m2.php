<?php
require_once('./mydb/db.php');
require_once('./mydb/Paging.php');
$db=new DB();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="成都西科" />
    <meta name="description" content="成都西科">
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
    <script type="text/javascript" src="js/jquery_pagination_M/pagination.css"></script>
    <script type="text/javascript" src="js/jquery_pagination_M/jquery.pagination.js"></script>
    <script language="javascript" type="text/javascript">
        $(function () {
            $(".mtgzxw li:odd").css("background", "#F6F6F6");
            //ajax分页实现
        });
        var pageIndex = 0;     //页面索引初始值   
        var pageSize = 18;     //每页显示条数初始化，修改显示条数，修改这里即可   
        $(function () {
            //分页，PageCount是总条目数，这是必选参数，其它参数都是可选
            $("#starttime").val("开始日期");
            $("#endtime").val("结束日期");
            $("#key").val("关键字");

            var pcount=65;
            $("#Pagination").pagination(pcount, {
                callback: PageCallback,  //PageCallback() 为翻页调用次函数。
                prev_text: "<",
                next_text: ">",
                items_per_page:pageSize,
                num_edge_entries: 2,       //两侧首尾分页条目数
                num_display_entries: 6,    //连续分页主体部分分页条目数
                current_page: pageIndex   //当前页索引
            });
            //翻页调用   
            function PageCallback(index, jq) {             
                InitTable(index);  
            }        
            //请求数据   
            function InitTable(pageIndex) {                                  
                $.ajax({   
                    type: "POST",  
                    dataType: "text",  
                    url: 'ashx/news.ashx',      //提交到一般处理程序请求数据   
                    data: {pageIndex:pageIndex,pageSize:pageSize,kind:64,stat:1},  //提交两个参数：pageIndex(页面索引)，pageSize(显示条数)                   
                      success: function(data) {
                          $("#Result").html('');     
                          $("#Result").html(data);  
                      }  
                  }); 
            }
            if(pcount<= 18)
            {
                $("#Pagination").css("display","none");
            }
        });
        
        function seach(){
            var key = document.getElementById("key");
            var starttime = document.getElementById("starttime");
            var endtime = document.getElementById("endtime");

            if (starttime.value != null && starttime.value != "" && endtime.value != null && endtime.value != "" && endtime.value != "结束日期" && starttime.value != "开始日期" && key.value != "" && key.value != "关键字") {
                if (endtime.value < starttime.value) {
                    alert("结束时间不能小于开始时间");
                    return;
                    document.getElementById("endtime").focus();
                }

            }
            else {
                if (key.value != null && key.value != "" && key.value != "关键字") {

                }
                else {

                    if (starttime.value != null && starttime.value != "" && endtime.value != null && endtime.value != "" && endtime.value != "结束日期" && starttime.value != "开始日期") {
                        if (endtime.value < starttime.value) {
                            alert("结束时间不能小于开始时间");
                            return;
                            document.getElementById("endtime").focus();
                        }
                        
                    }
                    else {
                        if (starttime.value != null && starttime.value != "" && starttime.value != "开始日期") {
                            if (endtime.value == null || endtime.value == "" || endtime.value == "结束日期") {
                                alert("请输入结束时间");
                                return;
                                document.getElementById("endtime").focus();

                            }
                            else {
                                if (endtime.value < starttime.value) {
                                    alert("结束时间不能小于开始时间");
                                    return;
                                    document.getElementById("endtime").focus();
                                }

                            }
                        }
                        else if (endtime.value != null && endtime.value != "" && endtime.value != "结束日期") {
                            if (starttime.value == null || starttime.value == "" || starttime.value == "开始日期") {
                                alert("请输入开始时间");
                                return;
                                document.getElementById("starttime").focus();
                            }
                            else {
                                if (endtime.value < starttime.value) {
                                    alert("结束时间不能小于开始时间");
                                    return;
                                    document.getElementById("endtime").focus();
                                }
                            }
                        }
                        else {
                            alert("请输入搜索条件");
                            return;
                        }

                    }
                }

            }
            var pageIndex = 0;     //页面索引初始值   
            var pageSize = 18;     //每页显示条数初始化，修改显示条数，修改这里即可
            var pcount=0;
            $.ajax({   
                type: "POST",  
                dataType: "text",  
                url: 'ashx/newscount.ashx',      //提交到一般处理程序请求数据   
                data: {pageIndex:pageIndex,pageSize:pageSize,kind:64,starttime:starttime.value,endtime:endtime.value,key:key.value,count:pcount,stat:1},  //提交两个参数：pageIndex(页面索引)，pageSize(显示条数)                   
                     success: function(data) {
                         pcount=data;
                         //分页，PageCount是总条目数，这是必选参数，其它参数都是可选
                         $("#Pagination").pagination(pcount, {
                             callback: PageCallback2,  //PageCallback() 为翻页调用次函数。
                             prev_text: "<",
                             next_text: ">",
                             items_per_page:pageSize,
                             num_edge_entries: 2,       //两侧首尾分页条目数
                             num_display_entries: 6,    //连续分页主体部分分页条目数
                             current_page: pageIndex   //当前页索引
                         });
                         if(pcount <=18)
                         {
                             $("#Pagination").hide();
                         }
                         else
                         {
                             $("#Pagination").show();

                         }
                         return true;
                         
                     }  
            });
           
             //翻页调用   
            function PageCallback2(index, jq) {             
                 InitTable2(index);  
             } 
        
            //请求数据   
            function InitTable2(pageIndex) {                                  
                 $.ajax({   
                     type: "POST",  
                     dataType: "text",  
                     url: 'ashx/news.ashx',      //提交到一般处理程序请求数据   
                     data: {pageIndex:pageIndex,pageSize:pageSize,kind:64,starttime:starttime.value,endtime:endtime.value,key:key.value,stat:1},  //提交两个参数：pageIndex(页面索引)，pageSize(显示条数)                   
                     success: function(data) {
                        $("#Result").html('');     
                        $("#Result").html(data);  
                    }  
                }); 
            }
            

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
<?php include("public/top.php"); ?>
<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script> 
<script type="text/javascript">
    $(document).ready(function () {
        $("a[rel^='prettyPhoto']").prettyPhoto();
    });
</script>
<div style="width: 100%; height: 1px; background: #fff; overflow: hidden;"> </div>
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
              <div class="iwxt1"> <a id="weixinlogoc" href="javascript:void(0);"></a> </div>
            </div>
        <div  title="订阅电子报"><a  rel="prettyPhoto[iframesl]"  href="dingyue.aspx?c_kind=508&iframe=true&width=520&height=230"> <img src="images/momopic.jpg"></a></div>
        <a id="weixinlogo" href="javascript:void(0);"> <img src="images/weixinlogo.jpg" /></a> <a style="display:none;" href="#"> <img src="images/youkulogo.jpg" /></a> <a href="http://weibo.com/hikvisionsecu" target="_blank"> <img src="images/sinalogo.jpg"></a> <span>关注我们</span> </div>
        </div>
    <div class="mtgzban"> <img src="images/20130930025940156.JPG"  width="939" height="230" /> </div>
    <form action="javascript:seach();" defaultbutton="key">
          <div class="mtgzbt2 clearfix" style="border: none; margin-top: 0; height: 30px;"> <span>资料搜索：</span>
        <div style="padding-right: 0;">
              <input id="starttime" onclick="WdatePicker()" type="text" value="开始日期" onblur="if (this.value==''){ this.value='开始日期';}" onfocus="if (this.value=='开始日期') {this.value='';}" />
            </div>
        <span style="padding-left: 5px; padding-right: 5px;">至</span>
        <div>
              <input id="endtime" onclick="WdatePicker()" type="text" value="结束日期" onfocus="if (this.value=='结束日期') {this.value='';}" onblur="if (this.value==''){ this.value='结束日期';}" />
            </div>
        <input type="text" id="key" onblur="if (this.value==''){ this.value='关键字';}" onfocus="if (this.value=='关键字') {this.value='';}"
                        value="关键字">
        <a href="javascript:seach();">搜索</a> </div>
        </form>
    <div class="mtgzxw">
          <div class="mtgzxw1">
           <?php
					$getid = !empty($_GET['typeid'])?$_GET['typeid']:0;
					if($getid){
						$where = "and catid ='".$getid."'";
					}else{
						$where = "";
					}
					$sql_news = "select * from yourphp_article where id!='0' ".$where." limit 0,10"; 
					//echo $sql_news;
					$resutl = mysql_query($sql_news);
					?>
					
        <ul id="Result" class="clearfix">
              <?php 
                        while($obj = mysql_fetch_array($resutl)){
                    ?>
              <li class="clearfix"><a href="newsinfo.php?id=<?php echo $obj["id"] ?>"><?php echo $obj["title"] ?></a><span><?php echo date("Y-m-d",$obj["createtime"]) ?></span></li>
             <?php }?>
            </ul>
        <!--<div style="padding-left: 30px;" class="nbrbodyfy clearfix" id="Pagination"></div> -->
      </div>
        </div>
  </div>
    </div>
<div class="bottom">
<?php include("public/bottom.php"); ?>
</div>
</body>
</html>
