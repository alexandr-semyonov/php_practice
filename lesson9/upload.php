<?php
require_once __DIR__ . '/Classes/Uploader.php';

$uploader = new Uploader('galleryImg');

$uploader->upload( __DIR__ . '/img' . '/', $_FILES['galleryImg']['name'] );                

header('location:./gallery.php');