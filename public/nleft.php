<div class="newsbodyl">
<div class="nbltop">
<div style="display:none"><a href="index.html">首页</a>&nbsp;>&nbsp;<a href="newsmt_xx_63.html">新闻中心</a>&nbsp;>&nbsp;</div></div>
	<div class="nblnav"><a style="cursor:default">新闻中心</a></div>
<?php
	$parentid=92;	//92代表是新闻中心下面的分类
	$sql_type="select * from yourphp_category where parentid=".$parentid;
	$infos=mysql_query($sql_type);
?>
<?php
while($a = mysql_fetch_array($infos)){
switch ($a['id'])
		{
		case 93:
			$pagetype = "news_m1";
			$number=93;
			break;
		case 96:
			$pagetype = "news_m1";
			$number=98;
			break;
		case 94:
			$pagetype = "news_m2";
			$number=94;
			break;
		case 95:
			$pagetype = "news_m2";
			$number=95;
		  break;  
		case 97:
			$pagetype = "news_m3";
			$number=100;
		  break;
		default:
		 $pagetype="news";//默认跑到news.php页面
	}
?>
		<div class="nblnav1" ><a href='<?php echo $pagetype; ?>.php?typeid=<?php echo $number; ?>'><?php echo $a["catname"]; ?></a></div>
<?php
  $getid = !empty($_GET['typeid'])?$_GET['typeid']:0; 
  $arr_child=explode(',',$a['arrchildid']);
  //当他下面的类别大于一个(除了本身)
  if(count($arr_child)>1){
	//当他下面有子类别，就打印出来。
	if(in_array($getid,$arr_child)){
	$sql_newstype_sec = "select * from yourphp_category where id in(".$a['arrchildid'].")";
	//echo $sql_newstype_sec;
	$result_newstype_sec = mysql_query($sql_newstype_sec);
	$k=0;
?>
<ul class="clearfix">
<?php 
	while($obj_news_sec = mysql_fetch_array($result_newstype_sec)){
	$k++;
	if($k==1){continue;}	
?>
<li <?php if($obj_news_sec[0]==$getid){echo 'class="rclna"';}  ?>><a <?php if($obj_news_sec[0]==$getid){echo 'class="newsbodyllia"';}  ?> href='<?php echo $pagetype ?>.php?typeid=<?php echo $obj_news_sec[0] ?>'><?php echo $obj_news_sec[1] ?></a></li>
<?php }?>
</ul>
	<?php
		}
	}
}
?>
</div>