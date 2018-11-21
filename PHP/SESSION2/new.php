<?php 

$myarr = array(
			 array('name' => "IphoneX" ,'img' => "1.jpg" ,'price' => 1000,'discount' => "20" ),
			 array('name' => "J7prime" ,'img' => "1.jpg" ,'price' => 600,'discount' => "15" ),
			 array('name' => "Oppo" ,'img' => "1.jpg" ,'price' => 700,'discount' => "0" )
);

function display($arr)
{
	# code...
	// echo("cau 1:" ."<br>");
	foreach ($arr as $key => $new_arr) {
		# code...
		echo("<div class='product'>");
		echo( '<p class="name">' . $new_arr['name'] . '</p>');
		echo( '<img src="' . $new_arr['img'] . '" alt="">' );
		echo( '<p class="price"> giá:' . $new_arr['price'] . '</p>' );
		echo( '<p class="discount">giảm: ' . $new_arr['discount'] . '%</p>');
		echo("</div>");
		
	}
};
function discount($arr)
{
	# code...
	foreach ($arr as $key => $new_arr) {
		# code...
		if($new_arr['price'] >= 700) $arr[$key]['discount']=30;
	}
	return $arr;
};

function delete($arr,$name)
{
	# code...
	foreach ($arr as $key => $new_arr) {
		# code...
		if($new_arr['name'] == $name) unset($arr[$key]);
	}
	return $arr;
};

function add($arr,$key,$name,$img,$price,$dis)
{
	# code.
	$arr[count($arr)]['name'] = $name;
	$arr[count($arr)]['img'] = $img;
	$arr[count($arr)]['price'] = $price;
	$arr[count($arr)]['discount'] = $dis;

	return $arr;
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="css_ex2.css">
</head>
<body>
	
	<p>cau 1:</p>
	<?php display($myarr); ?>	
	<div style="clear: both; width: 200;"></div>
	<hr>

	<p>cau 2 + 3</p>
	<?php display(discount($myarr));  ?>
	<div style="clear: both; width: 200;"></div>
	<hr>

	<p>cau 4</p>
	<?php display(delete($myarr,"Oppo")) ?>
	<div style="clear: both; width: 200;"></div>
	<hr>

	<p> cau 5:</p>
	<?php display(add($myarr,"Sony Eperia","1.jpg",500,"10")) ?>
</body>
</html>