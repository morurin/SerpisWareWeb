<?php
require '../../../../../Bases de Datos/db_connect.php';
$_SESSION = array();
session_start();





if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sqlemail = "SELECT * FROM usuario WHERE correo = '$email'";
    $resultemail = mysqli_query($pdo, $sqlemail);
    if(mysqli_num_rows($resultemail) == 1) {
        $rowemail = mysqli_fetch_array($resultemail);
        $emailbd = $rowemail['correo'];
        $passwordbd = $rowemail['contrasena'];

        if ($email == $emailbd && $password == $passwordbd) {
            $_SESSION['email'] = $email;
            $_SESSION['username'] = $rowemail['username'];
            $_SESSION['rol'] = $rowemail['rol'];
            header("Location: ../../../../../Frontend/HTML/Paginas/index.php");
        } else {
            $_SESSION['mensaje'] = 'Error al iniciar sesión';
            $_SESSION['color_mensaje'] = 'danger';
            header("Location: ../../../../../Frontend/HTML/Paginas/loginRegistro.php");
        }
    }else{
        $_SESSION['mensaje'] = 'No existe el usuario, registrate';
        $_SESSION['color_mensaje'] = 'danger';
        header("Location: ../../../../../Frontend/HTML/Paginas/loginRegistro.php");
    }
}
