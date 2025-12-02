<?php

require 'Animal.php';
require 'Perro.php';
require 'Gato.php';

$perro = new Perro();
$gato = new Gato();

echo $perro->hacerSonido();
echo "<br>";
echo $gato->hacerSonido();
?>