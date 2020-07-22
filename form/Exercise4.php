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
                $res1=$string[0];
                $res2=$string[1];
                $res3=$string[2];
                $result="";
                $result[0]=$res1;
                $result[1]=$res2;
                $result[2]=$res3;
                //for($result=strlen($string);$result<3;$result)
                echo $result.$string.$result;
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