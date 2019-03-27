<?php
/**
 * User: jeckel
 * Date: 27/03/19
 * Time: 10:23
 */
namespace App\Repository;

use App\Entity\User;

/**
 * Interface UserRepositoryInterface
 * @package App\Repository
 */
interface UserRepositoryInterface
{
    /**
     * @param string $login
     * @return User
     */
    public function findByLogin(string $login): User;
}
