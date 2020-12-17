<?php

class Usuario {

    private $idUsuario;
    private $nombre;
    private $apellido;
    private $correo;
    private $numeroContacto;
    private $contraseña;
    
    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getNumeroContacto() {
        return $this->numeroContacto;
    }

    function getContraseña() {
        return $this->contraseña;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setNumeroContacto($numeroContacto) {
        $this->numeroContacto = $numeroContacto;
    }

    function setContraseña($contraseña) {
        $this->contraseña = $contraseña;
    }



}
