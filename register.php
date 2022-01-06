<html>
<title>Registo</title>
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/bootstrap.css"> 
</head>

<body>
	<h4>Registo de conta</h4>
	<form method='POST' action='verify_register.php' class=''>
		
		<!-- <label for='username'><b>Nome de utilizador</b></label> -->
		<input type='text' name='username' placeholder='Nome de utilizador' required><br>
		<input type='email' name='email' placeholder='Endereço de Email' required><br>
		<input type='text' name='real_name' placeholder='Nome Completo' required><br>
		<input type='text' name='cc_number' placeholder='Número do Cartão de Cidadão' required><br>
		<input type='password' name='password' placeholder='Palavra-passe' required><br>
		<br>
		<input type='submit' value='Criar conta'>
	</form>

</body>
</html>
