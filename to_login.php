<?php

$message=array();
$message['mes']="Fields are empty!";
$message['status']="ERROR";
if($_SERVER['REQUEST_METHOD']=='POST'){
	require_once 'db.php';
	$user=getUser($_POST['login_email']);
if(isset($_POST['login_email'])&&isset($_POST['login_password'])){
	
	if($user!=null){
	if($user['password']==$_POST['login_password']){
		$message['status']="OK";
		session_start();
		$_SESSION['user']=$user;
		setcookie('login_email', $user['email'], time()+60*60);
		setcookie('login_password', $user['password'], time()+60*60);
	}else{
		$message['mes']="Password is incorrect!";
        $message['status']="ERROR";
	}
}
else{
$message['mes']="User is not found!";
$message['status']="ERROR";
}
}
}
echo json_encode($message);


?>