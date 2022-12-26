<?php

//Wzorzec Proxy kontroluje dostęp do klas i obiektów jako pośrednik
//Zanim żądanie trafi do prawdziwego podmiotu RealSubject pośrednik
//przetwarza je i jeśli spełnione są odpowiednie kryteria to udostępnia
//obiekt. Klient nie wie, czy jego żądanie przechodzi przez proxy.
//Przykładem może być dostęp poprzez logowanie do określonych zasobów serwisu.

spl_autoload_register(function($class_name){
  include $class_name.'.php';
});

$realSubject = new RealSubject;
$proxy = new Proxy($realSubject);
$proxy->request();

?>
