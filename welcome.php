<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
    <button style="height:150px; width:450px; background-color: #7d0000; color: white; font-size: xx-large; border-radius: 40px/40px; " type="button" onclick="location.href='willtable.php';"><b>WILL</b></button>
    <button style="height:150px; width:450px; background-color: #003f54; color: white; font-size: xx-large; border-radius: 40px/40px; "  type="button" onclick="location.href='deletedtable.php';"><b>DELETED</b></button>
    <button style="height:150px; width:450px; background-color: darkgreen; color: white; font-size: xx-large; border-radius: 40px/40px; "  type="button" onclick="location.href='donetable.php';"><b>DONE</b></button>
</body>
</html>