<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Autour One' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    
    <link rel="stylesheet" href="../../CSS/Checkout.css" />
    <link rel="stylesheet" href="../../CSS/main.css" />

</head>

<body>

    <nav id="topnav" class="topnav">

        <div class="bar">
            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor" class="bi-list"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
        </div>


        <div class=" uwo">
            <a href="./Checkout.html">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi-cart4"
                    viewBox="0 0 16 16">
                    <path
                        d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                </svg>
                <h4>Carrito</h4><span id="car">0</span>
            </a>
            <a href="./FormularioLoginUsuario.php"> <h4>Mi cuenta</h4>
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
    </div>


    <main>
       
        <div class="main-container">

        

            <template>

                <tr>

                    <td>
                        <!-- Los atributos de la imagen deben ser dinamicos cuando la pagina sea dinamica -->
                        <div class="container-fluid">
                            <div class="row justify-content-around">
                                <div class="col-sm-12 col-lg-8"><img alt='' src='' class="ImgCheckout">
                                    </img>
                                </div>
                                <!-- Cuando sea dinamico el href de este anchor tag debe apuntar a la pagina del producto -->
                                <div class="productDescription col-sm-12 col-lg-4 align-self-center"><a
                                        class="nombreProducto"></a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </td>
                    <!-- El texto dentro del span debe ser dinamico.-->
                    <td><span class='price'></span></td>
                    <td>
                        <!-- el atributo value debe ser cambiado por js cuando se vuelva dinamico, Los botones deben tener mejor estilo -->
                        <div class='checkoutInputContainer'><label></label> <input class="checkoutInput" type="number"
                                value="1" /></div>
                        <div class='checkoutInputActions'><button>Cambiar</button></div>
                        <div class='checkoutInputActions'><button>Eliminar</button></div>
                    </td>
                </tr>
            </template>
            <div class="TituloCheckout">
                <h1>Tu carrito</h1>
            </div>
            <div>
                <div class="container">
                    <div class="row justify-content-around">
                        <div class="col-sm-12 col-lg-8">
                            <table>
                                <thead class="tableHeader">
                                    <tr>
                                        <th class="tableHeaderProduct">Producto</th>
                                        <th class="tableHeaderPrice">Precio</th>
                                        <th>Cantidad</th>

                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-12 col-lg-4">
                            <div class="ContainerCheckout">
                                <h1>Resumen del pedido</h1>
                                <div class="DescripcionCheckout">
                                    <p></p>
                                    <p>Precio del envio: 15€</p>
                                    <p></p>
                                </div>
                                <div class='CheckoutFinal'> <button type="submit">Pagar</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </main>

    <footer>
        <div class="text-foo">
            <h4>Síguenos en nuestras redes sociales</h4>

            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                class="bi bi-facebook" viewBox="0 0 16 16">
                <path
                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
            </svg> SerpisWare


            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                class="bi bi-instagram" viewBox="0 0 16 16">
                <path
                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
            </svg> @SerpisWare

            <p>
                Todos los derechos reservados
                <br>
                SerpisWare es una marca registrada
            </p>
        </div>
    </footer>


    <script src="../../JS/Checkout.js"> </script>
    <script src="../../JS/todasLasPaginas.js"> </script>
</body>

</html>