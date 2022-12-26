<?php

interface MysqliConnect
{
  const HOST = 'localhost';
  const PORT = 3306;
  const USERNAME = 'root';
  const PASSWORD = 'Radek91!';
  const DBNAME = 'DBtest';

  function linkDB();
}

?>
