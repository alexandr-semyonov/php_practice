<?php
require_once __DIR__. '/Classes/Guestbook/Book.php';
require_once __DIR__. '/Classes/Guestbook/Record.php';

$guestBook = new Book();
$record = new Record($_POST['message']);

$guestBook->append($record)->save();

header('Location: ./');