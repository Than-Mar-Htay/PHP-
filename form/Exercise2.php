<!DOCTYPE html>
<html>
    <head><title>Exercise1</title></head>
    <body>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label>String:</label><input type="text" name="str"/><br><br>
            <label>Number:</label><input type="text" name="no"/><br><br>
            <button type="submit">Submit</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $string = $_POST["str"];
            $number=$_POST["no"];
            echo substr($string,$number);
          }
        ?>
    </body>
</html>