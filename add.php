<?php

$auth = $_GET['auth'];
$temp = $_GET['temp'];
$password = "12345";

if($auth == $password){
	file_put_contents("temp.txt", time().",".$temp."\n");
}
else{
	echo "Authentication Failed";
}
?>