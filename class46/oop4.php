

<?php
//constant,self,this,exception keyword 


class person{
    public $name = 'sufian';

    public $password;

    const MINCHAR = 10;

    public function set_password($digit){
        if(strlen($digit) < self::MINCHAR ){
            echo "Your password is less than ".self::MINCHAR." character";
        }
        else{
            $this->password = $digit;
        }
    }

}

$ami = new person();

$ami -> set_password('123456asdf@asdaf');

echo $ami -> password;

?>

