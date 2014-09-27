<div class="newsbodyl">
<div class="nbltop">              
</div>
<div class="nblnav"><a style="cursor:default">关于我们</a></div>
<?php
$typeid = 44;//class="nblnav1oa" 选中a标签的样式
$id = !empty($_GET['typeid'])?$_GET['typeid']:53; 
$sql_about = "select * from yourphp_category where parentid = '".$typeid."' order by id desc";
$result_about = mysql_query($sql_about);
while($obj_about = mysql_fetch_array($result_about)){
switch($obj_about['id']){
	case 53:
		$number=53;
		break;
	case 112:
		$number=249;
		break;
}
?>
<div class="nblnav1" ><a href='about_<?php echo $number; ?>.html'><?php echo $obj_about[1]?></a></div>
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
<li <?php if($obj_ser_sec[0]==$id){echo 'class="rclna"';}   ?>><a <?php if($obj_ser_sec[0]==$id){echo 'class="newsbodyllia"';}  ?> href='about_<?php echo $obj_ser_sec[0] ?>.html'><?php echo $obj_ser_sec[1] ?></a></li>
<?php } ?>
</ul>
	<?php
	}
  }		
}?>
</div>