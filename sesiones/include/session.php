<?php

class SessionUser
{

    public function __construct()
    {
        session_start();
    }

    public function setCurrent(string $user)
    {
        $_SESSION['name'] = $user;
    }

    public function getCurrent()
    {
        return $_SESSION['user'];
    }

    public function closeSession()
    {
        session_unset();
        session_destroy();
    }
}
