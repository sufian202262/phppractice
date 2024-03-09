<?php


class person{

    public function __construct($abc, $def){
        echo "this is ". $abc. " and ". $def;
    }

    public $name;
}

$ami = new person("ami","apni");