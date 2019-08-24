<?php
require_once __DIR__ . '/Classes/Guestbook.php';
$myGuestbook = new Guestbook(__DIR__ . '/Data/data.txt');
$myGuestbook->append($_POST['newRecord']);
$myGuestbook->save();
header("Location: index.php");