<div class="newsbodyl" style="width: 235px;">
  <div class="nblnav"><a style="cursor:default">产品中心</a></div>
  <?php
  //第一级
  $parentid=4; //92代表是新闻中心下面的分类
  $sql_type="select * from yourphp_category where parentid=".$parentid;
  $infos=mysql_query($sql_type);
  $i=0;
  while($a = mysql_fetch_array($infos)){
  $i=0;
    switch($a['id']){
       case 5:
        $number=175;
        break;
       case 6:
        $number=168;
        break;
       case 197:
        $number=200;
        break;
       case 179:
        $number=180;
        break;
       case 185:
        $number=186;
        break;
       default:
        $number=$id;
      }
 ?>
  <div class="nblnav1" ><a href='product_list_<?php echo $number; ?>.html'><?php echo $a["catname"]; ?></a></div>
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
				$arr_childs=explode(',',$obj_pro_sec['arrchildid']);
				$count=count($arr_childs);
				$result_type=mysql_query("select * from yourphp_category where parentid='".$obj_pro_sec['id']."' order by id");
				$obj_type=mysql_fetch_assoc($result_type);
				$result_type1=mysql_query("select * from yourphp_category where parentid='".$obj_type['id']."' order by id");
				$obj_type1=mysql_fetch_assoc($result_type1);	
    ?>
      <li <?php if($obj_pro_sec['id']==$getid){echo 'class="rclna"'; }?>><a href='<?php if($count>1){ echo "product_list".$obj_pro_sec['id']."_child".$obj_type1['id'].".html"; }else{ echo "product_list_".$obj_pro_sec['id'].".html"; } ?>'><?php echo $obj_pro_sec[1];?></a></li>
    <?php } ?>
   </ul>
 <?php } } ?>
<?php } ?>
</div>
