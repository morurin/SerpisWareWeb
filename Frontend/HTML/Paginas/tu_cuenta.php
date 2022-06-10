<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../CSS/main.css" />
    <link rel="stylesheet" href="../../CSS/tu_cuenta.css" />
    <title>Tu cuenta</title>
</head>

<?php include ("../../../Bases de Datos/db_connect.php");
        $email = $_GET['id'];
        $id = mysqli_real_escape_string($pdo,$id);
        $query = "SELECT * FROM usuario WHERE correo = '$email'";
        $result = mysqli_query($pdo,$query);

        while($row = mysqli_fetch_array($result)) {

            $u_nombre = $row['username'];
            $u_email = $row['correo'];
            $u_tel= $row['telefono']; 
             
        }
?>
<body>

    <?php include ("../Paginas/topnav.php") ?>

    <main>
        <br><br><br>
        <div class="main-container">
            <h3>Tu cuenta</h3>
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
                            <h5>**********</h5>

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
                        <div>
                            <span class="name">Mario Lopez</span> /<span>305050006</span>
                            <p>No sé que del moro piso 3</p>
                            <span>Valencia,</span> <span>almassera,</span> <span>12345</span>
                            
                        </div>

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
            <form class="saveForm">
                <div class="input-modal">
                    <input placeholder="Nombre de usuario" type="text" required>
                </div>

                <button>Editar</button>

            </form>

        </div>
    </div>


    <div id="emailM" class="email-modal">
        <div class="modal-content-2">
            <form class="saveForm">
                <div class="input-modal">
                    <input placeholder="Email" type="text" required>
                </div>

                <button>Editar</button>

            </form>

        </div>
    </div>

    <div id="numberM" class="number-modal">
        <div class="modal-content-2">
            <form class="saveForm">
                <div class="input-modal">
                    <input placeholder="Número de teléfono" type="number" required>
                </div>

                <button>Editar</button>

            </form>

        </div>
    </div>


    <div id="passwordM" class="password-modal">
        <div class="modal-content-2P">
            <form class="saveForm">
                <div class="input-modal">
                    <input placeholder="Contraeña actual" type="password" required>
                    <input placeholder="Nueva contraseña" type="password">
                </div>

                <button>Editar</button>

            </form>

        </div>
    </div>





    <div id="adressM" class="adress-modal">
        
        <div class="modal-content">
        
            <form class="saveForm" action="">
                
                <h4>Información de contacto</h4>

                <div class="grid-modal">
                    
                    <div class="input-modal">
                        <input placeholder="Nombres y apellidos" type="text" required>
                    </div>
                    
                    
                    <div class="input-modal">
                        <input placeholder="Número de teléfono" type="number" required>
                    </div>

                </div>
                
                <h4>Dirección de entrega</h4>
                <div class="input-modal">
                        <input class="all" placeholder="Dirección" type="text" required>
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
                                <input placeholder="Municipio" type="text" required>
                            </div>
                    

                            <div class="input-modal">
                                <input class="postal" placeholder="Código postal" type="number" required>
                            </div>
                    
                        </div>
                        

                    </div>
                    
                </div>

                <button>Guardar</button>

            </form>
        </div>
    
    </main>

    
        
    
</body>
<?php include ("../Paginas/footer.php") ?>
<script src="../../JS/tu_cuenta.js"></script>



</html>