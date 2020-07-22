<?php
$x=1;
do {
    echo "The number is ".$x."<br>";
    $x++;
}while($x<=10);
echo "<hr>";
for ($x=10;$x>=1;$x--){
    echo "The number is ".$x."<br>";
}
echo "<hr>";
$fruits=array("apple"=>"$100","orange"=>"$200","mango"=>"$240","banana"=>"$189");
foreach ($fruits as $key=>$value){
    echo "$key=$value <br>";
}
echo "<hr>";
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      break;
    }
    echo "The number is: $x <br>";
  }
  echo "<hr>";
  for ($x = 0; $x <= 10; $x++) {
    if ($x == 4) {
      continue;
    }
    echo "The number is: $x <br>";
  }
?>