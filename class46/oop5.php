

<?php
class person{
    static $name = 'sufian';


    static function set_name(){
        self::$name = 'Abu Sufian';
    }

}

echo person::$name.'<br>';

echo person::set_name();

echo person::$name.'<br>';


?>
