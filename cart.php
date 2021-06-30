<?php
include 'common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>cart</title>
        <?php        include 'link.php';  ?>
    </head>
    <body>
        <?php
        include 'header.php';
        ?><br><br><br><br><br><br>
        
        <div class="container">
            <form action="discount.php" class="form-inline" method="POST">
            <div class="form-group">
                <input type="text" class="form-control" name="code" placeholder="Enter Discount Code ">                
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div><br><br>
        </form>
            <table class="table table-striprd table-responsive">
                <?php
        if(isset($_GET['m1'])){
            $disc=$_GET['m1'];
        }
        $sum = 0;
        $user_id = $_SESSION['user_id'];
        $query = "SELECT * FROM users_products INNER JOIN products ON users_products.product_id=products.pid WHERE users_products.user_id='$user_id' and users_products.status='Added to cart'";
        $query_result = mysqli_query($con, $query);
        if (mysqli_num_rows($query_result) >= 1) {
            ?>
                <thead>
                <tr>
                    <th>Item Number</th>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th></th>
                </tr>
            </thead>
             <tbody>
                <?php
                while ($row = mysqli_fetch_array($query_result)) {
                    $sum= $row["price"];                                    
                    $id = $row["pid"];
                    echo "<tr><td>" . "#" . $row["pid"] . "</td><td>" . $row["name"] . "</td><td>Rs " . $row["price"] . "</td><td><a href='cart-remove.php?id={$row['pid']}' class='remove_item_link btn btn-danger btn-block'> Remove</a></td></tr>";
                }
                if(isset($disc)){
                    $sum = $sum + $sum ;
                }
                echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php' class='btn btn-success btn-block'>Confirm Order</a></td></tr>";
                ?>
            </tbody>
             <?php
        } else {
            echo "Add items to the cart first!";
        }
        ?>
        <?php
        ?>
            </table>
        </div><br><br>
       
    </body>
</html>