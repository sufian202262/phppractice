<?php

session_start();


session_destroy();


$_SESSION = array();

//cookie remove
setcookie('success', '');
//setcooke('success', $keep, time()-30);
header('location: 18_cookie.php');