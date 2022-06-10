<?php
require '../../../../../Bases de Datos/db_connect.php';
if (!isset($_SESSION)) {
    session_start();
}
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM productos WHERE idproducto = $id";
    $result = mysqli_query($pdo, $sql);
    if($result){
        //echo "<script>alert('Producto eliminado correctamente');</script>";
        $_SESSION['mensaje'] = 'Articulo "'.$id.'" eliminado exitosamente';
        $_SESSION['color_mensaje'] = 'danger';
        header("Location: ../../gestionar_productos.php");
    }else{
        //echo "<script>alert('Error al eliminar el producto');</script>";
        $_SESSION['mensaje'] = 'Error al eliminar ';
        $_SESSION['color_mensaje'] = 'warning';
        header("Location: ../../gestionar_productos.php");
    }}