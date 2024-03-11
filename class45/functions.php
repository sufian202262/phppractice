<?php
function user_loggedin(){
    if(isset($_SESSION['success']) || $_COOKIE['success']==1){
        return true;
    }
    else 
        return false;
}


?>