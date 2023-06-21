<form 
    action="./view/pages/user-data.php" 
    method = "get"
>
    <h2>Registro de usuario</h2>
    <div class = "form__row">
        <div>
            <label for="first-name">
                Nombres del usuario:
            </label>
            <input 
            id="first-name"
            type="text"
            name="first_name"
            placeholder="Kevin Alejandro"
            >
        </div>
        <div>
            <label for="last-name">
                Apellidos del usuario:
            </label>
            <input 
            id="last-name"
            type="text"
            name="last_name"
            placeholder="Pedraza Diaz"
            >
        </div>
        <div>
            <label for="id-number">
                Numero de cédula del usuario:
            </label>
            <input 
            id="id-number"
            type="text"
            name="id_number"
            placeholder="1556904268"
            >
        </div>
    </div>
    <button>Registrar</button>
</form>