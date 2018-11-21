<?php 

$id= $_GET['id'];


	$server = 'localhost'; //$server = '127.0.0.1'; 
	$username = 'root';
	$password = '';
	$database = '18php05_learn_sql';
	$connect = mysqli_connect($server,$username,$password,$database);

	$sql = "delete from products where productID = $id";
	mysqli_query($connect,$sql);
 	header("location: themsuaxoasp.php");

 ?>