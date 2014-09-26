<?php
require_once('./mydb/db.php');
require_once('./mydb/Paging.php');
$db=new DB();
$id=$_GET['sn'];
$sql_children=mysql_query("select * from yourphp_category where parentid='".$id."'");
while($result_children=mysql_fetch_array($sql_children)){
 ?>
<div class="prtc3 clearfix">
	<div class="prtc4"><?php echo $result_children['catname']; ?></div>
	<ul class="clearfix">
	<?php
	$sql_image=mysql_query("select * from yourphp_product where catid='".$result_children['id']."'");
	while($result_image=mysql_fetch_array($sql_image)){
	?>
		<li planid="<?php echo $result_image['id']; ?>" planname="<?php echo $result_image['xinghao']; ?>">
			<div class="prtc5"><img src="<?php echo $result_image['thumb']; ?>" width="110" height="80" /></div>
			<div class="prtc6 clearfix">
				<div style="float:left; width:22px; height:22px;">
					<input type="checkbox" id="planid<?php echo $result_image['id']; ?>" onclick="actionplan(this)" name="compareplan" value="001" />
				</div>
				<span style="height:16px;cursor:pointer"><?php echo $result_image['xinghao']; ?></span>
			</div>
		</li>
	<?php } ?>
	</ul>
</div>
<?php } ?>