<?php
/**
 * Created by IntelliJ IDEA.
 * User: jeckel
 * Date: 19/03/19
 * Time: 10:33
 */

class Hello
{
    protected $name;

    public function __construct(?string $name = 'World')
    {
        if (empty($name)) {
            $name = 'World';
        }
        $this->name = $name;
    }

    public function __toString(): string
    {
        return sprintf("<p>Hello %s</p>", $this->name);
    }

}
