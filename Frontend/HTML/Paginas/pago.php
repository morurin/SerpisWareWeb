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

<body>
    
<?php include ("topnav.php");?>

<main>
    <div class="container">
        <div class="left">
            <div class="adress">
                <h5>Dirección de entrega</h5>
                <div class="change">
                    <h5 onclick="showModalA()">Cambiar</h5>
                </div>
            </div>
            

            <div class="payment">
                <h5>Métodos de pago</h5>
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
                <h5>Costo total de los productos <span>22</span>€</h5>
                <br>
                <h5>Total de envío  <span>5</span>€</h5>
                <br>
                <h5>Total <span>27</span>€</h5>

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
        
            <form class="saveForm" action="">
                
                <h4>Información de contacto</h4>

                <div class="grid">
                    
                    <div class="input">
                        <input placeholder="Nombres y apellidos" type="text" required>
                    </div>
                    
                    
                    <div class="input">
                        <input placeholder="Número de teléfono" type="number" required>
                    </div>

                </div>
                
                <h4>Dirección de entrega</h4>
                <div class="input">
                        <input class="all" placeholder="Dirección" type="text" required>
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
                                <input placeholder="Municipio" type="text" required>
                            </div>
                    

                            <div class="input">
                                <input class="postal" placeholder="Código postal" type="number" required>
                            </div>
                    
                        </div>
                        

                    </div>
                    
                </div>

                <button>Guardar</button>

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