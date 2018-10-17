<?php 
	// mang 1 chieu
	$arrayName = array('a' => 1,'b' => 1,'c' => 1 );
	var_dump($arrayName);
	$arr = array(
			array('name' =>"hung" ,'ho' =>"nguyen" ,'lot' =>"hoang"  ),
			array('name' =>"hung" ,'ho' =>"nguyen" ,'lot' =>"hoang"  ),
			'hi' => array('name' =>"hung" ,'ho' =>"nguyen" ,'lot' =>"hoang"  ),
	);
	var_dump($arr);
	// lay rad2deg(number)
	echo($arr[1]['name']);
	echo("<br>");
	echo($arr[2]['ho']);

	// bo 1  phan tu trong mang
	unset($arr['hi']);
	var_dump($arr);
 ?>