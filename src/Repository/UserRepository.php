<?php
/**
 * User: jeckel
 * Date: 24/03/19
 * Time: 23:19
 */
namespace App\Repository;

use App\Entity\User;

/**
 * Class UserRepository
 * @package App\Repository
 */
class UserRepository implements UserRepositoryInterface
{
    /**
     * @param string $login
     * @return User
     */
    public function findByLogin(string $login): User
    {
        return (new User())->setDisplayName('Bob Marley');
    }
}
