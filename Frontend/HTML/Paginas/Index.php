
<html lang="es">



<head>
    <link rel="icon" type="image/png" href="./Imágenes/logoPerso2.png">

    <meta charset="UTF-8">
    <title>SerpisWare</title>
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
    <link rel="stylesheet" href="../../CSS/Index.css" />
    <link rel="stylesheet" href="../../CSS/main.css" />

</head>


<body>


    <?php include ("topnav.php");
    ?>


    <?php     include '../../../Bases de Datos/db_connect.php';?>

    <main>
        <div class="wrapper">
            <div class="login-image">
                <a><img src="../../../Imágenes/logoPerso2.png" /></a>
                <h1 class="brandName">SerpisWare</h1>
            </div>
        </div>


        <div class="index-container">


            <nav class="navbar navbar-expand-lg navbar-mainbg">
            
                <div class="navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
    
                        <div class="hori-selector">
                            <div class="left"></div>
                            <div class="right"></div>
                        </div>
    
                        <li class="nav-item active">
                            <a class="nav-link" onclick="general()" href="javascript:void(0);">Todos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" onclick="procesadores()" href="javascript:void(0);">Procesadores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" onclick="placasBase()" href="javascript:void(0);">Placas base</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" onclick="ramu()" href="javascript:void(0);">RAM</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" onclick="graficas()" href="javascript:void(0);">Tarjetas gráficas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" onclick="discos()" href="javascript:void(0);">Discos duros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" onclick="otros()" href="javascript:void(0);">Otros</a>
                        </li>
                    </ul>
                </div>
            </nav>
                        
            
            <div class="stuff-container">
                
                <?php

                    $query = "SELECT * FROM Productos ORDER BY idproducto DESC";
                    $result = mysqli_query($pdo,$query);
                    while ($row = mysqli_fetch_array($result)){ ?>
                       <a class="<?php echo $row['tipoProducto'];?>" href ="../Paginas/Product_details.php?id=<?php echo $row['idproducto']?>">
                       <div class="content">
                           <div class="overlay">                           </div>
                               <img src="../../../Imágenes/<?php echo $row["imagenProducto"];?>">
                               <div class="text">
                                   <h3> <?php echo $row["precioProducto"];?>€</h3>
                               </div>
                               <h2><?php echo $row["nombreProducto"];?></h2>

                       </div>

                       </a>

                        <?php

                       /*   $products = $pdo->prepare('SELECT * FROM "productos" ORDER BY "idproducto" DESC');
                        $products->execute();
                        $products = $products->fetchAll();
                        foreach($products as $product) {
                        echo '<a class="'.$product['tipoProducto'].'" href="../Paginas/Product_details.php?id='.$product['idProducto'].'">';
                        echo '<div class="content">';
                        echo '<div class="overlay"></div>';
                        echo '<img src="../../../Imágenes/'.$product['imagenProducto'].'">';
                        echo '<div class="text">';
                        echo '<h3>'.$product['precioProducto'].'</h3> </div>';
                        echo '<h2>'.$product['nombreProducto'].'</h2> </div> </a>';
                            }*/

                        }?>

               
            </div>

        </div>

        

    </main>

    

    <?php include ("footer.php")?>

</body>
<script src="../../JS/index.js"> </script>

</html>