<!DOCTYPE html>
<html>
<head>
	<?php include "controller/home_controler.php" ?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>asfyauhsjdm</title>
	<link rel="stylesheet" href="./public/style.css">
</head>
<body>
	<ul>
		<li><a href="index.php?controller=home&action=home">home</a></li>
		<li><a href="index.php?controller=product&action=product_list">product</a></li>
		
	</ul>

	<?php 
		$xuly = new home_controller();
		$xuly->xulyyeucau();
	 ?>
</body>
</html>