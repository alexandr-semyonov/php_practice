<?php
    require_once __DIR__ . './Classes/GuestBook.php';
    require_once __DIR__ . './Classes/View.php';
   
    $guestBook = new GuestBook();
    $view = new View();
    $view->assign('guestbook', $guestBook);
    //$view->display();
    include __DIR__ . './templates/index.php';