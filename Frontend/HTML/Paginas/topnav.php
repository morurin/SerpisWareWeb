
<?php
require '../../../Bases de Datos/lazy_session.php';
lazy_session_start();
?>

<nav id="topnav" class="topnav">

    <div class="bar">
        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor" class="bi-list"
             viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                  d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
        </svg>
    </div>


    <div class=" uwo">
        <a href="./Checkout.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi-cart4"
                 viewBox="0 0 16 16">
                <path
                    d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
            </svg>
            <h4>Carrito</h4><span id="car">0</span>
        </a>


        <?php if(isset($_SESSION['email'])) { ?>
            <a href="tu_cuenta.php?id=<?php echo $_SESSION['email']?>" > <h4> <?php echo $_SESSION['username'] ?></h4>
        <?php } else { ?>
        <a href="./loginRegistro.php"> <h4>Iniciar sesión</h4>
        <?php } ?>


            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi-person-circle"
                 viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path fill-rule="evenodd"
                      d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
            </svg>
        </a>
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
    <a href="#" onclick="showAbout()">Sobre nosotros</a>
    <p id="aboutUs">Somos una pequeña empresa dedicada a la venta de hardware online ubicada en Valencia.</p>
    <a href="#" onclick="showContact()">Contáctenos</a>
    <p id="contact"> Correo electrónico: Serpis@ware.com <br><br>
        Número de teléfono: +34 111111111</p>

    <?php

    if (isset($_SESSION['username'])) {
    if(strcmp($_SESSION['rol'],"admin") == 0){?>
        <a href="Administrar.php" >Administrar </a>
        <?php
    }
    }
    ?>



    <?php
    if (isset($_SESSION['username'])) {?>
        <a href="./models/clients/Logout.php">Cerrar sesión </a>
        <?php
    }else{
        ?>
        <a href="./loginRegistro.php">Iniciar sesión </a>
    <?php
    }
    ?>
</div>
