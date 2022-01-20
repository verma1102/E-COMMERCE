<?php
session_start();
include "conn.php";
//setcookie("firstcookie","This is a sample cookie value",time()+(86400*30), "/");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/form.css">
</head>
<title>LOGIN</title>
<body>
    <form id="login_id" action="submit_mylogin.php" method="POST" class="login-form">
        <h1 class="li">LOG-IN</h1>
        <div class="iput">
            <input type="text" id="un" placeholder="Username" name="username" required>
        </div>
        <div class="iput">
            <input type="password" id="pw" placeholder="Password" name="password" required>
        </div>
        <input type="submit" class="logbtn" value="Login">
        <div class="ftext">
            Don't have an account? <a href="mysignup.php">Sign-Up</a>
        </div>
    </form>
</body>
</html>