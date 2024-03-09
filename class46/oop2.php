<?php

class person{
    public $name;
    public $pro;
    public $age;

    public function login(){
        return 'login hocche...';
    }
}

$something = new person();

$something-> name ='sufian';
$something-> pro ='developer';
$something->age = 24;


echo $something->login();

?>