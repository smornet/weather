<?php
$file = "temp.txt";
$data = file($file);
$line = explode(",",$data[count($data)-1]);
$time = $line[0];
$temp = $line[1];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Weather in Skibbereen</title>
	<style>
		p,h1,h2,h3,h4,h5,h6{
			font-family: futura;
			color:#F9F9F9;
		}
		p{
			font-size:12pt;
		}
		h1{
			font-size: 35pt;
		}
		h2{
			font-size: 26pt;
		}
		body{
			background: #3b5998;
		}
		div{
			width: 80%;
			margin-left: auto;
			margin-right: auto;
		}
	</style>
</head>
<body>
	<div>
		<h2>It is currently</h2>
		<h1><?php
		echo $temp;
		?>&deg;</h1>
		<h2>in Skibbereen</h2>
		<p>Most recently checked at <?php
		echo $time;
		?></p>
	</div>
</body>
</html>