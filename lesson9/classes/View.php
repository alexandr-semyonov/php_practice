<?php


class View
{
  protected $data = [], $template;

  public function assign(string $name, $value)
  {
    $this->data[$name] = $value;
    return $this;
  }

  public function render(string $template)
  {
    ob_start();
    require_once __DIR__ . '/../templates/header.php';
    require_once __DIR__ . './../templates/' . $template . '.php';
    require_once __DIR__ . '/../templates/footer.php';
    $this->template = ob_get_clean();
    return $this;
  }

  public function display()
  {
    echo $this->template;
    return $this;
  }
}