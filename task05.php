<?php

function calc_average($tab) {
    $sum = 0;
    for ($i = 0; $i < count($tab); $i++) {
        $sum += $tab[$i];
    }
    return round($sum / count($tab),1); // Need 1/10th
}