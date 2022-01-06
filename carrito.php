<?php 
session_start();
$mensaje ="";

if (isset($_POST['btnAccion'])){
    switch(($_POST['btnAccion'])){
        case'Agregar':
            if(is_numeric(openssl_decrypt($_POST['id'],COD,KEY))){
                $ID= openssl_decrypt($_POST['id'],COD,KEY);
                $mensaje= "OK ID correcto".$ID."</br>";

            }else {
                $mensaje="Ups.. ID incorrecto".$ID."</br>";
            }
            if (is_string(openssl_decrypt ($_POST['nombre'],COD,KEY))){
                $nombre= openssl_decrypt ($_POST['nombre'],COD,KEY);
                $mensaje.="Ok nombre" .$nombre ."</br>";
                }else { $mensaje.= "Ups.. algo pasa con el nombre"."</br>"; break; }
                if (is_string(openssl_decrypt ($_POST['cantidad'],COD,KEY))){
                    $cantidad= openssl_decrypt ($_POST['cantidad'],COD,KEY);
                    $mensaje.="Ok cantidad" .$cantidad ."</br>";
                    }else { $mensaje.= "Ups.. algo salio mal, cantidad incorrecta"."</br>"; break;}
                    if (is_string(openssl_decrypt ($_POST['precio'],COD,KEY))){
                        $precio= openssl_decrypt ($_POST['precio'],COD,KEY);
                        $mensaje.= "Ok precio".$precio."</br>";
                        } else { $mensaje.= "Ups.. algo salio mal, cantidad incorrecta"."</br>"; break;}

                if(!isset($_SESSION['CARRITO'])){
                    $producto = array(
                        'ID'=> $ID,
                        'NOMBRE'=> $nombre,
                        'CANTIDAD'=> $cantidad,
                        'PRECIO'=> $precio

                    );
                    $_SESSION['CARRITO'][0]= $producto;
                    $mensaje= "Producto agregado al carrito ";
                    

                }else{

                    $idProductos=array_column($_SESSION['CARRITO'],"ID");

                    if (in_array($ID,$idProductos)){
                        echo "<script> alert ('El producto ya ha sido seleccionado...');</script>"; 
                        $mensaje ="";
                    }else{
                    $NumeroProductos=count($_SESSION['CARRITO']);
                    $producto = array(
                        'ID'=> $ID,
                        'NOMBRE'=> $nombre,
                        'CANTIDAD'=> $cantidad,
                        'PRECIO'=> $precio

                        );
                        $_SESSION['CARRITO'][$NumeroProductos]=$producto;
                        $mensaje= "Producto agregarlo al carrito ";
                    
                    }    
                }
                //$mensaje= print_r($_SESSION, true);
                
                    
    break;

    case "Eliminar":
        if(is_numeric(openssl_decrypt($_POST['id'],COD,KEY))){
                $ID= openssl_decrypt($_POST['id'],COD,KEY);

            foreach($_SESSION['CARRITO'] as $indice=>$producto){
                if($producto['ID'] == $ID){
                    array_splice($_SESSION['CARRITO'], $indice, 1);
                    echo"<script>alert ('Elemento eliminado...'); </script>"; 

                }
            }

            }else {
                $mensaje="Ups.. ID incorrecto".$ID."</br>";
        }

    break;


    }

}

?>