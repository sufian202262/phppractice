<?php

//inheritance and protected keyword

class one {
    public $animal_name;
    protected $color= 'white';
}

class two extends one{
    public function display(){
        $this->color = 'black';
        echo $this->animal_name." ".$this->color;
    }
}

$ex1 = new two;

$ex1 -> animal_name = 'cat';

$ex1->display();


?>