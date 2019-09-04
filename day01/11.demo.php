<?php 

//var_dump($_SERVER);
//echo $_SERVER['HTTP_CONNECTION'];

echo '<table border=1>';
foreach ($_SERVER as $key => $value) {
	echo '<tr>';
	echo '<td>'.$key.'</td><td>'.$value.'</td>';
	echo '</tr>';
}
echo '</table>';

















 ?>