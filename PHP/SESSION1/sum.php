<?php 
	
$so_a = 12;
$so_b=11;
   function sum($a, $b)
{
	echo("tong 2 so la: ");
	echo($a + $b);
}
	
sum($so_a,$so_b);

echo("<br>");
echo("in ra ngay trung voi thu trong tuan. <br>");

function day()
{
	$date = getdate();
	for ($i=1; $i <=10 ; $i++) { 
		switch ($i) {
			case '1':
				# code...
			echo("<br>$i . no day");
				break;
			case '2':
				# code...
			echo(" <br>$i .thu 2");
				break;
			case '3':
				# code...
			echo("<br>$i .thu 3");
				break;
			case '4':
				# code...
			echo("<br>$i . thu 4");
				break;
			case '5':
				# code...
			echo(" <br>$i .thu 5");
				break;
			case '6':
				# code...
			echo("<br>$i .thu 6");
				break;
			case '7':
				# code...
			echo("<br>$i .thu 7");
				break;
			case '8':
				# code...
			echo("<br>$i .chu nhat");
				break;
			default:
				# code...
			echo("<br>$i .khong phai ngay trong tuan.");
				break;
		}


	}
}
day();
 ?>