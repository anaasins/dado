<?php
include 'dado.php';

$tirada=new jugadorDado();

$minNumDado=0;
$maxNumDado=12;

for ($i=0; $i < 12; $i++) {
  echo $tirada->tirarDado($minNumDado, $maxNumDado) ."<br>";
}

$tirada->imprimirTiradas();

echo "<br>";

$tirada->calcularMediaTiradas();

 ?>
