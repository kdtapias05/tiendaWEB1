<?php
    class Operacionesmysql{
        private $user="root";
        private $pass="";
        private $server="localhost";
        private $db="admin_productos";

        public function Conectar(){
            $conexion=mysqli_connect($this->server,$this->user,$this->pass,$this->db) or die('no se pudo conectar a la db');
            return $conexion;
        }
        public function Ingresar($Producto){
            $sql = "INSERT INTO productos (nombre,marca,precio,descripcion) VALUES ('$Producto->nombre','$Producto->marca','$Producto->precio','$Producto->descripcion')";
            $conexion =$this->Conectar();
            mysqli_query($conexion,$sql) or die('no se pudo ingresar'.mysqli_error($conexion));
        }

        public function SeleccionarTodos(){
            $sql = "SELECT * FROM productos";
            $conexion =$this->Conectar();
            $seleccion=mysqli_query($conexion,$sql) or die('no se pudo retornar'.mysqli_error($conexion));
            return $seleccion;
        }

        public function SeleccionDato($id){
            $conexion= $this->Conectar();
            $sql="SELECT * FROM productos WHERE id = $id";
            $seleccion=mysqli_query($conexion, $sql);
            return $seleccion;
        }

        public function Nregistros(){
            $result=$this->SeleccionarTodos();
            $datos=mysqli_num_rows($result);
            return $datos;
        }

        public function BorrarTabla(){
            $conexion =$this->Conectar();
            $sql = "TRUNCATE TABLE productos";
            mysqli_query($conexion, $sql);
        }

        public function BorrarRegistro($id){
            $conexion= $this->Conectar();
            $sql = "DELETE FROM productos WHERE id = $id";
            mysqli_query($conexion, $sql);
        }

        public function Editarregistro($Producto,$id){
            $conexion= $this->Conectar();
            $sql = "UPDATE productos SET nombre='$Producto->nombre', marca='$Producto->marca',precio='$Producto->precio',descripcion='$Producto->descripcion' WHERE id = $id";
            mysqli_query($conexion, $sql);

        }
    }
    
?>