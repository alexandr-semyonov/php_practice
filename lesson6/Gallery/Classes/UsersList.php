<?php

require_once __DIR__ . '/User.php';

class UsersList
{
  protected $path;
  protected $usersList = [];
  protected $userNames = [];

  public function __construct()
  {
      $this->path = __DIR__ . '/../users.txt';
      $usersLines = file($this->path, FILE_IGNORE_NEW_LINES);
      foreach ($usersLines as $userLine){
        $line = (explode(':', $userLine));
        $password = str_replace("\r\n", "", $line[1]);
        $userName = $line[0];
        $this->usersList[] = new User($userName, $password);
        $this->userNames[] = $userName;
      }
  }

  public function getUserNames()
  {
    return $this->userNames;
  }

  public function existsUser($login){
    return in_array($login, $this->getUserNames());
  }

  public function getUsersList()
  {
    return $this->usersList;
  }
  function checkPassword($login, $password){
    $users = getUsersList();
    return password_verify($password, $users[$login]);
  }

}