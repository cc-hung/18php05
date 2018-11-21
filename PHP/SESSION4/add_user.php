<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>add user</title>
	<link rel="stylesheet" href="">
</head>
<body>

	
	<?php echo $_post['name']; ?>
	<form action="view_user.php" method="post">
		<p>name <input type="text" name="name"></p>
		<p> mail: <input type="text" name="mail"></p>

		<input type="submit" value="add user">
	</form>
	
</body>
</html>