<?php
    session_start();

    if(isset($_SESSION['success'])){
        header('location: admin.php');
    }

    if(isset($_POST['login'])){
        define('MAIL','admin@admin.com');
        define('PASSWORD','123');

        $email = $_POST['email'];
        $password = $_POST['password'];

        if($email == MAIL && $password == PASSWORD){
            $_SESSION['success'] = '';
            header('location: admin.php');
        }
        else{
            $fail = 'email or password is wrong';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="email" placeholder = "Email"><br>
        <input type="password" name="password" placeholder = "password"><br>
        <input type="submit" name="login" value="Log in">
    </form>

    <?php
        if(isset($fail)){
            echo '<p>'.$fail.'</p>';
        }
    ?>
</body>
</html>
