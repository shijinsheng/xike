<?php
include 'mydb/db.php';
$db=new DB();
$sql="SELECT id,xinghao FROM yourphp_product";
$model=$db->query($sql);
$arr=array();
while($result=mysql_fetch_assoc($model)){
	$arr[]=$result;
}
var_dump($arr);
?>