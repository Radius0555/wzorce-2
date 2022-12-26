<?php

/*
Dekorator - pozwala rozbudować istniejącą strukturę o nowe funkcjonalności,
które nie wpłyną na inne obiekty.
Można porównać go do mdziedziczenia z tym, że zapewnia większą elastyczność.
Poza tym dodaje funkcjonalność do klas w sposób dynamiczny podczas działania.
*/

spl_autoload_register(function($class_name){
  include $class_name.'.php';
});

$img = new DefaultImage();
$decorator = new ImageCaption($img);
$src = 'https://geekster.pl/wp-content/uploads/2019/07/dekorator.jpg';
$alt = 'Decorator';
$decorator->setCaption('Caption:');
$decorator->getImage($src, $alt);

?>
