<?php

    $numero=14;
    $numInsert=$numero;
    for ($i=0; $i <= $numero; $i++) { 
        if (($numero%2==0) || ($numero%3==0)) {
            $numero--;
        }else{
            echo "O primeiro primo de $numInsert é $numero";
            break;
        }
    }