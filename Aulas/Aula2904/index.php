<?php
    require_once("Ponto.php");
    $p1 = new Ponto(2,4);
    echo "Quantidade de objetos criados: " .Ponto::getContador(). "</br>";
    
    $p2 = new Ponto(5,3);
    echo "Distância entre os pontos: " .$p1->calcularDistancia($p2). "</br>";
    echo "Distância entre os pontos: " .$p1->calcularDistanciaComValores($p2->getX(),  $p2->getY()). "</br>";
    echo "Distância entre os pontos: " .$p1->calcularDistanciaComValores2($p1->getX(), $p1->getY(), $p2->getX(), $p2->getY()). "</br>";
?>