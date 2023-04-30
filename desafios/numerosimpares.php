<?php

for ($contador = 0; $contador < 100; $contador++) {
    if ($contador % 2 && $contador != 0) {
        echo "#$contador" . PHP_EOL;
    }
}
