<?php

//$to = "abusufian202262@gmail.com";
//$sub = "An email from mail function";
//$msg = "Hello there! how are you? I am a mail form mail function";
//$headers = "from: salmankhan@yoyo.com"; //optional eta..na dile server er email theke jabe

//mail($to, $sub, $msg, $headers);

if(isset($_POST['contact'])){
    $error = array();

    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $email = $_POST['email_address'];

    $msg = "Name: ".$firstname. " ".$lastname.'<br>';
    $msg .="Email Address: ".$email."<br>";
    $msg .="ja bolte cai: ".$_POST['message']."<br>";


    $to = "abusufian202262@gmail.com";
    $sub = "An email from mail function";
    $headers = "from: $email \r\n"; 
    $headers .= "content-type: text/html";

    if($firstname == NULL){
        $error['fname'] = "First name is missing";
    }
    if($lastname == NULL){
        $error['lname'] = "Last name is missing";
    }
    if($email == NULL){
        $error['email'] = "Email is missing";
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error['emailfilter'] = "Email is not valid";
    }
    if($msg == NULL){
        $error['msg'] = "message is required";
    }
    
    if(count($error) == 0){
        mail($to, $sub, $msg, $headers);
        $success = "successfully submitted";
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mail function</title>

    <style>
        .error{
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <form action="23.php" method="POST">
        <input type="text" name="first_name" placeholder="First name"><br>
        <p class="error"><?php if(isset($error['fname'])) echo $error['fname'] ?></p>

        <input type="text" name="last_name" placeholder="Last name"><br>
        <p class="error"><?php if(isset($error['lname'])) echo $error['lname'] ?></p>
        
        <input type="email" name="email_address" placeholder="Email Address"><br>
        <p class="error"><?php if(isset($error['email'])) echo $error['email'] ?></p>
        <p class="error"><?php if(isset($error['emailfilter'])) echo $error['emailfilter'] ?></p>
        
        <textarea name="message" cols="30" rows="10"></textarea><br>
        <p class="error"><?php if(isset($error['msg'])) echo $error['msg'] ?></p>
        

        <input type="submit" value="submit" name="contact">
        <p class="success"><?php if(isset($success)) echo $success ?></p>

    </form>
</body>
</html>