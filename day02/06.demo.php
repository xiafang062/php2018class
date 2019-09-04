<?php 
//null类型
$a = null;
$b = "";  //空字符串
if(empty($b)){
	echo '为空';
}
//给函数的形参加默认值
function abc($a=null,$b=null){

}
abc();


 ?>