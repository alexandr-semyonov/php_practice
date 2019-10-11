<?php

require_once __DIR__ . '/Record.php';
require_once __DIR__ . '/../../classes/Db.php';

class Book
{
    protected $data;
    protected $db;

    public function __construct()
    {
        $this->db = new Db;
        $this->data = $this->db->query('SELECT * FROM guestbook');
    }

    public function getGuestBook()
    {
        return $this->data;
    }

    public function save(Record $record){
        $sql="INSERT INTO guestBook (records) VALUES (:record)";
        $this->db->execute($sql, [':record' => $record->getMessage()]);
    }
}