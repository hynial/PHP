<?php
	$a = "/www/proj-asd/app/home/news";
	$b = "/www/proj-asd/app/_view";

	function getRelPath($a,$b){
	    if($a[0] != $b[0]) return $a;
	    return getRelPath(substr($a,1),substr($b,1));
	}
	
	var_dump(getRelPath($a,$b));

	function getRelPath2($a,$b){
		for($index = 0; $index < strlen($a); $index++){
				if($a[$index] != $b[$index]){
					return substr($a,$index);
				}
		}
		return $a;
	}
	
	var_dump(getRelPath2($a,$b));
	
	// 路径匹配
	function getRelPath3($a,$b){
	    $a = explode('/',$a);
	    $b = explode('/',$b);
	    $diff = array_diff_assoc($a,$b);
	    return implode('/',array_slice($a,key($diff)));
	}

	var_dump(getRelPath3($a,$b));
