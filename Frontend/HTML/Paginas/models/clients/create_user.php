<?php
require '../../../../../Bases de Datos/db_connect.php';

if (isset($_POST['create'])) {
    $email = $_POST['email'];

    $sqlemailrepeated = "SELECT * FROM usuario WHERE correo = '$email'";
    $resultemailrepeated = mysqli_query($pdo, $sqlemailrepeated);
    $resultemailrepeated = mysqli_num_rows($resultemailrepeated);
    if ($resultemailrepeated > 0) {
        $_SESSION['mensaje'] = 'El email ya existe, crea una cuenta con otro email';
        $_SESSION['color_mensaje'] = 'warning';
        header("Location: ../../loginRegistro.php");
    }else{
        $password = $_POST['password'];
        /*username is the email without the @gmail.com*/
        $username = explode('@', $email);
        $sql = "INSERT INTO usuario (correo, contrasena, username) VALUES ('$email', '$password', '$username[0]')";
        $result = mysqli_query($pdo, $sql);
        if($result){
            //echo "<script>alert('Producto eliminado correctamente');</script>";
            $_SESSION['mensaje'] = 'Usuario creado exitosamente';
            $_SESSION['color_mensaje'] = 'success';
            header("Location: ../../loginRegistro.php");
        }else{
            //echo "<script>alert('Error al eliminar el producto');</script>";
            $_SESSION['mensaje'] = 'Error en la creacion del usuario';
            $_SESSION['color_mensaje'] = 'danger';
            header("Location: ../../loginRegistro.php");
        }

    }
}