<?php

    $first = isset($_REQUEST['firstname'])? $_REQUEST['firstname']: 'Abu';
    $last = isset($_REQUEST['lastname'])? $_REQUEST['lastname']: 'Sufian';
    $email = isset($_REQUEST['email'])? $_REQUEST['email']: "abusufian202262@gmail.com";

    if(isset($_REQUEST['submit_info'])){
        $success = "your form has been submitted";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information</title>
</head>
<body>

    <form action="14.php" method="POST">
        <input type="text"  name="firstname" placeholder="first name" required>
        <input type="text" name="lastname" placeholder="last name" required>
        <input type="email" name="email" placeholder="email address" required>
        <input type="submit" name="submit_info" value="Submit">
    </form>
    <?php
        if(isset($success)){
            echo '<b>'.$success.'</b>';
        }
    ?>
    <h3>
   First Name: <?php echo $first; ?> </br>
   Last Name: <?php echo $last; ?> </br>
   Email: <?php echo $email; ?> </br>
   </h3>
</body>
</html>