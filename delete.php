<?php
include_once('conexion.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM articulo WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die('delete fallido!!');
    }

    header("Location: lista-articulo.php");

}



?>