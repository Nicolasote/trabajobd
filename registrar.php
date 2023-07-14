<?php

include("conexion.php");

if(isset($_post['register'])) {
    if(
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['apellido']) >= 1 &&
        strlen($_POST['email']) >= 1 && 
        strlen($_POST['comentarios']) >= 1
        ) {
            $name = trim($_post['nombre']);
            $apellido = trim($_post['apellido']);
            $correo = trim($_post['email']);
            $comentarios = trim($_post['comentarios']);
            $consulta = "INSERT INTO datos(nombre, apellido, email, comentarios)
                VALUES ('$name', '$apellido', '$correo', '$comentarios')";
                $resultado=mysqli_query($conex, $consulta);
                if ($resultado) {
                ?>
                <h3 class="succes" >TU REGISTRO SE A COMPLETADO!</h3>
                <?php
                } else {
                ?>
                <h3 class="error">ocurrio un error</h3>
                <?php
                }
                }else {
                ?>
                <h3 class="error">llena todos los campos</h3>
                <?php
                }
            }




?>