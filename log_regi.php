<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register - MagtimusPro</title>
    
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
                    <form action="" class="formulario__login" method ="post">
                        <h2>Iniciar Sesión</h2>
                        <?php
                            include("login.php");
                        ?>
                        
                        <input type="text" name="cedula" placeholder="Cedula">
                        <input type="password" name="clave" placeholder="Contraseña">
                        <button name="login">Iniciar Sesion</button>
                    </form>

                    <!--Register-->
                    <form action="" class="formulario__register"method ="post">
                        <h2>Regístrarse</h2>
                        <?php
                        include("register.php");
                        ?>
                        <input type="text" id="cedula" name="cedula" placeholder="Cedula"required>
                        <input type="text" id="nombre" name="nombre" placeholder="Nombre y apellido"required>
                        <input type="password" id="clave" name="clave" placeholder="Contraseña"required>
                        <input type="text" id="gmail" name="gmail"placeholder="gmail"required>
                        <button type="submit" name="register">Regístrarse</button>
                    </form>
                </div>
            </div>

        </main>

        <script src="assets/js/script.js"></script>
</body>
</html>