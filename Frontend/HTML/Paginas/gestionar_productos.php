<?php $pdo ="";
require '../../../Bases de Datos/db_connect.php';?>
<?php include 'header.php'; ?>
<style>
    td{
        font-size: 1.8rem;
        text-align: center;
    }
    b{
        font-size: 1.8rem;
    }
</style>
<main>
    <div class="stuff-container">
        <!--texto administracion de tienda centrado-->
        <div class="text-center">
            <h1>Administración de la tienda</h1>
            <p>Aquí podrás administrar los productos y las categorías de la tienda.</p>
        </div>


        <div class="container">
            <table class="table table-bordered align-middle my-3 mt-5" id="tabla-productos">
                <thead>
                <tr>
                    <td>id</td>
                    <td>Imagen</td>
                    <td>Nombre</td>
                    <td>Precio</td>
                    <td>Categoría</td>
                    <td>Acciones</td>
                </tr>
                <!-- cuerpo de la tabla -->
                </thead>
                <tbody>
                <?php
                    $sql = "SELECT * FROM productos";
                    $result = mysqli_query($pdo, $sql);
                    while($row = mysqli_fetch_assoc($result)){
                ?>
                        <tr>
                            <td><?php echo $row['idproducto']; ?></td>
                            <td><img src="<?php echo $row['imagen']; ?>" width="100" height="100"></td>
                            <td><?php echo $row['nombre']; ?></td>
                            <td><?php echo $row['precio']; ?></td>
                            <td><?php echo $row['categoria']; ?></td>
                            <td>
                                <a href="editar_producto.php?id=<?php echo $row['idproducto']; ?>">Editar</a>
                                <a href="eliminar_producto.php?id=<?php echo $row['idproducto']; ?>">Eliminar</a>
                            </td>

                        </tr>
                <?php } ?>

                </tbody>

            </table>
        </div>
    </div>




</main>


<?php include 'footer.php'; ?>

</main>



