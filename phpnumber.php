<?php
$x=5;
$y=6.9;
$c=acos(8);
$d=1.9e411;
$a="24342"+100;
var_dump(is_int($x));
echo "<br>";
var_dump(is_float($y));
print "<br>";
var_dump(is_numeric($a));
print "<br>";
$int_cast=(int)$y;
print "The integer ".$int_cast;
echo "<br>";
var_dump($c);
echo "<br>";
var_dump($d);
?>