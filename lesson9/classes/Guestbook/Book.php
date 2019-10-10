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

    /*public function append(Record $record){
        $this->data[] = $record;
        return $this;
    }*/

    public function save(Record $record){
        $sql="INSERT INTO guestBook (records) VALUES (record) WHERE record < :record'$record->getMessage()'";
        
        var_dump($this->db->execute( $sql ));
    }
}
?>
<?php
/* Выполнение запроса с привязкой PHP переменных */
$calories = 150;
$colour = 'red';
$sth = $dbh->prepare('SELECT name, colour, calories FROM fruit WHERE calories < :calories AND colour = :colour');
$sth->bindParam(':calories', $calories, PDO::PARAM_INT);
$sth->bindParam(':colour', $colour, PDO::PARAM_STR, 12);
$sth->execute();
?>