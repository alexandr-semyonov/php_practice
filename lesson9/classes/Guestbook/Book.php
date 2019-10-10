<?php

require_once __DIR__ . '/Record.php';
require_once __DIR__ . '/../../classes/Db.php';

class Book
{
    protected $data;

    public function __construct()
    {
        $db = new Db;
        $this->data = $db->query('SELECT * FROM guestbook ORDER BY id DESC');
    }

    public function getRecords()
    {
        return $this->data;
    }

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
    }
}