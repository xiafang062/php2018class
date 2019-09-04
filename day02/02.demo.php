<?php 
//字符串分割
$hob = '杀人,防火,烫头';
$arr = explode(',',$hob);
var_dump($arr);
//字符串合并
$hob = implode(',',$arr);
var_dump($hob);
//删除字符
$str = trim(' 您好!世界! ',"您");  //删除没有起作用
echo $str;
$str = trim('hello world','he');   //删除英文字符
echo $str;
echo '<hr>';
//字符串替换
$str = 'admin';
echo $str;
$root = substr_replace($str,'admin888',0);
echo $root;
echo '<hr>';
//子字符串查找和替换
$root = str_replace('\\','/',__DIR__);
echo $root;
echo '<hr>';
//从正的第一个开始截取5个字符  //D:/tn
$root = substr($root,0,5);  
echo $root;
$root = substr($root,0,-5);    //去掉了后面的5个
echo $root;
?>