<?php


class User
{
    protected $user;
    protected $password;
    public function __construct($user, $password)
    {
        $this->user = $user;
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