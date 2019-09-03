<?php
session_start();
require_once __DIR__ . '/functions.php';
makeRecordInLog($_SESSION['user'], 'logout');
unset($_SESSION['user']);
header('location:index.php');