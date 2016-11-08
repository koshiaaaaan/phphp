<?php
namespace Phphp\Tests\Reader;

use Phphp\Lexer\Reader\StringReader;

class StringReaderTest extends \PHPUnit_Framework_TestCase
{
    public function testAdvance()
    {
        $reader   = new StringReader("abc\r\nd");
        $this->assertEquals('a', $reader->advance());
        $this->assertEquals('b', $reader->advance());
        $this->assertEquals('c', $reader->advance());
        $this->assertEquals("\r", $reader->advance());
        $this->assertEquals('d', $reader->advance());
        return $reader;
    }

    /**
     * @param StringReader $reader
     * 
     * @depends testAdvance
     */
    public function testRetreat(StringReader $reader)
    {
        $this->assertEquals(5, $reader->retreat());
        $this->assertEquals(3, $reader->retreat());
        $this->assertEquals("\r", $reader->advance());
    }
}
