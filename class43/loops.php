<?php

    echo "<h2> While loop: </h2><br>";
    $n = 30;
    while($n<35){
        echo $n."<br>";
        $n++;
    }

    echo "<h2> do while loop: </h2><br>";
    $m=1;
    do{
        echo $m."<br>";
        $m++;
    }while($m<10);

    echo "<h2> for loop: </h2><br>";
    for($i = 20;$i<25;$i++){
        echo $i."<br>";
    }

    echo "<h2> foreach: </h2><br>";
    $a = array("ami", "tmi", "apni", "tui");
    foreach($a as $b){
        echo $b."<br>";
    }

?>