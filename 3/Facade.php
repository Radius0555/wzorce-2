<?php

class Facade
{
  private $a;
  private $b;
  private $c;

  public function __construct(Element1 $a, Element2 $b, Element3 $c)
  {
    $this->a = $a;
    $this->b = $b;
    $this->c = $c;
  }

  public function getA()
  {
    return $this->a->A();
  }

  public function getB()
  {
    return $this->b->B();
  }

  public function getC()
  {
    return $this->c->C();
  }
}

?>
