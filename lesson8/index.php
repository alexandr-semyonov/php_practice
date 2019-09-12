<?php
require_once __DIR__ . '/Classes/Db.php';
$db = new Db;
$sql = 'SELECT firstName FROM users WHERE id=:id';
$data = [':id' => $_GET['id']];


$sqlData = $db->query($sql, $data);
var_dump($sqlData);
echo $sqlData[0]['firstName'];