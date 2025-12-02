<?php

require 'autoload.php';

$perro = new Perro("Toby");
$gato  = new Gato("Uñitas");

echo $perro->presentacion() . ": " . $perro->hacerSonido();
echo "<br>";
echo $gato->presentacion() . ": " . $gato->hacerSonido();