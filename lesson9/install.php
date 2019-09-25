<?php

require_once __DIR__ . '/main/model/Db.php';
$db = new Db;

var_dump($db->execute('CREATE TABLE news (
  id SERIAL, 
  заголовок VARCHAR(100), 
  текст TEXT, 
  автор VARCHAR(100)
  )'
));
var_dump($db->execute("INSERT INTO news ( заголовок, текст, автор) 
  VALUES ( 'Новость 1', 'Name of news 1 |Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto eligendi aliquid sapiente exercitationem corporis ex, culpa voluptatibus at voluptatem. Tempore qui sit velit laborum veritatis, illum repellat est culpa odit', 'Александр')" ));
var_dump($db->execute("INSERT INTO news ( заголовок, текст, автор) 
  VALUES ( 'Новость 2', 'Name of news 2 |Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto eligendi aliquid sapiente exercitationem corporis ex, culpa voluptatibus at voluptatem. Tempore qui sit velit laborum veritatis, illum repellat est culpa odit', 'Петр')" ));
var_dump($db->execute("INSERT INTO news ( заголовок, текст, автор) 
  VALUES ( 'Новость 3', 'Name of news 3 |Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto eligendi aliquid sapiente exercitationem corporis ex, culpa voluptatibus at voluptatem. Tempore qui sit velit laborum veritatis, illum repellat est culpa odit', 'Валера')" ));