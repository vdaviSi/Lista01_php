<?php
     $num=$_GET["num"];
     
     if($num % 2 == 0){
        echo "Divisivel por 2";
     }
     elseif($num % 5 == 0){
        echo "Divisivel por 5";
     }
     elseif($num % 10 == 0){
        echo "Divisivel por 10";
     }
     else{
         echo "Não é divisilvel por nenhum deles";
     }
?>