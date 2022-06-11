<!DOCTYPE html>
<html lang="en">


<?php include ("../../../Bases de Datos/db_connect.php");
        
        if (!isset($_SESSION)) {
            session_start();
        }
        $email = $_SESSION['email'];

        $query = "SELECT * FROM usuario WHERE correo = '$email'";
        $result = mysqli_query($pdo,$query);

        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $id = $row['idUsuario'];
            $u_nombre = $row['username'];
            $u_email = $row['correo'];
            $u_tel= $row['telefono']; 

            $u_rnombre = $row['nombre'];
            $u_direccion = $row['direccion'];
            $u_provincia = $row['provincia'];
            $u_municipio = $row['municipio'];
            $u_postal = $row['postal'];

        }

        /*while($row = mysqli_fetch_array($result)) {

            $id = $row['idUsuario'];
            $u_nombre = $row['username'];
            $u_email = $row['correo'];
            $u_tel= $row['telefono']; 

            $u_rnombre = $row['nombre'];
            $u_direccion = $row['direccion'];
            $u_provincia = $row['provincia'];
            $u_municipio = $row['municipio'];
            $u_postal = $row['postal'];

             
        }*/
        

    if(isset($_POST['updateName']) || isset($_POST['updateNumber']) || isset($_POST['updateEmail']) 
    || isset($_POST['updatePassword']) || isset($_POST['updateAdress'])){
       
       

        if(isset($_POST['updateName'])){

            $nombre = $_POST['nombreUsuario'];
            $query = "UPDATE usuario SET username = '$nombre' WHERE correo = '$email'";
            $_SESSION['username'] = $nombre;

        }
        elseif(isset($_POST['updateEmail'])){

            $email = $_POST['email'];
            $query = "UPDATE usuario SET correo = '$email' WHERE idUsuario = '$id'";
            $_SESSION['email'] = $email;
        }
        elseif(isset($_POST['updateNumber'])){

            $numero = $_POST['numero'];
            $query = "UPDATE usuario SET telefono = '$numero' WHERE idUsuario = '$id'";
        }
        elseif(isset($_POST['updatePassword'])){
            $contrasena = $_POST['contrasena'];
            $query = "UPDATE usuario SET contrasena = '$contrasena' WHERE idUsuario = '$id'";

        }

        elseif(isset($_POST['updateAdress'])){

            $nombreReal = $_POST['nombreReal'];
            $numero = $_POST['numero'];
            $direccion = $_POST['direccion'];
            $provincia = $_POST['provincia'];
            $municipio = $_POST['municipio'];
            $postal = $_POST['postal'];

            $query = "UPDATE usuario SET nombre = '$nombreReal', telefono = '$numero', direccion = '$direccion',
            provincia = '$provincia', municipio = '$municipio', postal = '$postal' WHERE correo = '$email'";

        }
        
        

    
        $result = mysqli_query($pdo, $query);
    
        if(!$result){
            //echo "<script>alert('Error al actualizar el producto');</script>";
            $_SESSION['mensaje'] = 'Error al actualizar ';
        }

        header("Location: tu_cuenta.php");
    
    }
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../CSS/main.css" />
    <link rel="stylesheet" href="../../CSS/tu_cuenta.css" />
    <title>Mi cuenta</title>
</head>


<body>

    <?php include ("../Paginas/topnav.php") ?>

    <main>
        <br><br><br>
        <div class="main-container">
            <h3>Mi cuenta</h3>
            <div class="grid">
                <div class="tab">
                    
                    <button class="tablinks" onclick="openMenu(event, 'sesion')">Inicio de sesión y seguridad</button>
                    <button class="tablinks" onclick="openMenu(event, 'adress')">Dirección de envío</button>
                    <button class="tablinks" onclick="openMenu(event, 'orders')">Tus pedidos</button>
                </div>

                <div id="default" class="tabcontent">
                    <div class="label">
                        <h4>Hola, <?php echo $u_nombre?></h4>
                    </div>
                </div>


                <div id="sesion" class="tabcontent">

                    <div class="label">
                        <div>
                            <label for="user"> Nombre de usuario</label><br>
                            <h5><?php echo $u_nombre?></h5>

                        </div>
                        
                        <div class="change">
                            <h5 onclick="showModalN()">Editar</h5>
                        </div>
                    
                    </div>

                    <div class="label">
                        <div>
                            
                            <label for="email"> E-mail</label><br>
                            <h5><?php echo $u_email?></h5>

                        </div>
                        
                        <div class="change">
                            <h5 onclick="showModalE()">Editar</h5>
                        </div>


                    </div>

                    <div class="label">
                        <div>
                            
                            <label for="number"> Número de Teléfono</label><br>

                            <?php

                            if($u_tel == null){
                                echo "<h5>Añade un número de teléfono</h5>";

                            }
                            else{
                               echo "<h5>$u_tel</h5>";
                            }
                            
                            ?>
                            

                        </div>
                        
                        <div class="change">
                            <h5 onclick="showModalNu()">Editar</h5>
                        </div>
                    </div>


                    <div class="label">
                        <div>
                            
                            <label for="password"> Contraseña</label><br>
                            <h5>********</h5>

                        </div>
                        
                        <div class="change">
                            <h5 onclick="showModalP()">Editar</h5>
                        </div>

                    </div>



                        
                </div>
                
            

                <div id="adress" class="tabcontent">
                    
                    <div class="adress">
                        <h5>Dirección de entrega</h5>
                        <!--Esto de cambiar dependiendo de los datos almacenados -->

                        <?php
                        if($u_rnombre != null){

                            echo "<div>";
                            echo   "<span class='name'>$u_rnombre</span> /<span>$u_tel</span>";
                            echo   "<p>$u_direccion</p>";
                            echo   "<span>$u_provincia,</span><span>$u_municipio,</span><span>$u_postal</span>";
                            echo  "</div>";
                            
                        }
                        else{
                            echo "<p>Añade una dirección</p>";
                        }
                        
                        
                        ?>
                       

                        <div class="change">
                            <h5 onclick="showModalA()">Cambiar</h5>
                        </div>
                    </div>
                </div>


                <div id="orders" class="tabcontent">
                    <h5>Historial de pedidos</h5>
                    <div class="label">
                        <div class="grid-label">
                            <div>
                                <img src="../../../Imágenes/asus-z690.png" alt="">
                            </div>

                            <div class="text">
                                <h4>Nombre del producto</h4>
                                <h5>Asus Z690</h5>
                                <br>
                                <h4>Precio</h4>
                                <h5>100.50€</h5>
                            </div>

                            <div class="text">
                                <h4>Estado</h4>
                                <h5>Entregado</h5>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>


    </div>


    <!--Modals de la pagina -->

    <div id="nameM" class="name-modal">
        <div class="modal-content-2">
            <form class="saveForm" method="POST" action="">
                <div class="input-modal">
                    <input placeholder="Nombre de usuario" type="text" name="nombreUsuario" maxlength="20" value="<?php echo $nombre ?>" required >
                </div>

                <button type="submit" name="updateName">Editar</button>

            </form>

        </div>
    </div>


    <div id="emailM" class="email-modal">
        <div class="modal-content-2">
            <form class="saveForm" method="POST">
                <div class="input-modal">
                    <input placeholder="Email" type="text" name="email" required>
                </div>

                <button name="updateEmail">Editar</button>

            </form>

        </div>
    </div>

    <div id="numberM" class="number-modal">
        <div class="modal-content-2">
            <form class="saveForm" method="POST">
                <div class="input-modal">
                    <input placeholder="Número de teléfono" type="number" name="numero" required>
                </div>

                <button name="updateNumber">Editar</button>

            </form>

        </div>
    </div>


    <div id="passwordM" class="password-modal">
        <div class="modal-content-2P">
            <form class="saveForm" method="POST">
                <div class="input-modal">
                    <input placeholder="Contraeña actual" type="password" required>
                    <input placeholder="Nueva contraseña" type="password" name="password" required>
                </div>

                <button name="updatePassword">Editar</button>

            </form>

        </div>
    </div>





    <div id="adressM" class="adress-modal">
        
        <div class="modal-content">
        
            <form class="saveForm" method="POST">
                
                <h4>Información de contacto</h4>

                <div class="grid-modal">
                    
                    <div class="input-modal">
                        <input placeholder="Nombres y apellidos" name="nombreReal" type="text" required>
                    </div>
                    
                    
                    <div class="input-modal">
                        <input placeholder="Número de teléfono" name="numero" type="number" required>
                    </div>

                </div>
                
                <h4>Dirección de entrega</h4>
                <div class="input-modal">
                        <input class="all" placeholder="Dirección" name="direccion" type="text" required>
                </div>
                <div class="grid-modal">
                    <div class="input-modal">
                        <select required name="provincia" class="form-control">
                            <option value="" disabled selected hidden>Elige Provincia</option>
                            <option value="Álava">Álava</option>
                            <option value="Albacete">Albacete</option>
                            <option value="Alicante">Alicante</option>
                            <option value="Almería">Almería</option>
                            <option value="Asturias">Asturias</option>
                            <option value="Ávila">Ávila</option>
                            <option value="Badajoz">Badajoz</option>
                            <option value="Baleares">Baleares</option>
                            <option value="Barcelona">Barcelona</option>
                            <option value="Burgos">Burgos</option>
                            <option value="Cáceres">Cáceres</option>
                            <option value="Cádiz">Cádiz</option>
                            <option value="Cantabria">Cantabria</option>
                            <option value="Castellón">Castellón</option>
                            <option value="Ceuta">Ceuta</option>
                            <option value="Ciudad Real">Ciudad Real</option>
                            <option value="Córdoba">Córdoba</option>
                            <option value="Cuenca">Cuenca</option>
                            <option value="Gerona/Girona">Gerona/Girona</option>
                            <option value="Granada">Granada</option>
                            <option value="Guadalajara">Guadalajara</option>
                            <option value="Guipúzcoa/Gipuzkoa">Guipúzcoa/Gipuzkoa</option>
                            <option value="Huelva">Huelva</option>
                            <option value="Huesca">Huesca</option>
                            <option value="Jaén">Jaén</option>
                            <option value="La Coruña/A Coruña">La Coruña/A Coruña</option>
                            <option value="La Rioja">La Rioja</option>
                            <option value="Las Palmas">Las Palmas</option>
                            <option value="León">León</option>
                            <option value="Lérida/Lleida">Lérida/Lleida</option>
                            <option value="Lugo">Lugo</option>
                            <option value="Madrid">Madrid</option>
                            <option value="Málaga">Málaga</option>
                            <option value="Melilla">Melilla</option>
                            <option value="Murcia">Murcia</option>
                            <option value="Navarra">Navarra</option>
                            <option value="Orense/Ourense">Orense/Ourense</option>
                            <option value="Palencia">Palencia</option>
                            <option value="Pontevedra">Pontevedra</option>
                            <option value="Salamanca">Salamanca</option>
                            <option value="Segovia">Segovia</option>
                            <option value="Sevilla">Sevilla</option>
                            <option value="Soria">Soria</option>
                            <option value="Tarragona">Tarragona</option>
                            <option value="Tenerife">Tenerife</option>
                            <option value="Teruel">Teruel</option>
                            <option value="Toledo">Toledo</option>
                            <option value="Valencia">Valencia</option>
                            <option value="Valladolid">Valladolid</option>
                            <option value="Vizcaya/Bizkaia">Vizcaya/Bizkaia</option>
                            <option value="Zamora">Zamora</option>
                            <option value="Zaragoza">Zaragoza</option>
                        </select>
                    </div>

                    <div>
                        <div class="grid-modal">
                            <div class="input-modal">
                                <input placeholder="Municipio" name="municipio" type="text" required>
                            </div>
                    

                            <div class="input-modal">
                                <input class="postal" placeholder="Código postal" name="postal" type="number" required>
                            </div>
                    
                        </div>
                        

                    </div>
                    
                </div>

                <button type="submit" name="updateAdress">Guardar</button>

            </form>
        </div>
    </div>
    
    </main>

    
        
    
</body>
<?php include ("../Paginas/footer.php") ?>
<script src="../../JS/tu_cuenta.js"></script>



</html>