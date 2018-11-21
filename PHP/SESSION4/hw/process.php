<?php 

$server = 'localhost'; //$server = '127.0.0.1'; 
$username = 'root';
$password = '';
$database = '18php05';
$connect = mysqli_connect($server,$username,$password,$database);

if (mysqli_connect_errno()) {
	# code...
	echo "connect error" . mysqli_connect_errno();
}

$name =$_POST['name'];
$mail = $_POST['email'];
$pass  = $_POST['password'];
$sql = "insert into users(name,mail,password) values ('$name','$mail','$pass')";
mysqli_query($connect,$sql);
 header("location: hw.php");
 ?>