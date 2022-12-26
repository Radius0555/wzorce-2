<?php

//Płynny interfejs - wzorzec stosowany w celu zwiększenia czytelności kodu.
//Można wykorzystać na przykład konfiguracji obiektu.

/*
Przykładowa postać:
$object = new Class();
$object->doSomething()->doSomethingElse()->more();

Preferowany zapis:
$object = (new Class())
          ->doSomething()
          ->somethingElse()
          ->more();
*/
/*
Przykład funkcji użytej w powyższym zapisie:
private $value;

public function doSomething($value){
  $this->value = $value;
  return $this;
}
Funkcja zwraca rturn $this.
W ten sposób możemy łączyć moetody operatorem "->" w łańcuch i nie musimy
powielać instancji obiektu jak klasycznie:
$object = new Class();
$object->do soSomething();
$object->somethingElse();
$object->more();
*/

class Mail
{
    private $from;
    private $to;
    private $subject;
    private $message;

    public function From($from)
    {
      $this->from = $from;
      return $this;
    }

    public function addTo($to)
    {
      $this->to = $to;
      return $this;
    }

    public function Subject($subject)
    {
      $this->subject = $subject;
      return $this;
    }

    public function Message($message)
    {
      $this->message = $message;
      return $this;
    }

    public function send()
    {
      $success = mail(
        $this->to,
        $this->subject,
        $this->message,
        'From: '.$this->from
      );

      if(!$success){
        print_r(error_get_last()['message']);
      }else{
        print "Message was sent.";
      }
    }
}

$mail = (new Mail())
        ->From('test@example.com')
        ->addTo('contact@example.com')
        ->Subject('Biegły Interfejs')
        ->Message('Hello World!')
        ->send();
?>
