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
else {echo "yes";}

$sql = "insert into users(name,mail) values ('my_name','my_email@gmail.com')";
mysqli_query($connect,$sql);

 ?>
