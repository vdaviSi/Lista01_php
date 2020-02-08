<?php

    $x = $_get["num"];
    $y = $_get["num2"];

    $soma = $x + $y;

    if($soma > 20){
        $total = $soma + 8;
    }
    else{
        $total = $soma - 5;
    }

    echo $total;
?>