<?php

for ($contador = 1; $contador <= 15; $contador++) {

    if($contador == 13) {
        continue; // continua para a proxima iteração
    } else {
        echo "Contador: $contador", PHP_EOL;
    }
}

?>