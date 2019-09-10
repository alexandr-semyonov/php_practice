<?php


class View
{
  protected $data = [],
    $template;

  public function assign(string $name, object $value)
  {
    $this->data[$name] = $value;
    return $this;
  }

  public function render(string $template)
  {
    ob_start();
    $data = $this->data[$template];
    if ($template == 'guestbook') {
      $template = 'index';
    }
    require_once __DIR__ . './../templates/' . $template . '.php';
    $this->template = ob_get_clean();
    return $this;
  }

  public function display()
  {
    echo $this->template;
  }
}