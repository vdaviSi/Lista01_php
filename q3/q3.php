<?php

    $x = $_get["idade"];
    $y = $_get["sexo"];

    if($x < 18 && %y == "feminino"){
        echo "Acesso proibido!";
    }
    else{
        echo "Acesso permitido!";
    }
?>