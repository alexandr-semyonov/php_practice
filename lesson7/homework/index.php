<?php
    require_once __DIR__ . './Classes/GuestBook.php';
   
    $guestBook = new GuestBook();
    
    include __DIR__ . './templates/index.php';