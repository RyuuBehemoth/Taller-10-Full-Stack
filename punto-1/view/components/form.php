<?php include "./controller/calculatorController.php"; ?>

<form method = "post">
    <h2>Calculadora</h2>
    <div class = "form__row">
        <div>
            <label for="first-number">
                Primer numero
            </label>
            <input id="first-number" type="text" name="first_number" placeholder="500">
        </div>
        <div>
            <label for="second-number">
                Segundo numero
            </label>
            <input id="second-number" type="text" name="second_number" placeholder="500">
        </div>
    </div>
    <div>
        <label for="operation-type">
            Operación
        </label>
        <select id="operation-type" name="operation_type">
            <option value="add">Sumar</option>
            <option value="substr">Restar</option>
            <option value="mult">Multiplicar</option>
            <option value="div">Dividir</option>
        </select>
    </div>
    <button>Operar</button>
</form>