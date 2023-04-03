<?php

require_once "./models/product.php";
require_once "./models/Food.php";
require_once "./models/Game.php";
require_once "./models/Kennel.php";

// Array di istanze di Food
$food = array(
    new Food("cane", "Croccantini per cani adulti", "Croccantini secchi per cani adulti con pollo e riso", 1, 15.99, true, false, true),
    new Food('gatto', 'Cibo umido per gatti', 'Busta di cibo umido per gatti adulti con tonno e carote', 12, 9.99, true, true, false),
    new Food('cane', 'Snack per cani', 'Snack secco per cani di taglia piccola con manzo e patate dolci', 30, 7.99, true, true, true)
);

// Array di istanze di Game
$games = array(
    new Game('cane', 'Palla per cani', 'Palla di gomma resistente per cani di taglia media e grande', 1, 9.99, 'gomma', 'sferica', 'gioco interattivo'),
    new Game('gatto', 'Tunnel per gatti', 'Tunnel morbido e pieghevole per gatti di tutte le taglie', 1, 19.99, 'tessuto', 'tunnel', 'gioco di esplorazione'),
    new Game('cane', 'Frisbee per cani', 'Frisbee volante per cani di taglia media e grande', 1, 12.99, 'plastica', 'disco', 'gioco di lancio')
);

// Array di istanze di Kennel
$kennels = array(
    new Kennel('cane', 'Cuccia per cani', 'Cuccia morbida e confortevole per cani di taglia media e grande', 1, 49.99, 'tessuto', 'rettangolare', 'polar fleece', 'imbottitura in cotone'),
    new Kennel('gatto', 'Cuccia per gatti', 'Cuccia a forma di igloo per gatti di tutte le taglie', 1, 39.99, 'finta pelliccia', 'igloo', 'finta pelliccia', 'imbottitura in poliestere'),
    new Kennel('cane', 'Cuccia per cani', 'Cuccia resistente e facile da pulire per cani di taglia piccola e media', 1, 29.99, 'plastica', 'ovale', 'tessuto impermeabile', 'imbottitura in schiuma')
);

var_dump($food, $games, $kennels);
