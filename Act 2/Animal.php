<?php

class Animal {
    public $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function presentacion() {
        return "Soy un animal llamado {$this->nombre}";
    }

    public function hacerSonido() {
        return "Sonido genérico";
    }
}