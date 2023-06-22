<?php
    $message = "";
    $color = "";
    
    if (isset($_POST["birth_date"])) {
        $birthDate = new DateTime($_POST["birth_date"]);
        $today = new DateTime();

        $diffDate = $birthDate->diff($today);

        if (($diffDate->y >= 18) && ($diffDate->m == 0) && ($diffDate->d >= 0)) {
            $message = "Tiene " . $diffDate->y . " año(s). Usted es mayor de edad.";
            $color = "green";
        } else {
            $message = "Tiene " . $diffDate->y . " año(s). Usted es menor de edad.";
            $color = "red";
        }
    }
?>