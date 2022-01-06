<?php 
    $listaProductos=$_GETPDO();
    print_r($listaProductos);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NeaInformatica</title>
    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
        <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600,700" rel="stylesheet"> 

    <!-- Custom & Default Styles -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>

      
     <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">

        <section class="border-box slider d-flex justify-content-center align-items-center "></section>
        <span class="navbar-text" styling=""></span>
        <a class="navbar-brand" href="info.php"><img src="img/pngegg.png" width="60" height="50" alt="">NEA Informática</a>
                    
                    <ul class="navbar-nav mr-auto">
                         <li class="nav-item active">
                             <a class="nav-link" href="#">Carrito(0)</a>
                         </li>

                     </ul>
                     <a class="navbar-brand justify-content-last" href="#">Nosotros</a>
                     <a class="navbar-brand justify-content-last" href="#">Registrarse</a>
                     <a class="navbar-brand justify-content-last" href="inisesion.html">Ingresar</a>
                    
                </div>
            </div>      
        </nav>
    </div>
<div class="site-wrap">
    <br>
    <br>
        <section class="section normalhead">
            <div class="container">
                <br>
                <div class="alert alert-success">
                    Patalla de mensaje
                    <a href="#" class="badge badge-success">Ver Carrito</a>
                </div>
                <div class="row">   
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
                        <h2>Nuestros Productos</h2>
                        <p class="lead">Acontinuación encontraras una variedad de productos</p>
                        <br>
                        <br>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->
        <br>
        <br>
        <section class="section">
            <div class="container">
                <div class="row service-list">
                    <span>Titulo del producto</span>
                <?php 
                
                    $resultado = $conexion -> query("SELECT * FROM tblproducto order by id DESC limit 10") or die($conexion ->error);
                    while($fila = mysqli_fetch_array($resultado)){

                ?>
                    <div class="col-md-4 col-sm-12 col-xs-12 first">
                        <div class="service-wrapper">   
                            <img src="img/<?php echo $fila ['imagen'];?>" alt="<?php echo $fila ['nombre'];?>"class="img-fluid">
                            <br>
                            <div class="service-details">
                                <h4><a href="service-01.html" title=""><?php echo $fila ['nombre'];?></a></h4>
                                <h5>$<?php echo $fila ['precio'];?></h5>
                                <p class="mb-0"><?php echo $fila ['descripcion'];?></p>
                                <button class="btn btn-primary" 
                                name="btnAction" value="Agregar" 
                                type="submit">Comprar</a>

                            </div>
                        </div><!-- end service-wrapper -->
                    </div><!-- end col -->
                <?php }?>

                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="service-wrapper">
                            <img src="img/D_920-O.jpg" width="280" height="180" class="img-responsive">
                            <div class="service-details">
                                <h4><a href="service-02.html" title="">Notebook HP</a></h4>
                                <h5>$79.990</h5>
                                <p>Notebook HP 14-dw0065 la i7 1065g7 ... </p>
                                <button class="btn btn-primary" name="btnAction" value="Agregar" type="submit">Comprar</a>
                            </div>
                        </div><!-- end service-wrapper -->
                    </div><!-- end col -->

                    <div class="col-md-4 col-sm-12 col-xs-12 last">
                        <div class="service-wrapper">
                            <img src="img/D_6180-O.jpg" width="280" height="180" class="img-responsive">
                            <div class="service-details">
                                <h4><a href="service-02.html" title="">Notebook EXO</a></h4>
                                <h5>$59.890</h5>
                                <p>Notebook Exo E25 Plus Mi Compu Fácil Ideal Adultos Mayores. </p>
                                <a href="" class="readmore">Comprar</a>
                                <button class="btn btn-primary" name="btnAction" value="Agregar" type="submit">Comprar</a>
                                <br>
                                <br>
                                <br>
                            </div>
                        </div><!-- end service-wrapper -->
                    </div><!-- end col -->
                    <p>
                        
                    </p>
                    <p></p>

                    <div class="col-md-4 col-sm-12 col-xs-12 first">
                        <div class="service-wrapper">
                            <img src="img/D_729-E.jpg" width="280" height="180" class="img-responsive">
                            <div class="service-details">
                                <h4><a href="service-04.html" title="">Gamer Intel I5</a></h4>
                                <h5>$50.853,50</h5>
                                <p>Computadoras Gamer Intel I5 9na Gen 8gb Ddr4 1tb Rx 550 4gb. Sistema operativo: Windows 10 TRIAL. </p>
                                <a href="#" class="readmore">Comprar</a>
                                <button class="btn btn-primary" name="btnAction" value="Agregar" type="submit">Comprar</a>

                            </div>
                        </div><!-- end service-wrapper -->
                    </div><!-- end col -->
                    <p>
                        
                    </p>
                    <p></p>

                    <div class="col-md-4 col-sm-12 col-xs-12 first">
                        <div class="service-wrapper">
                            <img src="img/D_729-E.jpg" width="280" height="180" class="img-responsive">
                            <div class="service-details">
                                <h4><a href="service-04.html" title="">Gamer Intel I5</a></h4>
                                <h5>$50.853,50</h5>
                                <p>Computadoras Gamer Intel I5 9na Gen 8gb Ddr4 1tb Rx 550 4gb. Sistema operativo: Windows 10 TRIAL. </p>
                                <a href="#" class="readmore">Comprar</a>
                                <button class="btn btn-primary" name="btnAction" value="Agregar" type="submit">Comprar</a>

                            </div>
                        </div><!-- end service-wrapper -->
                    </div><!-- end col -->

                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="service-wrapper">
                            <img src="img/D_759-E.jpg" width="250" height="180" class="img-responsive">
                            <div class="service-details">
                                <h4><a href="service-05.html" title="">Pc Gamer Ryzen</a></h4>
                                <h5>$35.990</h5>
                                <p>Pc Gamer Cpu Amd Ryzen 5 3400g Rx Vega 11 8gb Ssd 240gb P1. Computadora armada gaming. Disco 240 GB.</p>
                                <a href="#" class="readmore">Comprar</a>
                                <button class="btn btn-primary" name="btnAction" value="Agregar" type="submit">Comprar</a>

                            </div>
                        </div><!-- end service-wrapper -->
                    </div><!-- end col -->

                    <div class="col-md-4 col-sm-12 col-xs-12 last">
                        <div class="service-wrapper">
                            <img src="img/D_789-E.jpg" width="250" height="180"class="img-responsive">
                            <div class="service-details">
                                <h4><a href="service-06.html" title="">Pc Sentey</a></h4>
                                <h5>$58.999</h5>
                                <p>Pc Gamer Armada Amd 23 Ryzen 3400g Vega 11 8gb 120gb 750w</p>
                                <a href="#" class="readmore">Comprar</a>
                                <button class="btn btn-primary" name="btnAction" value="Agregar" type="submit">Comprar</a>
                                <br>
                                <br>
                            </div>
                        </div><!-- end service-wrapper -->
                    </div><!-- end col -->
                    <p>
                        
                    </p>

                    <div class="col-md-4 col-sm-12 col-xs-12 first">
                        <div class="service-wrapper">
                            <img src="img/D_830-E.jpg" width="250" height="180" class="img-responsive">
                            <div class="service-details">
                                <h4><a href="service-07.html" title="">Impresora Pantium</a></h4>
                                <h5>$12.800</h5>
                                <p>Impresora Pantum P2500W con wifi 220V - 240V negra</p>
                                <a href="#" class="readmore">Comprar</a>
                                <button class="btn btn-primary" name="btnAction" value="Agregar" type="submit">Comprar</a>
                            </div>
                        </div><!-- end service-wrapper -->
                    </div><!-- end col -->

                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="service-wrapper">
                            <img src="img/D_770-E.jpg" width="250" height="180"class="img-responsive">
                            <div class="service-details">
                                <h4><a href="service-08.html" title="">Impresora HP LaserJet</a></h4>
                                <h5>$25.300</h5>
                                <p>Impresora HP LaserJet Pro M404DW con wifi 220V blanca.</p>
                                <a href="#" class="readmore">Comprar</a>
                                <button class="btn btn-primary" name="btnAction" value="Agregar" type="submit">Comprar</a>
                            </div>
                        </div><!-- end service-wrapper -->
                    </div><!-- end col -->

                    <div class="col-md-4 col-sm-12 col-xs-12 last">
                        <div class="service-wrapper">
                            <img src="img/D_850-E.jpg" width="280" height="220"class="img-responsive">
                            <div class="service-details">
                                <h4><a href="service-09.html" title="">Pc Gamer Cx</a></h4>
                                <h5>$118.995</h5>
                                <p>Pc Gamer Cx Intel Core I7 9700 16gb Ssd 240g+1tb Gtx 1650 4g</p>
                                <a href="#" class="readmore">Comprar</a>
                                <button class="btn btn-primary" name="btnAction" value="Agregar" type="submit">Comprar</a>
                                <br>
                                <br>
                                
                            </div>
                        </div><!-- end service-wrapper -->
                    </div><!-- end col -->
                </div><!-- end row -->
                <p>
                    
                </p>
                

                <div class="section-button clearfix text-center">
                    <p>

                    </p>
                    <p>
                        
                    </p>
                    <p class="lead">Si todavía no te has creado una cuenta, a continuación puedes registrarte</p>
                    <button class="btn btn-primary " type="submit" href="">Registrarme</button><br>
                    <br>
                    <br>
                    <br>
                </div><!-- end section-button -->
            </div><!-- end container -->
        </section><!-- end section -->
    <?php include("./layouts/header.php"); ?> 
</div>
        
<footer class="footer primary-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                      <div class="widget clearfix">
                        <h4 class="widget-title">Subscribirse</h4>
                        <div class="newsletter-widget">
                          <p>Para recibir más novedades y promociones.</p>
                            <form class="form-inline" role="search">
                                <div class="form-1">
                                    <input type="text" class="form-control" placeholder="correo..">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i></button>
                                </div>
                </form>
                        </div><!-- end newsletter -->
                      </div><!-- end widget -->
                    </div><!-- end col -->
                    <div class="col-md-2 col-sm-2">
                      <div class="widget clearfix">
                        <h4 class="widget-title">Nosotros</h4>
                        <ul>
                          <li><a href="#">Carreras</a></li>
                          <li><a href="#">Marketing</a></li>
                          <li><a href="#">Contacto</a></li>
                        </ul>
                      </div><!-- end widget -->
                    </div><!-- end col -->

    

                    <div class="col-md-3 col-sm-3">
                      <div class="widget clearfix">
                        <h4 class="widget-title">Redes Social</h4>
                        <ul>
                          <li><a href="#">Facebook</a></li>
                          <li><a href="#">Twitter</a></li>
                          <li><a href="#">Linkedin</a></li>
                        </ul>
                        <br>
                        <br>
                      </div><!-- end widget -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
    </footer><!-- end primary-footer -->

    

  <!-- jQuery Files -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/parallax.js"></script>
  <script src="js/animate.js"></script>
  <script src="js/custom.js"></script>


    
</body>
</html>