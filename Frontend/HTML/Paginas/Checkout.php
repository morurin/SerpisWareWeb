

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
    <link rel="stylesheet" href="../../CSS/Checkout.css">

    <link rel="stylesheet" href="../../CSS/main.css">


</head>

<body>
    


<?php include ("topnav.php")?>
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
                                    <p>Precio del envio: 10.5€</p>
                                    <p></p>
                                </div>
                                <div class='CheckoutFinal'> <button type="submit" onclick="location.href='./pago.php'">Proceder al pago</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </main>

<?php include ("footer.php")?>

<script src="../../JS/Checkout.js"></script>
</body>