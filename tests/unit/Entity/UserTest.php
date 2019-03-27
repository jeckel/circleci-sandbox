<?php
/**
 * Created by IntelliJ IDEA.
 * User: jeckel
 * Date: 27/03/19
 * Time: 19:08
 */

use App\Entity\User;

class UserTest extends \Codeception\Test\Unit
{
    public function testSetGetDisplayName()
    {
        $user = new User();
        $this->assertSame($user, $user->setDisplayName('foobar'));
        $this->assertEquals('foobar', $user->getDisplayName());
    }

    public function testSetGetId()
    {
        $user = new User();
        $this->assertSame($user, $user->setId(123));
        $this->assertEquals(123, $user->getId());
    }

    public function testSetGetLogin()
    {
        $user = new User();
        $this->assertSame($user, $user->setLogin('foobar'));
        $this->assertEquals('foobar', $user->getLogin());
    }
}
