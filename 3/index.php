<?php

/*
Fasada upraszcza skompilowanie i złożone systemy.
Można zastosować go do stworzenia API, który udostępni klientowi
uproszczoną specyfikację systemu z jego popularnymi funkcjonalnościami,
konkretnymi zadaniami itd.
Wiele serwisów internetowych udostępnia swoje API

Przykład: Element1, Element2, Element3 - klasy reprezentujące jakiś złożony
system
Fasada - klasa, która implementuje elementy złożonego systemu, może je również
przekształcić lub rozszerzać dostosowując do nowych potrzeb
index - używa interfejsu fasady
*/

spl_autoload_register(function($class){
  include $class.'.php';
});

$api = new Facade(new Element1(), new Element2(), new Element3());

$api->getA();
$api->getB();
$api->getC();

?>
