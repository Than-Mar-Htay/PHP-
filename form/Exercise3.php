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
                $frist=$string[0];
                $char=strlen($string);
                $last=$string[$char-1];
                $string[0]=$last;
                $string[$char-1]=$frist;
                echo $string;
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