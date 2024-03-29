<html lang="es">

<head>
    <meta charset="UFT-8">
    <title>Pago</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="../../CSS/main.css" />
    <link rel="stylesheet" href="../../CSS/pago.css" />
</head>

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


        
    if(isset($_POST['updateAdress'])){
       
       
        $nombreReal = $_POST['nombreReal'];
        $numero = $_POST['numero'];
        $direccion = $_POST['direccion'];
        $provincia = $_POST['provincia'];
        $municipio = $_POST['municipio'];
        $postal = $_POST['postal'];

        $query = "UPDATE usuario SET nombre = '$nombreReal', telefono = '$numero', direccion = '$direccion',
        provincia = '$provincia', municipio = '$municipio', postal = '$postal' WHERE correo = '$email'";

        
        
        $result = mysqli_query($pdo, $query);
    
        if(!$result){
            //echo "<script>alert('Error al actualizar el producto');</script>";
            $_SESSION['mensaje'] = 'Error al actualizar ';
        }

        header("Location: pago.php");
    
    }
?>

<body>
    
<?php include ("topnav.php");?>

<main>
    <br><br><br><br>
    <div class="container-pay">
        <div class="left">
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
            

            <div class="payment">
                <h5>Métodos de pago</h5>

                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/>
                    <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/>
                    </svg>
                    <!--El número debe cambiar dependiendo de los datos almacenados -->
                    <span>4111****0203221</span>
                </div>
                
                <div class="change">
                    <h5 onclick="showModalP()">Cambiar</h5>
                </div>
            </div>

            <div class="article">
                <div>
                    <img src="../../../Imágenes/asus-z690.png" alt="">
                </div>

                <div class="text">
                    <h5>Asus Z690</h5>
                
                    <h5>100.50€</h5>
                </div>
            </div>


        </div>



        <div class="rigth">
            <div class="resume">
                <h2>Resumen</h2>
                <br>
                <h5>Costo total de los productos <span>100.5</span>€</h5>
                <br>
                <h5>Total de envío  <span>5</span>€</h5>
                <br>
                <h5>Total <span>105.5</span>€</h5>

                <div>
                    <button>Pagar ahora</button>
                    
                </div>
                <p>Al hacer click en 'Pagar ahora', confirmo haber leído y aceptado los términos y condiciones.</p>
                
            </div>
            
        </div>

    </div>

    <!--Modals para añadir dirrección y metodos de pago -->

    <div id="adressM" class="adress-modal">
        
        <div class="modal-content">
        
            <form class="saveForm" method="POST">
                
                <h4>Información de contacto</h4>

                <div class="grid">
                    
                    <div class="input">
                        <input placeholder="Nombres y apellidos" name="nombreReal" type="text" required>
                    </div>
                    
                    
                    <div class="input">
                        <input placeholder="Número de teléfono" name="numero" type="tel" maxlength="15">
                    </div>

                </div>
                
                <h4>Dirección de entrega</h4>
                <div class="input">
                        <input class="all" placeholder="Dirección" name="direccion" type="text" required>
                </div>
                <div class="grid">
                    <div class="input">
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
                        <div class="grid">
                            <div class="input">
                                <input placeholder="Municipio" name="municipio" type="text" required>
                            </div>
                    

                            <div class="input">
                                <input class="postal" placeholder="Código postal" name="postal" type="number" required>
                            </div>
                    
                        </div>
                        

                    </div>
                    
                </div>

                <button type="submit" name="updateAdress">Guardar</button>

            </form>
        </div>
    </div>



    <div id="paymentM" class="payment-modal">
        <div class="modal-content">
            <form class="saveForm" action="">
                <h4>Añade una nueva tarjeta</h4>

                <div class="grid">

                    <div class="input">
                        <input placeholder="Número de tarjeta" type="number" required>
                    </div>

                    <div class="input">
                        <input placeholder="Nombre del titular de la tarjeta" type="text">
                    </div>

                    <div class="grid">
                        <div class="input">
                            <select required name="MM" class="form-control">

                                <option value="" disabled selected hidden >MM</option>
                                <option value="Enero">Enero (01)</option>
                                <option value="Febrero">Febrero (02)</option>
                                <option value="Marzo">Marzo (03)</option>
                                <option value="Abril">Abril (04)</option>
                                <option value="Mayo">Mayo (05)</option>
                                <option value="Junio">Junio (06)</option>
                                <option value="Julio">Julio (07)</option>
                                <option value="Agosto">Agosto (08)</option>
                                <option value="Septiembre">Septiembre (09)</option>
                                <option value="Octubre">Octubre (10)</option>
                                <option value="Noviembre">Noviembre (11)</option>
                                <option value="Diciembre">Diciembre (12)</option>

                            </select>
                        </div>

                        <div class="input1">
                            <select name="YY" class="form-control">
                                <option value="" disabled selected hidden>YY</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                                <option value="2027">2027</option>
                                <option value="2028">2028</option>
                                <option value="2029">2029</option>
                                <option value="2030">2030</option>
                                <option value="2031">2031</option>
                            </select>

                        </div>


                    </div>

                    <div class="input">
                        <input placeholder="CVV" type="number">

                    </div>

                </div>
                <br>
                <div class="buttom">
                    <button>Confirmar</button>
                </div>
                

            </form>

        </div>

    </div>

</main>

<?php include ("footer.php")?>
<script src="../../JS/pago.js"></script>
</body>

</html>