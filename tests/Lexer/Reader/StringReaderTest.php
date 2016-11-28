<?php
namespace Phphp\Tests\Reader;

use Phphp\Lexer\Reader\StringReader;
use Phphp\Lexer\Tokenizer\Html5\Character;

class StringReaderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return StringReader
     */
    public function testAdvance()
    {
        $reader = new StringReader("abc\r\ndef\rghi\njkl");
        $this->assertEquals('a', $reader->advance());
        $this->assertEquals('b', $reader->advance());
        $this->assertEquals('c', $reader->advance());
        $this->assertEquals("\r", $reader->advance());
        $this->assertEquals("\n", $reader->advance());
        $this->assertEquals('d', $reader->advance());
        $this->assertEquals('e', $reader->advance());
        $this->assertEquals('f', $reader->advance());
        $this->assertEquals("\r", $reader->advance());
        $this->assertEquals('g', $reader->advance());
        $this->assertEquals('h', $reader->advance());
        $this->assertEquals('i', $reader->advance());
        $this->assertEquals("\n", $reader->advance());
        $this->assertEquals('j', $reader->advance());
        $this->assertEquals('k', $reader->advance());
        $this->assertEquals('l', $reader->advance());
        $this->assertEquals(Character::EOF, $reader->advance());
        return $reader;
    }

    /**
     * @depends testAdvance
     *
     * @param  StringReader $reader
     * @return StringReader
     */
    public function testRetreat(StringReader $reader)
    {
        $this->assertEquals('l', $reader->retreat());
        $this->assertEquals('k', $reader->retreat());
        $this->assertEquals('j', $reader->retreat());
        $this->assertEquals("\n", $reader->retreat());
        $this->assertEquals('i', $reader->retreat());
        $this->assertEquals('h', $reader->retreat());
        $this->assertEquals('g', $reader->retreat());
        $this->assertEquals("\r", $reader->retreat());
        $this->assertEquals('f', $reader->retreat());
        $this->assertEquals('e', $reader->retreat());
        $this->assertEquals('d', $reader->retreat());
        $this->assertEquals("\n", $reader->retreat());
        $this->assertEquals("\r", $reader->retreat());
        $this->assertEquals('c', $reader->retreat());
        $this->assertEquals('b', $reader->retreat());
        $this->assertEquals('a', $reader->retreat());
        $this->assertEquals('', $reader->retreat());
        return $reader;
    }

    /**
     * @depends testRetreat
     *
     * @param  StringReader $reader
     * @depends testAdvance
     */
    public function testAdvanceAfterRetreated(StringReader $reader)
    {
        $this->assertEquals('a', $reader->advance());
        $this->assertEquals('b', $reader->advance());
        $this->assertEquals('c', $reader->advance());
    }

    public function testFirstRetreat()
    {
        $reader = new StringReader("abc");
        $this->assertEquals(1, $reader->getLine());
        $this->assertEquals(0, $reader->getColumn());
        $this->assertEquals('', $reader->retreat());
        $this->assertEquals(1, $reader->getLine());
        $this->assertEquals(0, $reader->getColumn());
        $this->assertEquals('', $reader->retreat());
        $this->assertEquals(1, $reader->getLine());
        $this->assertEquals(0, $reader->getColumn());
        $this->assertEquals('a', $reader->advance());
        $this->assertEquals(1, $reader->getLine());
        $this->assertEquals(1, $reader->getColumn());
    }

    public function testLastAdvance()
    {
        $reader = new StringReader("abc");
        $reader->advance();
        $reader->advance();
        $reader->advance();
        $this->assertEquals(1, $reader->getLine());
        $this->assertEquals(3, $reader->getColumn());
        $this->assertEquals(Character::EOF, $reader->advance());
        $this->assertEquals(1, $reader->getLine());
        $this->assertEquals(3, $reader->getColumn());
        $this->assertEquals(Character::EOF, $reader->advance());
        $this->assertEquals(1, $reader->getLine());
        $this->assertEquals(3, $reader->getColumn());
        $this->assertEquals("c", $reader->retreat());
        $this->assertEquals(1, $reader->getLine());
        $this->assertEquals(2, $reader->getColumn());
    }

    public function testAdvancedPosition()
    {
        $reader   = new StringReader("abc\rdefg\r\nhijk\nlmn");
        $line = 0;
        $column = 1;
        $data = [
            [1, 0], [1, 1], [1, 2], [1, 3],
            [2, 0], [2, 1], [2, 2], [2, 3], [2, 4], [2, 4],
            [3, 0], [3, 1], [3, 2], [3, 3], [3, 4],
            [4, 0], [4, 1], [4, 2], [4, 3],
        ];
        foreach ($data as $d) {
            $this->assertEquals($d[$line], $reader->getLine());
            $this->assertEquals($d[$column], $reader->getColumn());
            $reader->advance();
        }
        return $reader;
    }

    /**
     * @param  StringReader $reader
     *
     * @depends testAdvancedPosition
     */
    public function testRetreatedPosition(StringReader $reader)
    {
        $line = 0;
        $column = 1;
        $data = [
            [4, 3], [4, 2], [4, 1], [4, 0],
            [3, 4], [3, 3], [3, 2], [3, 1], [3, 0],
            [2, 4], [2, 4], [2, 3], [2, 2], [2, 1], [2, 0],
            [1, 3], [1, 2], [1, 1], [1, 0],
        ];
        foreach ($data as $d) {
            $this->assertEquals($d[$line], $reader->getLine());
            $this->assertEquals($d[$column], $reader->getColumn());
            $reader->retreat();
        }
    }
}
