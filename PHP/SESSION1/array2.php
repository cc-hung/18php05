<?php 
	$sv = array(
			array('name' =>"nam" ,'year' =>"1997" ,'mail' =>"nam@gmail.com"),
			array('name' =>"Nga" ,'year' =>"1998" ,'mail' =>"nga@gmail.com"),
			array('name' =>"Huong" ,'year' =>"1997" ,'mail' =>" huong@gmail.com")
	);
	echo("cau 1:" . "<br>");
	foreach ($sv as $sv1) {
		# code...
		echo($sv1['name'] ." - ");
		echo($sv1['year'] ." - ");
		echo($sv1['mail'] );
		echo("<br>");
	};

	echo("<hr>");

	echo("cau 2+3:" . "<br>");
	$sv[0]["mail"] = "nam97@gmail.com";
	// echo($sv[1]["mail"]);
	foreach ($sv as $sv1) {
		# code...
		echo($sv1['name'] ." - ");
		echo($sv1['year'] ." - ");
		echo($sv1['mail'] );
		echo("<br>");
	};
	echo("<hr>");
	echo("cau 4:" . "<br>");
	unset($sv[1]);
	foreach ($sv as $sv1) {
		# code...
		echo($sv1['name'] ." - ");
		echo($sv1['year'] ." - ");
		echo($sv1['mail'] );
		echo("<br>");
	};
	echo("<hr>");
	echo("cau 5:" . "<br>");
	$sv[3] = array('name'=>"tung" ,'year'=>"2000" ,'mail'=> "tung@gmail.com");
	//$sv[][] = $sv_1;
	// array_push($sv,$sv1 );
	// array_push ($array, $val1, $val2, … , $valn)
	foreach ($sv as $sv1) {
		# code...
		echo($sv1["name"] . " - ");
		echo($sv1["year"] . " - ");
		echo($sv1["mail"] );
		echo("<br>");
	};
	echo("<hr>");
	echo("cau 6:" . "<br>");
	foreach ($sv as $sv1) {
		# code...
		if($sv1['year'] == "1997")

		  $sv1['mail'] = "test@gmail.com";
		var_dump($sv);
		echo("<br>");

	};
	// foreach ($sv as $sv1) {
	// 	# code...
	// 	echo($sv1["name"] . " - ");
	// 	echo($sv1["year"] . " - ");
	// 	echo($sv1["mail"] );
	// 	echo("<br>");
	// };
 ?>