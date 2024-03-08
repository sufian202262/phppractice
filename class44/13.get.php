<?php
/*
echo $_GET."<br/>";
print_r($_GET);
echo "<br/>";

$someting = array('age'=> 24);


$someting['name']= "Sufian";
$someting['pro']= "developer";

print_r($someting);

echo '<br>';

*/
/*

//$_GET['name'] = 'sufian';

if(isset($_GET['name'])){
    echo $_GET['name'];
}
else {
    echo "";
}
*/
/*
//short hand statement

$name = isset($_GET['name'])? $_GET['name']:NULL;
echo $name;
*/

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="13.information.php" method="GET">
        <input type="text"  name="firstname" placeholder="first name" required>
        <input type="text" name="lastname" placeholder="last name" required>
        <input type="email" name="email" placeholder="email address" required>
        <input type="submit" value="Submit">
    </form>
</body>
</html>