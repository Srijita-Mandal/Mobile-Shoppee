<?php
$con=mysqli_connect("localhost","root","","mobile_shop") or die(mysqli_error($con));
if(!isset($_SESSION['email'])){
    session_start();
}
?>