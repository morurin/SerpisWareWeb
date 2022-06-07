<?php
require '../../../../../Bases de Datos/db_connect.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM productos WHERE idproducto = $id";
    $result = mysqli_query($pdo, $query);

    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);
        $nombre = $row['nombreProducto'];
        $precio = $row['precioProducto'];
        $categoria = $row['tipoProducto'];
        $especificacion = $row['especProducto'];
        $sobreproducto = $row['sobreProducto'];
        $imagen = $row['imagenProducto'];
    }
}

if(isset($_POST['update'])){
    $id = $_GET['id'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $categoria = $_POST['categoria'];
    $especificacion = $_POST['especificacion'];
    $sobreproducto = $_POST['sobreproducto'];
    $imagen = $_FILES['imagen']['name'];
    $imagen_tmp = $_FILES['imagen']['tmp_name'];

    $query = "UPDATE productos SET nombreProducto = '$nombre', precioProducto = '$precio', tipoProducto = '$categoria', especProducto = '$especificacion', sobreProducto = '$sobreproducto', imagenProducto = '$imagen' WHERE idproducto = $id";
    $result = mysqli_query($pdo, $query);

    if(!$result){
        //echo "<script>alert('Error al actualizar el producto');</script>";
        $_SESSION['mensaje'] = 'Error al actualizar ';
    }

    $_SESSION['mensaje'] = ' "'.$id.'" Editado exitosamente';
    $_SESSION['color_mensaje'] = 'success';
    header("Location: ../../gestionar_productos.php");

}
?>

<?php include '../../header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Editar Producto</h4>
                </div>
                <div class="card-body">
                    <form action="<?php echo $_SERVER['PHP_SELF'].'?id='.$id; ?>" method="POST">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" name="nombre" value="<?php echo $nombre; ?>">
                        </div>
                        <div class="form-group">
                            <label for="precio">Precio</label>
                            <input type="text" class="form-control" name="precio" value="<?php echo $precio; ?>">
                        </div>
                        <div class="form-group">
                            <label for="categoria">Categoria</label>
                            <select class="form-control" name="categoria">
                                <option value="<?php echo $categoria; ?>"><?php echo $categoria; ?></option>
                                <option value="procesadores">Procesador</option>
                                <option value="placasBase">Placa base</option>
                                <option value="ram">RAM</option>
                                <option value="graficas">Tarjeta Gráfica</option>
                                <option value="discos">Almacenamiento</option>
                                <option value="otros">Otro</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="especificacion">Especificaciones</label>
                            <textarea class="form-control" name="especificacion" rows="3"><?php echo $especificacion; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="sobreproducto">Sobreproducto</label>
                            <textarea class="form-control" name="sobreproducto" rows="3"><?php echo $sobreproducto; ?></textarea>
                        </div>
                        <!--upload image and save route into the db -->
                        <div class="form-group">
                            <label for="imagen">Imagen</label>
                            <input type="file" class="form-control" name="imagen">
                        </div>
                        <button type="submit" class="btn btn-primary" name="update">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include '../../footer.php'; ?>



