<?php
/**
 * User: jeckel
 * Date: 27/03/19
 * Time: 19:08
 */
namespace Test\App\Entity;

use App\Entity\User;
use Codeception\Test\Unit;

/**
 * Class UserTest
 * @package Test\App\Entity
 */
class UserTest extends Unit
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
     * @test User::setUid
     * @test User::getUid
     */
    public function testSetGetUid()
    {
        $user = new User();
        $this->assertSame($user, $user->setUid('foo-123'));
        $this->assertEquals('foo-123', $user->getUid());
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
