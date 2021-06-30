<?php
    include 'common.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'link.php'; ?>
    <title>Success | Mobile Shoppee</title>
</head>
<body>
    <!-- Header -->
    <?php
        require 'header.php';
        // $user_id = $_SESSION["user_id"];
        // $query = "SELECT product_id FROM users_products WHERE user_id = '$user_id'";
        // $result = mysqli_query($con, $query) or die(mysqli_error($con));

        // while($row = mysqli_fetch_array($result)){
        //     $product_id = $row["product_id"];
        //     $query_update = "UPDATE users_products SET status = 'Confirmed' WHERE product_id = '$product_id'";            
        //     $result_update = mysqli_query($con, $query_update) or die(mysqli_error($con));
        // }
        include 'confirm.php';
        ?><br><br><br><br><br><br>
    <!-- !Header -->

    <!-- Main -->
        <div class="content">
          <div class="container">
            <div class="col-xs-12">
              <div class="jumbotron">
                <h3 class="text-center">Thank You for Ordering from Mobile Shoppee!</h3>
                <h4 class="text-center">The Order will be delivered to you shortly.</h4>
                <hr>
                <h5 class="text-center">To Continue Shopping , Click <a href="home.php">here</a></h5>
              </div><br>
              <div class="col-md-offset-4 col-md-4">
              <div class="panel panel-default">
                  <div class="panel-body" align="center">
                      <h4>Share your shopping experience with us</h4>
                      <h4>Rate us now</h4>
                      <span class="glyphicon glyphicon-star-empty"></span> <span class="glyphicon glyphicon-star-empty"></span> <span class="glyphicon glyphicon-star-empty"></span> <span class="glyphicon glyphicon-star-empty"></span> <span class="glyphicon glyphicon-star-empty"></span>
                      
                  </div>
                  <div class="panel-footer" align="center">
                      <button class="btn btn-default">Remind me later</button>       <button class="btn btn-default">Rate now</button>
                  </div>
              </div>
              </div>
            </div>
          </div>
        </div><br><br>
    <!-- !Main -->

    
</body>
</html>

