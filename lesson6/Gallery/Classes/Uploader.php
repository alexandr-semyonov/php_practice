<?php


class Uploader
{
    public function __construct($fieldName, $uploadDir)
    {
        $this->fieldName = $fieldName;
        $this->uploadDir = $uploadDir;
    }
    public function isUploaded()
    {
        return isset($_FILES[$this->fieldName]['name']);
    }
    public function isError(){
        return 0 == $_FILES[$this->fieldName]['error'];
    }
    public function isTrueType(){

    }
    public function upload()
    {
        if ($this->isUploaded()){
            move_uploaded_file(
                $_FILES[$this->fieldName]['tmp_name'],
                $this->uploadDir . $_FILES[$this->fieldName]['name']
            );
        }
    }
    protected  $fieldName;
    protected $uploadDir;
    protected $filename;
}