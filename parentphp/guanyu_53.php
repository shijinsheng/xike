<div class="lxwm" style="height:200px;width:927px;"><img src="images/guanyu.jpg" /></div>
		<div class="lxwm1">
			<div class="lxwm2">
				<div class="lxwm3">总公司联系方式</div>
			</div>
			<div class="lxwm4">
				<div class="lxwm5">成都市西科高新技术有限公司</div>
				<div class="lxwm6 clearfix">
					<div class="lxwm7">电话：028-65929285</div>
					<div class="lxwm8">QQ：97317421</div>
				</div>
				<div class="lxwm6 clearfix">
					<div class="lxwm7">手机号码：13666208140</div>
					<div class="lxwm8">技术支持热线：18030672183</div>
				</div>
				<div class="lxwm6 clearfix">
					<div class="lxwm7">传真：028-66767227</div>
					<div class="lxwm8">地址：成都市西芯大道3号国腾科技园</div>
				</div>
			</div>
			<div class="lxwm9 clearfix">
				<a id="glxx1" class="lxwm9oa" onclick="showlink2(1)" href="javascript:void(0)" name="top">中国</a>
				<a id="glxx2" onclick="showlink2(2)" href="javascript:void(0)">海外分支结构</a>
				<a id="glxx3" onclick="showlink2(3)" href="javascript:void(0)">售后服务站</a>
			</div>
			<div id="cs1" style="display:block">
				<div class="lxwm10">
					<ul class="clearfix">
					<?php 
					$area=mysql_query("select * from yourphp_area where parentid='1'");
					while($row_area=mysql_fetch_array($area)){
					?>
						<li><a href="javascript:showcity1(<?php echo $row_area['id']; ?>);"><?php echo $row_area['name']; ?></a></li>
					<?php } ?>
					</ul>
				</div>
			</div>
			<div id="cs2" style="display:none">
				<div class="lxwm10">
					<ul class="clearfix">
					<?php 
					$area=mysql_query("select * from yourphp_area where parentid='2'");
					while($row_area=mysql_fetch_array($area)){
					?>
						<li><a href="javascript:showcity1(<?php echo $row_area['id']; ?>);"><?php echo $row_area['name']; ?></a></li>
					<?php } ?>
					</ul>
				</div>
			</div>
			<div id="cs3" style="display:none">
				<div class="lxwm10">
					<ul class="clearfix">
					<?php 
					$area=mysql_query("select * from yourphp_area where parentid='3'");
					while($row_area=mysql_fetch_array($area)){
					?>
						<li><a href="javascript:showcity1(<?php echo $row_area['id']; ?>);"><?php echo $row_area['name']; ?></a></li>
					<?php } ?>
					</ul>
				</div>
			</div>
			<div id="getinfo">
				
			</div>
		</div><!-- lxwm1 -->
			<script type="text/javascript">
                function showlink2(no) {
                    for (var iii = 1; iii <= 3; iii++) {
                        if (iii == no) {
                            $("#glxx" + no).attr("class", "lxwm9oa");
                            $("#cs" + no).css("display", "block");
							$('#getinfo').empty();
                            sk2(no-1);
                        } else {
                            $("#glxx" + iii).attr("class", "");
                            $("#cs" + iii).css("display", "none");
                        }
                    }
                }
            </script>﻿