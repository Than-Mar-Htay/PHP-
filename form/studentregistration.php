<?php
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $township=$_POST["city"];
    $grade=$_POST["grade"];
    $subject=$_POST["subject"];
    echo "My name is: ".$name."<br><br>";
    echo "My email is : ".$email."<br><br>";
    echo "My phone number is: ".$phone."<br><br>";
    echo "Township: ".$township."<br><br>";
    echo "Grade: ".$grade."<br><br>";
    foreach ($subject as $value){
        echo "Subject: ".$value."<br><br>";
    }
?>