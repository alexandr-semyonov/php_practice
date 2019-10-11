<?php


class Db
{
  protected $dbh;

  public function __construct() {
    $config = require_once __DIR__ . '/../config.php';
    $dsn = 'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'];
    $this->dbh = new PDO($dsn, $config['user'], $config['password']);
  }

  public function getDbh(){
    return $this->dbh;
  }

  public function execute(string $sql, array $data=[]){
    $sth = $this->dbh->prepare($sql);
    if ($data){
      foreach ($data as $paramName => $param){
        $sth->bindParam($paramName, $param);
      }
    }
    return $sth->execute();
  }

  public function query(string $sql, array $data=[]){
    $sth = $this->dbh->prepare($sql);
    if ($data){
      $sth->execute($data);
    } else {
      $sth->execute();
    }
    return $sth->fetchAll();
  }
}

