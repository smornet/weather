<?php

$auth = $_GET['auth'];
$temp = $_GET['temp'];
$password = "12345";

if($auth == $password){
	$file = "file.txt";
	$f = fopen($file, 'a');
	fwrite($f, date('l jS \of F Y h:i:s A').",".$temp.PHP_EOL);
	fclose($f);
}
else{
	echo "Authentication Failed";
}
?>