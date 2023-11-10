<?php

include("con_db.php");

if (isset($_POST['register'])) {

    if (
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['number']) >= 1 &&
        strlen($_POST['email'])  >= 1) {
            $name = trim($_POST['nombre']);
            $number = trim($_POST['number']);
            $email = trim($_POST['email']);
            $consulta = "INSERT INTO datos(nombre, numero, email) VALUES ('$name','$number','$email')";
            $resultado = mysqli_query($conex,$consulta);
            if ($resultado) {
                ?> 
                <script>alert("SIGAN VIENDO")</script>
               <?php
            } else {
                ?> 
                <script>alert("SANTA MAYONESA ALGO ANDA MAL")</script>
               <?php
            }
        }   else {
                ?> 
                <script>alert("TE FALTAN LOS DATOS CRACK")</script>
               <?php
        }
    }
    
    ?>