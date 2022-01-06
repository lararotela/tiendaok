<?php 
include 'global/configuracion.php';
include 'global/conexion.php';
include 'carrito.php';
include 'templates/cabecera.php';

?>


<section class="section justify-content-center align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact-details">
                            <h3>Bienvenido a FullPAG</h3>
                            <p>Por favor, complete el formulario para generar su cuenta.</p>

                            <p>Use la información real.</p>

                            <hr>

                            <h4>Su Información permanecera privada</h4>
                            <hr>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <form role="form" class="contactform">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Correo" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Teléfono" required>
                            </div>
                            <button type="button" id="submit" name="submit" class="btn btn-primary">Registrarse</button>
                        </form>

                    </div><!-- end col -->