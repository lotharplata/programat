<?php 
include("con_db.php");

if(isset($_POST["register"])){
    $cedula = isset($_POST['cedula']) ? trim($_POST['cedula']) : '';
    $nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
    $clave = isset($_POST['clave']) ? trim($_POST['clave']) : '';
    $gmail = isset($_POST['gmail']) ? trim($_POST['gmail']) : '';

    // Validate input
    if(strlen($cedula) >= 1 && strlen($nombre) >= 1 && strlen($clave)) { 
        // Sanitize input to prevent SQL injection
        $cedula = mysqli_real_escape_string($conex, $cedula);
        $nombre = mysqli_real_escape_string($conex, $nombre);
        $clave = mysqli_real_escape_string($conex, $clave);
        $gmail = mysqli_real_escape_string($conex, $gmail);

        $sql = "SELECT * FROM usuarios WHERE cedula='$cedula'";
        $resultado = mysqli_query($conex, $sql);

        if ($resultado && mysqli_num_rows($resultado) > 0) {
            ?> 
            <h3>¡Usuario ya existente!</h3>
            <?php
        } else {
            $consulta = "INSERT INTO usuarios(cedula, nombre, clave, gmail) VALUES ('$cedula','$nombre', '$clave','$gmail')";
            $ejecutar_consulta = mysqli_query($conex, $consulta);

            if($ejecutar_consulta){
                ?>
                <h3>Se ha creado un Usuario</h3>
                <?php
            } else {
                ?>
                <h3>No se pudo crear el Usuario</h3>
                <?php 
            }
        }
    } else {
        ?> 
        <h3>¡Por favor complete los campos!</h3>
        <?php
    }
}
?>

