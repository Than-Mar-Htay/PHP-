<!DOCTYPE html>
<html>
    <body>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label>Text:</label><input type="text" name="name"/><br><br>
            <button type="submit">Submit</button>
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  $name = test_input($_POST["name"]);
                  $char=strlen($name);
                  $result=$name[$char-1];
                  echo $result.$name;
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