<?php
require_once __DIR__ . '/Classes/View.php';
require_once __DIR__ . '/Classes/News.php';
$view = new View;
$news = new News;
$view->assign('news', $news)->render('news')->display();