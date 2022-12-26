<?php

class Proxy implements Subject
{
    private $realSubject;
    const IP = '192.168.1.1';

    public function __construct(RealSubject $realSubject)
    {
      $this->realSubject = $realSubject;
    }

    public function request()
    {
      if($this->checkIP()){
        $this->realSubject->request();
      }else{
        echo "Nie masz dostępu do tej strony!";
      }
    }

    private function checkIP()
    {
      $IP = $_SERVER['REMOTE_ADDR'];

      if($IP == self::IP){
        return true;
      }
    }
}

?>
