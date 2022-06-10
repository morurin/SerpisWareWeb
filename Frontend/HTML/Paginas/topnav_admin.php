<?php
require '../../../Bases de Datos/lazy_session.php';
lazy_session_start();

if ($_SESSION['rol'] != 'admin') {
    header("Location: ../../../Frontend/HTML/Paginas/index.php");
}
?>
<nav id="topnav" class="topnav">

    <div class="bar">
        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor" class="bi-list"
             viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                  d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
        </svg>
    </div>

    <div class="brand">
        <a href="./Index.php">
            <img src="../../../Imágenes/logoPerso.png" width="44px" height="45px" alt="Home">
            <h4>SerpisWare</h4>
        </a>
    </div>

</nav>

<div id="sidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn">&times;</a>
    <a href="Administrar.php" >Administrar</a>
</div>