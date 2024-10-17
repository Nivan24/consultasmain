<?php


// Verifica si el formulario fue enviado
if (!empty($_POST['entrar'])) {
    // Verifica si los campos de usuario y contraseña están vacíos
    if (empty($_POST['user']) || empty($_POST['pass'])) {
        echo '<div class = "alert alert-danger"> LOS CAMPOS ESTAN VACIOS </div> ';
    } else {
        // Obtén los valores de usuario y contraseña del formulario
        $usuario = $_POST['user'];
        $clave = $_POST['pass'];

        // Realiza la consulta a la base de datos
        $sql = $conexion->query("SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasena = '$clave'");

        // Verifica si la consulta devolvió algún resultado
        if ($datos = $sql->fetch_object()) {
            // Redirige al usuario a la página de menú
            echo "<script>window.location.href = 'menu.html';</script>";    
        } else {
            // Muestra un mensaje de acceso denegado
            echo  '<div class="alert alert-danger"> ACCESSO DENEGADO </div>';
        }
    }
}
?>
