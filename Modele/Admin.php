<?php
/**
 * Created by PhpStorm.
 * User: thfague
 * Date: 14/12/18
 * Time: 16:18
 */

class Admin
{
    private $login;
    private $role;

    /**
     * Admin constructor.
     * @param $login
     * @param $role
     */
    public function __construct($login, $role)
    {
        $this->login = $login;
        $this->role = $role;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     * @return Admin
     */
    public function setLogin($login)
    {
        $this->login = $login;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param mixed $role
     * @return Admin
     */
    public function setRole($role)
    {
        $this->role = $role;
        return $this;
    }
}