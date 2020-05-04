<?php

	$message = array();
	$message['message'] = "User is not added!";
	$message['status'] = "ERROR";

	if($_SERVER['REQUEST_METHOD']=='POST'){
	require_once 'db.php';
	$user=getUser($_POST['email']);
		if(isset($_POST['name'])&&$_POST['name']!=""&&isset($_POST['email'])&&$_POST['email']!=""&&isset($_POST['password'])&&$_POST['password']!=""&&isset($_POST['conpassword'])&&$_POST['conpassword']!=""){

			if($user==null){
			if($_POST['password']==$_POST['conpassword']){
				
				addUser(trim($_POST['name']), $_POST['email'], $_POST['password']);

				$message['message'] = "User is added successfully!";
				$message['status'] = "OK";
}
			else{
				$message['message']="Passwords are not matching!";
				$message['status']="ERROR";
}
			
}
			else{
				$message['message']="Such email-address already exists";
				$message['status']="ERROR";
}

		}

	}

	echo json_encode($message);

?>