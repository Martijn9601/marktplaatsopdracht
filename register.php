<?php 

	include './functions/helpers.php';
	include './functions/db_functions.php';
	include './functions/product_queries.php';
	include './functions/user_queries.php';

	if(isset($_POST['submit'])){
		register_user($_POST);
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Formulier</title>
	<link rel="stylesheet" type="" href="css/style.css">
</head>
<body>
	<section class="container">
		<!-- <a id="home"></a> -->
		<div class="grid1">
			<div class="top">
				<h1>Register as a user</h1></div>
	  				<div class="form">
	  					<form method="post">
	    					<label for="fname"></label>
	    						<input type="text" id="fname" name="firstname" placeholder="Your name.." value="martijn" required>
								<br>
	    					<label for="lname"></label>
	   							<input type="text" id="lname" name="lastname" placeholder="Your last name.." value="redeker" required>
								<br>
							<label for="dateofbirth"></label>
	    						<input type="date" id="date" name="dateofbirth" placeholder="" value="2018-10-12" required>
								<br>
	   						<label for="email"></label>
	   							<input type="email" id="email" name="email" placeholder="Your email.." value="martijn.redeker@icloud.com" required>
								<br>
						    <label for="password"></label>
	    						<input type="password" id="psw" name="password" placeholder="Your password.." value="skljlss"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
							<input type="submit" name="submit" value="Submit">
						</form>

	  				</div>
				  	<a href="index.php">Terug</a> 


				</div class="sluit">
				
				</div>
		
	</section>


</body>
</html>


