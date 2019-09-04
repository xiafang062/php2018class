<?php 
//逻辑或
$a = 1;
$b = 2;
if($a < $b || $a == $b){
	echo '为真';
}else{
	echo '为假';
}

//逻辑与
if($a == $b && $a < 2){
	echo '为真';
}else{
	echo '为假';
}

//逻辑非
if(!($a > $b)){
	echo '为真';
}else{
	echo '为假';
}


//案例：闰年
$year = 2015;
if(($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0){
	echo '是闰年';
}



 ?>