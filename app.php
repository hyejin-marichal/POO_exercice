<?php

require __DIR__ . '/vendor/autoload.php';

$elephant = new \App\Animals\Elephant('L\'éléphant');
echo $elephant->noise();

$zebra = new \App\Animals\Zebra('Le Zébra');
echo $zebra->noise();

$poisson = new \App\Animals\Fish('Le poisson');
echo $poisson->noise();

$balaine = new \App\Animals\Whale('Le Balaine');
echo $balaine->noise();

$perroquet = new \App\Animals\Parrot('Le Perroquet');
echo $perroquet->noise();

$colombe = new \App\Animals\Dove('La colombe');
echo $colombe->noise();
