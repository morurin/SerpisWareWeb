<?php
try {
    /*    $pdo=new PDO('mysql:host=localhost;dbname=serpisweb_bd;user=root;password=');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);*/
        //ini_set('display_errors', '0');     // CALLATE LOS ERRORES

    session_start();
    $pdo = mysqli_connect(
        'localhost',
        'root',
        '',
        'serpisweb_db'
    );


} catch(PDOException $e) {
        echo $e;
        exit();
}
?>