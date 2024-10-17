<?php
//aquí me conecto a la base de datos configurada en conBD
include_once("./conBD.php");

class Agendar
{
    private $_con;

    public function __construct()
    {
        $db = new conDB(); // Instancio la conexión de base de datos
        $this->_con = $db->con; // Asigno la conexión de base de datos a la propiedad _con
    }

    // Función para registrar una cita
    public function registrarCita($nombre, $apellido, $documento, $telefono, $fecha, $hora)
    {
        $query = "INSERT INTO agendar (nombre, apellido, documento, telefono, fecha, hora) VALUES ('$nombre', '$apellido', '$documento', '$telefono', '$fecha', '$hora')";
        echo $query;
        if (mysqli_query($this->_con, $query)) {
            echo "Se registró una nueva Cita";
        } else {
            echo "Error: " . mysqli_error($this->_con);
        }
    }
}
?>
