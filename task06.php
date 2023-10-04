<?php

function sequence($n)
{
    if ($n < 1) {
        echo "1\n";
        return;
    }

    $lastLine = "1";

    for ($i = 0; $i < $n; $i++) {

        echo $lastLine . "\n";

        $newLine = "";
        $tab = [];

        foreach (str_split($lastLine) as $char) {
            if (empty($tab) || $tab[count($tab) - 1][0] != $char) {
                $tab[] = [$char, 1];
            } else {
                $tab[count($tab) - 1][1]++;
            }
        }

        foreach ($tab as $item) {
            $newLine .= $item[1] . $item[0];
        }

        $lastLine = $newLine;
    }

    echo $lastLine . "\n";
}
