<html>
<title>Registo</title>
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/bootstrap.css"> 
</head>

<body>
	<h4>Registo de conta</h4>
	<?php
	
	require_once("common.php");
	
	$username = $_REQUEST['username'];
	$email = $_REQUEST['email'];
	$real_name = $_REQUEST['real_name'];
	$cc_number = $_REQUEST['cc_number'];
	$password = $_REQUEST['password'];
	
	$valido = true;

	if (!verifyUsername_availability($username)){
		
		echo "<p>Nome de utilizador em uso!</p>";
		$valido=false;		
	}
	
	if (!verifyEmail_availability($email)){
		
		echo "<p>Email em uso!</p>";
		$valido=false;
	}
	
	if (!verifyRealName($real_name)){
		echo "Nome em uso!";
		$valido=false;
	}
	
	if (!verifyCc_number_availability($cc_number)){
		
		echo "<p>Cartão de cidadão em uso!</p>";
		$valido=false;
	}
	
	if (!verifyPassword($password)){
		echo "<p>Password inválida!</p>";
		$valido=false;
	}
	
	if ($valido){
		insertUser($username,$email,$real_name,$cc_number,$password);
		echo "<p>Conta criada com sucesso!</p>";
	}
	
	back();
	?>

</body>
</html>
