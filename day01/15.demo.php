<?php 
$user = $_REQUEST['user'];
echo $user;
//接口：把功能封装成类或函数，然后把一个url地址发布出去，让别人使用
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<form action="" method="post">
 		<input type="text" name="user">
 		<input type="submit" value="提交">
 	</form>
 </body>
 </html>