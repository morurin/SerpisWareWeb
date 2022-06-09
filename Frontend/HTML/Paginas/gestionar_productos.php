<?php require '../../../Bases de Datos/db_connect.php';?>
<?php include 'header.php'; ?>

<head>
<link rel="stylesheet" href="../../CSS/gestionar_productos.css" />

</head>
<main>



    <div class="stuff-container">



        <!--texto administracion de tienda centrado-->
        <br><br><br><br><br><br><br><br><br>
        <div class="text-center mt-3">
            <h1>Administración de la tienda</h1>
            <p>Aquí podrás administrar los productos y las categorías de la tienda.</p>
        </div>






        <div class="container">
            <!--Aviso de Edicion-->
            <?php  if(isset($_SESSION['mensaje'])) {?>

                <div class="alert-<?php echo $_SESSION['color_mensaje']?> mb-5">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                    <h4><?php echo $_SESSION['mensaje'];?></h4>
                </div>
                <?php   session_unset();  } ?>
            <!--Fin Aviso de Edicion-->

            <a href="nuevo.php">
                <button type="button" class="btn btn-success btn-lg btn-block" > <i class="fa fa-plus" aria-hidden="true"></i>
                    Añadir Productos</button></a>



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
                    while($row = mysqli_fetch_assoc($result)){?>

                <tr>
                    <td><?php echo $row['idproducto']; ?></td>
                    <td width="200px"><img class="productito" src="../../../Imágenes/<?php echo $row['imagenProducto']; ?>" alt="<?php echo $row['nombreProducto']; ?>"></td>
                    <td><?php echo $row['nombreProducto']; ?></td>
                    <td><?php echo $row['precioProducto']; ?> <b>€</b> </td>
                    <td><?php echo $row['tipoProducto']; ?></td>
                    <td class="text-center p-5">
                        <a href="update.php?id=<?php echo $row['idproducto']; ?>" class="btn btn-secondary p-3">
                            <i class="fa fa-edit fa-2x"></i>
                        </a>

                        <a href="./models/products/borrar.php?id=<?php echo $row['idproducto']; ?>" class="btn btn-danger p-3">
                            <i class="fa fa-trash fa-2x"></i></a>
                        </a>
                    </td>

                </tr>
                <?php } ?>
                </tbody>
            </table>
            

        </div>
    </div>




</main>




</main>



