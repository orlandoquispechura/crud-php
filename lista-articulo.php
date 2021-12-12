<?php
include_once('includes/header.php');
include_once('conexion.php');
?>

<div class="row mt-4">
    <div class="col-md-4">
        <h3>Crear artículo</h3>
        <div class="card">
            <div class="card-body">
                <form action="save.php" method="post">
                    <div class="form-group mb-4">
                        <input type="text" autofocus name="nombre" id="nombre" placeholder="Ingrese el nombre" class="form-control">
                    </div>
                    <div class="form-group">
                        <textarea name="descripcion" class="form-control" placeholder="Descripcion del articulo" rows="3"></textarea>
                    </div>

                    <input type="submit" value="Guardar Articulo" class="btn btn-success btn-block mt-3">
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-8 mt-5">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>DESCRIPCION</th>
                            <th width="200px" >ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $sql = "SELECT  * FROM articulo";
                        $result = mysqli_query($conn, $sql);
                        while ($item = mysqli_fetch_array($result) ): ?>
                            <tr>
                                <td><?php echo $item['id'] ?></td>
                                <td><?php echo $item['nombre'] ?></td>
                                <td><?php echo $item['descripcion'] ?></td>
                                <td>
                                <a href="edit.php?id=<?php echo $item['id'] ?>" class="btn btn-primary ">Editar</a>
                                <a href="delete.php?id=<?php echo $item['id'] ?>" class="btn btn-danger ">Eliminar</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>























<?php include_once('includes/footer.php'); ?>