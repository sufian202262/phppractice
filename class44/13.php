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
if(isset($_GET['name'])){
    echo $_GET['name'];
}
else {
    echo "";
}
*/
//short hand statement

$name = isset($_GET['name'])? $_GET['name']:NULL;
echo $name;
?>