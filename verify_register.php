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

	if (!verifyUsername_availability($username)){
		?>
		<p>Nome de utilizador em uso!</p>
		<?php
	}
	
	if (!verifyEmail_availability($email)){
		?>
		<p>Email em uso!</p>
		<?php
	}
	
	if (!verifyRealName($real_name)){
		echo "Nome em uso!";
	}
	
	if (!verifyCc_number_availability($cc_number)){
		?>
		<p>Cartão de cidadão em uso!</p>
		<?php
	}
	
	if (!verifyPassword($password)){
		echo "Password inválida!";
	}
	
	insertUser($username,$email,$real_name,$cc_number,$password);
	
	
	?>

</body>
</html>
