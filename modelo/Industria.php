<?php


class Industria {
    private $nombreIndustria;
    private $categoria;
    
    function getNombreIndustria() {
        return $this->nombreIndustria;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function setNombreIndustria($nombreIndustria) {
        $this->nombreIndustria = $nombreIndustria;
    }

    function setCategoria($categoria) {
        $this->categoria = $categoria;
    }


    
}
