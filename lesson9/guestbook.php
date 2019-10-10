<?php
require_once __DIR__ . '/Classes/View.php';
require_once __DIR__ . '/Classes/Guestbook/Book.php';
$view = new View;
$book = new Book;
$view->assign('guestbook', $book)->render('guestBook')->display();