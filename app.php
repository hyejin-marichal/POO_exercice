<?php

use App\Animals\BubbleFish;
use App\Animals\CatFish;
use App\Animals\ClownFish;
use App\Animals\Dove;
use App\Animals\Elephant;
use App\Animals\Fish;
use App\Animals\Parrot;
use App\Animals\Zebra;

require __DIR__ . '/vendor/autoload.php';

/*
// etape 2-1(cris d'animaux)
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
*/

/*
// version .1 parcourir tableau
$animals = [
    new \App\Animals\Fish('poisson_1'),
    new \App\Animals\Fish('poisson_2'),
    new \App\Animals\Fish('poisson_3'),
    new \App\Animals\Fish('poisson_4'),
    new \App\Animals\Fish('poisson_5'),
    new \App\Animals\BubbleFish('bubble_1')

];

foreach ($animals as $value) {
    echo $value->noise();
}
*/

// version .2 tableaux
$animals = [
    ['type' => Fish::class,
     'nb' => 5
    ],
    ['type' => BubbleFish::class,
        'nb' => 3
    ],
    ['type' => CatFish::class,
        'nb' => 2
    ],
    ['type' => ClownFish::class,
        'nb' => 1
    ],
    ['type' => Elephant::class,
        'nb' => 2
    ],
    ['type' => Zebra::class,
        'nb' => 1
    ],
    ['type' => Parrot::class,
        'nb' => 10
    ],
    ['type' => Dove::class,
    'nb' => 2
    ]
];

foreach ( $animals as $item) {
    for($i=0; $i < $item['nb']; $i++)
    {
     $temp= new $item['type']($item['type']." ".($i+1));
     echo $temp->noise();

    }
}
/*
// version aurelie + alex
$animals = [
    [
        'type' => \App\Animals\Fish::class,
        'nbr' => 5
    ],
    [
        'type' => \App\Animals\Fish\BubbleFish::class,
        'nbr' => 3
    ],
];
foreach($animals as $class) {
    for ($x = 0; $x < $class['nbr']; $x++):
        $temp = new $class['type'](get_name($class['type']) . '_' . ($x + 1));
        echo $temp->noise() . '<br />';
    endfor;
//    echo 'Je suis un ' . $value->name() . ' et je fais ' . $value->noise();
}
function get_name($class) {
    return (substr($class, strrpos($class, '\\') + 1));
}
*/