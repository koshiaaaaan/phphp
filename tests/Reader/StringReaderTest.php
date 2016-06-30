<?php
namespace Phphp\Tests\Reader;

use Phphp\Reader\StringReader;

class StringReaderTest extends \PHPUnit_Framework_TestCase
{
    private $reader;

    public function setUp()
    {
        $this->reader   = new StringReader('abcde');
    }

    public function testCurrent()
    {
        $this->assertEquals('a', $this->reader->current());
    }

    public function testNext()
    {
        $this->reader->next();
        $this->assertEquals('b', $this->reader->current());
    }

    public function testRewind()
    {
        $this->reader->rewind();
        $this->assertEquals('a', $this->reader->current());
    }

    public function testValid()
    {
        $this->assertTrue($this->reader->valid());
        $length = strlen('abcde');
        while ($length--) $this->reader->next();
        $this->assertEquals('e', $this->reader->current());
        $this->assertFalse($this->reader->valid());
    }
}
