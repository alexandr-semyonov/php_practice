<?php

require_once __DIR__ . '/User.php';

class UsersList
{
  protected $path;
  protected $usersList = [];

  public function __construct()
  {
      $this->path = __DIR__ . '/../users.txt';
      $users = file($this->path, FILE_IGNORE_NEW_LINES);
      foreach ($users as $user){
          $this->usersList[] = new User($user);
      }
  }
}