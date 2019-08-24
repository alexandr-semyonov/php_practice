<?php

require_once __DIR__ . '/TextFile.php';

class Guestbook extends TextFile
{
 public function __construct($pathToData)
  {
     $data = file($pathToData, FILE_SKIP_EMPTY_LINES);
     $this ->pathToData = $pathToData;
     $this -> data = $data;
  }
  public function append($text) //$_POST['newRecord']
  {
      return $this -> data [] = $text . PHP_EOL;
  }
  public function save(){
      return file_put_contents($this->pathToData, $this -> data);
  }
  protected $pathToData;
  protected $data;
}