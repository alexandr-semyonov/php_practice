<?php
require_once __DIR__ . '/Classes/View.php';
require_once __DIR__ . '/Classes/Gallery.php';
$view = new View;
$gallery = new Gallery;
$view->assign('gallery', $gallery)->render('gallery')->display();