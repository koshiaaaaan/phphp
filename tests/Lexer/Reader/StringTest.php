<?php
namespace Phphp\Tests\Reader;

use Phphp\Lexer\Reader\String;

class StringTest extends \PHPUnit_Framework_TestCase
{
    private $reader;

    public function setUp()
    {
        $this->reader   = new String("abc\r\nd");
    }

    public function testAdvance()
    {
        $this->assertEquals('a', $this->reader->advance());
        $this->assertEquals('b', $this->reader->advance());
        $this->assertEquals('c', $this->reader->advance());
        $this->assertEquals("\r", $this->reader->advance());
        $this->assertEquals('d', $this->reader->advance());
    }

    public function testRetreat()
    {
        $this->reader->advance();
        $this->reader->advance();
        $this->reader->advance();
        $this->reader->advance();
        $this->reader->advance();
        $this->assertEquals(5, $this->reader->retreat());
        $this->assertEquals(3, $this->reader->retreat());
        $this->assertEquals("\r", $this->reader->advance());
    }
}
