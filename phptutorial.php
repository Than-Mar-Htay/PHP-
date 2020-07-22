<?php
$x=5;
$y=2;
function myTest(){
    global $x,$y;
    $y=$x+$y;
}
myTest();
echo "The result is ".$y;
?>