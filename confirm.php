<?php
include 'common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
        include 'link.php';
        ?>
        <title>confirm</title>
    </head>
    <body>
<?php
        $user_id = $_SESSION["user_id"];
        $query = "SELECT product_id FROM users_products WHERE user_id = '$user_id'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));

        while($row = mysqli_fetch_array($result)){
            $product_id = $row["product_id"];
            $query_update = "UPDATE users_products SET status = 'Confirmed' WHERE product_id = '$product_id'";            
            $result_update = mysqli_query($con, $query_update) or die(mysqli_error($con));
        }
    ?>
</body>
</html>
