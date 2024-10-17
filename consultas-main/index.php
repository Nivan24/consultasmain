<?php
include_once('conexion.php');
include_once('controlador.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="./estilos/index.css" rel="stylesheet" type="text/css">
    <title>Login de usuario</title>
</head>
<body>

    <div class="container">
        <div class="text-center caja-login">
            <p class="formulario-login-cabecera-fuente">Consul<span>DENTEC</span></p>
            <div class="formulario-login">

                <form action="" method="POST">
                    <div class="formulario-login-cabecera">
                        <p class="formulario-login-cabecera-fuente">Ingreso de usuario</p>
                    </div>
                    <div class="login-elements">
                        <input type="text" name="user" placeholder="usuario" required/>
                    </div>
                    <div class="login-elements">
                        <input type="password" name="pass" placeholder="password" required/>
                    </div>
                    <div class="login-elements">
                        <input type="submit" name="entrar" class="btn btn-success">
                    </div>
                </form>

            </div>
        </div>
    </div>

</body>
</html>
