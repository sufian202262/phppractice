<?php

echo "<pre>";
print_r($_SERVER);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server super global</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="text" name="name" id="name" placeholder="Enter name"> <br>
        <input type="password" name="password" id="password" placeholder="password"> <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>