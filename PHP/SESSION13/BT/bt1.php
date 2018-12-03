<?php 

function tinh ($soluong)
{
	# code...
	$binh = $soluong;
	$minh = $binh/3;
	$chuyen=0;
	while($binh != $minh*2){
		$binh--;
		$minh++;
		$chuyen ++;
	}
	echo "binh chuyen cho minh:".$chuyen ."quyen";
};
tinh(27);
 ?>
