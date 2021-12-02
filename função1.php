<?php
    $year=$_GET['year'];
    $ano = str_split($year,1);
    $sec= str_split($year,2);
    if ($ano[3]!=0) {
        $seculo=$sec[0]+1;
    }else{
        $seculo = $sec[0];
    }
?>
