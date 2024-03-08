<?php
    session_start();

    if(!isset($_SESSION['success'])){
        header('location: session.php');
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
    <h1>Welcome to Admin Panel</h1>

    <a href="logout.php">logout</a>
</body>
</html>