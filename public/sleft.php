<div class="newsbodyl">
<div class="nbltop">              
</div>
<div class="nblnav"><a style="cursor:default">服务支持</a></div>
<?php
$typeid = 17;//class="nblnav1oa" 选中a标签的样式
$id = !empty($_GET['typeid'])?$_GET['typeid']:$_GET['id']; 
$sql_about = "select * from yourphp_category where parentid = '".$typeid."' order by id";
$result_about = mysql_query($sql_about);
while($obj_about = mysql_fetch_array($result_about)){
	switch ($obj_about['id'])
		{
		case 36:
			$pagetype = "download";
			$number=240;
			break;
		case 55:
			$pagetype = "problem";
			$number=125;
			break;
		case 131:
			$pagetype = "video";
			$number=246;
			break;
		case 268:
			$pagetype = "notice";
			$number=268;
			break;
		default:
		 $pagetype="service";//默认跑到news.php页面
	}
?>
<div class="nblnav1" ><a href='<?php echo $pagetype; ?>_<?php echo $number; ?>.html'><?php echo $obj_about[1]?></a></div>
<?php
  //$getid = !empty($_GET['uname'])?$_GET['uname']:1; 
  $arr_child=explode(',',$obj_about['arrchildid']);
  //当他下面的类别大于一个(除了本身)
  if(count($arr_child)>1){
	//当他下面有子类别，就打印出来。
	if(in_array($id,$arr_child)){
		$sql_ser_sec = "select * from yourphp_category where id in(".$obj_about['arrchildid'].")";
		//echo $sql_newstype_sec;
		$result_ser_sec = mysql_query($sql_ser_sec);
		$k=0;
	?>
<ul class="clearfix">  
  <?php 
	while($obj_ser_sec = mysql_fetch_array($result_ser_sec)){
	$k++;
	if($k==1){continue;}
?>
<li <?php if($obj_ser_sec[0]==$id){echo 'class="rclna"';}  ?>><a <?php if($obj_ser_sec[0]==$id){echo 'class="newsbodyllia"';}  ?> href='<?php echo $pagetype; ?>_<?php echo $obj_ser_sec[0] ?>.html'><?php echo $obj_ser_sec[1] ?></a></li>
<?php } ?>
</ul>
	<?php
	}
  }		
}?>
</div>