<?php

session_start();
include('functions.php');

//setcookie('email', 'abusufian202262@gmai.com', time() + 20);
//print_r($_COOKIE);
if(user_loggedin()){
    header('location: admin.php');
}


if(isset($_POST['login'])){
    $username = $_POST['username'];
    $passwrod = $_POST['password'];

    $keep = isset($_POST['keep']);

    define('USER', 'admin@admin.com');
    define('PASS', '123456');

    if($username == USER && $passwrod == PASS){
        setcookie('success', $keep , time()+30);
        $_SESSION['success'] = '';
        header('location: admin.php');
    }
    else {
        $error = "username or password is incorrect";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in page</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="username"  placeholder = "Username"> <br>
        <input type="password" name="password" placeholder="Password"> <br>
        <input type="checkbox" name="keep" id="keep" >
        <label for="keep">Keep me logged in</label><br>

        <input type="submit" name="login" value="Login">
    </form>
    <?php
        if(isset($error)){
            echo '<p>'.$error.'</p>';
        }
    ?>
</body>
</html>