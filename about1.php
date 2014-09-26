<?php
require_once('./mydb/db.php');
require_once('./mydb/Paging.php');
$db=new DB();
$id=$_GET['sn'];
$sql_content=mysql_query("select * from yourphp_area where id='".$id."'");
$row_content=mysql_fetch_assoc($sql_content);
	if(!empty($row_content['listorder'])){
		echo $row_content['listorder'];
	}else{
		echo "抱歉，没有具体的联系方式！";
	}
?>