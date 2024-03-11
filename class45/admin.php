<?php
session_start();
include('functions.php');

if(!user_loggedin()){
    header('location: 18_cookie.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
</head>
<body>
    <h2>Welcome to admin panel</h2>
    <a href="logout.php">Log out</a>
</body>
</html>