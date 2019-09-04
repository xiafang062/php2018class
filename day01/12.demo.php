<?php 
//$_FILES获取文件的信息
var_dump($_FILES['updata']);
move_uploaded_file($_FILES['updata']['tmp_name'],'D:\tnwamp\tmp\xxx.jpg');
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>上传</title>
 </head>
 <body>
 	<form action="" method="post" enctype="multipart/form-data">
		<input type="file" name="updata">
		<input type="submit" value="上传">
 	</form>
 </body>
 </html>