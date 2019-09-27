<?php

require_once __DIR__ . '/Db.php';

class Index
{
    protected $data = [];

    public function __construct()
    {   
        $db = new Db;
        $sql = 'SELECT * FROM mainText';
        $data = $db->query($sql);
        $this->data = $data;
    }

    public function getIndex()
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