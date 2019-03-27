<?php
/**
 * User: jeckel
 * Date: 27/03/19
 * Time: 19:08
 */
namespace Test\App\Entity;

use App\Entity\User;

/**
 * Class UserTest
 * @package Test\App\Entity
 */
class UserTest extends \Codeception\Test\Unit
{
    /**
     * @test User::setDisplayName
     * @test User::getDisplayName
     */
    public function testSetGetDisplayName()
    {
        $user = new User();
        $this->assertSame($user, $user->setDisplayName('foobar'));
        $this->assertEquals('foobar', $user->getDisplayName());
    }

    /**
     * @test User::setId
     * @test USer::getId
     */
    public function testSetGetId()
    {
        $user = new User();
        $this->assertSame($user, $user->setId(123));
        $this->assertEquals(123, $user->getId());
    }

    /**
     * @test User::setLogin
     * @test User::getLogin
     */
    public function testSetGetLogin()
    {
        $user = new User();
        $this->assertSame($user, $user->setLogin('foobar'));
        $this->assertEquals('foobar', $user->getLogin());
    }
}
