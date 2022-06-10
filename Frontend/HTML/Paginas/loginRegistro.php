<?php
session_start();
?>
><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="../../CSS/main.css" />
    <link rel="stylesheet" href="../../CSS/loginRegistro.css" />
    <link rel="stylesheet" href="../../CSS/alert.css" />
</head>

<body>
   
<?php include("topnav.php") ?>

    

    
    <main>



        <div class="login-image">
            <a><img src="../../../Imágenes/logoPerso2.png" /></a>
            <h1 class="brandName">SerpisWare</h1>
        </div>
        <!--Aviso de Edicion-->
        <?php  if(isset($_SESSION['mensaje'])) {?>

            <div class="alert-<?php echo $_SESSION['color_mensaje']?> mb-5">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <h4><?php echo $_SESSION['mensaje'];?></h4>
            </div>


            <?php

            unset($_SESSION['mensaje']);
            unset($_SESSION['color_mensaje']);
        }
        ?>
        <!--Fin Aviso de Edicion-->

        <div class="login-container">

            <form class="formularioLogin" action="./models/clients/login.php" method="POST">
                <section class="formularioContainerGrande">
                    <div class="divPrimarios">
                        <input id="registroEmail" placeholder="Correo electrónico" type="text" required autocomplete="email" name="email"/>
                    </div>
    
                    <div class="divPrimarios">
                        <input id="registrousername" placeholder="Constraseña" type="password" required autocomplete="off" name="password"/>
                    </div>
                    
                </section>
    
                <br>
                <button id='login' name="login" type="submit">Iniciar sesión</button>
                <p class="registrarUsuario">¿Aún no tienes cuenta?<a class='registrarButton' onclick="showModal()"> Registrate</a></p>
                
            </form>
        </div>

        <div id="popup-box" class="modal">
            <div class="modal-content-register">

                <form class="formularioRegistro" method="POST" action="./models/clients/create_user.php">

                    <h3>Registrate</h3>
                    <div class="registroInput">
                        <input placeholder="Correo electrónico" name="email" type="email" autocomplete="email" required />
                    </div>
        
                    <div class="registroInput">
                        <input placeholder="Contraseña" type="password" name="password" required autocomplete="off" />
                    </div>
            
    
                        <button type="submit" name="create">Crear cuenta</button>
                </form>
            
            </div>
        </div>

        <br><br>
        
    </main>

    <?php include("footer.php") ?>

    
    
</body>
<script src="../../JS/loginUsuario.js"></script>

</html>