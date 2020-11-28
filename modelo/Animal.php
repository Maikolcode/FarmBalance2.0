<?php

class Animal {

    private $nombreAnimal;
    private $pesoPromedio;
    private $precioVenta;
    private $edadAnimal;
    private $cantidad;
    
    public function __construct() {
        
    }
    
    function getNombreAnimal() {
        return $this->nombreAnimal;
    }

    function getPesoPromedio() {
        return $this->pesoPromedio;
    }

    function getPrecioVenta() {
        return $this->precioVenta;
    }

    function getEdadAnimal() {
        return $this->edadAnimal;
    }

    function getCantidad() {
        return $this->cantidad;
    }

    function setNombreAnimal($nombreAnimal) {
        $this->nombreAnimal = $nombreAnimal;
    }

    function setPesoPromedio($pesoPromedio) {
        $this->pesoPromedio = $pesoPromedio;
    }

    function setPrecioVenta($precioVenta) {
        $this->precioVenta = $precioVenta;
    }

    function setEdadAnimal($edadAnimal) {
        $this->edadAnimal = $edadAnimal;
    }

    function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }



}