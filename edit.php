<?php
include_once('conexion.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM articulo WHERE id=$id";
    $resultado = mysqli_query($conn, $sql);
    if (mysqli_num_rows($resultado) == 1) {
        $item = mysqli_fetch_array($resultado);
        $nombre = $item['nombre'];
        $descripcion = $item['descripcion'];
    }
}

if (isset($_POST['btnactualizar'])) {
    $id = $_GET['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];

    $sql = "UPDATE articulo SET nombre = '$nombre', descripcion = '$descripcion' WHERE id= $id";
    $resultado1 = mysqli_query($conn, $sql);
    if (!$resultado1) {
        die('No se pudo actt');
    }

    header("Location:lista-articulo.php");
}
?>
<?php include_once('includes/header.php');  ?>

<div class="row mt-4">
    <div class="col-md-6 m-auto">
        <h3>Crear artículo</h3>
        <div class="card">
            <div class="card-body">
                <form action="edit.php?id=<?php echo $_GET['id'] ?>" method="post">
                    <div class="form-group mb-4">
                        <input type="text" autofocus name="nombre" value="<?php echo $nombre; ?>" placeholder="Ingrese el nombre" class="form-control">
                    </div>
                    <div class="form-group">
                        <textarea name="descripcion" class="form-control" placeholder="Descripcion del articulo" rows="3"><?php echo $descripcion; ?></textarea>
                    </div>

                    <button class="btn btn-success mt-3" name="btnactualizar">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<br>
<?php
include_once('includes/footer.php');
?>