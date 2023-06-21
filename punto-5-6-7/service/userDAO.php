<?php
    include "connection.php";

    //el asterisco es para traer todos los datos, si quisiera solo un dato debo escribir que datoy separarlo con comas
    function getAllUsers(){
        return mysqli_query(CONNECTION, "SELECT * FROM usuarios");
    }

    //traer datos intriduciendo el numero de cedula
    function getUserByIdNumber($idNumber){
        return mysqli_query(CONNECTION, "SELECT * FROM usuarios WHERE cedula = $idNumber");
    }

    //SELECT --> GET -- trae datos
    //INSERT --> POST -- envia datos
    //UPDATE --> PUT -- actualiza datos
    //DELETE --> DELETE -- elimina datos

    //print_r(mysqli_fetch_all($query, MYSQLI_ASSOC));
?>