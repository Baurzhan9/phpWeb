<?php
	session_start();
    if(isset($_SESSION['user'])){
    $user=$_SESSION['user'];
    require_once 'db.php';
    $login_email="";  
    $login_password="";  
    if(isset($_COOKIE['login_email'])&&isset($_COOKIE['login_email'])){
        $login_email=$_COOKIE['login_email'];
        $login_password=$_COOKIE['login_password'];

    }
?>
<?php include('header.php'); ?>
<?php include('menu.php'); ?>
			<div class="container" >
			<h3 style="padding: 30px"><?php echo "Welcome, ".$user['name']."!" ?></h3><br>
     
     </div>
      <?php include('footer.php'); ?>
    <?php }
 ?> 
