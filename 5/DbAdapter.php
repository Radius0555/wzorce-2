<?php

include_once('MysqliConnect.php');
include_once('PdoController.php');

class DbAdapter implements MysqliConnect
{
  private $adapter;

  public function __construct(PdoConnect $object)
  {
    $this->adapter = $object;
  }

  public function linkDB()
  {
    $this->adapter->PdoLinkDb();
  }
}

?>
