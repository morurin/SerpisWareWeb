<!DOCTYPE html>
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
    <link rel="stylesheet" href="../../CSS/LoginRegister.css" />
    


   
</head>

<body>
   
<?php include("topnav.php") ?>

    

    
    <main>
        <div class="login-image">
            <a><img src="../../../Imágenes/logoPerso2.png" /></a>
            <h1 class="brandName">SerpisWare</h1>
        </div>


        <div class="login-container">
            <form class="formularioLogin">
                <section class="formularioContainerGrande">
                    <div class="divPrimarios">
                        <input id="registroEmail" placeholder="Correo electrónico" type="text" required autocomplete="email" />
                    </div>
    
                    <div class="divPrimarios">
                        <input id="registrousername" placeholder="Constraseña" type="password" required autocomplete="off" />
                    </div>
                    
                </section>
    
                <br><br>
                <button id='login'>Iniciar sesión</button>
                <p class="registrarUsuario">¿Aún no tienes cuenta?<a class='registrarButton' onclick="showModal()"> Registrate</a></p>
                
            </form>
        </div>
        




        <div id="popup-box" class="modal">
            <div class="modal-content-register">

                <form class="formularioRegistro">

                    <h3>Registrate</h3>
                    <div class="registroInput">
                        <input placeholder="Correo electrónico" type="email" autocomplete="email" required />
                    </div>
        
                    <div class="registroInput">
                        <input placeholder="Contraseña" type="password" required autocomplete="off" />
                    </div>
            
    
                        <button>Crear cuenta</button>
                </form>
            
            </div>
        </div>

        <br><br>
        
    </main>

    <?php include("footer.php") ?>

    
    
</body>
<script src="../../JS/loginUsuario.js"></script>

</html>