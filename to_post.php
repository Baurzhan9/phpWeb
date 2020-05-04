<?php  
    $message = array();
    $message['message'] = "Post is not published!";
    $message['status'] = "ERROR";
    if($_SERVER['REQUEST_METHOD']=='POST'){
        require_once 'db.php';
        session_start();
        if (isset($_SESSION['user'])) {
        if(isset($_POST['post'])&&$_POST['post']!=""){
                addPost($_SESSION['user']['id'], $_POST['post'], date("Y-m-d H:m:s"));
               $message['message'] = "Post is published successfully!";
                $message['status'] = "OK";
            }
        else {
            $message['message'] = "Field is empty!";
        }
                
}
        }
    
    echo json_encode($message);
?>