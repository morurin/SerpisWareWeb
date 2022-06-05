<?php
try {
        $pdo=new PDO('mysql:host=localhost;dbname=serpisweb_bd;user=root;password=1234');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //ini_set('display_errors', '0');     // CALLATE LOS ERRORES
} catch(PDOException $e) {
        echo $e;
        exit();
}
?>