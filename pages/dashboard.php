<?php 
	session_start();
	if (empty($_SESSION['user_id'])){
		 header('Location: ./logout.php');
	}
	else{
		echo "welkom!";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
<h1>Dashboard</h1>
	<a href="./logout.php">Logout</a>
</body>
</html>