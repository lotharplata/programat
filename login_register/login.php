<?php
include("con_db.php");

if (isset($_POST["login"])) {
    if (strlen($_POST['cedula']) >= 1 && strlen($_POST['clave']) >= 1) {
        $cedula = trim($_POST['cedula']);
        $clave = trim($_POST['clave']);
        
        $sql = "SELECT * FROM usuarios WHERE cedula=? AND clave=?";
        $stmt = mysqli_prepare($conex, $sql);
        
        mysqli_stmt_bind_param($stmt, "ss", $cedula, $clave);
        mysqli_stmt_execute($stmt);
        
        $resultado = mysqli_stmt_get_result($stmt);

        if ($resultado) {
            $busca = mysqli_num_rows($resultado);
        
            if ($busca > 0) {
                session_start();
                $_SESSION['cedula'] = $cedula;
                header('Location: index.php');
                exit();
            } else {
                echo "<h3>Datos incorrectos</h3>";
            }
        } else {
            echo "Error en la consulta: " . mysqli_error($conex);
        }
        
        
    }
}