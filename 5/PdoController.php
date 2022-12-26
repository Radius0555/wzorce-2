<?php

require_once('PdoConnect.php');

class PdoController implements PdoConnect
{
  private $host = PdoConnect::HOST;
  private $port = PdoConnect::PORT;
  private $username = PdoConnect::USERNAME;
  private $password = PdoConnect::PASSWORD;
  private $dbname = PdoConnect::DBNAME;

  function PdoLinkDb()
  {
    try{
      $pdo = new PDO(
        'pgsql:host='.$this->host.';dbname='.$this->dbname,
        $this->username,
        $this->password
      );
      echo "PDO: Successful connection.....";
    }catch(PDOException $error){
      echo $error->getMessage();
    }
  }
}

?>
