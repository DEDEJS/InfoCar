<?php

$quantidade = 10;

$fibonacci = [0, 1];

for ($i = 2; $i < $quantidade; $i++) {
    $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
}

foreach ($fibonacci as $numero) {
    echo $numero . " ";
}
