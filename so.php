<?php
require_once('./mydb/db.php');
require_once('./mydb/Paging.php');
$db=new DB();
$id=$_GET['sn'];
$arr=explode(',',$id);
$sql=mysql_query("select * from yourphp_product where id in(".$id.")");
$query=mysql_fetch_array($sql);
echo $query['title'];
?>
