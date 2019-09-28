<?php

require_once __DIR__ . '/Db.php';

class Uploader
{
    protected $fieldName;

    public function __construct($fieldName)
    {
        $this->fieldName = $fieldName;
    }
    public function isUploaded()
    {
        return isset($_FILES[$this->fieldName]['name']);
    }
    public function upload( $uploadDir, $filename)
    {
        if ($this->isUploaded()){
            move_uploaded_file(
                $_FILES[$this->fieldName]['tmp_name'],
                $uploadDir . $filename
            );
          $db = new Db;
          $sql = 'INSERT INTO gallery (pictureName) VALUES ('. $filename . ')';
          $db->execute($sql);
        }
    }    
}