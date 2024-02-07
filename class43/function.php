<?php

// phpinfo()

function title(){
    echo "this is our website title";
}

$title = title();

function profession($art, $pro){
    return "I am $art $pro";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>
<body>

    <?php
    echo "<h2>".profession("a", "Doctor")."</h2>"
    ?>
    
</body>
</html>