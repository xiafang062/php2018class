<?php 
//整数型
$num = 10;
$num = -10;
$num = 0;
$num = 0127;  //83   1*8*8+2*8+7=64+16+7=87
$num = 01271111;  
var_dump($num);
$num = 0x123; //291   1*16*16+2*16+3
var_dump($num);
$num = 0b11111111111111111111111111111111;  //float 1.1111111111111E+31
var_dump($num);
echo '<hr>';
echo PHP_INT_MAX;  //2147483647
$num = 21500000000000;
var_dump($num);
echo '<hr>';
echo PHP_INT_SIZE;


?>