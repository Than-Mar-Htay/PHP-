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
                for($i=0;$i<$string;$i++){
                    if($i%2==0){
                        echo $i;
                    }else{
                        echo $i.",";
                    }
                }
                    
                echo("\n"); 
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