<?php

require 'Animal.php';
require 'Perro.php';
require 'Gato.php';

$perro = new Perro("Toby");
$gato = new Gato("Uñitas");

echo $perro->presentacion() . ": " . $perro->hacerSonido();
echo "<br>";
echo $gato->presentacion() . ": " . $gato->hacerSonido();