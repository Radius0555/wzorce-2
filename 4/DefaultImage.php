<?php

//Konkretny komponent

class DefaultImage extends Image
{
  private $src;
  private $alt;

  public function getImage($src, $alt)
  {
    $this->src = $src;
    $this->alt = $alt;

    echo '<img src="'.$this->src.'" alt="'.$this->alt.'">';
  }
}

?>
