<?php


class Uploader
{
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
        }
    }
    protected $fieldName;
}