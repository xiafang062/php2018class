<?php 
//类型的转换
$num1 = 1;
$num2 = 2;
$num3[] = $num1 . $num2;   //自动转换了
var_dump($num3);
if($num1){  //自动转换为boolean型
	echo '你好';
}

//强制转换
$num = 1;
var_dump((string)$num);
$str = '您好';
var_dump((float)$str);

?>