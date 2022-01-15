<?php
session_start();
if(isset($_POST['username'])){
    $_SESSION['username']=$_POST['username'];
}
?>
<html>
<title>Login</title>
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/bootstrap.css"> 
</head>

<body>
	<h4>Login</h4>
	<form method='POST' action='verify_login.php' class=''>
		
		<!-- <label for='username'><b>Nome de utilizador</b></label> -->
		<input type='text' name='username' placeholder='Nome de utilizador' required><br>
		<input type='password' name='password' placeholder='Palavra-passe' required><br>
		<br>
		<input type='submit' value='Login'>
	</form>
	
	<a href='register.php'>Registar nova conta</a>
	
</body>
</html>
