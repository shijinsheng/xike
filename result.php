<?php
require_once('./mydb/db.php');
require_once('./mydb/Paging.php');
$db=new DB();
$id=str_replace('j','',$_GET['sn']);
$array=explode('_',$id);
$sql_arr1=mysql_query("select * from yourphp_product where id=".$array[0]);
$row_arr1=mysql_fetch_assoc($sql_arr1);
$sql_arr2=mysql_query("select * from yourphp_product where id=".$array[1]);
$row_arr2=mysql_fetch_assoc($sql_arr2);
$sql_arr3=mysql_query("select * from yourphp_product where id=".$array[2]);
$row_arr3=mysql_fetch_assoc($sql_arr3);
$sql_arr4=mysql_query("select * from yourphp_product where id=".$array[3]);
$row_arr4=mysql_fetch_assoc($sql_arr4);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="西科,成都西科,西科光端机,成都西科高新技术有限公司" />
<meta name="description" content="西科,成都西科,西科光端机,成都西科高新技术有限公司">
<meta name="baidu-site-verification" content="LD10I6bZyc" />
<title>产品对比</title>
<link href="css/style.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="../js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="../js/showDiv.js"></script>
<script type="text/javascript" src="../js/jquery.mousewheel.min.js"></script>
<script language="javascript" type="text/javascript" src="js/index/index1.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.hoverIntent.minified.js"></script>
<script type="text/javascript" src="js/jquery.naviDropDown.js"></script>
<link rel="stylesheet" href="css/index.css" type="text/css" media="screen, project, print" />
<style type="text/css">
table{font-size:12px;color:#666;}
</style>
<script type="text/javascript">
        $(function(){
			/*$("#gliang").attr('checked',"true");*/
			$(".tt2 > td").css("background-color","rgb(246, 254, 200)");
			var tab=$('.prxz1 table tr');
			tab.each(function(){
				var td1=$.trim($(this).children('td').eq(1).text());
				var td2=$.trim($(this).children('td').eq(2).text());
				var td3=$.trim($(this).children('td').eq(3).text());
				var td4=$.trim($(this).children('td').eq(4).text());
				if(td1==td2&&td2==td3&&td3==td4&&td1==td4){
					$(this).addClass('tt1');
				}else if(td3==''&&td4==''&&td1==td2){
					$(this).addClass('tt1');
				}else if(td4==''&&td1==td2&&td2==td3&&td1==td3){
					$(this).addClass('tt1');
				}else{
					$(this).addClass('tt2');
				}
			});
			tab.eq(0).removeClass('tt2');
			tab.eq(1).removeClass('tt1');
        });
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
<?php require('public/top.php'); ?>
<div class="clearfix" style="width:1180px;padding-top:20px;">
	<div style="float: left; height: 1px; overflow: hidden;"></div>
	<div class="prdltop clearfix"><a class="prdltop1" target="_blank" href="http://service.weibo.com/share/share.php?url=http%3A%2F%2Fwww.hikvision.com%2Fcn%2FProducts_show.asp%3Fid%3D5031%26showid%3D1&appkey=3797775739&title=&pic=&ralateUid=&language=">分享</a> <a class="prdltop2" href="fk.php?stat=1&c_kind=2&c_kind2=115&c_kind3=134&c_kind4=238&id=&type=2&iframe=true&width=735&height=420"  rel="prettyPhoto[iframesl]">反馈</a> <a class="prdltop3"  href="contrast.html">产品对比</a>
	</div>
</div><!-- clearfix -->
<script type="text/javascript">
    $(document).ready(function () {
        $("a[rel^='prettyPhoto']").prettyPhoto();
    });
</script>
<div class="prxz">对比结果</div>
<div class="prxz1">
	<table width="1178" border="1"  bgcolor="#666" cellpadding="1" cellspacing="0" style="border-collapse:collapse;">
		<tbody>
			<tr>
				<td width="160" height="187" align="center"><font style="font-size: 16px; font-family: '微软雅黑'; color: #C4261D;">产品型号</font></</td>
				<td width="260" align="center" style="color:#666">
					<div class="clearfix prxz2">
						<div><img src="<?php echo $row_arr1['thumb']; ?>" width="110" height="80" /></div> <!-- 放置图片 -->
						<div class="prxz3"><?php echo $row_arr1['xinghao']; ?></div><!-- 放置型号 -->
					</div>
				</td>
				<td width="260" align="center" style="color:#666">
					<div class="clearfix prxz2">
						<div><img src="<?php echo $row_arr2['thumb']; ?>" width="110" height="80" /></div>
						<div class="prxz3"><?php echo $row_arr2['xinghao']; ?></div>
					</div>
				</td>
				<td width="260" align="center" style="color:#666">
				<?php 
				if(empty($array[2])){
				?>
					<a href="#"><img src="images/prdownpic1.jpg" /></a>
				<?php
				}else{
				?>
					<div class="clearfix prxz2">
						<div><img src="<?php echo $row_arr3['thumb']; ?>" width="110" height="80" /></div>
						<div class="prxz3"><?php echo $row_arr3['xinghao']; ?></div>
					</div>
					<?php } ?>
				</td>
				<td width="260" align="center" style="color:#666">
				<?php 
				if(empty($array[3])){
				?>
					<a href="#"><img src="images/prdownpic1.jpg" /></a>
				<?php
				}else{
				?>
					<div class="clearfix prxz2">
						<div><img src="<?php echo $row_arr4['thumb']; ?>" width="110" height="80" /></div>
						<div class="prxz3"><?php echo $row_arr4['xinghao']; ?></div>
					</div>
					<?php } ?>
				</td>
			</tr>
			
			<tr>
				<td height="61" colspan="5">
					<div class="clearfix" style="width:auto">
						<div class="prxz4">规格比较</div>
						<div class="prxz5 clearfix" style="width:630px;">
							<div class="clearfix" style="width:125px;">
								<input id="gliang" type="checkbox" onclick="chenge(this);" />
								<font style="float: left; display: block; padding-left: 10px;">高亮显示不同项</font>
							</div>
							<div class="clearfix" style="width:125px;">
								<input type="checkbox" onclick="chenge2(this);" />
								<font style="float: left; display: block; padding-left: 10px;">隐藏相同项</font>
							</div>
							<span>显示设置</span>
						</div>
					</div>
				</td>
			</tr>
		<?php 
		function getInfo($from, $to, $str){
			preg_match_all('/'.$from.'(.*?)'.$to.'/si', $str,$info);
			// print_r($info);//print the array
			return $info[1];
		}
		$content1=preg_replace('/\swidth="200"/','',$row_arr1['cankao']);
		$content2=preg_replace('/\swidth="500"/','',$row_arr1['cankao']);
		$content3=preg_replace('/\swidth="500"/','',$row_arr2['cankao']);
		$content4=preg_replace('/\swidth="500"/','',$row_arr3['cankao']);
		$content5=preg_replace('/\swidth="500"/','',$row_arr4['cankao']);
		$from='<td>';
		$to='<\/td>';
		$arr1 = getInfo($from,$to,$content1);
		$arr2 = getInfo($from,$to,$content2);
		$arr3 = getInfo($from,$to,$content3);
		$arr4 = getInfo($from,$to,$content4);
		$arr5 = getInfo($from,$to,$content5);
		$count=count($arr1);
		for($i=1;$i<$count;$i++){
		?>
		<tr class="">
			<td align="center"><div style="font-size:12px;color:#666;"><?php echo $arr1[$i]; ?></div></td>
			<td width="200" align="center"><div style="font-size:12px;color:#666;"><?php echo $arr2[$i]; ?></div></td>
			<td width="200" align="center"><div style="font-size:12px;color:#666;"><?php echo $arr3[$i]; ?></div></td>
			<td width="200" align="center"><div style="font-size:12px;color:#666;"><?php echo $arr4[$i]; ?></div></td>
			<td width="200" align="center"><div style="font-size:12px;color:#666;"><?php echo $arr5[$i]; ?></div></td>
		</tr>
		<?php
		}
		?>
		
		</tbody>
	</table>
</div><!-- prxz1 -->
<?php require('public/bottom.php'); ?>
</body>
</html>