<?php
namespace Phphp\Tests\Scanner;

use Phphp\Character;
use PHPUnit\Framework\TestCase;

class CharacterTest extends TestCase
{
    public function testMagicMethodCall()
    {
        $this->assertTrue(Character::isLineFeed("\n"));
        $this->assertTrue(Character::isLineFeed("\x0A"));
        $this->assertTrue(Character::isLineFeed("\u{000A}"));
    }

    public function testIsAsciiUpperAlpha()
    {
        $this->assertFalse(Character::isAsciiUpperAlpha('a'));
        $this->assertFalse(Character::isAsciiUpperAlpha("\x64")); // d
        $this->assertTrue(Character::isAsciiUpperAlpha('F'));
        $this->assertTrue(Character::isAsciiUpperAlpha("\u{0058}")); // X
        $this->assertFalse(Character::isAsciiUpperAlpha('0'));
        $this->assertFalse(Character::isAsciiUpperAlpha("\u{0032}")); // 2
        $this->assertFalse(Character::isAsciiUpperAlpha('9'));
        $this->assertFalse(Character::isAsciiUpperAlpha("\x38")); // 8
        $this->assertFalse(Character::isAsciiUpperAlpha('&'));
        $this->assertFalse(Character::isAsciiUpperAlpha("\u{003E}")); // >
    }

    public function testIsAsciiLowerAlpha()
    {
        $this->assertTrue(Character::isAsciiLowerAlpha('a'));
        $this->assertTrue(Character::isAsciiLowerAlpha("\x64")); // d
        $this->assertFalse(Character::isAsciiLowerAlpha('F'));
        $this->assertFalse(Character::isAsciiLowerAlpha("\u{0058}")); // X
        $this->assertFalse(Character::isAsciiLowerAlpha('0'));
        $this->assertFalse(Character::isAsciiLowerAlpha("\u{0032}")); // 2
        $this->assertFalse(Character::isAsciiLowerAlpha('9'));
        $this->assertFalse(Character::isAsciiLowerAlpha("\x38")); // 8
        $this->assertFalse(Character::isAsciiLowerAlpha('&'));
        $this->assertFalse(Character::isAsciiLowerAlpha("\u{003E}")); // >
    }

    public function testIsAsciiAlpha()
    {
        $this->assertTrue(Character::isAsciiAlpha('a'));
        $this->assertTrue(Character::isAsciiAlpha("\x64")); // d
        $this->assertTrue(Character::isAsciiAlpha('F'));
        $this->assertTrue(Character::isAsciiAlpha("\u{0058}")); // X
        $this->assertFalse(Character::isAsciiAlpha('0'));
        $this->assertFalse(Character::isAsciiAlpha("\u{0032}")); // 2
        $this->assertFalse(Character::isAsciiAlpha('9'));
        $this->assertFalse(Character::isAsciiAlpha("\x38")); // 8
        $this->assertFalse(Character::isAsciiAlpha('&'));
        $this->assertFalse(Character::isAsciiAlpha("\u{003E}")); // >
    }

    public function testIsAsciiDigit()
    {
        $this->assertFalse(Character::isAsciiDigit('a'));
        $this->assertFalse(Character::isAsciiDigit("\x64")); // d
        $this->assertFalse(Character::isAsciiDigit('F'));
        $this->assertFalse(Character::isAsciiDigit("\u{0058}")); // X
        $this->assertTrue(Character::isAsciiDigit('0'));
        $this->assertTrue(Character::isAsciiDigit("\u{0032}")); // 2
        $this->assertTrue(Character::isAsciiDigit('9'));
        $this->assertTrue(Character::isAsciiDigit("\x38")); // 8
        $this->assertFalse(Character::isAsciiDigit('&'));
        $this->assertFalse(Character::isAsciiDigit("\u{003E}")); // >
    }

    public function testIsAsciiAlphaNumeric()
    {
        $this->assertTrue(Character::isAsciiAlphaNumeric('a'));
        $this->assertTrue(Character::isAsciiAlphaNumeric("\u{0064}")); // d
        $this->assertTrue(Character::isAsciiAlphaNumeric('F'));
        $this->assertTrue(Character::isAsciiAlphaNumeric("\u{0058}")); // X
        $this->assertTrue(Character::isAsciiAlphaNumeric('0'));
        $this->assertTrue(Character::isAsciiAlphaNumeric("\u{0032}")); // 2
        $this->assertTrue(Character::isAsciiAlphaNumeric('9'));
        $this->assertTrue(Character::isAsciiAlphaNumeric("\x38")); // 8
        $this->assertFalse(Character::isAsciiAlphaNumeric('&'));
        $this->assertFalse(Character::isAsciiAlphaNumeric("\u{003E}")); // >
    }
}