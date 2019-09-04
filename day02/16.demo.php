<?php 
//字符串连接符
$name = 'admin';
echo '您好!'.$name.'欢迎来到泰牛';
echo '您好！.$name欢迎来到泰牛';
echo '<br>';
//.=:链接后再赋值
$user = 'admin';
$user .= '888';   //相当于：$user = 'admin' . '888';
echo $user;
echo '<br>';
//随机数--给4个随机数
$num = rand(0,9);
$num .= rand(0,9);
$num .= rand(0,9);
$num .= rand(0,9);
echo $num;



 ?>