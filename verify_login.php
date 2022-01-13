<html>
<title>Login</title>
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/bootstrap.css"> 
</head>

<body>
	<h4>Registo de conta</h4>
	<?php
	
	require_once("common.php");
	
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];

	if (!verifyLogin($username,$password)){
		?>
		<p>Username ou password incorretos!</p>
		<?php
	}
		
	back();
	?>

</body>
</html>