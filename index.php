<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>

        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Documento" name="documento">
                        <input type="password" placeholder="Contraseña" name="clave">
                        <button>Entrar</button>
                    </form>

                    <!--Register-->
                    
                    <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                        <h2>Regístrarse</h2>
                        <input type="text" placeholder="Nombre" name="nombre">
                        <input type="text" placeholder="Primer Apellido" name="apellido_1">
                        <input type="text" placeholder="Segundo Apellido" name="apellido_2">
                        <input type="number" placeholder="Celular" name="celular">
                        <input type="number" placeholder="Documento" name="documento">
                        <input type="email" placeholder="Correo Electronico" name="email">
                        <label for="tipo_usuario">Tipo de Usuario:</label>
                        <div class="select">
                            <select  name="tipo_usuario" id="tipo_usuario">
                                <option value=1>Residente</option>
                                <option value=2>Visitante</option>
                                <option value=3>Funcionario</option>
                            </select>
                        </div>
                        <input type="password" placeholder="Contraseña" name="clave">
                        <button>Regístrarse</button>
                    </form>
                </div>
            </div>

        </main>

        <script src="assets/js/script.js"></script>
</body>
</html>