<?php


class Productos {
    private $nombreProducto;
    private $precioProducto;
    
    function getNombreProducto() {
        return $this->nombreProducto;
    }

    function getPrecioProducto() {
        return $this->precioProducto;
    }

    function setNombreProducto($nombreProducto) {
        $this->nombreProducto = $nombreProducto;
    }

    function setPrecioProducto($precioProducto) {
        $this->precioProducto = $precioProducto;
    }


}
