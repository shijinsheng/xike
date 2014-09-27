<style type="text/css">
.xldt1{ float:left; padding-right:30px;}
.xldt{}
.xldt2{ line-height:22px;}
.xldt2 a{ font-size:14px; color:#c4271e; line-height:22px;}
.xldt2 a:hover{ text-decoration:underline;}
.xldt1 div.iiul2{ overflow:hidden; line-height:25px;}
.xldt1 div.iiul2 div a{ line-height:25px; color:#666666;}
.xldt1 div.iiul2 div a:hover{ text-decoration:underline; color:#c4271e;}
.xldt3{padding-left:20px; padding-bottom:10px; padding-top:18px;}
.xldt4{ padding-left:12px; padding-top:10px;}
.xldt5{ float:left; width:201px; overflow:hidden; padding-left:10px; padding-right:10px; }
.xldt6{ padding-top:8px;}
.xldt6 a{ background:url(../images/xlbfpicb2.png) no-repeat left; padding-left:17px; line-height:22px; font-size:14px; color:#3d3c3c;}
.xldt6 a:hover{ text-decoration:underline;color:#c4271e;}

.xldh{ padding-top:19px; padding-left:36px;}
.xldh1{ float:left; padding-right:30px;}
.xldh2{ float:left; height:213px; overflow:hidden; width:1px; background:#fff;}
.xldh3{ float:left;height:213px; overflow:hidden; width:1px; background:#CFCFCF;}
.xldh4{ float:left; width:277px; padding-left:30px; padding-top:8px;}
.xldh5{ line-height:24px; padding-top:5px;}
.xldh5 a{ color:#c4271e; font-size:14px; line-height:24px;}
.xldh5 a:hover{ text-decoration:underline;}
.xldh6{ font-size:14px; color:#c11910; line-height:22px; padding-top:3px; padding-bottom:3px;}
.xldh7{color:#3e3e3e; line-height:20px;}
.top2r{ float:right;text-align:right;font-family:'΢���ź�',arial;}

</style>
<script language="javascript" type="text/javascript">
    function qwsearch() {
        var keycp = document.getElementById("qwsearch");
        if (keycp.value != null && keycp.value != "" && keycp.value != "请输入关键字") {
            window.location.href = "search_"+keycp.value+".html";
        } else { alert("请输入关键字"); }
    }
</script>
<div class="top">
  <div class="top2 clearfix">
    <div class="top2l"><a href="default.html"><img src="images/logo.jpg" /></a></div>
    <div class="top2r">
 <div style="line-height:16px;width:160px;height:51px;color:#666;">
  联系我们：028-65929258<br />
  节假日无休<br />
  全天二十四小时为您服务
 </div>
 </div>
  </div>
</div>
<div style="width: 100%; height: 1px; background: #fff; overflow: hidden;"></div>

<!--菜单开始 -->
<div class="navnew clearfix" id="navigation_horiz" style="z-index: 9999;">
  <div style="width: 1180px; margin: 0 auto; overflow: hidden; height: 35px;">
    <ul class="clearfix navnewul" style="float: left; padding-left: 0;">
      <li class="navnewli clearfix"><a class="navnewoa" href="./default.html">首页</a></li> 
      
      <!--产品中心开始 -->
      <li class="navnewli clearfix"><a class="navnewoa" href="./product.html" id="pr">产品中心</a>
        <div class="dropdown" onmouseover="$('#pr').attr('class','navnewdq')" onmouseout="$('#pr').attr('class','navnewoa')" style="position: absolute; width:auto; height: 162px; display: none; background: url(images/indexpfbg1.png) no-repeat top left; z-index: 9999; overflow: hidden; top: 116px; left: 70px;">
          <div style="height: 5px; width: 652px; margin-left: 4px; overflow: hidden; background: #D2332F;margin-right:4px;"> </div>
          <div class="indexpf2 clearfix" style="padding-left: 30px;width:660px;">
            
            
            <?php
   $typeid = 4;//产品中心
            $sql_about = "select * from yourphp_category where parentid = '".$typeid."'";
   $result_about = mysql_query($sql_about);
   
   while($obj_about = mysql_fetch_array($result_about)){
   $i = 0;
   switch($obj_about['id']){
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
      $number=$obj_about['id'];
    }
   ?>
            <!--一小块菜单 六个循环一次 -->
            <div class="indexpf3">
              <div class="indexpf4"><a href='product_list_<?php echo $number; ?>.html'><?php echo $obj_about[1]?></a></div>
              <div class="iiul1">
                <?php 
     $sql_type_sec = "select * from yourphp_category where parentid='".$obj_about['id']."'";
     //echo $sql_type_sec."<br/>";
     $result_about_sec = mysql_query($sql_type_sec);
     while($obj_about_sec = mysql_fetch_array($result_about_sec)){
     $arr_child=explode(',',$obj_about_sec['arrchildid']);
     $count=count($arr_child);
     $result_type=mysql_query("select * from yourphp_category where parentid='".$obj_about_sec['id']."' order by id");
     $obj_type=mysql_fetch_assoc($result_type);
     $result_type1=mysql_query("select * from yourphp_category where parentid='".$obj_type['id']."' order by id");
     $obj_type1=mysql_fetch_assoc($result_type1);
    ?>
                <div><a href='<?php if($count>1){ echo "product_list".$obj_about_sec['id']."_child".$obj_type1['id'].".html"; }else{ echo "product_list_".$obj_about_sec[0].".html";} ?>'><?php echo $obj_about_sec[1]?></a></div>
                <?php }?>
                <div></div>
              </div>
            </div>
           
             <?php 
    $i++;
   }
    ?>
            <div style="clear: both; height: 1px; overflow: hidden;"></div>
          </div>
        </div>
      </li>
      <!--产品中心结束 -->
      
      <!--解决方案开始 -->
      <li class="navnewli clearfix"><a class="navnewoa" href="./scheme.html" id="fa">解决方案</a>
        <div class="dropdown" onmouseover="$('#fa').attr('class','navnewdq');" onmouseout="$('#fa').attr('class','navnewoa')"
                    style="position: absolute; width: 705px; height: 307px; display: none; background: url(images/indexpfbg559.png) no-repeat;
                    z-index: 9999; overflow: hidden; top: 116px; left: 238px;">
          <div style="height: 5px; width: 695px; margin-left: 5px; overflow: hidden; background: #D2332F;"> </div>
          <div class="indexpt1" style="width: 810px;">
            <div class="indexpf2 clearfix" style="padding-left: 30px;">
            
            <?php
   $typeid = 23;//解决方案
            $sql_about = "select * from yourphp_category where parentid = '".$typeid."'";
   $result_about = mysql_query($sql_about);
   $j = 0;
   while($obj_about = mysql_fetch_array($result_about)){
    $k=0;
   ?>
              <!--四个循环一次 -->
              <div class="indexpf3" style="min-height:120px;">
                <div class="indexpf4"><a href='schemes_<?php echo $obj_about['id']; ?>.html'><?php echo $obj_about[1]?></a></div>
                <div class="iiul1">
                  <?php 
     $sql_type_sec = "select * from yourphp_category where id in(".$obj_about['arrchildid'].")";
     //echo $sql_type_sec."<br/>";
     $result_about_sec = mysql_query($sql_type_sec);
     $i=-1;
     while($obj_about_sec = mysql_fetch_array($result_about_sec)){
      $i++;
      $k++;
    if($k==1){continue;}
    ?>
                <div><a href='scheme_list_<?php echo $obj_about_sec[0] ?>.html'><?php echo $obj_about_sec[1]?></a></div>
                <?php if($i>=4){break;} }?>
                </div>
              </div>
             <?php 
    if($j>=7){break;}
    $j++;
   }
    ?>
          </div>
        </div>
      </li>
      <!--解决方案结束 -->
      
      <!--服务支持开始 -->
      <li class="navnewli">
      <a id="fax2" class="navnewoa" href="service.html">服务支持</a>
        <div class="dropdown" onmouseover="$('#fax2').attr('class','navnewdq')" onmouseout="$('#fax2').attr('class','navnewoa')" style="position: absolute; width: 686px; height: 355px; display: none; background: url(images/xlbfbg2.png) no-repeat; z-index: 9999; overflow: hidden; top: 116px; left: 305px;">
          <div style="height: 5px; width: 371px; margin-left: 3px; overflow: hidden; background: #D2332F;"> </div>
          <div class="xldt">
            <div class="xldt3 clearfix"> 
            
             <?php
   $typeid = 17;//
            $sql_about = "select * from yourphp_category where parentid = '".$typeid."' order by id";
   $result_about = mysql_query($sql_about);
   $i = 0;
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
      case 125:
       $pagetype = "notice";
       $number=268;
       break;
      default:
       $pagetype="service";//默认跑到news.php页面
     } 
    $k=0;
    if($obj_about['id']==268){continue;}
   ?>
              <div class="xldt1">
                <div class="xldt2"><a href='<?php echo $pagetype; ?>_<?php echo $number; ?>.html'><?php echo $obj_about[1]?></a></div>
                <div class="iiul2">
                 <?php 
     $sql_type_sec = "select * from yourphp_category where id in(".$obj_about['arrchildid'].")";
     //echo $sql_type_sec."<br/>";
     $result_about_sec = mysql_query($sql_type_sec);
     while($obj_about_sec = mysql_fetch_array($result_about_sec)){     
      $k++;
    if($k==1){continue;}
    ?>
                <div><a href='<?php echo $pagetype; ?>_<?php echo $obj_about_sec[0]?>.html'><?php echo $obj_about_sec[1]?></a></div>
                <?php }?>
                </div>
              </div>
              <?php if($i==4){?> <div style="clear: both; height: 1px; overflow: hidden;"></div> <?php }?>
             <?php 
    $i++;
   }
    ?>
         
          </div>
    <div class="xldt4 clearfix">
     <div class="xldt5">
    <div><a href="<?php echo "notice"; ?>_<?php echo "268"; ?>.html"><img src="images/xlbfpicb1.jpg" height="67" width="201" /></a></div>
    <div class="xldt6"><a href="<?php echo "notice"; ?>_<?php echo "268"; ?>.html">公告</a></div>
   </div>
        </div>
      </li>
      <!--服务支持结束 -->
      
      <!--关于我们开始 -->
      <li class="navnewli clearfix">
      <a id="fax3" class="navnewoa" href="about.html">关于西科</a>
        <div class="dropdown" onmouseover="$('#fax3').attr('class','navnewdq')" onmouseout="$('#fax3').attr('class','navnewoa')" style="position: absolute; width:auto; height: 255px; display: none; background: url(images/xlbfbg21.png) no-repeat; z-index: 9999; overflow: hidden; top: 116px; left: 455px; padding-right: 8px;">
          <div style="height: 5px; width: 462px; margin-left: 4px; overflow: hidden; background: #D2332F;"></div>
          <div class="xldt">
            <div class="xldt3 clearfix"> 
            
             <?php
   $typeid = 44;//
            $sql_about = "select * from yourphp_category where parentid = '".$typeid."' order by id desc";
   $result_about = mysql_query($sql_about);
   $i = 0;
   while($obj_about = mysql_fetch_array($result_about)){
   switch($obj_about['id']){
    case 53:
     $number=53;
     break;
    case 112:
     $number=249;
     break; 
   }
    $k=0;
   ?>
              <div class="xldt1">
                <div class="xldt2"><a href='<?php echo $obj_about["catdir"] ?>_<?php echo $number; ?>.html'><?php echo $obj_about[1]?></a></div>
                <div class="iiul2">
                 <?php 
     $sql_type_sec = "select * from yourphp_category where id in(".$obj_about['arrchildid'].")";
     //echo $sql_type_sec."<br/>";
     $result_about_sec = mysql_query($sql_type_sec);
     while($obj_about_sec = mysql_fetch_array($result_about_sec)){     
      $k++;
    if($k==1){continue;}
    ?>
                <div><a href='<?php echo "about"; ?>_<?php echo $obj_about_sec[0]?>.html'><?php echo $obj_about_sec[1]?></a></div>
                <?php }?>
                </div>
              </div>
              <?php if($i==4){?> <div style="clear: both; height: 1px; overflow: hidden;"></div> <?php }?>
             <?php 
    $i++;
   }
    ?>
   <div style="width: 1px; height: 202px; background: #CFCFCF; overflow: hidden; float: left;"></div>
   <div style="width: 1px; height: 202px; background: #FFF; overflow: hidden; float: left;"></div>
         <div class="xldh4" style="position:absolute;left:205px;width:200px;">
    <div><img src="images/gywm.jpg" height="110" width="200" /></div>
   <div class="xldh6">西科通讯</div>
   <div class="xldh7">是领先的安防产品及行业解决方案提供商，致力于不断提升视频处理技术和视频分析技术，面向全球提供领先的安防产品。</div>
   </div>
          </div>
        </div>
      </li>
      <!--关于我们结束 -->
      
      <!--供应商平台开始 -->
      <li class="navnewli clearfix"><a id="fax1" class="navnewoa" href="supplie.html">供应商平台</a>
        <div class="dropdown" onmouseover="$('#fax1').attr('class','navnewdq')" onmouseout="$('#fax1').attr('class','navnewoa')" style="position:absolute;display:none;background:url(images/xlbfbg3.png) no-repeat;
z-index:9999;overflow:hidden;top:116px;left:590px;width:498px;height:263px;padding-right:52px;">
          <div style="height:5px;width:486px;margin-left:6px;overflow:hidden;background:#D2332F;"></div>
          <div class="xldh clearfix">
            <div class="xldh1">
              <div class="xldh5"> <a href="supplie.html">自荐</a></div>
              <div class="xldh5"> <a href="supplie2.html">内控部邮箱</a></div>
            </div>
            <div class="xldh2"> </div>
            <div class="xldh3"> </div>
            <div class="xldh4">
              <div><img src="images/gys.jpg"   width="277" height="110" /></div>
              <div class="xldh6">供应商平台</div>
              <div class="xldh7">&nbsp;</div>
            </div>
          </div>
        </div>
      </li>
      <!--供应商平台结束 -->
    </ul>
    
    <form id="ser" action="javascript:qwsearch();" method="post">
      <div style="float:right;position:relative;background:url(images/indexinuput.png) no-repeat;width:141px;height:26px;float:right;padding-left:8px;padding-right:25px;line-height:26px;margin-top:4px;">
        <input style="background:none;color:#909090;border:none;height:26px;width:141px;line-height:26px;" id="qwsearch" type="text" value="请输入关键字" onblur="if(this.value==''){this.value='请输入关键字';}" onfocus="if (this.value=='请输入关键字') {this.value='';}" />
        <a style="display:block;position:absolute;width:15px;height:15px;right:5px;top:7px;" href="javascript:qwsearch();"><img src="images/indexinuput1.png" /></a></div>
    </form>
  </div>
</div>
<!--菜单结束 -->
