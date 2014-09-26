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
<meta name="description" content="成都西科,西科光端机,成都西科高新技术有限公司">
<meta name="baidu-site-verification" content="LD10I6bZyc" />
<title></title>
<!--[if IE 6]>
<script type="text/javascript" src="js/DD_belatedPNG_0.0.8a.js" ></script>
<script type="text/javascript">
DD_belatedPNG.fix('.index_gdm3,.index_gdm3 a,.index_pathl3,a.index_gdm4,.nav2,img,background');
</script>
<![endif]-->
<link href="css/xgstyle3.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" />
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script> 
<script type="text/javascript" src="js/jquery.hoverIntent.minified.js"></script> 
<script type="text/javascript" src="js/jquery.naviDropDown.js"></script> 
<script type="text/javascript" src="js/jquery.Pages.js"></script>
<link href="css/page.css" type="text/css" rel="stylesheet" />
<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script> 
</head>
<body>
<script type="text/javascript">
    $(function () {
        $('#navigation_horiz').naviDropDown({
        
        });
    var cTitle=$('.rclna');
    $(document).attr('title',cTitle.text());  
    });
</script>
<style type="text/css">
.indexpf4 a { background-image: none;height: auto;width: auto;}
.indexpf4 a:hover { background: none;height: auto;width: auto;}
.indexpf3 ul li a {background-image: none;height: auto;width: auto;}
.indexpf3 ul li a:hover {background-image: none;height: auto;width: auto;}
.yuyan{ float:right; width:185px; height:20px; z-index:1001;}
.yuyan1{ width:175px; height:20px; background:url(images/xl_03.jpg) no-repeat; padding-left:10px; line-height:20px; color:#333; cursor:pointer; font-size:11px; font-family:Verdana; position:relative; z-index:1001;}
.yuyan2{ position:absolute; top:19px; left:0; width:183px; border:1px solid #C4BDAA;z-index:1001; background:#fff; padding-bottom:6px; display:none;}
.yuyan2 ul li{  float:left; width:183px; height:20px; line-height:20px;}
.yuyan2 ul li a{padding:3px 0 0 8px; color:#333; display:block; width:175px;font-family:Verdana;}
.yuyan2 ul li a:hover{ background:#EBEBEB;}
</style>
<?php include "public/top.php"; ?>
<script type="text/javascript">
    $(document).ready(function () {
        $("a[rel^='prettyPhoto']").prettyPhoto();
    });
</script>
<div style="width: 100%; height: 1px; background: #fff; overflow: hidden;"> </div>
<div class="newsbody clearfix">
  <div class="xgdg4 clearfix" style="width: 1178px; margin: 0 auto;">
    <?php include("public/pleft_child.php"); ?>
    <div class="newsbodyr" style="float: right;">
      <div class="nbrtop clearfix">
        <form action="javascript:prsera4();" method="post">
          <div class="prdltop clearfix"><a class="prdltop1" target="_blank" href="http://service.weibo.com/share/share.php?url=http%3A%2F%2Fwww.hikvision.com%2Fcn%2FProducts_show.asp%3Fid%3D5031%26showid%3D1&appkey=3797775739&title=&pic=&ralateUid=&language=">分享</a> <a class="prdltop2" href="fk.php?stat=1&c_kind=2&c_kind2=115&c_kind3=134&c_kind4=238&id=&type=2&iframe=true&width=735&height=420"  rel="prettyPhoto[iframesl]">反馈</a> <a class="prdltop3"  href="contrast.php">产品对比</a>
            <div class="tsss">
              <div class="tsss2">
                <input type="text" value="请输入产品型号" onblur="if (this.value==''){ this.value='请输入产品型号';}"
                    onfocus="if (this.value=='请输入产品型号') {this.value='';}" id="prkeynum2" />
                <a class="tsss1" href="javascript:prsera4()"><img src="images/indexinuput1.png"></a></div>
            </div>
          </div>
        </form>
      </div>
      <script language="javascript" type="text/javascript">
    function prsera4() {
        var keycp = document.getElementById("prkeynum2");
        if (keycp.value != null && keycp.value != "" && keycp.value != "请输入产品型号") {
            window.location.href = "prSearch.php?stat=1&c_kind=2&key=" + keycp.value;
        }
        else {
            alert("请输入产品型号查询");
        }
    }

</script>
      <div class="jjfanyban"> <img width="912" height="257" src="images/chanpin2.jpg" /> </div>
      <div style="height: 5px; overflow: hidden; background: #D71920;"> </div>
      <div class="prdltop7 clearfix"> <span><a></a> <?php echo $mianbaoxue ?> </span></div>
      <div style="margin-top: 0; border-bottom: 1px solid #E1E1E1;" id="zz1" class="jjfajsh clearfix">
       
        <div class="pagelist1 clearfix" id="page">
    <script>
      $(function(){
        $('.jjfajsh1').each(function(){
          var index=$(this).index();
          if(index%3==0){
            $(this).children().css('border-right','0');
          }
        })
        $('.jjfajsh1').last().children().css('border-right','0');
      });
    </script>
          <?php
        $getid = !empty($_GET['typeid'])?$_GET['typeid']:56;
      if($getid){$where = "and catid ='".$getid."'";}
      else{$where = "";}
      $sql_product="select * from yourphp_product where catid='".$getid."' order by id";
      //echo $sql_product;
      $result_product=mysql_query($sql_product);
      while($obj_product = mysql_fetch_array($result_product)){
    ?>
          <div class="jjfajsh1">
            <div class="prdltop4">
              <div class="jjfajsh2"><a href="product_info<?php echo $getid; ?>_child<?php echo $obj_product["id"] ?>.html"><img  src="<?php echo $obj_product['thumb']; ?> " width="185" height="185" /></a>
                <div class="newhot"><img src="images/proupic1.png" width="50" height="45" /></div>
              </div>
              <div class="jjfajsh3">
                <div class="jjfajshh3"><?php echo $obj_product["xinghao"] ?> </div>
        <div class="jjfajshh4"><?php echo $obj_product["description"]; ?></div>
              </div>
            </div>
            <div class="jjfajsh4"><a href="product_info<?php echo $getid; ?>_child<?php echo $obj_product["id"] ?>.html"> 了解详细+</a></div>
          </div>
          <?php
      }
    ?>
          <div style="clear: both;"></div>
          <div style="padding-left: 341px; padding-top: 1px;" class="prdltop5 clearfix"></div>
        </div>
    <script type="text/javascript">
      $('#page').kkPages({
        PagesClass: '.jjfajsh1', //需要分页的元素
        PagesMth: 6, //每页显示个数 
        PagesNavMth: 8 //显示导航个数
      }); 
    </script> 
      </div>
      <div class="xgdg5" style=" display: none; ">
        <div style="height: 23px; overflow: hidden;"></div>
      </div>
    </div>
  </div>
</div>
<div class="bottom">
  <?php require("public/bottom.php"); ?>
</div>
</body>
</html>
