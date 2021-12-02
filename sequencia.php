<?php

$sequencia= array(2,3,4);


//splice($sequencia,a partir de que elemento,qtde de elementos);
var_dump($sequencia);
for ($i=0; $i < count($sequencia) ; $i++) { 
    $indice = $sequencia[$i];
    array_splice($sequencia,$i,1);
    echo $sequencia[$i];
    echo 
}