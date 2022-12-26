<?php

class ImageCaption extends Decorator
{
  private $object;

  public function __construct(Image $object)
  {
    $this->object = $object;
  }

  public function setCaption($caption)
  {
    $this->caption = $caption;
  }

  public function getImage($src, $alt)
  {
    echo '<figure>';
    echo $this->object->getImage($src, $alt);
    echo '<figcaption>'.$this->caption.'</figcaption>';
    echo '</figure>';
  }
}

?>
