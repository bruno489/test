<?php

$numeros = array(20);
$i=0;
while($i<20){
    $numeros[$i]=rand(1,9);
    echo $numeros[$i] . "<br>";
    $i++;
}