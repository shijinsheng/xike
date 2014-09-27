<div class="newsbodyl">
  <div class="nblnav"> <a style="cursor:default">关于我们</a> </div>
  <div class="nblnav1" ><a class="nblnav1oa" href='about.php'>公司信息</a></div>
  <?php
	$parentid=112;
	$sql_type="select * from yourphp_category where parentid=".$parentid;
	$infos=mysql_query($sql_type);
?>
  <ul class="clearfix"> 
    <?php
while($a = mysql_fetch_array($infos)){
?>
	<li <?php if($id==$a[0]){echo 'class="rclna"'; } ?> ><a <?php if($id==$a[0]){echo 'class="newsbodyllia"'; } ?> href='about.php?getpage=about<?php echo $a[0] ?>.php&typeid=<?php echo $a[0] ?>'><?php echo $a[1] ?></a></li>
<?php
}
?>
   
  </ul>
  <div class="nblnav1" ><a  href='zzry.php'>资质荣誉</a></div>
  <div class="nblnav1" ><a  href='about.php?getpage=about12.php&typeid=12'>社会责任</a></div>
  <div class="nblnav1" ><a  href='about.php?getpage=about13.php&typeid=13'>品牌资源</a></div>
  <div class="nblnav1" ><a  href='about.php?getpage=about15.php&typeid=15'>联系我们</a></div>
</div>
