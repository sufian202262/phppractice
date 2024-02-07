<?php

echo 1;
echo '<br/>';

$num =34;

echo $num;

?>

<?php 

echo "ami";
echo '<br/>';

$ar = Array('ami', 'apni', 'tmi');

echo $ar[1];
echo '<br/>';

$a = "ami";
$b = "valo";
$c = "achi";

echo $a," ",$b," ",$c;
echo '<br/>';
echo $a." ".$b." ".$c;

echo '<br/>';
echo '<br/>';

//in print, using comma contatination is not possible
// print $a," ",$b," ",$c;  

echo '<br/>';
print $a." ".$b." ".$c;

echo '<br/>';

$f = "first";
$s = "second";
$t = "third";
//printf vs sprintf
printf ("i am abu sufian. <br/>");
echo sprintf ("i am %s. he is %s. she is %s.", $f, $s, $t); //this is formatted string

?>