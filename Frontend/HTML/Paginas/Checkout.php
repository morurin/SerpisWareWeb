<?php include ("header.php")?>
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

<?php include ("footer.php"); ?>