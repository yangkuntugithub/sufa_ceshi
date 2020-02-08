<?php 

/*
	冒泡排序
*/

$arr = [1,56,45,78,12,98,4561,564,98,76,165,13,24,561];

function maopao($arr){
	$len = count($arr);

	for($j=$len; $j>1; $j--){   //控制总长度,长度小于等于1则比较结束
		
		for($i=0; $i<$j-1; $i++){	//控制每次比较长度,下标从0开始

			if($arr[$i]>$arr[$i+1]){	//位置互换
				$a = $arr[$i];
				$arr[$i] = $arr[$i+1];
				$arr[$i+1] = $a;
			}		
		}
	}	

	return $arr;
}

print_r(maopao($arr));

 ?>