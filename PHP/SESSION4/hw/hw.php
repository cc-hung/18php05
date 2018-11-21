

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>HOME WORK</title>
	<link rel="stylesheet" href="hw.css">
</head>
<body>

<form action="process.php", method="post">
	<p>name: <input type="text" name="name"></p>
	<p>email: <input type="text" name="email"></p>
	<p>password: <input type="password" name="password"></p>
	
	<input type="submit" value="submit" name="submit">
</form>

<br> 
<hr>
	<form action="search.php" method="post">
		<p>search: <input type="text" name="search"> <input type="submit" value="search"></p>
	</form>

<?php show(); ?>


</body>
</html>

<?php 
	function show() {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "18php05";

// tao   ket noi
$con = new mysqli($servername,$username,$password,$dbname);
// kiem tra ket noi
if($con->connect_error){
	die("connect fail" . $con->connect_error);
};

$sql = "select * from users";
// mysqli_query($connect,$sql);
$result = $con->query($sql);

	echo("
		<table >
			<tr>
			    <th>id</th>
			    <th>name</th> 
			    <th>mail</th>
			    <th>password</th>
			    <th>option</th>
	  		</tr>
	  	"
		);
if ($result->num_rows > 0) {
    // output data of each filepro_rowcount()
    while($row = $result->fetch_assoc()) {

        // echo "<br> id: ". $row["id"]. " - Name: ". $row["name"]. " 	-mail: " . $row["mail"] . " -password: ".$row["password"] ."<br>";
    	echo "<tr>" 
    	."<td>" . $row["id"]. "<td>"
    	.  $row["name"] 
    	."<td>" . $row["mail"] ."<td>"
    	. $row["password"] ."<td> <a href=''>xoa</a>| <a href=''>sua</a>";

    }

} else {
    echo "0 results";
}
}


 ?>