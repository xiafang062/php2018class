<?php 
//双左斜杠是单行注释，用于对下面的语句或写到语句后面
echo '你好';  //输出打印string类型的你好
# 单行注释，用于对当前文件的说明
# 操作MySQL函数库文件
# 作者：XXXX
# 日期：2017-3-3


/*
	这里就是多行注释，用于对函数或类的说明
 */

/**
* 人类
* $name 创建对象的名称--属性
* $age 创建对象时的名称--
*/
class ren
{
	$nmae;
	$age;
	function pao()
	{
		echo '跑···';
	}
}
$zhangsan = new ren();
$zhangsan->name = '张三';


?>