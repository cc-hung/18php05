<?php 



function connect()
{
	# code...
	$server = 'localhost'; //$server = '127.0.0.1'; 
	$username = 'root';
	$password = '';
	$database = '18php05_learn_sql';
	$connect = mysqli_connect($server,$username,$password,$database);

return $connect;
}
function show()
{
	$connect = connect();
	$sql = "select * from products ";
	$result = $connect->query($sql);
echo("
		<table >
			<tr>
			    <th>categoryID</th>
			    <th>dateAdded</th> 
			    
			    <th>discountPercent</th>
			    <th>listPrice</th>
			    <th>productCode</th>
			    <th>productID</th>

			    <th>productName</th>
			    <th> acction
	  		</tr>
	  	"
		);

	if ($result->num_rows > 0) {
    // output data of each filepro_rowcount()
    while($row = $result->fetch_assoc()) {
    	$id = $row['productID'];
        //echo "<br> id: ". $row["id"]. " - Name: ". $row["name"]. " 	-mail: " . $row["mail"] . " -password: ".$row["password"] ."<br>";
        echo "<tr>" 
    	."<td>" . $row["categoryID"]. "<td>"
    	.  $row["dateAdded"] 
    	."<td>" . $row["discountPercent"] ."<td>"
    	.  $row["listPrice"] 
    	."<td>" . $row["productCode"] ."<td>"
    	.  $row["productID"] 
    	."<td>" . $row["productID"]
    	."<td> <a href='delete.php?id=$id'>xoa</a>| <a href='edit.php?id=$id'>sua</a>";
    	

    };
}

}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="css.css">
</head>
<body>
	
<?php show();?>

</body>
</html>