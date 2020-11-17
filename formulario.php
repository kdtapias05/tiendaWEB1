<?php

class producto{
    /*atributos Formulario*/
    public $nombre;
    public $marca;
    public $precio;
    public $descripcion;

    /*Constructor*/
    public function __construct($Np, $Mp, $Pp, $Dp){ //Np: nombre producto Mp: marca producto Pp: Precio producto Dp:Descripcion producto
        $this->nombre = $Np;
        $this->marca = $Mp;
        $this->precio = $Pp;
        $this->descripcion = $Dp;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }
}





?>


