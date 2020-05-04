<?php  
	try {
		$connection=new PDO('mysql:host=localhost;dbname=lab11', 'root', '');
	} catch (PDOException $e) {
		echo $e->getMessage();
		
	}

function addUser($name, $email, $password){
	global $connection;

		$query=$connection->prepare("INSERT INTO users (id, name, email, password) 
			VALUES(NULL,:name, :email, :password)");

		$rows=$query->execute(array("name"=>$name, "email"=>$email, "password"=>$password));
		
		return $rows>0;
}


function getUser($email){
	global $connection;
		$query=$connection->prepare("SELECT * FROM users where email=:email");
		$query->execute(array("email"=>$email));
		$result=$query->fetch();
		return $result;
}

function addPost($user_id,$post, $post_date){
		global $connection;
		$query=$connection->prepare("INSERT INTO posts (id, user_id, post, post_date) VALUES(NULL, :user_id, :post, :post_date)");
		$rows = $query->execute(array("user_id"=> $user_id, "post"=>$post, "post_date"=>$post_date));
		return $rows>0;
	}

function getPost(){
		global $connection;
		$query = $connection->prepare("SELECT * FROM posts");
		$query->execute();
		$result = $query->fetchAll();
		return $result;
	}

	function deletePost($id){

		global $connection;

		$query = $connection->prepare("DELETE FROM posts WHERE id = :id");
		$rows = $query->execute(array("id"=>$id));

		return $rows==1; 

	}

	function getAllPosts(){
	global $connection;
	$query=$connection->prepare("SELECT post.id, post.post, post.post_date, user.name as user_name 
		FROM posts as post INNER JOIN users as user ON post.user_id=user.id");
	$query->execute();
	$result=$query->fetchAll();
	return $result;   
}

?>