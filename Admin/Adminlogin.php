<?php
include('connect2.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Student Login</title>
    <style>
		
         <?php include('index1.css') ;?>
    </style>


</head>

<body>       
        <div class="main">  	
			<div class="signup">
				<form action="l.php" method="POST">
					<h1>Login form</h1>
					<input type="text" name="firstname" placeholder="firstname" required />
					<input type="password" name="password1" placeholder="password1" required />
					<input type="submit" value="Login" class="submit" name="submit" />
					<a href="Adminregister.php">Register</a>
				</form>
			</div>

		
	</div>

</body>

</html>