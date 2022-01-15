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

	$username = $_POST['username'];
	$password = $_POST['password'];


	if (!verifyLogin($username,$password)){
		?>
		<p>Username ou password incorretos!</p>
		<?php
	}
	else{
	    ?>
        <p>Login efetuado com sucesso</p>
        <a href="homepage.php">Prosseguir para homepage </a>

        <?php

    }

	back();
	?>

</body>
</html>