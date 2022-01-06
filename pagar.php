<?php 
include 'global/configuracion.php';
include 'global/conexion.php';
include 'carrito.php';
include 'templates/cabecera.php';
?>
<br>
<br>

<?php

if($_POST){

    $total=0;
    $SID=session_id();
    $correo=$_POST['email'];
    

    foreach($_SESSION['CARRITO'] as $indice=>$producto){

        $total=$total+($producto['PRECIO']*$producto['CANTIDAD']);

    }
        $sentencia=$pdo->prepare ("INSERT INTO `tblventas` (`id`, `claveTransaccion`, `paypaldatos`, `fecha`, `correo`, `total`, `status`) 
        VALUES (NULL, :claveTransaccion, '', NOW(), :correo,:total, 'pendiente');");
        
        $sentencia->bindParam(":claveTransaccion",$SID);
        $sentencia->bindParam(":correo",$correo);
        $sentencia->bindParam(":total",$total);
        $sentencia->execute();  
        $idventas=$pdo->lastInsertId();
        
        foreach($_SESSION['CARRITO'] as $indice=>$producto){  
            $sentencia=$pdo->prepare ("INSERT INTO `tbldetalleventas` 
            (`id`, `idventa`, `idproducto`, `preciounitario`, `cantidad`, `descargado`) 
            VALUES (NULL, :idventas, :idproducto, :preciounitario, :cantidad, '0');");
           
            $sentencia->bindParam(":idventas",$idventas);
            $sentencia->bindParam(":idproducto",$producto['ID']);
            $sentencia->bindParam(":preciounitario",$producto['PRECIO']);
            $sentencia->bindParam(":cantidad",$producto['CANTIDAD']);
            $sentencia->execute();  
            
       
        }
    //echo "<h3>".$total."</h3>";
}

?>

<body>
    <script src="https://www.paypal.com/sdk/js?client-id=Aej7K5_RPqaF82HTRH6-q_8S6RRIYMJ753qeEZrwmBq-Hf8PYtOGSb_sOHqzf-WrIgajpvpAzgH2K1HK"> // Replace YOUR_SB_CLIENT_ID with your sandbox client ID
    </script>

<div class="jumbotron text-center">
    <h1 class="display-4">¡Paso Final!</h1>
    <hr class="my-4">
    <p class="lead">Estas a punto de pagar con paypal la cantidad de: 
    <h4>$<?php echo number_format($total,2);   ?></h4>
    <div id="paypal-button-container"></div>
   </p>
    <p> Los productos seran procesados una vez que se procese el pago <p>
    <strong>(Para consultas: neainformatica@gmail.com)</strong>
</div>


    <!-- Add the checkout buttons, set up the order and approve the order -->
    <script>
      paypal.Buttons({
        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{
              amount: {
                value: '0.01'
              }
            }]
          });
        },
        onApprove: function(data, actions) {
          return actions.order.capture().then(function(details) {
              console.log(details)
            alert('Transaction completed by ' + details.payer.name.given_name);
          });
        }
      }).render('#paypal-button-container'); // Display payment options on your web page
    </script>
  </body>



 

 


    


<?php
include 'templates/pie.php';
?>