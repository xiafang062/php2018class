<?php 
//可变变量
$name = 'hello';
$$name = 'world';   //$name的值hello，在它的前面在加$返回，就会找$name里值当成变量名
$$$name = '你好！';
echo $hello;  
echo '<br>';
echo $name . ${$name} . ${${$name}};


?>