<?php
$file = "temp.txt";
$data = file($file);
$line = explode(",",$data[count($data)-1]);
$time = $line[0];
$temp = $line[1];

?>
<html>
<head>
	<title>Weather in Skibbereen</title>
	<style>
		p,h1,h2,h3,h4,h5,h6{
			font-family: futura;
			font-size: 300%;
			color:#F9F9F9;
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
		<h3>It is currently</h3>
		<h1><?php
		echo $temp;
		?>°</h1>
		<h3>in Skibbereen</h3>
		<p>Most recently checked at <?php
		echo $time;
		?></p>
	</div>
</body>
</html>