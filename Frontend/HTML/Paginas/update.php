<?php
require '../../../Bases de Datos/db_connect.php';
if (!isset($_SESSION)) {
    session_start();
}


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
    $imagen = $_POST['imagen'];
    $upload = $_POST['upload'];

    $filename = $_FILES["imagen"]["name"];
    $tempname = $_FILES["imagen"]["tmp_name"];
    $folder = "../../../Imágenes/".$filename;
    move_uploaded_file($tempname, $folder);

    if($upload == 1 ){
        $query = "UPDATE productos SET nombreProducto = '$nombre', precioProducto = '$precio', tipoProducto = '$categoria', especProducto = '$especificacion', sobreProducto = '$sobreproducto', imagenProducto = '$filename' WHERE idproducto = $id";
    }else{
        $query = "UPDATE productos SET nombreProducto = '$nombre', precioProducto = '$precio', tipoProducto = '$categoria', especProducto = '$especificacion', sobreProducto = '$sobreproducto' WHERE idproducto = $id";
    }


    $result = mysqli_query($pdo, $query);

    if(!$result){
        //echo "<script>alert('Error al actualizar el producto');</script>";
        $_SESSION['mensaje'] = 'Error al actualizar ';
    }

    $_SESSION['mensaje'] = ' "'.$id.'" Editado exitosamente';
    $_SESSION['color_mensaje'] = 'success';
    header("Location: gestionar_productos.php");

}
?>

<head>
<link rel="icon" type="image/png" href="../../../Imágenes/logoPerso2.png">

<meta charset="UTF-8">
<title>SerpisWare</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="../../CSS/main.css">

    <style>
        label,input {
            font-size: 1.4rem;
        }

        .uploadcheck{
            font-size: 1.3rem !important;
        }


    </style>
</head>


<!--He sacado este archivo de la carpeta porque daba error con las rutas hacia imagnes, otras paginas etc -->

<body>

<?php include "./topnav_admin.php" ?>

<div class="stuff-container">
    <main>


        <div class="container">
            <br><br><br><br>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Editar Producto</h4>
                        </div>
                        <div class="card-body">
                            <form enctype="multipart/form-data" action="" method="POST">
                                <div class="row">
                                    <div class="col-9">
                                        <div class="form-group">
                                            <label for="nombre">Nombre</label>
                                            <input type="text" class="form-control" name="nombre" value="<?php echo $nombre; ?>">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="precio">Precio</label>
                                            <input type="text" class="form-control" name="precio" value="<?php echo $precio; ?>">
                                        </div>
                                    </div>
                                </div>


                                <div class ="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="categoria">Categoria</label>
                                            <select class="form-control" name="categoria">
                                                <option value=" <?php echo $categoria; ?>" hidden disabled><?php echo $categoria; ?> </option>
                                                <option value="procesadores">Procesador</option>
                                                <option value="placasBase">Placa base</option>
                                                <option value="ram">RAM</option>
                                                <option value="graficas">Tarjeta Gráfica</option>
                                                <option value="discos">Almacenamiento</option>
                                                <option value="otros">Otro</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="imagen">Imagen</label>
                                            <input type="file" class="form-control" name="imagen">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="especificacion">Especificaciones</label>
                                    <textarea class="form-control" name="especificacion" rows="3"><?php echo $especificacion; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="sobreproducto">Sobreproducto</label>
                                    <textarea class="form-control" name="sobreproducto" rows="3"><?php echo $sobreproducto; ?></textarea>
                                </div>
                                <!-- checkbox subir imagen -->
                                <div class="form-group">
                                    <label for="upload" class="uploadcheck mx-3" >Actualizar Imagen</label>
                                    <input type="checkbox"   name="upload" value="1">

                                </div>


                                <button type="submit" class="btn btn-primary mt-5" name="update">Actualizar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


</div>
<?php include './footer.php' ?>
    <br><br><br>
<script src="../../JS/todasLasPaginas.js"></script>
</body>
