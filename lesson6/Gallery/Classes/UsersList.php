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
    foreach ($usersLines as $userLine) {
      $line = (explode(':', $userLine));
      $password = str_replace("\r\n", "", $line[1]);
      $userName = $line[0];
      $this->usersList[] = new User($userName, $password);
    }

  }

  public function existsUser($login)
  {
    for ($i = 0; $i < count($this->usersList); $i++) {
      if ($this->usersList[$i]->getUserName() == $login) {
        return true;
      }
    }
    return false;
  }

  public function checkPassword($login, $password)
  {
    for ($i = 0; $i < count($this->usersList); $i++) {
      if ($this->usersList[$i]->getUserName() == $login) {
        if (password_verify($password, $this->usersList[$i]->getPassword())) {
          return true;
        }
      }
    }
    return false;
  }

  public function getCurrentUser()
  {
    return $this->currentUser;
  }

}