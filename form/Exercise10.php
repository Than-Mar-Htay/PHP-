<?php
for ($i=1;$i<=100;$i++){
    if($i%3==0){
        continue;
    }else{
        echo $i."<br>";
    }
}
?>