<!DOCTYPE html>
<html>
    <body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label>String</label><input type="text" name="name"/><br><br>
        <button type="submit">Submit</button>
    </form>
        <?php 
        $newstr="";
                  
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $string = test_input($_POST["name"]);
                for($res=0;$res<strlen($string);$res++){
                    if($res==0){
                        $newstr[$res]=strtoupper($string[$res]);
                    }else if($string[$res]==" "){
                        $res++;
                        $newstr[$res]=strtoupper($string[$res]);
                    }
                    else{
                        $newstr[$res]=$string[$res];
                    }
                }
                echo $newstr;
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