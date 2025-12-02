<?php

class Perro extends Animal {
    public function __construct($nombre) {
        parent::__construct($nombre);
    }

    public function presentacion() {
        return "Soy un perro llamado {$this->nombre}";
    }

    public function hacerSonido() {
        return "Guau";
    }
}