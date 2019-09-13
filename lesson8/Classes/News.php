<?php

require_once __DIR__ . '/Db.php';

class News
{
    protected $data = [];

    public function __construct()
    {   
        $db = new Db;
        $sql = 'SELECT * FROM news ORDER BY id DESC';
        $data = [':id' => $_GET['id']];
        $data = $db->query($sql, $data);
        $this->data = $data;
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