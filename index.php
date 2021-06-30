<?php
include 'common.php';
if(isset($_SESSION['email'])){
    header("location:home.php");
}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Mobile Shoppee</title>
        <?php 
        include 'link.php';
        ?>
    </head>
    <body>
        <?php
        include 'header.php';
        ?><br><br><br>
        <div class="row">
            <div class="container">
                <div class="jumbotron" align="center">
                 <h3>|| Welcome || Mobile Shoppee ||</h3>
                </div>
            </div>
        </div> <br>
        <div class="content">
            <div class="container-fluid">
                
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">Mobile 1</div>
                            <div class="panel-body">
                                <img src="https://i.postimg.cc/Jzb3v4XL/samsung-galaxy-s-9.jpg" class="img-responsive img-phone" align="center" alt="phone">
                            </div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Samsung Galaxy S9 Plus</h4>
                                <p>Battery: 3500 mAh</p>
                                <p>Camera: 12MP + 12MP | 8MP Front Camera</p>
                                <p>RAM: 6 GB | ROM: 64 GB</p>
                                <p class="p-bold">Price: 70,000.00/-</p>
                                <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>    
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">Mobile 2</div>
                            <div class="panel-body">
                                <img src="https://i.postimg.cc/pXjK5XqF/samsung-galaxy-s10.jpg" class="img-responsive img-phone" alt="phone" align="center">
                            </div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Samsung Galaxy S10</h4>
                                <p>Battery: 3400 mAh</p>
                                <p>Camera: 16 MP + 12MP | 10MP Front Camera</p>
                                <p>RAM: 8 GB | ROM: 512 GB</p>
                                <p class="p-bold">Price: 92,000.00/-</p>
                                <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>    
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">Mobile 3</div>
                            <div class="panel-body">
                                <img src="https://i.postimg.cc/g0ghbwkf/mi-note-8.jpg" class="img-responsive img-phone" alt="phone">
                            </div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Redmi Note 8</h4>
                                <p>Battery: 4000 mAh</p>
                                <p>Camera: 48MP + 8MP + 2MP + 2MP | 13MP Front Camera</p>
                                <p>RAM: 4 GB | ROM: 64 GB</p>
                                <p class="p-bold">Price: 13,999.00/-</p>
                                <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">Mobile 4</div>
                            <div class="panel-body">
                                <img src="https://i.postimg.cc/c12zwhG5/mi-redmi-k20-pro.jpg" class="img-responsive img-phone" alt="phone" align="center">
                            </div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Redmi K20 Pro</h4>
                                <p>Battery: 4000 mAh</p>
                                <p>Camera: 48MP + 13MP + 8MP | 20MP Front Camera</p>
                                <p>RAM: 6 GB | ROM: 128 GB</p>
                                <p class="p-bold">Price: 28,999.00/-</p>
                                <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>    
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">Mobile 5</div>
                            <div class="panel-body">
                                <img src="https://i.postimg.cc/yN3gg7mG/one-plus-7-T.jpg" class="img-responsive img-phone" alt="phone">
                            </div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Oneplus 7T</h4>
                                <p>Battery: 3800 mAh</p>
                                <p>Camera: 48MP + 16MP + 8MP | 16MP Front Camera</p>
                                <p>RAM: 8 GB | ROM: 256 GB</p>
                                <p class="p-bold">Price: 35,989.00/-</p>
                                <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>    
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">Mobile 6</div>
                            <div class="panel-body">
                                <img src="https://i.postimg.cc/BnktGRrB/samsung-galaxy-a51.jpg" class="img-responsive img-phone" alt="phone" align="center">
                            </div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Samsung Galaxy a51</h4>
                                <p>Battery: 4000 mAh</p>
                                <p>Camera: 48MP + 12MP + 5MP + 5MP | 32MP Front Camera</p>
                                <p>RAM: 6 GB | ROM: 128 GB</p>
                                <p class="p-bold">Price: 20,999.00/-</p>
                                <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
