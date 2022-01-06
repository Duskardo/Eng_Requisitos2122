
<?php

$GLOBALS['db'] = mysqli_connect('localhost','root','','eng_req');

function verifyUsername($username){
	$username_query="SELECT * FROM users WHERE username = '$username'";
	$username_result=mysqli_query($GLOBALS['db'],$username_query);
	
	if (mysqli_num_rows($username_result) > 0){
		return False;
	}
	else{
		return True;
	}
}

function verifyEmail($email){
	
		return True;
}

function verifyRealName($real_name){
	
		return True;
}

function verifyCc_number($cc_number){
	
		return True;
}

function verifyPassword($password){
	
		return True;
}


function insertUser($username,$email,$real_name,$cc_number,$password){
	$insert_user_query="INSERT INTO users(username,email,real_name,cc_number,password) values('$username','$email','$real_name','$cc_number','$password')";
	mysqli_query($GLOBALS['db'],$insert_user_query);
}

?>