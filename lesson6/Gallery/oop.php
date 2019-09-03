<?php

require_once __DIR__ . '/Classes/UsersList.php';

$userList = new UsersList();

print_r($userList->getUsersList());
echo '<br>';
var_dump($userList->getUserNames());
echo '<br>';
var_dump($userList->existsUser("admin"));

/*
UsersList Object ( [path:protected] => E:\Server\OSPanel\domains\lesson6\Gallery\Classes/../users.txt
  [usersList:protected] => Array (
    [0] => User Object (
      [userName:protected] => admin [password:protected] => $2y$10$DwPEZqQUG.6GEbyBcbfWpuvYuEjeKCa5uLGxX4UvrZ0vZTqZFiQga )
    [1] => User Object (
      [userName:protected] => user [password:protected] => $2y$10$JgyjvP2MUCrpOfZad4okD.pSfP/mM2QFC5RIChAI1r1PqbUMyOQ2S )
  )
)
*/