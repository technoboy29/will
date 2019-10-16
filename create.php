<?php
    require 'conexionc.php';

    if(isset($_POST['crear'])){
       $nombrec = $_POST['nombre'];
       $procesadorc = $_POST['procesador'];
       $grafica = $_POST['tarjetag'];
       $madre = $_POST['tarjetam'];
       $ram = $_POST['memram'];
       $disco = $_POST['disco'];
       $tipodisco = $_POST['tipo'];
       $fuente = $_POST['fuente'];
       $monitor = $_POST['monitor'];
       $caja = $_POST['caja'];
       $teclado = $_POST['teclado'];
       $raton = $_POST['raton'];
       $disipacion = $_POST['disi'];
       $altavoces = $_POST['alta'];
       $ventil = $_POST['ventil'];
       $imagen = addslashes(file_get_contents($_FILES['img']['tmp_name']));

       $sql = "INSERT INTO computadores (nombre, procesador, grafica, madre, ram, disco, capacidad, fuente, monitor, caja, teclado, raton, disipacion, altavoces, ventiladores, imagen) 
       VALUES ('$nombrec','$procesadorc','$grafica','$madre','$ram','$disco','$tipodisco','$fuente','$monitor','$caja','$teclado','$raton','$disipacion','$altavoces','$ventil','$imagen')";

        $result = mysqli_query($conexion,$sql);
        if(!$result){
            die("SQL Fail");
        }else{
            echo "Guardado";
        }

            

        
    }
?>