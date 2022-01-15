
<?php

$GLOBALS['db'] = mysqli_connect('localhost','root','','phpmyadmin');



function back (){
	echo "<script type='text/javascript'>document.write(\"<a href='javascript:history.back()' class='backLink' title='Voltar atr&aacute;s'>Voltar atr&aacute;s</a>\");</script>
<noscript>
<a href='".$_SERVER['HTTP_REFERER']."‘ class='backLink' title='Voltar atr&aacute;s'>Voltar atr&aacute;s</a>
</noscript>";
}


function verifyUsername_availability($username){
	$username_query="SELECT * FROM utilizadores WHERE username = '$username'";
	$username_result=mysqli_query($GLOBALS['db'],$username_query);
	
	if (mysqli_num_rows($username_result) > 0){
		return False;
	}
	else{
		return True;
	}
}

function verifyEmail_availability($email){
	$email_query="SELECT * FROM utilizadores WHERE email = '$email'";
	$email_result=mysqli_query($GLOBALS['db'],$email_query);
	
	if (mysqli_num_rows($email_result) > 0){
		return False;
	}
	else{
		return True;
	}
}

function verifyRealName($real_name){
	
		return True;
}

function verifyCc_number_availability($cc_number){
	$cc_number_query="SELECT * FROM utilizadores WHERE cartao_cidadao = '$cc_number'";
	$cc_number_result=mysqli_query($GLOBALS['db'],$cc_number_query);
	
	if (mysqli_num_rows($cc_number_result) > 0){
		return False;
	}
	else{
		return True;
	}
}

function verifyPassword($password){
	
		return True;
}


function insertUser($username,$email,$real_name,$cc_number,$password,$pontos=0){
	$insert_user_query="INSERT INTO utilizadores(username,email,nome,cartao_cidadao,password,pontos) values('$username','$email','$real_name','$cc_number','$password','$pontos')";
	if(!mysqli_query($GLOBALS['db'],$insert_user_query)){
		echo mysqli_error($GLOBALS['db']);
	}
}


function verifyLogin($username,$password){
	$username_query="SELECT * FROM utilizadores WHERE username = '$username' AND password='$password'";
	$username_result=mysqli_query($GLOBALS['db'],$username_query);
	
	if (mysqli_num_rows($username_result) > 0){
		return True;
	}
	else{
		return False;
	}
}

function insertReview($userId,$review,$quantity){
    $insert_review_query="INSERT INTO reviews(id_users,	avaliacao_qual,	review_qual) values( '$userId','$quantity','$review')";
    if(!mysqli_query($GLOBALS['db'],$insert_review_query)){
        echo mysqli_error($GLOBALS['db']);
    }
}

function getUserID($username){
    $user_id_query="SELECT id_user FROM utilizadores where username='$username'";
    $user_id_result=mysqli_query($GLOBALS['db'],$user_id_query);
    return $user_id_query;
}
?>