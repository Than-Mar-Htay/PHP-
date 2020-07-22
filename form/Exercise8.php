<?php
echo "<table border=2>";
for ($i=1;$i<=100;$i++){
    echo "<tr>\n";
    for($j=1;$j<=10;$j++){
        $result=$i*$j;
        echo "<td>$result</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
