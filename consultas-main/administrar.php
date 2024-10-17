<?php
include_once("./conBD.php");

class Administrar
{
    private $_con;

    public function __construct()
    {
        $db = new conDB();
        $this->_con = $db->con;
    }

    public function obtenerCitas()
    {
        $query = "SELECT * FROM agendar";
        $result = mysqli_query($this->_con, $query);

        return $result;
    }

    public function eliminarCita($id)
    {
        $query = "DELETE FROM agendar WHERE id = $id";
        if (mysqli_query($this->_con, $query)) {
            echo "Cita eliminada correctamente.";
        } else {
            echo "Error al eliminar la cita.";
        }
    }
}

$citas = new Administrar();
$listaCitas = $citas->obtenerCitas();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['eliminar'])) {
    $id = $_POST['id'];
    $citas->eliminarCita($id);
    header("Location: mostrar-citas.php"); // Redirecciona para actualizar la lista
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Citas</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Citas Agendadas</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Documento</th>
                <th>Teléfono</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($listaCitas)) : ?>
                <tr>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><?php echo $row['apellido']; ?></td>
                    <td><?php echo $row['documento']; ?></td>
                    <td><?php echo $row['telefono']; ?></td>
                    <td><?php echo $row['fecha']; ?></td>
                    <td><?php echo $row['hora']; ?></td>
                    <td>
                        <form method="post" style="display:inline-block;">
                            <!--<input type="hidden" name="id" value="<?php echo $row['id']; ?>">-->
                            <button type="submit" name="eliminar" class="btn btn-danger">Eliminar</button>
                        </form>
                       <!-- <a href="modificar-cita.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Modificar</a>-->
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <a href="./menu.html" class="btn btn-success btn-lg fs-2 text-center">VOLVER AL INICIO</a>
</div>
</body>
</html>
