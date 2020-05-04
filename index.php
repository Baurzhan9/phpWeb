<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>jQuery</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="scripts.js"></script>
</head>
<body>
    <?php include('header.php'); ?>
    <?php include('menu.php'); ?>
    <div class="header">
        <div class="container" >
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success" role="alert" id = "message_alert" style="display: none;"></div>    
                <table class="table"  style="width: 400px">
                    <tr>
                    <td>Email-address</td>
                    <td><input type="text" class="form-control" id="email" placeholder="Enter email-address"></td>
                </tr>
            <tr>
                    <td>Password</td>
                    <td>
                    <input type="password" class="form-control" id="password" placeholder="Enter password">
                </td>
            </tr>    
            <tr>
                    <td>Confirm password</td>
                    <td>
                    <input type="password" class="form-control" id="conpassword" placeholder="Confirm password">
                </td>
            </tr>
            <tr>
                    <td>Full name</td>
                    <td>
                    <input type="text" class="form-control" id="name" placeholder="Enter full name">
                </td>
        </tr>
    </table><br>
    <div class="form-group">   
        <div class="col-md-offset-3 col-md-9">
            <button type="submit" class="btn btn-info" id="signup" style="background-color: black">SIGN UP</button> 
        </div>
    </div>
</div>
                </div>
            </div>
        </div>
    </div></body>
    <?php include('footer.php'); ?>