<?php
session_start();

require_once __DIR__ . '/Classes/UsersList.php';
$userList = new UsersList();

$_SESSION['name'] = 'admin';

var_dump($userList->getCurrentUser());


