<?php
    //  Web que mostra els números de l’1 al 10, fent que cada número sigui un hipervincle a la pàgina corresponent de la Vikipèdia:
    echo "TABLA DEL 7: <br>";
    for($i = 0; $i <= 10; $i++){
        echo "$i ->" . "<a> https://es.wikipedia.org/wiki/$i <a><br>";
    }
?>
