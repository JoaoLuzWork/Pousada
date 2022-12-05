<?php

class Admin
{
    private $login;
    private $pass;
    private $cond;

    public function __construct($login, $pass, $cond) 
    {
        $this->login = $login;
        $this->pass = $pass;
        $this->cond = $cond;
    }


    /**
     * Get the value of login
     */ 
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @return  self
     */ 
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get the value of pass
     */ 
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set the value of pass
     *
     * @return  self
     */ 
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    /**
     * Get the value of cond
     */ 
    public function getCond()
    {
        return $this->cond;
    }

    /**
     * Set the value of cond
     *
     * @return  self
     */ 
    public function setCond($cond)
    {
        $this->cond = $cond;

        return $this;
    }
}