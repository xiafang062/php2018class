<?php 
//字符串类型
$name = 'admin';   //纯字符串
$name = '1';
$name = "admin";
echo '<hr>';
//单引号和双引号的区别
echo "用户名为：{$name}";   //双引号可以解析变量 
echo '用户名为：{$name}';   //单引号不能解析变量 
echo '<hr>';
//转义字符：\,目的就是让一些特殊字符失去在php中本身意义
echo "用户名\为：\"{$name}\" \n价格为：\$j";
echo '用户名为：\\\'{$name}';
//定界符：
$str = <<<EEE
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
	</head>
	<body>
		<p>泰牛程序员{$name}</p>
	</body>
	</html>
EEE;
echo $str;
echo '<hr>';
$str1 = <<<'SSS'
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
	</head>
	<body>
		<p>泰牛程序员{$name}</p>
	</body>
	</html>

SSS;
echo $str1;
?>
