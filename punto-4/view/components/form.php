<?php include "./controller/ageCalculatorController.php"; ?>

<form method = "post">
    <h2>Validacion de edad 2.0</h2>
        <div class = "pass__input">
            <label for="birth-date">
                Fecha de Nacimiento
            </label>
            <input
                id = "birth-date"
                type="date"
                name = "birth_date"
            >
        </div>
        <?php if ($message != "") { ?>
            <span style = "color: <?php echo $color; ?>">
                <?php echo $message; ?>
            </span>
        <?php } ?>
    </div>
    <button>Consultar</button>
</form>