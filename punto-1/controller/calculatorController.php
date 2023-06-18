<?php 
    $result = 0;

    if (isset($_POST["first_number"]) && isset($_POST["second_number"]) && isset($_POST["operation_type"])) {
        $firstNumber = intval($_POST["first_number"]);
        $secondNumber = intval($_POST["second_number"]);
        $operationType = $_POST["operation_type"];

        switch ($operationType) {
            case "add":
                $result = $firstNumber + $secondNumber;
                break;
            case "substr":
                $result = $firstNumber - $secondNumber;
                break;
            case "mult":
                $result = $firstNumber * $secondNumber;
                break;
            case "div":
                $result = $firstNumber / $secondNumber;
                break;
        }
    }
?>