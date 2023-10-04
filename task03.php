<?php

function get_shortest($tab) {
    $count = strlen($tab[0]);
    $min = $tab[0];
    for($i = 0; $i < count($tab); $i++) {
        if (strlen($tab[$i]) < $count) {
            $count = strlen($tab[$i]);
            $min = $tab[$i];
        }
    }
    return $min;
    
}