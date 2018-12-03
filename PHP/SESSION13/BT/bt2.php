<?php 
function tinh()
{
	# code...

	$usd = 5;
	$err = 0;
	$keo = 0;
	$count = 0;
	$count_err =0;
	while ($keo <= 50) {
		# code...
		if ($usd>=5) {
			$err = $err +3;
			$keo ++;
			$usd = $usd -5;
		}else {
			$usd = $usd +1;
			$count ++;
		}
		if ($err >= 2) {
			$usd = $usd +3;
			$keo ++;
			$err = $err -2;
		} 
	}
	echo $usd +$count;
	echo "|" . $count ;

}

tinh();
 ?>