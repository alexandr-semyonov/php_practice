<?php

require_once __DIR__ . '/User.php';

class UsersList
{
  protected $path;
  protected $usersList = [];
  protected $currentUser = NULL;

  public function existsUser($login)
  {
    for ($i = 0; $i < count($this->usersList); $i++) {
      if ($this->usersList[$i]->getUserName() == $login) {
        return true;
      }
    }
    return false;
  }

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
    if ($this->checkPassword($_POST['login'], $_POST['password'])) {
      if ($this->existsUser($_SESSION['user'])) {
        $_SESSION['user'] = $_POST['login'];
        $this->currentUser = $_SESSION['user'];
    }
    }
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