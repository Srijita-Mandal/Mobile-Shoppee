<?php
include 'common.php';
if(isset($_SESSION['email'])){
    header('location:home.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <?php
        include 'link.php';
        ?>
    </head>
    <body>
        <?php
        include 'header.php';
        ?><br><br><br><br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <p><h4>LOGIN</h4></p>
                        </div>
                        <div class="panel-body">
                            <p><i>Don't have an account?<a href="signup.php"> Register</a></i></p><br>
                            <form class="form" method="POST" action="login_script.php">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Enter Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required><br>
                                    <input type="password" class="form-control" placeholder="Enter password" name="password" pattern=".{6,}" required><br>
                                    <?php
                        if(isset($_GET['m1'])){
                            echo $_GET['m1'];
                        }
                    ?>
                                    <button type="submit" value="login" class="btn btn-primary" data-dismiss="modal">Login</button>
                                </div>
                            </form>
                        </div>
                        <div class="panel-footer">
                            <p class='text-info'><a href="#">Forgot Password?</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br><br><br><br>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>

