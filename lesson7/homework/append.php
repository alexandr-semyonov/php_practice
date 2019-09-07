<?php
require_once __DIR__. '/Classes/GuestBook.php';
require_once __DIR__. '/Classes/GuestBookRecord.php';

$guestBook = new GuestBook();
$record = new GuestBookRecord($_POST['message']);

$guestBook->append($record)->save();

header('Location: ./');
