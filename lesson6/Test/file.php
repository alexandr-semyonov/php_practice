<?php
require_once __DIR__ . './../Gallery/Classes/Uploader.php';

$uploader = new Uploader('fileField', __DIR__.'./img/');
$uploader->upload();
var_dump($_FILES);
var_dump($uploader);