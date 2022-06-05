<?php include ("header.php");
$pdo ="";
include '../../../Bases de Datos/db_connect.php';
?>



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

                   $query = "SELECT * FROM productos ORDER BY idproducto DESC";
                   $result = mysqli_query($pdo,$query);
                   while ($row = mysqli_fetch_array($result)){ ?>
                       <a class="<?php echo $row["tipoProducto"];?> href ="xd" >
                       <div class="content">
                           <div class="overlay">                           </div>
                               <img src="../../../Imágenes/<?php echo $row["imagenProducto"];?>">
                               <div class="text">
                                   <h3> <?php echo $row["precioProducto"];?></h3>
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

<?php include ("footer.php");