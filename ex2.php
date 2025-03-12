<?php
    //Web que mostra els números del 100 al 0 fent servir un bucle for, però els números parells en negreta, els senars en cursiva i el 0 en negreta, cursiva i subratllat.
    for($i = 100; $i >= 0; $i--){
        if($i % 2 == 0){
            echo "<b>$i <b>";
        }else if($i % 2 != 0){
            echo "<i>$i <i>";
        }else if($i == 0){
            echo "<u><i><b>$i <b><i><u>";
        }
    }
?>
