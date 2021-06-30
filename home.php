<?php
include 'common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            home
        </title>
        <?php
        include 'link.php';
        ?>
    </head>
    <body>
        <?php
        include 'header.php';
        include 'check_if_added.php';
        $email=$_SESSION['email'];
        
        
        ?><br><br><br>
        <div class="content">
            <div class="container-fluid">
                <div class="jumbotron">
                    <?php
                        echo "<h3 class='text-center'>Welcome $email</h3>";
                    ?>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form class="form-group">
                            <span class="glyphicon glyphicon-search"></span> <input class="form-control" type="text" class="glyphicon glyphicon-search" placeholder="Search products">
                        </form>
                        
                         
                    </div>
                </div><br>
                <div class="content">
            <div class="container-fluid">
                
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">Mobile 1</div>
                            <div class="panel-body">
                                <img src="https://i.postimg.cc/Jzb3v4XL/samsung-galaxy-s-9.jpg" class="img-responsive img-phone" align="center" alt="phone">
                                <span align="left" class="glyphicon glyphicon-heart-empty"></span>
                            </div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Samsung Galaxy S9 Plus</h4>
                                <p>Battery: 3500 mAh</p>
                                <p>Camera: 12MP + 12MP | 8MP Front Camera</p>
                                <p>RAM: 6 GB | ROM: 64 GB</p>
                                <p class="p-bold">Price: 70,000.00/-</p>
                                <?php if(check_if_added_to_cart(1)){
                                    echo'<a href="#" class="btn btn-success btn-block disabled">Added to cart</a>';
                                } else{?>
                                      <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                                  
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">Mobile 2</div>
                            <div class="panel-body">
                                <img src="https://i.postimg.cc/pXjK5XqF/samsung-galaxy-s10.jpg" class="img-responsive img-phone" alt="phone" align="center">
                                <span align="left" class="glyphicon glyphicon-heart-empty"></span>
                            </div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Samsung Galaxy S10</h4>
                                <p>Battery: 3400 mAh</p>
                                <p>Camera: 16 MP + 12MP | 10MP Front Camera</p>
                                <p>RAM: 8 GB | ROM: 512 GB</p>
                                <p class="p-bold">Price: 92,000.00/-</p>
                                <?php if(check_if_added_to_cart(2)){
                                    echo'<a href="#" class="btn btn-success btn-block disabled">Added to cart</a>';
                                } else{?>
                                   <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>  
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">Mobile 3</div>
                            <div class="panel-body">
                                <img src="https://i.postimg.cc/g0ghbwkf/mi-note-8.jpg" class="img-responsive img-phone" alt="phone">
                                <span align="left" class="glyphicon glyphicon-heart-empty"></span>
                            </div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Redmi Note 8</h4>
                                <p>Battery: 4000 mAh</p>
                                <p>Camera: 48MP + 8MP + 2MP + 2MP | 13MP Front Camera</p>
                                <p>RAM: 4 GB | ROM: 64 GB</p>
                                <p class="p-bold">Price: 13,999.00/-</p>
                               <?php if(check_if_added_to_cart(3)){
                                    echo'<a href="#" class="btn btn-success btn-block disabled">Added to cart</a>';
                                } else{?>
                                   <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
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
                                
                                <span align="left" class="glyphicon glyphicon-heart-empty"></span>
                            </div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Redmi K20 Pro</h4>
                                <p>Battery: 4000 mAh</p>
                                <p>Camera: 48MP + 13MP + 8MP | 20MP Front Camera</p>
                                <p>RAM: 6 GB | ROM: 128 GB</p>
                                <p class="p-bold">Price: 28,999.00/-</p>
                                <?php if(check_if_added_to_cart(4)){
                                    echo'<a href="#" class="btn btn-success btn-block disabled">Added to cart</a>';
                                } else{?>
                                   <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">Mobile 5</div>
                            <div class="panel-body">
                                <img src="https://i.postimg.cc/yN3gg7mG/one-plus-7-T.jpg" class="img-responsive img-phone" alt="phone">
                                
                                <span align="left" class="glyphicon glyphicon-heart-empty"></span>
                            </div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Oneplus 7T</h4>
                                <p>Battery: 3800 mAh</p>
                                <p>Camera: 48MP + 16MP + 8MP | 16MP Front Camera</p>
                                <p>RAM: 8 GB | ROM: 256 GB</p>
                                <p class="p-bold">Price: 35,989.00/-</p>
                                <?php if(check_if_added_to_cart(5)){
                                    echo'<a href="#" class="btn btn-success btn-block disabled">Added to cart</a>';
                                } else{?>
                                   <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">Mobile 6</div>
                            <div class="panel-body">
                                <img src="https://i.postimg.cc/BnktGRrB/samsung-galaxy-a51.jpg" class="img-responsive img-phone" alt="phone" align="center">
                                <span align="left" class="glyphicon glyphicon-heart-empty"></span>
                            </div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Samsung Galaxy a51</h4>
                                <p>Battery: 4000 mAh</p>
                                <p>Camera: 48MP + 12MP + 5MP + 5MP | 32MP Front Camera</p>
                                <p>RAM: 6 GB | ROM: 128 GB</p>
                                <p class="p-bold">Price: 20,999.00/-</p>
                                <?php if(check_if_added_to_cart(6)){
                                    echo'<a href="#" class="btn btn-success btn-block disabled">Added to cart</a>';
                                } else{?>
                                   <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?> 
                            </div>
                        </div>
                    </div>
                </div>
                <div  class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">Mobile 7</div>
                            <div class="panel-body">
                                <img src="https://i.postimg.cc/TYH3rZ3v/iphone-7.jpg" class="img-responsive img-phone" alt="phone" align="center">
                                <span align="left" class="glyphicon glyphicon-heart-empty"></span>
                            </div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Apple iphone 7</h4>
                                <p>Battery: 3400 mAh</p>
                                <p>Camera: 12MP rear camera | 16MP Front Camera</p>
                                <p>RAM: 8 GB | ROM: 256 GB</p>
                                <p class="p-bold">Price: 23,799.00/-</p>
                                <?php if(check_if_added_to_cart(7)){
                                    echo'<a href="#" class="btn btn-success btn-block disabled">Added to cart</a>';
                                } else{?>
                                   <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">Mobile 8</div>
                            <div class="panel-body">
                                <img src="https://i.postimg.cc/ryfVkvWR/iphone-8.jpg" class="img-responsive img-phone" alt="phone" align="center">
                                <span align="left" class="glyphicon glyphicon-heart-empty"></span>
                            </div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Apple iphone 8</h4>
                                <p>Battery: 3400 mAh</p>
                                <p>Camera: 20MP rear camera | 16MP Front Camera</p>
                                <p>RAM: 8 GB | ROM: 128 GB</p>
                                <p class="p-bold">Price: 41,999.00/-</p>
                                <?php if(check_if_added_to_cart(8)){
                                    echo'<a href="#" class="btn btn-success btn-block disabled">Added to cart</a>';
                                } else{?>
                                   <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">Mobile 9</div>
                            <div class="panel-body">
                                <img src="https://i.postimg.cc/JzZCGgyq/iphone-xs-max.jpg"class="img-responsive img-phone" alt="phone" align="center">
                                <span align="left" class="glyphicon glyphicon-heart-empty"></span>
                            </div>
                            <div class="panel-footer">
                                <h4 class="p-bold">iphone XS-Max</h4>
                                <p>Battery: 3400 mAh</p>
                                <p>Camera: 16MP + 20MP | 16MP Front Camera</p>
                                <p>RAM: 8 GB | ROM: 256 GB</p>
                                <p class="p-bold">Price: 99,999.00/-</p>
                                <?php if(check_if_added_to_cart(9)){
                                    echo'<a href="#" class="btn btn-success btn-block disabled">Added to cart</a>';
                                } else{?>
                                   <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>  
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">Mobile 10</div>
                            <div class="panel-body">
                                <img src="https://i.postimg.cc/ZKv1MgLS/one-plus-7-T-pro.jpg" class="img-responsive img-phone" alt="phone" align="center">
                                <span align="left" class="glyphicon glyphicon-heart-empty"></span>
                            </div>
                            <div class="panel-footer">
                                <h4 class="p-bold">One Plus 7T Pro</h4>
                                <p>Battery: 4085 mAh</p>
                                <p>Camera: 16MP + 20MP | 16MP Front Camera</p>
                                <p>RAM: 8 GB | ROM: 256 GB</p>
                                <p class="p-bold">Price: 47,999.00/-</p>
                                <?php if(check_if_added_to_cart(10)){
                                    echo'<a href="#" class="btn btn-success btn-block disabled">Added to cart</a>';
                                } else{?>
                                   <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>  
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">Mobile 11</div>
                            <div class="panel-body">
                                <img src="https://i.postimg.cc/d10fmS0g/samsung-galaxy-s20-ultra.jpg" class="img-responsive img-phone" alt="phone" align="center">
                                <span align="left" class="glyphicon glyphicon-heart-empty"></span>
                            </div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Samsung Galaxy S20 Ultra</h4>
                                <p>Battery: 4200 mAh</p>
                                <p>Camera: 48MP + 13MP + 8MP | 20MP Front Camera</p>
                                <p>RAM: 12 GB | ROM: 128 GB</p>
                                <p class="p-bold">Price: 97,999.00/-</p>
                                <?php if(check_if_added_to_cart(11)){
                                    echo'<a href="#" class="btn btn-success btn-block disabled">Added to cart</a>';
                                } else{?>
                                   <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">Mobile 12</div>
                            <div class="panel-body">
                                <img src="https://i.postimg.cc/LXvN74rX/iphone-xr-2.jpg" class="img-responsive img-phone" alt="phone" align="center">
                                <span align="left" class="glyphicon glyphicon-heart-empty"></span>
                            </div>
                            <div class="panel-footer">
                                <h4 class="p-bold">iphone XR</h4>
                                <p>Battery: 4085 mAh</p>
                                <p>Camera: 16MP + 20MP | 16MP Front Camera</p>
                                <p>RAM: 8 GB | ROM: 256 GB</p>
                                <p class="p-bold">Price: 53,999.00/-</p>
                                <?php if(check_if_added_to_cart(12)){
                                    echo'<a href="#" class="btn btn-success btn-block disabled">Added to cart</a>';
                                } else{?>
                                   <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>  
                            </div>
                        </div>
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
