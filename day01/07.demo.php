<?php 
//值传递
$name = '张三';
$zs = $name;
echo $name,$zs;
echo '<br>';
$name = '李四';  //变量的重新赋值，用现在的值覆盖原来的值
echo $name,$zs;

//引用传递
$age = 18;
$zsage = &$age;  //用&符号取得$age变量的数据地址，&叫取址符号
echo $age,$zsage;
echo '<br>';
$age = 20; //引用传递方式如果是修改某个变量，那么都会改变。
echo $age,$zsage;
echo '<br>';
//删除其中一个后另一个不受影响
unset($age);
echo $age,$zsage;
 ?>