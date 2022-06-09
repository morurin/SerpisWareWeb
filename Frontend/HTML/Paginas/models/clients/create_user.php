<?php
require '../../../../../Bases de Datos/db_connect.php';


if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
    $result = mysqli_query($pdo, $sql);
    if ($result) {
        echo "Usuario creado correctamente";
    } else {
        echo "Error al crear usuario";
    }
}