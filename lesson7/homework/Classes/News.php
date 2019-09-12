<?php

require_once __DIR__ . '/Article.php';

class News
{
    protected $path;
    protected $data = [];

    public function __construct()
    {
        $this->path = __DIR__ . '/../news.txt';
        $lines = file($this->path, FILE_IGNORE_NEW_LINES);
        $articleId = 0;
        foreach ($lines as $line){
            $line = (explode('|', $line));
            $article = str_replace("\r\n", "", $line[1]);
            $articleHeader = $line[0];
            $articleId++;
            $this->data[] = new Article($articleId, $articleHeader, $article);
        }
    }

    public function getNews()
    {
        return $this->data;
    }
    /*
    public function append(GuestBookRecord $record){
        $this->data[] = $record;
        return $this;
    }

    public function save(){
        $lines = [];
        foreach ($this->data as $record){
            $lines[] = $record->getMessage();
        }
        file_put_contents($this->path, implode("\n", $lines));
    }*/
}