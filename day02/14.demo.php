<?php 
//递减和递增
for ($i=0; $i < 10 ; $i++) { 
	echo $i;
}
for ($i=0; $i < 10 ; ++$i) { 
	echo $i;
}
echo '<hr>';
$a = 1;
$b = $a++;
echo $a,$b;   //2,1
$a = 1;
$b = ++$a;
echo $a,$b;   //2,2









 ?>