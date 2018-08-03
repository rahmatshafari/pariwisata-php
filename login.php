<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Login PHP</title>
	<link rel="stylesheet" href="style.css" />
	<link href='http://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="jquery-1.7.min.js"></script>

</head>
<body>
	<div class="lg-container">
		<h1>Silahkan Login!</h1>
		<form action="file_login.php" id="lg-form" name="lg-form" method="post">
			
			<div>
				<label for="username">Username:</label>
				<input type="text" name="username" id="username" placeholder="username"/>
			</div>
			
			<div>
				<label for="password">Password:</label>
				<input type="password" name="password" id="password" placeholder="password" />
			</div>
			
			<div>				
				<button type="submit" id="login">Login</button>
			</div>
			<div>
				<a href="register.php">Register</a>
			</div>
			
		</form>
		<div id="message"></div>
	</div>
</body>
</html>