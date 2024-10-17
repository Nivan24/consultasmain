<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <?php
    include_once('model/agendar.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recuperar los valores del formulario
        $valor2 = $_POST['first-name'] ?? null;
        $valor3 = $_POST['last-name'] ?? null;
        $valor4 = $_POST['document'] ?? null;
        $valor5 = $_POST['phone'] ?? null;
        $valor6 = $_POST['date'] ?? null;
        $valor7 = $_POST['time'] ?? null;

        echo "Los datos ingresados son para la cita son: " .
            ' first-name: ' . $valor2 . ' last-name: ' . $valor3 . ' document: ' . $valor4 .
             ' phone: ' . $valor5. ' date: ' . $valor6. ' time: ' . $valor7;

        // Verificar que todas las variables necesarias están definidas
        if ($valor2 && $valor3 && $valor4 && $valor5 && $valor6 && $valor7) {
            // Instanciar la clase Agendar y registrar la cita
            $us = new Agendar();
            $us->registrarCita($valor2, $valor3, $valor4, $valor5, $valor6, $valor7);
        } else {
            echo "Error: Algunos campos están vacíos, CITA NO AGENDADA.";
        }
    } else {    
        echo "Error: El formulario no ha sido enviado, CITA NO AGENDADA.";
    }
    ?>
    <div>
        <br>
        <hr>
     
