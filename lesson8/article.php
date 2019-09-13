<?php
require_once __DIR__ . '/Classes/View.php';
require_once __DIR__ . '/Classes/Article.php';
$view = new View;
$article = new Article;
$view->assign('article', $article)->render('article')->display();