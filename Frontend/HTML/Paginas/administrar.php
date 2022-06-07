
<html lang="es">



<head>
    <link rel="icon" type="image/png" href="./Imágenes/logoPerso2.png">

    <meta charset="UTF-8">
    <title>Administración</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../../CSS/main.css" />
    <link rel="stylesheet" href="../../CSS/administrar.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
</head>


<body>

<?php include "./topnav_admin.php" ?>

<!-- align div to center-->

<main>
        <div class="stuff-container">
            <!--texto administracion de tienda centrado-->
            <div class="text-center">
                <h1>Administración de la tienda</h1>
                <p>Aquí podrás administrar los ítems de la tienda</p>
            </div>
            <div class="container-fluid mt-5 ">
                <div class="row centered">
                    <!-- Usuarios -->
                    <div class="col-md-2 col-sm-4 mt-4">
                        <div class="wrimagecard wrimagecard-topimage">
                            <a href="#">
                                <div class="wrimagecard-topimage_header" style="background-color:rgba(187, 120, 36, 0.1) ">
                                    <center><i class="fa fa-user" style="color:#BB7824"></i></center>
                                </div>
                                <div class="wrimagecard-topimage_title">
                                    <h4>Usuarios
                                        <div class="pull-right badge">18</div></h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- Productos -->
                    <div class="col-md-2 col-sm-4 mt-4">
                        <div class="wrimagecard wrimagecard-topimage">
                            <a href="gestionar_productos.php">
                                <div class="wrimagecard-topimage_header" style="background-color: rgba(22, 160, 133, 0.1)">
                                    <center><i class = "fa fa-cubes" style="color:#16A085"></i></center>
                                </div>
                                <div class="wrimagecard-topimage_title">
                                    <h4>Productos
                                        <div class="pull-right badge" id="WrControls"></div></h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- carritos -->
                    <div class="col-md-2 col-sm-4 mt-4">
                        <div class="wrimagecard wrimagecard-topimage">
                            <a href="#">
                                <div class="wrimagecard-topimage_header" style="background-color:  rgba(213, 15, 37, 0.1)">
                                    <center><i class="fa fa-shopping-cart" style="color:#d50f25"> </i></center>
                                </div>
                                <div class="wrimagecard-topimage_title" >
                                    <h4>Carritos
                                        <div class="pull-right badge" id="WrForms"></div>
                                    </h4>
                                </div>

                            </a>
                        </div>
                    </div>
                    <!-- Facturacion -->
                    <div class="col-md-2 col-sm-4 mt-4">
                                            <div class="wrimagecard wrimagecard-topimage">
                                                <a href="#">
                                                    <div class="wrimagecard-topimage_header" style="background-color:  rgba(51, 105, 232, 0.1)">
                                                        <center><i class="fa fa-file-text-o" style="color:#3369e8"> </i></center>
                                                    </div>
                                                    <div class="wrimagecard-topimage_title">
                                                        <h4>Facturacion
                                                            <div class="pull-right badge" id="WrGridSystem"></div></h4>
                                                    </div>

                                                </a>
                                            </div>
                                        </div>
                    <!--
                                        <div class="col-md-3 col-sm-4 mt-4">
                                            <div class="wrimagecard wrimagecard-topimage">
                                                <a href="#">
                                                    <div class="wrimagecard-topimage_header" style="background-color:  rgba(250, 188, 9, 0.1)">
                                                        <center><i class="fa fa-info-circle" style="color:#fabc09"> </i></center>
                                                    </div>
                                                    <div class="wrimagecard-topimage_title">
                                                        <h4>Information
                                                            <div class="pull-right badge" id="WrInformation"></div></h4>
                                                    </div>

                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-4 mt-4">
                                            <div class="wrimagecard wrimagecard-topimage">
                                                <a href="#">
                                                    <div class="wrimagecard-topimage_header" style="background-color: rgba(121, 90, 71, 0.1)">
                                                        <center><i class="fa fa-bars" style="color:#795a47"> </i></center>
                                                    </div>
                                                    <div class="wrimagecard-topimage_title">
                                                        <h4>Navigation
                                                            <div class="pull-right badge" id="WrNavigation"></div></h4>
                                                    </div>

                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-4 mt-4">
                                            <div class="wrimagecard wrimagecard-topimage">
                                                <a href="#">
                                                    <div class="wrimagecard-topimage_header" style="background-color: rgba(130, 93, 9, 0.1)">
                                                        <center><i class="fa fa-magic" style="color:#825d09"></i></center>
                                                    </div>
                                                    <div class="wrimagecard-topimage_title">
                                                        <h4>Themes & Icons
                                                            <div class="pull-right badge" id="WrThemesIcons"></div></h4>
                                                    </div>
                                                </a>
                                            </div>
                                        </div> -->
                </div>
            </div>
        </div>




</main>


<?php include 'footer.php'; ?>
