<?php
    session_start();
    if(isset($_SESSION['user'])){
        $user=$_SESSION['user'];
    require_once 'db.php';
?>
<?php include('header.php'); ?>
<?php include('menu.php'); ?>
    <div class="main">
        <div class="container">
             <div class="alert alert-success" role="alert" id = "message_alert" style="display: none;"></div>    
                <div class="col-md-9">
                        <div class="form-group" >
                            <input type="text" id="post" class="form-control" style="width: 500px; height: 100px">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" value="ADD"  id="Addpost" style="background-color: black">ADD</button>
                        </div>
                </div>
            </div>
        </div>
    </div>  
    <?php include('footer.php'); ?>
</body>
</html>
<?php }

 ?>