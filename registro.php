<?php
    include("formulario.php");
    include("conectar.php");
    if(isset($_POST['Registrar'])){
        $producto = new Producto($nombre=$_POST['nombre'],$marca=$_POST['marca'],$precio=$_POST['precio'],$descripcion=$_POST['descripcion']);
        $op = new Operacionesmysql();
        $op->Ingresar($producto);
        header('Location:index.php');
    }
    if(isset($_POST['Editar'])){
        $id = $_POST['id'];
        $producto = new Producto($nombre=$_POST['nombre'],$marca=$_POST['marca'],$precio=$_POST['precio'],$descripcion=$_POST['descripcion']);
        $op = new Operacionesmysql();
        $op->Editarregistro($producto,$id);
        header('Location:bodega.php');
    }
?>
