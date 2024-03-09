<?php

class person{
    public $name = 'sufian';
    private $naam = 'lara';

    public function display(){   //method for displaying private property
        return $this->naam;
    }

}

$manush = new person();

echo $manush->name.'<br>';

echo $manush->display();

?>