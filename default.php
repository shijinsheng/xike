<?php
error_reporting(0);
require_once('./mydb/db.php');
require_once('./mydb/Paging.php');
$db=new DB();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="西科,成都西科,西科光端机,成都西科高新技术有限公司" />
    <meta name="description" content="成都西科高新技术有限公司生产高性能的光端机、光纤收发器、光纤交换机、poe交换机、工业交换机、网络摄像机，欢迎致电联系我们">
	<title>光端机|光纤收发器|光纤交换机|poe交换机|工业交换机|网络摄像机-成都西科高新技术有限公司</title>
    <link href="css/style.css" type="text/css" rel="stylesheet" />
    <!--[if IE 6]>
	<script type="text/javascript" src="js/DD_belatedPNG_0.0.8a.js" ></script>
	<script type="text/javascript">
	DD_belatedPNG.fix('.indexpt,.indexpf,.ibaner1 a.ibaner2,.ibaner1 a,.itj8,.bottomsx,img,background');
	</script>
	<![endif]-->
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/index1.js"></script>
    <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" />
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.hoverIntent.minified.js"></script>
    <script type="text/javascript" src="js/jquery.naviDropDown.js"></script>
    <link rel="stylesheet" href="css/index.css" type="text/css" media="screen, project, print" />
</head>
<body>
<?php require("public/top.php");?>
<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("a[rel^='prettyPhoto']").prettyPhoto();
    });
</script>
<script>
	$(function(){
		var imgHeight=$(document.body).height();
		var imgWidth=$(document.body).width();
		if(imgWidth<1198){
			imgWidth=1198;
		}
		$('#slide-index').css({
			'height':imgHeight*0.53+'px',
			'min-width':imgWidth+'px',
			'-width':imgWidth+'px'
			});
		$('#slide-index .slides').css({
			'min-width':imgWidth+'px',
			'-width':imgWidth+'px'
			});
		$('#slide-index .slide').css({
			'min-width':imgWidth+'px',
			'-width':imgWidth+'px',
			'height':imgHeight*0.53+'px'
			});
		$('#slide-index .image').css({
			'min-width':imgWidth+'px',
			'-width':imgWidth+'px',
			'height':imgHeight*0.53+'px'
			});
		$('.videoList-container').css('height',imgHeight*0.53+'px');
	});
</script>
<div class="videoList-container" id="pcList" style="display:none;margin-bottom:0px;">
<div id="slide-index" style=" margin:0 auto;">          
	<div class="slides">
	<?php 
	$sql_slide=mysql_query("select * from yourphp_attachment where catid='1'");
	while($result_slide=mysql_fetch_array($sql_slide)){
	?>
		<div class="slide autoMaxWidth"  links=[{left:'30px',top:'81px'},{left:'30px',top:'244px'},{direction:'tb'}]>	  		
			<div class="image" id='bi_1' style=""><img  src="http://localhost/xike/<?php echo $result_slide['filepath']; ?>" width="100%" height="100%" /></div>			
			<div class="text" id='bt_1'></div>
			<div class="button" id='bb_1'></div>
		</div>
	<?php } ?>
	</div>
	<div class="control">
		<a href=""></a>
		<a href=""></a>
		<a href=""></a>
	</div>
</div>			
</div>
<script src="js/banner.js" type="text/javascript"></script>
    <div class="inewsbg">
        <div class="inews clearfix">
            <div class="inewsl clearfix">
                <!--<div class="inewsl1">最新动态</div>-->
                <!--<div class="inewsl2"></div>-->
                <div class="inewsl3" id="scrollNews" style="overflow: hidden; height: 39px; line-height: 39px;">
                    <ul class="clearfix">
                       <?php 
						$sql_news = "select * from yourphp_article where catid =93 limit 0,10";
						//echo $sql_news;
						$resutl = mysql_query($sql_news);
						?>
                        <?php 
                        while($obj = mysql_fetch_array($resutl)){
                    ?>
                        <li style="height: 39px">
                            <a href="newsinfo.php?id=<?php echo $obj['id']; ?>"><?php echo $obj["title"]?></a>
                            <span><?php echo date("Y-m-d H:i:s",$obj["createtime"])?></span>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="inewsr clearfix" style="position: relative;">
                <div class="iwxt" style="display: none;">
                    <div class="iwxt1"><a id="weixinlogoc" href="javascript:void(0);"></a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="itj clearfix">
        
        
        <div class="itj1">
            <div class="itj2">
                <a href="prlbtj_2.html">热点产品</a>
            </div>
            <script>
				$(function(){
					$('#jp1').css('display','block');
				});
			</script>
            <div class="itj3 clearfix" style="margin-top:2px;">
                <div class="ipicnew1" style="left: 160px;"><a href="javascript:jian();"></a></div>
                <div class="ipicnew2" style="left: 170px;"><a href="javascript:jia();"></a></div>
                <?php
					$n=0;
					$sql_obj4=mysql_query("select * from yourphp_product where catid='175' limit 0,8");
					while($row_obj4=mysql_fetch_array($sql_obj4)){
					$n++;
				?>
                <div id="jp<?php echo $n; ?>" style="display:none;">
                    <div class="itj4" style="width: 143px; height: 104px;background: #fff; padding-bottom: 16px">
                        <a id="cplink" href="product_info<?php echo "175"; ?>_<?php echo $row_obj4['id']; ?>.html"><img src="http://localhost/xike<?php echo $row_obj4['thumb']; ?>" width="143" height="135" id="bannerimg" /></a>
                    </div>
                    <div class="itj5" style="width: 120px; padding-left: 5px;">
                        <div class="itj6"><a href="product_info<?php echo "175"; ?>_<?php echo $row_obj4['id']; ?>.html" id="bannerlink"><?php echo $row_obj4['xinghao']; ?></a></div>
                        <div id="bannetitle" class="itj7"><?php echo $row_obj4['description']; ?></div>
                    </div>
                </div>
				<?php } ?>
                
                <div class="pdy8 clearfix" style="display:none;">
				<?php
					$m=0;
					$sql_obj4=mysql_query("select * from yourphp_product where catid='175' limit 0,8");
					while($row_obj4=mysql_fetch_array($sql_obj4)){
					$m++;
				?>
                    <a id="Image<?php echo $m; ?>" class="none" onclick="show('<?php echo $m; ?>')" href="javascript:void(0)"></a>
                    <input id="imgurl<?php echo $m; ?>" type="hidden" value="http://localhost/xike<?php echo $row_obj4['thumb']; ?>" />
                    <input id="linkurl<?php echo $m; ?>" type="hidden" value="product_info<?php echo "175"; ?>_<?php echo $row_obj4['id']; ?>.html" />
                    <input id="title<?php echo $m; ?>" type="hidden" value="<?php echo $row_obj4['xinghao']; ?>" />
                    <input id="indextitle<?php echo $m; ?>" type="hidden" value="<?php echo $row_obj4['description']; ?>" />
				<?php } ?>
                </div>
                
                <script>
                var link=document.getElementById("bannerlink");
                var cplink=document.getElementById("cplink");
                var img=document.getElementById("bannerimg");
                var bannetitle=document.getElementById("bannetitle");
                var setTime111="";
                var imgNo1 = Math.round(Math.random() * 8);
                function rotate111()
                {
                imgNo1 = (imgNo1 >=8 ) ? 1 : imgNo1+1;
                for(var i=1;i<=8;i++)
                {
                if(i==imgNo1)
                {
                link.href=document.getElementById("linkurl"+i).value;//imgdom.alt;
                img.src=document.getElementById("imgurl"+i).value;
                link.innerHTML=document.getElementById("title"+i).value;//imgdom.title;
                bannetitle.innerHTML=document.getElementById("indextitle"+i).value;
                document.getElementById("Image"+i).className="pdy8oa";
                cplink.href=document.getElementById("linkurl"+i).value;//imgdom.alt;
                }
                else
                {
                document.getElementById("Image"+i).className="none";
                }
                }
                setTime111=setTimeout("rotate111()",5000);
                }
                function show(n)
                {document.getElementById("dq").value=n;
                for(var i=1;i<=eval(8);i++)
                {
                if(i==n)
                {
                document.getElementById("Image"+eval(i)).className="pdy8oa";
                document.getElementById("jp"+eval(i)).style.display="block";
                }else{
                document.getElementById("Image"+eval(i)).className="none";
                document.getElementById("jp"+eval(i)).style.display="none";
                }
                }
                }
                function jia(l)
                {
                var dq=Number(document.getElementById("dq").value);
                if((dq+1)<=8)
                {show(dq+1);
                document.getElementById("dq").value=dq+1;
                }
                }
                function jian(l)
                {
                var dq=Number(document.getElementById("dq").value);
                if((dq-1)>0)
                {
                show(dq-1);
                document.getElementById("dq").value=dq-1;
                }
                } 
                </script>
                <input id="dq" type="hidden" value="1" />
                <script type="text/javascript">rotate111();</script>
            </div>
                
        </div>
		<script>
			$(function(){
				$('#zp1').css('display','block');
			});
		</script>
        <div class="itj1">
            <div class="itj2"><a href="newshd_85.php"> </a></div>
            <div class="itj3 clearfix" id="zjsj">
			<?php 
				$k=0;
				$sql_obj3=mysql_query("select * from yourphp_product where catid=168 limit 0,8");
				while($row_obj3=mysql_fetch_array($sql_obj3)){
				$k++;
			?>
               <div id="zp<?php echo $k; ?>" style="display:none">
			   		<div class="ipicnew1"><a href="javascript:jian3();"></a></div>
					<div class="ipicnew2"><a href="javascript:jia3()"></a></div>
					<div class="itj4"><a href="product_info<?php echo "168"; ?>_<?php echo $row_obj3['id']; ?>.html"><img src="http://localhost/xike<?php echo $row_obj3['thumb']; ?>" height="135" width="143" /></a></div>
					<div class="itj5">
						<div class="itj6"><a href="product_info<?php echo "168"; ?>_<?php echo $row_obj3['id']; ?>.html"><?php echo $row_obj3['xinghao']; ?></a></div>
						<div class="itj7"><?php echo $row_obj3['description']; ?></div>
					</div>
			   </div>
			<?php }　?>

                <script type="text/javascript">
                    
                    function show3(n)
                    {
                        document.getElementById("Hidden3").value=n;
                        for(var i=1;i<=eval(8);i++)
                        {
                            if(i==n)
                            {
                                document.getElementById("zp"+eval(i)).style.display="block";
                            }else{
                                document.getElementById("zp"+eval(i)).style.display="none";
                            }
                        }
                    }
                    function jia3(l)
                    {
                        var dq=Number(document.getElementById("Hidden3").value);
                        if((dq+1)<=8)
                        {show3(dq+1);
                        document.getElementById("Hidden3").value=dq+1;
                    }
                    }
                    function jian3(l)
                    {
                        var dq=Number(document.getElementById("Hidden3").value);
                        if((dq-1)>0)
                        {
                            show3(dq-1);
                            document.getElementById("Hidden3").value=dq-1;
                        }
                    }
                
                </script>
                <input type="hidden" id="Hidden3" value="1" />
            </div>
        </div>
        <div class="itj1">
            <div class="itj2">
                <a href="news_m1.php?typeid=98"> </a>
            </div>
			<script>
				$(function(){
					$('#xp1').css('display','block');
				});
			</script>
            <div class="itj3 clearfix">
			<?php 
				$n=0;
				$sql_obj2=mysql_query("select * from yourphp_product where catid='180' limit 0,8");
				while($row_obj2=mysql_fetch_array($sql_obj2)){
				$n++;
			?>
                <div id="xp<?php echo $n; ?>" style="display:none;">
					<div class="ipicnew1"><a href="javascript:jian2();"></a></div>
					<div class="ipicnew2"><a href="javascript:jia2()"></a></div>
					<div class="itj4"><a href="product_info<?php echo "180"; ?>_<?php echo $row_obj2['id']; ?>.html"><img src="http://localhost/xike<?php echo $row_obj2['thumb']; ?>" width="143" height="135" /></a></div>
					<div class="itj5">
						<div class="itj6"><a href="product_info<?php echo "180"; ?>_<?php echo $row_obj2['id']; ?>.html"><?php echo $row_obj2['xinghao']; ?></a></div>
						<div class="itj7"><?php echo $row_obj2['description']; ?></div>
					</div>
				</div>
			<?php } ?>
                <script type="text/javascript">
                    function show2(n)
                    {
                        document.getElementById("Hidden2").value=n;
                        for(var i=1;i<=eval(8);i++)
                        {
                            if(i==n)
                            {
                                document.getElementById("xp"+eval(i)).style.display="block";
                            }else{
                                document.getElementById("xp"+eval(i)).style.display="none";
                            }
                        }
                    }
                    function jia2(l)
                    {
                        var dq=Number(document.getElementById("Hidden2").value);
                        if((dq+1)<=8)
                        {show2(dq+1);
                        document.getElementById("Hidden2").value=dq+1;
                    }
                    }
                    function jian2(l)
                    {
                        var dq=Number(document.getElementById("Hidden2").value);
                        if((dq-1)>0)
                        {
                            show2(dq-1);
                            document.getElementById("Hidden2").value=dq-1;
                        }
                    }
                </script>

                <input type="hidden" id="Hidden2" value="1" />

            </div>
        </div>
        <div class="itj1" style="margin-right: 0;">

            <div class="itj2">
                <a href="news_m3.php?typeid=97
"> </a>
            </div>
			<script>
				$(function(){
					$('#tp1').css('display','block');
				});
			</script>
            <div class="itj3 clearfix">
			 <?php 
			 	$m=0;
		   		$sql_obj1=mysql_query("select * from yourphp_product where catid='186' limit 0,8");
				while($row_obj1=mysql_fetch_array($sql_obj1)){
				$m++;
		   ?>
                <div id="tp<?php echo $m; ?>" style="display:none;"> 
				<div class="ipicnew1"><a href="javascript:jian1();"></a></div>
				<div class="ipicnew2"><a href="javascript:jia1();"></a></div>
				<div class="itj4">
				   <a href="product_info<?php echo "186"; ?>_<?php echo $row_obj1['id']; ?>.html"><img src="http://localhost/xike<?php echo $row_obj1['thumb']; ?>" width="110" height="135" /></a>
				</div>
				<div class="itj5">
					<div class="itj6" ><a href="news_m3.php?typeid=101" title=""><?php echo $row_obj1['xinghao']; ?></a></div>
					<div class="itj7"><?php echo $row_obj1['description']; ?></div>
				</div>
			</div>
			<?php } ?>
                <script type="text/javascript">
                    function show1(n)
                    {
                        document.getElementById("Hidden1").value=n;
                        for(var i=1;i<=eval(8);i++)
                        {
                            if(i==n)
                            {
                                document.getElementById("tp"+eval(i)).style.display="block";
                            }else{
                                document.getElementById("tp"+eval(i)).style.display="none";
                            }
                        }
                    }
                    function jia1(l)
                    {
                        var dq=Number(document.getElementById("Hidden1").value);
                        if((dq+1)<=8)
                        {show1(dq+1);
                        document.getElementById("Hidden1").value=dq+1;
                    }
                    }
                    function jian1(l)
                    {
                        var dq=Number(document.getElementById("Hidden1").value);
                        if((dq-1)>0)
                        {
                            show1(dq-1);
                            document.getElementById("Hidden1").value=dq-1;
                        }
                    }
                </script>
                <input type="hidden" id="Hidden1" value="1" />
            </div>

        </div>
    </div>
<div class="bottom"><?php require("public/bottom.php");?></div>
</body>
</html>
