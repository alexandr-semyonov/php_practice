<?php
require_once __DIR__ . '/Classes/View.php';
require_once __DIR__ . '/Classes/Index.php';
$view = new View;
$index = new Index;
$view->assign('index', $index)->render('index')->display();