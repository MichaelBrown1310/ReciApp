<?php

    include 'conexion_be.php';

    $nombre = $_POST['nombre'];
    $apellido_1 = $_POST['apellido_1'];
    $apellido_2 = $_POST['apellido_2'];
    $celular = $_POST['celular'];
    $documento = $_POST['documento'];
    $email = $_POST['email'];
    $tipo_usuario = $_POST['tipo_usuario'];

    //Encriptar
    $clave = $_POST['clave'];
    $clave_encriptada = hash('sha512', $clave);

    $query = "INSERT INTO usuarios(nombre, apellido_1, apellido_2, celular, documento, email, tipo_usuario, clave)
            VALUES('$nombre', '$apellido_1', '$apellido_2', '$celular', '$documento', '$email', '$tipo_usuario', '$clave_encriptada')";

    //verificar que el correo no se repita en la base de datos
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email ='$email' ");
    $verificar_documento = mysqli_query($conexion, "SELECT * FROM usuarios WHERE documento ='$documento' ");


    if(mysqli_num_rows($verificar_correo)> 0){
        echo '
        <script>
            alert("Este correo Ya esta registrado, intenta con otro diferente");
            indow.location = "../index.php";
        </script>
        ';
        exit();
    }else if(mysqli_num_rows($verificar_documento) > 0){
        echo '
        <script>
            alert("Este documento Ya esta registrado, intenta con otro diferente");
            indow.location = "../index.php";
        </script>
        ';
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);


    if($ejecutar) {
        echo '
        <script>
            alert("Usuario almacenado exitosamente");
            window.location = "../index.php";
        </script>
        ';
        }else{
        echo '
        <script>
            alert("Inténtalo de nuevo, usuario no almacenado");
            window.location = "../index.php";
        </script>
        ';
    }

    mysqli_close($conexion);
?>