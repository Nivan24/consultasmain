<?php
//La sentencia include_once incluye y evalúa el fichero especificado durante la ejecución del script.
require_once("./config.php");

//creo una clase de conección
class conDB
{
    //variable local publica para guardar la conexion
    public $con = null;


    //en php solo  se puede tener un constructor
    public function __construct()
    {
        //comprobación de excepción con try-catch
        try {
            //conexion
            //la variable con = a la conexión de mysql donde le paso los parametros ya iniciados en config.php
            $this->con = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
            //se le pasa servidor, nombre del servidor, password, y nombre de base de datos
 

            //si la conexión me marca error , muesrte un mensaje de error, de lo contrario muestre mensaje de exito
            if (mysqli_connect_error()) {
                echo "Erorr al conectarse to server databes" .
                    mysqli_connect_error();
            } else {
                echo "***************Conexion Exitosa*************";
            }
        } catch (Exception $e) { // en php las variables enpiezana con $

            echo "Error";
        }
    }
}
