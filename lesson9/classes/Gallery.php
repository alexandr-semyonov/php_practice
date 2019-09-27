<?php

require_once __DIR__ . '/Db.php';

class Gallery
{
  protected $data = [];

  public function __construct()
  {
    $db = new Db;
    $sql = 'SELECT * FROM gallery';
    $data = $db->query($sql);
    $this->data = $data;
  }

  public function getIndex()
  {
    return $this->data[0];
  }

}