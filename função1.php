<?php
    $year='2001';//$_GET['year'];
    $ano = str_split($year,1);
    $sec= str_split($year,2);
    if ($ano[3]!=0) {
        $seculo=$sec[0]+1;
        echo "Século ". $seculo;
    }else{
        $seculo = $sec[0];
        echo "Século ".$seculo;
    }
?>
