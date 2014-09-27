<div class="newsbodyl">
  <div class="nblnav"> <a style="cursor:default">关于我们</a> </div>
  <div class="nblnav1" ><a href='about.php'>公司信息</a></div>
  <div class="nblnav1" ><a class="nblnav1oa"  href='zzry.php'>资质荣誉</a></div>
   <?php
	$parentid=113;	//
	//$id = $_GET["id"];
	$id = !empty($_GET["id"])?$_GET["id"]:114;
	$id = $id==113?114:$id;
	$sql_type="select * from yourphp_category where parentid=".$parentid;
	$infos=mysql_query($sql_type);
?>

  <ul class="clearfix">
    <!--<li class="rclna"  ><a   class="newsbodyllia"   href='about.php'>公司介绍</a></li> -->
    <?php
while($a = mysql_fetch_array($infos)){
?>
	<li <?php if($id==$a[0]){echo 'class="rclna"'; } ?> ><a <?php if($id==$a[0]){echo 'class="newsbodyllia"'; } ?> href='zzry.php?getpage=zzry<?php echo $a[0] ?>.php&id=<?php echo $a[0] ?>'><?php echo $a[1] ?></a></li>
<?php
}
?>
  </ul>
  <div class="nblnav1" ><a  href='about.php?getpage=about12.php&id=12'>社会责任</a></div> 
  <div class="nblnav1" ><a  href='about.php?getpage=about13.php&id=13'>品牌资源</a></div>
  <div class="nblnav1" ><a  href='about.php?getpage=about15.php&id=15'>联系我们</a></div>
</div>
