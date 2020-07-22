<!DOCTYPE html>
<html>
    <body>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label>String</label><input type="text" name="name"/><br><br>
            <button type="submit">Submit</button>
        </form>  
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $string = test_input($_POST["name"]);
                $length=strlen($string);
                $split=str_split($string);
                sort($split);
                $total=0;
                foreach($split as $val){
                    $total+=$val;
                }
                $average=$total/$length;
                echo $average;
                $min=$split[0].$split[1];
                echo "Two minimum number: ".$min."<br>";
                $max=$split[$length-2].$split[$length-1];
                echo "Two maximum numbers: ".$max;
            }
            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }  
        ?>
    </body>
</html>