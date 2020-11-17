<?php
    include("conectar.php");
    $nombre= $materito->getNombre();
    $materito->getDescripcion();
    $marca=$materito->getMarca();;
    $precio=$materito->getprecio();
    $descripcion=$materito->getprecio();;

    mysqli_query($conexion, "INSERT INTO admin_productos (nombre, marca, precio, descripcion) VALUES ( '$nombre','$marca','$precio','$descripcion')");

?>