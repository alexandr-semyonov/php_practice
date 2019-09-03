<?php

require_once __DIR__ . '/User.php';

class UsersList
{
  protected $path;
  protected $usersList = [];

  public function __construct()
  {
      $this->path = __DIR__ . '/../users.txt';
      $usersLines = file($this->path, FILE_IGNORE_NEW_LINES);
      foreach ($usersLines as $userLine){
        $line = (explode(':', $userLine));
        $password = str_replace("\r\n", "", $line[1]);
        $user = $line[0];
          //$this->usersList[] = new User($user);
      }
  }
}