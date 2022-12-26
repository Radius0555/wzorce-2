<?php

require_once('MysqliConnect.php');

class MysqliController implements MysqliConnect
{
  private $host = MysqliConnect::HOST;
  private $port = MysqliConnect::PORT;
  private $username = MysqliConnect::USERNAME;
  private $password = MysqliConnect::PASSWORD;
  private $dbname = MysqliConnect::DBNAME;

  function linkDB()
  {
    $mysqli = mysqli_connect
    (
      $this->host,
      $this->username,
      $this->password,
      $this->dbname
    );
    if(mysqli_connect_errno()){
      mysqli_connect_error();
    }else{
      echo 'Mysqli: successful connection...';
    }

  }
}

?>
