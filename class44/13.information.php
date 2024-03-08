<?php

    $first = isset($_GET['firstname'])? $_GET['firstname']: 'Abu';
    $last = isset($_GET['lastname'])? $_GET['lastname']: 'Sufian';
    $email = isset($_GET['email'])? $_GET['email']: "abusufian202262@gmail.com";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information</title>
</head>
<body>
    <h3>    
    First Name: <?php echo $first; ?> </br>
    Last Name: <?php echo $last; ?> </br>
    Email: <?php echo $email; ?> </br>
    </h3>
</body>
</html>