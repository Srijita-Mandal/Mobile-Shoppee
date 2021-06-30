<?php
include 'common.php';
if(isset($_SESSION['email'])){
    header('location:home.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
        <?php
        include 'link.php';
        ?>
    </head>
    <body>
        <?php
        include 'header.php';
        ?><br><br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="https://i.postimg.cc/76CqbyHw/mi-note-8.jpg" class="img-responsive signup-image" alt="Image">
                </div>
                <div class="col-md-4">
                   <h3><b>SIGN UP</b></h3>
                   <form method="POST" action="signup_script.php">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name" name="name" required><br>
                            <input type="email" class="form-control" placeholder="Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                            <?php
                                if(isset($_GET['m1'])){
                                 echo $_GET['m1'];
                                }
                                ?><br>
                                <input type="password" class="form-control" placeholder="Password" name="password" pattern=".{6,}" required>
                                <br>
                                <input type="text" class="form-control" placeholder="Contact" name="contact" maxlength="10" size="10" required>
                                <?php
                                if(isset($_GET['m2'])){
                                 echo $_GET['m2'] ;
                                }
                                ?><br> 
                            <input type="text" class="form-control" placeholder="City" name="city"><br>
                            <input type="text" class="form-control" placeholder="Address" name="address"><br> 
                            <button type="submit" value="submit" class="btn btn-primary"> Submit</button><br>
                        </div>
                    </form> 
                </div>
            </div>
        </div><br><br><br>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>