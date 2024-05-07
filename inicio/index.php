<?php
include("con_db.php");
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['cedula'])) {
    // Si no ha iniciado sesión, redirigir al formulario de inicio de sesión
    header('Location: log_regi.php'); // Reemplaza con la ruta correcta
    exit();
}

// Obtener el nombre del usuario desde la base de datos
$cedula = $_SESSION['cedula'];
$sql = "SELECT nombre FROM usuarios WHERE cedula='$cedula'";
$resultado = mysqli_query($conex, $sql);

if ($resultado) {
    $fila = mysqli_fetch_assoc($resultado);
    $nombreUsuario = $fila['nombre'];
} else {
    // Manejar el error de la consulta
    $nombreUsuario = "Error al obtener el nombre";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codemaster Pro</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <div class="dropdown">
                <button class="dropbtn">Programat</button>
                <div class="dropdown-content">
                    <!-- Agrega aquí las opciones de idioma -->
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Aprende Un Poco De Programacion</button>
                <div class="dropdown-content">
                    <!-- Agrega aquí las opciones de cursos -->
                </div>
            </div>
            <div class="auth-buttons">
                <h1>Bienvenid@ <?php echo  $nombreUsuario; ?> !</h1><br>
                <button class="sign-up">Sign Up</button>
                <button class="log-in">Log in</button>
            </div>
            <div>
                <li id="login-status"></li>
            </div>
        </nav>
        <div class="course-menu">
            <a href="index.html"><button>inicio</button></a>
            <a href="introduccion-html.html#html"><button>HTML</button></a>
            <a href="introduccion-css.html#css"><button>CSS</button></a>
            <a href="introduccion-javascript.html#javascript"><button>JAVASCRIPT</button></a>
            <a href="introduccion-sql.html#sql"><button>SQL</button></a>
            <a href="introduccion-python.html#python"><button>PYTHON</button></a>
            <a href="introduccion-Java.html#java"><button>JAVA</button></a>
            <a href="introduccion-php.html#php"><button>PHP</button></a>
            <a href="introduccion-c.html#c"><button>C</button></a>
        </div>
    </header>
    <main>
        <div class="hero-section" id="inicio">
            <h1>Codemaster Pro</h1>
        </div>
    </main>
    <script src="script.js"></script>
</body>
</html>