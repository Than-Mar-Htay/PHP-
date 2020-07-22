<!DOCTYPE html>
<html>
    <body>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label>String</label><input type="text" name="name"/><br><br>
            <button type="submit">Submit</button>
        </form>
        <?php
            $number=0;
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $string = test_input($_POST["name"]);
                $res=1;
                for($result=$string;$result>0;$result--){
                    $res*=$result;
                }
                echo $res;
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