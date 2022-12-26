<?php

/*
Adapter - zalicza się do strukturalnych wzorców projektowych i pozwala
zintegrować ze sobą niekompatybilne systemy.
Nie narusza przy tym istniejącej struktury np:
-zewnętrzne biblioteki dołączone do programu,
-nie zgodność wersji platformy programistycznej (frameworka) z danym modułem,
interfejsem itp.
*/

include_once('DbAdapter.php');
include_once('PdoController.php');

class Client
{
  private $controller;
  private $adapter;

  public function __construct()
  {
    $this->controller = new PdoController();
    $this->adapter = new DbAdapter($this->controller);
    $this->adapter->linkDB();
  }
}

new Client();

?>
