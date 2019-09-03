<?php

require_once __DIR__ . '/User.php';

class UsersList
{
  protected $path;
  protected $usersList = [];

  public function __construct()
  {
      $this->path = __DIR__ . '/../data.txt';
      $lines = file($this->path, FILE_IGNORE_NEW_LINES);
      foreach ($lines as $line){
          $this->usersList[] = new GuestBookRecord($line);
      }
  }
}