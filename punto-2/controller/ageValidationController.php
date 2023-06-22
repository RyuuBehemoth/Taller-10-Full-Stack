<?php
    $message = "";
    $userName = "";
    $color = "";
    
    if (isset($_POST["user_age"]) && isset($_POST["user_name"])) {
        $userName = $_POST["user_name"];
        $userAge = intval($_POST["user_age"]);

        if ($userAge >= 18) {
            $message = " usted es mayor de edad.";
            $color = "green";
        } else {
            $message = " usted es menor de edad.";
            $color = "red";
        }
    }
?>