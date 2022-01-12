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
		<input type='email' name='email' placeholder='Endereço de Email' pattern='(?:[a-z0-9!#$%&*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])' required><br>
		<input type='text' name='real_name' placeholder='Nome Completo' required><br>
		<input type='text' name='cc_number' placeholder='Número do Cartão de Cidadão' pattern='[0-9]{8}' title='Insira os primeiros 8 dígitos do seu número do Cartão de Cidadão' required><br>
		<input type='password' name='password' placeholder='Palavra-passe' required><br>
		<br>
		<input type='submit' value='Criar conta'>
	</form>

	<?php require_once("common.php"); ?>
</body>
</html>
