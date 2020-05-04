<?php

	if($_SERVER['REQUEST_METHOD']=='GET'){
		require_once 'db.php';
		$result=getAllPosts();
	}

echo json_encode($result);
?>