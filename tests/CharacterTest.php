<?php
namespace Phphp\Tests\Reader;

use Phphp\Character;
use PHPUnit\Framework\TestCase;

class CharacterTest extends TestCase
{
    public function testMethodCall()
    {
        $this->assertTrue(Character::isLineFeed("\n"));
    }
}