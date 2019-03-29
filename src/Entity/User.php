<?php
/**
 * Created by IntelliJ IDEA.
 * User: jeckel
 * Date: 24/03/19
 * Time: 23:16
 */

namespace App\Entity;

class User
{
    /** @var string */
    protected $uid;

    /** @var string */
    protected $login;

    /** @var string */
    protected $displayName;

    /**
     * @return string
     */
    public function getUid(): string
    {
        return $this->uid;
    }

    /**
     * @param string $uid
     * @return User
     */
    public function setUid(string $uid): User
    {
        $this->uid = $uid;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @param string $login
     * @return User
     */
    public function setLogin(string $login): User
    {
        $this->login = $login;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName(): string
    {
        return $this->displayName;
    }

    /**
     * @param string $displayName
     * @return User
     */
    public function setDisplayName(string $displayName): User
    {
        $this->displayName = $displayName;
        return $this;
    }
}
