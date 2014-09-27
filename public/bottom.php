<div class="bottom">
	<div class="bottom2 clearfix">
    	<div class="indexbo clearfix">
        	<div class="indexbo1" style="font-family:'微软雅黑',arial;">
            	<font style="padding-right: 2px;">&copy;</font>
                <font style="padding-right: 10px;">2013</font>成都西科 版权所有 
                蜀ICP备200903225号
          	</div>
        <div class="indexbo2">
            <span style="padding-right: 8px;">
            <a href="maps.html" style="font-family:'微软雅黑',arial">网站地图</a></span><span>|</span>
            <a href="about_<?php echo "53"; ?>.html" style="font-family:'微软雅黑',arial">联系我们</a><span>|</span>
            <a href="about_<?php echo "01"; ?>.html" style="font-family:'微软雅黑',arial">免责声明</a><span>|</span>
	        <a href="http://i.links.cn/?weburl=http://www.chengduxike.com" style="font-family:'微软雅黑',arial" target="_blank">站长统计</a>
    	</div>
    </div>
    
    <?php
		$sql_type="select * from yourphp_category where parentid=0";
		$infos=mysql_query($sql_type);
		while($a = mysql_fetch_array($infos)){
		$i=0;
		switch($a[0]){
			case 17:
				$number=240;
				break;
			case 44:
				$number=249;
				break;
		}
	?>
    <div class="bottomb">
        <div class="bottombf1"><a href="<?php echo $a["catdir"] ?>_<?php echo $number; ?>.html" style="font-family:'微软雅黑',arial"><?php echo $a[1] ?></a></div>
        <ul>
        <?php
		$sql_type2="select * from yourphp_category where parentid=".$a[0];
		//echo $sql_type2; 
		$infos2=mysql_query($sql_type2);
		while($a2 = mysql_fetch_array($infos2)){
			$i++;
			if($i>6){break;}
		$sql_pid=mysql_query("select * from yourphp_category where parentid='".$a2[0]."' order by id");
		$row_pid=mysql_fetch_assoc($sql_pid);
		?>
            <li><a href="<?php echo $a2["catdir"]?><?php echo $row_pid['id']; ?>_<?php echo $a2[0]; ?>.html" style="font-family:'微软雅黑',arial;"><?php echo $a2[1] ?></a></li>
        <?php }  ?>
        </ul>
    </div>
   <?php }?>
   
   
    <div class="bottomsx">
    </div>
    <div class="bottomxx">
        <div class="bottomxx1">
            <a href="about_<?php echo "265"; ?>.html" style="font-family:'微软雅黑',arial">全球营销网络</a></div>
        <div class="bottomxx2"><a href="about_<?php echo "265"; ?>.html"><img src="images/bottompic2.png" /></a></div>
    </div>
	</div>
</div>