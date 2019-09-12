<?php

require_once __DIR__ . '/Classes/Db.php';
$db = new Db;

var_dump($db->execute("INSERT INTO users ( firstName, lastName) VALUES ('Alexandr', 'Semyonov')"));