<?php

require_once __DIR__ . '/Classes/UsersList.php';

$userList = new UsersList();

print_r($userList);

/*
UsersList Object 
( [path:protected] => W:\domains\lesson6\Gallery\Classes/../users.txt 
  [usersList:protected] => Array ( 
    [0] => User Object ( 
      [user:protected] => admin:$2y$10$DwPEZqQUG.6GEbyBcbfWpuvYuEjeKCa5uLGxX4UvrZ0vZTqZFiQga )
    [1] => User Object ( 
      [user:protected] => user:$2y$10$JgyjvP2MUCrpOfZad4okD.pSfP/mM2QFC5RIChAI1r1PqbUMyOQ2S ) 
    )
)
*/