<?php


class person{
    public $name = "Sufian";
}

$one = new person();

//$two = $one; //copy

$two = clone $one;  //clone

$two ->name = "Sourov";


print_r($one);
print_r($two);

?>