<?php include "./controller/ageValidationController.php"; ?>

<form method = "post">
    <h2>Validacion de edad</h2>
    <div class = "form__row">
        <div>
            <label for="user-name">
                Nombre
            </label>
            <input
                id = "user-name"
                type="text"
                name = "user_name"
                placeholder = "Kevin"
            >
        </div>
        <div class = "pass__input">
            <label for="user-age">
                Edad
            </label>
            <input
                id = "user-age"
                type="text"
                name = "user_age"
                placeholder = "21"
            >
        </div>
        <?php if ($message != "") { ?>
            <span style = "color: <?php echo $color; ?>">
                <?php echo $userName . $message; ?>
            </span>
        <?php } ?>
    </div>
    <button>Consultar</button>
</form>