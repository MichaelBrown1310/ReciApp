<?php

    include 'conexion_be.php'

    $correo = $_POST['correo'];
    $clave = $_POST['clave'];


    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE documento='$documento' and clave='$clave'");

    if(mysqli_num_rows($validar_login) > 0) {
        header("location: ../bienvenida.php");
        exit;
    }else{
        echo'
        <script>
            alert("Usuario no existe, por favor verifique los datos
            introducidos");
            window.location = "../index.php";
        </script>
        ';
        exit;
        }
?>