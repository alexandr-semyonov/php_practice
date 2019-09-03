<?php


class User
{
    protected $userName;
    protected $password;
    public function __construct($userName, $password)
    {
        $this->userName = $userName;
        $this->password = $password;
    }

    public function getUser()
    {
        return $this->user;
    }
    public function getPassword()
    {
        return $this->password;
    }
}