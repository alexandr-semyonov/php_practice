<?php

require_once __DIR__ . '/classes/Db.php';
$db = new Db;

var_dump($db->execute('CREATE TABLE mainText (
  id SERIAL, 
  title VARCHAR(100), 
  mainText TEXT, 
  author VARCHAR(100)
  )'
));

var_dump($db->execute('CREATE TABLE gallery (
  id SERIAL, 
  pictureName TEXT
  )'
));

var_dump($db->execute('CREATE TABLE guestBook (
  id SERIAL, 
  records TEXT
  )'
));

var_dump($db->execute('CREATE TABLE users (
  id SERIAL, 
  login VARCHAR(100),
  password VARCHAR(100)
  )'
));

//User and password
$sqlRequest = "INSERT INTO users (login, password) VALUES ('admin', :password)";
$password = password_hash('123456', PASSWORD_DEFAULT);
var_dump($db->execute( $sqlRequest, [':password' => $password] ));

var_dump($db->execute( "INSERT INTO guestBook (records) VALUES ('First record in Guestbook!')" ));


var_dump($db->execute('INSERT INTO gallery (pictureName)
VALUES ("1-367x267.jpg");
'));

var_dump($db->execute("INSERT INTO mainText ( title, mainText, author) 
  VALUES ( 'Обо мне', 'Name of news 1 |Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto eligendi aliquid sapiente exercitationem corporis ex, culpa voluptatibus at voluptatem. Tempore qui sit velit laborum veritatis, illum repellat est culpa odit', 'Александр')" ));