<?php
	function  preg($str,$key=array()){//正则替换关键词
		if(!isset($str[0]) || empty($key)) return  $str;
		$replace=array();
		$pattern=array(); 
		foreach($key as $p){
			$replace[]='<a href="www.halley.com.cn">'.$p.'</a>';
			$pattern[]="/".$p."/";
		}
		
		return preg_replace($pattern,$replace,$str);
	}
	
?>