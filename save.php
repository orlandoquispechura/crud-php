<?php
    include_once('conexion.php');

if (isset($_POST['nombre']) && isset($_POST['descripcion'])) {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];

    $sql ="INSERT INTO articulo (nombre, descripcion) VALUES('$nombre', '$descripcion')";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die('fallo al insertar');
    }

    header("Location: lista-articulo.php");
}

?>