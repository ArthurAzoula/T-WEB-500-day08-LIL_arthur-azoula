<?php 

function dog_bark(int $woof_nb) {
    if ($woof_nb < 0) {
        echo "";
    }
    for ($i = 0; $i < $woof_nb; $i++) {
        if ($i < $woof_nb - 1) {
            echo "woof ";
        } else {
            echo "woof";
        }
    }
    echo PHP_EOL;
}