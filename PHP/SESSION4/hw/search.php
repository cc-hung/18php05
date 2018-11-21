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

$search =$_POST['search'];

$sql = "select * from users where name like '%$search'";
// mysqli_query($connect,$sql);
 // header("location: hw.php");

$result = $connect->query($sql);
echo("
		<table >
			<tr>
			    <th>id</th>
			    <th>name</th> 
			    <th>mail</th>
			    <th>password
	  		</tr>
	  	"
		);
if ($result->num_rows > 0) {
    // output data of each filepro_rowcount()
    while($row = $result->fetch_assoc()) {

        //echo "<br> id: ". $row["id"]. " - Name: ". $row["name"]. " 	-mail: " . $row["mail"] . " -password: ".$row["password"] ."<br>";
        echo "<tr>" 
    	."<td>" . $row["id"]. "<td>"
    	.  $row["name"] 
    	."<td>" . $row["mail"] ."<td>"
    	. $row["password"] ;

    
}};
 ?>