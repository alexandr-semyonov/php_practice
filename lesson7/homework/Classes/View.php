<?php


class View
{ 
  protected $data = [];

  public function assign($name, $value)
  {
    $this->data[$name] = $value;
  }

  public function display()//$template = ''
  {
    return include __DIR__ . '';
  }
}
