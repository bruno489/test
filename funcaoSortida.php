<?php

$numeros = array(20);
$i=0;
while($i<20){
    $numeros[$i]=rand(1,9);
    $i++;
}

sort($numeros);
$v2=array();
$n=Count($numeros);

for ($i=0; $i < $n; $i++) { 
    $v2[$i]=0;
}

for ($i=0; $i < $n; $i++) { 
    for ($j=1; $j < $n; $j++) { 
        if ( $numeros[$i] == $numeros[$j] ){
            $v2[$i] = $v2 [$i] + 1;
        }
    }
}

$maior=0;
for ($i=0; $i < $n; $i++) { 
    if ($v2[$i]>$maior) {
        $maior = $v2[$i];
    }
}

$pos=0;
for ($i=0; $i < $n; $i++) { 
    if ($v2[$i]==$maior) {
        $pos=$i;
    }
}

for ($i=0; $i < $n; $i++) { 
    echo $numeros[$i] . " ";
}
echo "<br>A moda é ".$numeros[$pos];