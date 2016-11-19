<?php
namespace Phphp\Tests\Reader;

use Phphp\Lexer\Reader\StringReader;
use Phphp\Lexer\Tokenizer\Html5\Character;

class StringReaderTest extends \PHPUnit_Framework_TestCase
{
    public function testAdvance()
    {
        $reader   = new StringReader("abc\r\nd");
        $this->assertEquals('a', $reader->advance());
        $this->assertEquals('b', $reader->advance());
        $this->assertEquals('c', $reader->advance());
        $this->assertEquals("\r", $reader->advance());
        $this->assertEquals("\n", $reader->advance());
        $this->assertEquals('d', $reader->advance());
        $this->assertEquals(Character::EOF, $reader->advance());
        return $reader;
    }

    /**
     * @param  StringReader $reader
     * @return StringReader
     * 
     * @depends testAdvance
     */
    public function testRetreatAndAdvance(StringReader $reader)
    {
        $this->assertEquals('d', $reader->retreat());
        $this->assertEquals("\n", $reader->retreat());
        $this->assertEquals("\r", $reader->retreat());
        $this->assertEquals('c', $reader->retreat());
        $this->assertEquals('b', $reader->retreat());
        $this->assertEquals('c', $reader->advance());
        $this->assertEquals("\r", $reader->advance());
        $this->assertEquals("\n", $reader->advance());
        $this->assertEquals('d', $reader->advance());
        $this->assertEquals(Character::EOF, $reader->advance());
        return $reader;
    }

    public function getLineAndColumn()
    {
        $reader   = new StringReader("abc\rdefg\r\nhijk\nlmn");
        $line = 0;
        $column = 1;
        $data = [
            [1, 1], [1, 2], [1, 3], [1, 4],
            [2, 1], [2, 2], [2, 3], [2, 4], [2, 5],
            [3, 1], [3, 2], [3, 3], [3, 4], [3, 5],
            [4, 1], [4, 2], [4, 3], [4, 4], [4, 4]
        ];
        foreach ($data as $d) {
            $this->assertEquals($d[$line], $reader->getLine());
            $this->assertEquals($d[$column], $reader->getColumn());
            $reader->advance();
        }
        foreach (array_reverse($data) as $d) {
            $this->assertEquals($d[$line], $reader->getLine());
            $this->assertEquals($d[$column], $reader->getColumn());
            $reader->retreat();
        }
    }
}
