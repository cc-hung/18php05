<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>add user</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
	$err_name = "";
	$err_mail = "";
	$val_name = "";
	$val_mail = "";

	if(isset($_POST['sub']))
	{
		// echo "asas";
		 // echo var_dump($_POST);
		if($_POST['name'] != null) $val_name = $_POST['name'];

		if($_POST['name'] == "") $err_name = "please input your name";

		if($_POST['mail'] != "") $val_name = $_POST['mail'];
		
		if($_POST['mail'] == "") $err_mail ="please input your mail";
		
	}


	function connect(){

		$server = 'localhost'; //$server = '127.0.0.1'; 
		$username = 'root';
		$password = '';
		$database = '18php05';
		$connect = mysqli_connect($server,$username,$password,$database);

		$sql = "select * from users";
		return mysqli_query($connect,$sql);
	}

	?>
		
	<form action="#" method="post">
		<p id="err_name" style="color: red"> <?php echo $err_name; ?></p>
		<p>họ và tên: <input type="text" name="name" value="<?php echo ($val_name)?>"></p>
		<p id="err_mail" style="color: red;"> <?php echo $err_mail; ?></p>
		<p>email: <input type="text" name="mail" value="<?php echo ($val_name) ?>"></p>

		<input type="submit" value="submit" name="sub">

	</form>

	<!-- dung bie get de lay id -->

	<!-- header("location:url"); -->
	<?php var_dump(connect()) ?>
</body>
</html>