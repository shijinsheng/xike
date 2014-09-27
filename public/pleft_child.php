<div class="newsbodyl" style="width: 235px;">
  <div class="nblnav"><a style="cursor:default">产品中心</a></div>
  <?php
  //第一级
  $parentid=188; //92代表是新闻中心下面的分类
  $sql_type="select * from yourphp_category where parentid=".$parentid;
  $infos=mysql_query($sql_type);
  $i=0;
  while($a = mysql_fetch_array($infos)){
  switch($a['id']){
   case 269:
    $number=273;
    break;
   case 271:
    $number=281;
    break;
   case 270:
    $number=277;
    break;
   case 272:
    $number=285;
    break;
   default:
    $number=$a['id'];
  }
  $i=0;
 ?>
  <div class="nblnav1" ><a href='product_list<?php echo $parentid; ?>_child<?php echo $number; ?>.html'><?php echo $a["catname"]; ?></a></div>
 <?php
  $sql_newstype_sec=mysql_query("select * from yourphp_category where parentid='".$a['id']."' order by id");
  $getid = !empty($_GET['typeid'])?$_GET['typeid']:$_GET['pid']; 
  $arr_child=explode(',',$a['arrchildid']);
  if(in_array($getid,$arr_child)){
  if(count($arr_child)>1){ ?>
   <ul class="clearfix">
     <?php 
      while($obj_pro_sec=mysql_fetch_array($sql_newstype_sec)){ 
     if($getid==$obj_pro_sec['id']){$mianbaoxue=$obj_pro_sec[1];}
     ?>
      <li <?php if($obj_pro_sec['id']==$getid){echo 'class="rclna"'; }?>><a href='product_list<?php echo $parentid; ?>_child<?php echo $obj_pro_sec['id']; ?>.html'><?php echo $obj_pro_sec[1];?></a></li>
    <?php } ?>
   </ul>
 <?php } } ?>
<?php } ?>
</div>
