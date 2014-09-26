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
    <link href="css/pager.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/showDiv.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/comparelist1.css"/>
    <script type="text/javascript">
        $(function () {
        $("#gliang").attr('checked',"true");
        $(".tt2 > td").css("background-color","rgb(246, 254, 200)");
        
        })
        function chenge(dom)
        {
       if ($(dom).attr('checked') != undefined) {
         $(".tt2 > td").css("background-color","rgb(246, 254, 200)");
       }
       else
       {
        $(".tt2 > td").css("background-color","#fff");
       }
        
        }
        function chenge2(dom)
        {
            if ($(dom).attr('checked') != undefined) {
            $(".tt1").hide();
            }
            else
            {
            $(".tt1").show();
            }
          
        }
    </script>
    </head>
    <body>
    <form name="form1" method="post" action="comparelist.php?stat=1&stat=2&c_kind=2&c_kind2=115&c_kind3=135" id="form1">
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
      <link rel="stylesheet" type="text/css" href="css/comparelist2.css"/>
      <script src="js/jquery.prettyPhoto.js" type="text/javascript"></script> 
      <script type="text/javascript">
    $(document).ready(function () {
        $("a[rel^='prettyPhoto']").prettyPhoto();
    });
</script>
<?php include("public/top.php"); ?>
      <div class="clearfix" style="width: 1180px; padding-top: 20px;">
        <div style="float: left; height: 1px; overflow: hidden;"> </div>
        <div class="prdltop clearfix"> <a href="http://service.weibo.com/share/share.php?url=http%3A%2F%2Fwww.hikvision.com%2Fcn%2FProducts_show.asp%3Fid%3D5031%26showid%3D1&appkey=3797775739&title=&pic=&ralateUid=&language=" class="prdltop1" target="_blank">分享</a> <a href="fk.php?stat=1&c_kind=2&c_kind2=115&c_kind3=135&c_kind4=&type=1&iframe=true&width=735&height=420" rel="prettyPhoto[iframesl]" class="prdltop2">反馈</a> <a href="contrast.php" class="prdltop3">产品对比</a> </div>
      </div>
      <div class="prxz">产品对比</div>
      <div class="prxz1">
        <?php 
		
			$get_pros=isset($_GET["bj"])? $_GET["bj"]:0;
			$arr_bj = explode("|",$get_pros);
			//var_dump($arr_bj);
			//$hello = explode(',',$source); 
			//根据id查询产品
		
			//$sql_type="select * from table where catid=".$id; 
			//$infos=mysql_query($sql_type);
			//while($a = mysql_fetch_array($infos)){
			//}
			//然后把产品显示在table表中
			/*     进一步，*/
		?>
        <table border="0" bgcolor="#666" cellspacing="1" cellpadding="0" width="1178">
          <tr>
            <td align="center" height="187" style="font-size: 16px; font-family: '微软雅黑'; color: #C4261D;"
                        width="160">产品型号</td>
            <td width="260" align="center" style="color:#666;"><div class="clearfix prxz2">
              <div><img src="http://www.hikvision.com//uploadfile/image/product/small/20120322140439186999.jpg" /></div>
              <div class="prxz3">DS-2CD883F-E(W)<br />
                500万1/2.5&#39;&#39; CMOS ICR日夜型枪型网络摄像机</div></td>
            <td width="260" align="center" style="color:#666;"><div class="clearfix prxz2">
              <div><img src="http://www.hikvision.com//uploadfile/image/product/small/20130122110649346433.jpg" /></div>
              <div class="prxz3">DS-2CD7283F-E(I)Z(H) (S)<br />
                500万 1/2.5&quot;CMOS日夜型防水防暴半球网络摄像机</div></td>
            <td width="260" align="center" style="color:#666;"><a href="compare.aspx?stat=1&category=3&c_kind=2&c_kind2=114&c_kind3=129&c_kind4=&id=&xxz=734|12600|&iframe=true&width=941&height=480" rel="prettyPhoto[iframesl3x]"> <img src="images/prdownpic1.jpg" /></a></td>
            <td width="260" align="center" style="color:#666;"><a href="compare.aspx?stat=1&category=4&c_kind=2&c_kind2=114&c_kind3=129&c_kind4=&id=&xxz=734|12600|&iframe=true&width=941&height=480" rel="prettyPhoto[iframesl4x]"> <img src="images/prdownpic1.jpg" /></a></td>
          </tr>
          <tr>
            <td colspan="5" height="61"><div class="clearfix" style="width:auto;">
                <div class="prxz4"> 规格比较 </div>
                <div class="prxz5 clearfix" style="width:630px;">
                <div class="clearfix" style="width:125px;">
                    <input type="checkbox" id="gliang"  onclick="chenge(this);">
                    <font style="float: left; display: block; padding-left: 10px;">高亮显示不同项</font> </div>
                <div class="clearfix" style="width:125px;">
                    <input type="checkbox" onclick="chenge2(this);">
                    <font style="float: left; display: block; padding-left: 10px;">隐藏相同项</font> </div>
                <span>显示设置</span> </div>
              </div></td>
          </tr>
          <tr align="center" class="tt2"  >
            <td ><div>型号</div></td>
            <td width="200"><div>DS-2CD883F-E(W)</div></td>
            <td width="200"><div>DS-2CD7283F-E(I)(Z)</div></td>
            <td width="200"><div></div></td>
            <td width="200"><div></div></td>
          </tr>
          <tr align="center" class="tt2"  >
            <td ><div>名称</div></td>
            <td width="200"><div>500万1/2.5&quot; CMOS ICR日夜型枪型网络摄像机</div></td>
            <td width="200"><div>500万 1/2.5"CMOS日夜型防水防暴半球网络摄像机</div></td>
            <td width="200"><div></div></td>
            <td width="200"><div></div></td>
          </tr>
          <tr align="center" class="tt1" >
            <td><div>传感器类型</div></td>
            <td width="200"><div>1/2.5" Progressive Scan CMOS</div></td>
            <td width="200"><div>1/2.5" Progressive Scan CMOS</div></td>
            <td width="200"><div></div></td>
            <td width="200"><div></div></td>
          </tr>
          <tr align="center" style="display:none">
            <td><div>信号系统</div></td>
            <td width="200"><div></div></td>
            <td width="200"><div></div></td>
            <td width="200"><div></div></td>
            <td width="200"><div></div></td>
          </tr>
          <tr align="center" style="display:none">
            <td><div>最小照度</div></td>
            <td width="200"><div></div></td>
            <td width="200"><div></div></td>
            <td width="200"><div></div></td>
            <td width="200"><div></div></td>
          </tr>
          <tr align="center" style="display:none">
            <td><div>同步方式</div></td>
            <td width="200"><div></div></td>
            <td width="200"><div></div></td>
            <td width="200"><div></div></td>
            <td width="200"><div></div></td>
          </tr>
         <?php 
		 	
		 	//$sql_type="select * from table  limit 0,3; 
			//$infos=mysql_query($sql_type);
			//while($a = mysql_fetch_array($infos)){
			//}
			//然后把产品显示在table表中
		 ?>
       
        </table>
      </div>
      <div class="bottom">
        <?php include("public/bottom.php"); ?>
      </div>
    </form>
</body>
</html>
