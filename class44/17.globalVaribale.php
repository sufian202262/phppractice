<?php



function something(){

    $GLOBALS['a'];
    $a = "ami";
}
something();
echo $a;
?>