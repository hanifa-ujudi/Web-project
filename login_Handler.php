<?php

session_start();
$_SESSION['log_error'] = null;

include("connection.php");

$user = $_POST["user"];
$pass = $_POST["pass"];

$query = $con->query("select * from user where user_name = '$user' and password = '$pass'");
$num = $query->num_rows;

if($num ==1){
    $fetch = $query->fetch_assoc();
    $_SESSION['userID'] = $fetch['userID'];
    $_SESSION['user'] = $fetch['user_name'];
    $_SESSION['role'] = $fetch['roles'];
    header("location:home.php");
}else{
    $_SESSION['log_error']= "error";
    header("location:index.php");
}

?>