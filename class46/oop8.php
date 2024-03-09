<?php

//stdClass: without creating class we can create an object with any property;

$pass = new stdClass();

$pass -> key = '123456';



class person{

    public $name;
    public $password;

    public function set_password(){
        global $pass;
        return $pass->key;
    }
}

$ami = new person();

echo $ami -> set_password();

?>