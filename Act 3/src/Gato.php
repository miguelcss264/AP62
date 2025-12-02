<?php

class Gato extends Animal {
    public function __construct($nombre) {
        parent::__construct($nombre);
    }

    public function presentacion() {
        return "Soy un gato llamado {$this->nombre}";
    }

    public function hacerSonido() {
        return "Miau";
    }
}