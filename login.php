<?php
    $login_email="";  
    $login_password="";  
    if(isset($_COOKIE['login_email'])&&isset($_COOKIE['login_email'])){
        $user_email=$_COOKIE['login_email'];
        $user_password=$_COOKIE['login_password'];

    }
?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="scripts.js"></script>
<?php include('header.php'); ?>
<?php include('menu.php'); ?>
    <div class="container" >    
        <div class="alert alert-success" role="alert" id = "login_message_alert" style="display: none;"></div>
        <table class="table"  style="width: 400px">
                    <tr>
                    <td>Email-address</td>
                    <td><input type="text" class="form-control" id="login_email" placeholder="Enter email-address"></td>
                </tr>
            <tr>
                    <td>Password</td>
                    <td>
                    <input type="password" class="form-control" id="login_password" placeholder="Enter password">
                </td>
            </tr>    
        </table>
                <div style="margin-top:10px" class="form-group">
                    <button type="submit" class="btn btn-success" id="signin" style="background-color: black">SIGN IN</button>       
                </div> </div>  
    <?php include('footer.php'); ?>