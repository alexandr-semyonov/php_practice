<?php

require_once __DIR__ . '/Record.php';
require_once __DIR__ . '/../../classes/Db.php';

class Book
{
    protected $data;

    public function __construct()
    {
        $db = new Db;
        $this->data = $db->query('SELECT * FROM guestbook');
    }

    public function getGuestBook()
    {
        return $this->data;
    }

    public function append(Record $record){
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