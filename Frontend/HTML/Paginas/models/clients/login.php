<?php
require '../../../../../Bases de Datos/db_connect.php';

if (isset($_GET['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sqlemail = "SELECT * FROM usuario WHERE correo = '$email'";
    $resultemail = mysqli_query($pdo, $sqlemail);
    if(mysqli_num_rows($resultemail) == 1) {
        $rowemail = mysqli_fetch_array($resultemail);
        $emailbd = $rowemail['correo'];
        $passwordbd = $rowemail['password'];
        if ($email == $emailbd && $password == $passwordbd) {
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            header("Location: ../../../../../Frontend/HTML/Paginas/index.php");
        } else {
            $_SESSION['mensaje'] = 'Error al iniciar sesión';
            $_SESSION['color_mensaje'] = 'danger';
            header("Location: ../../../../../Frontend/HTML/Paginas/login.php");
        }
    }
}
