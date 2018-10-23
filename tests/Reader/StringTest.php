<?php
namespace Phphp\Tests\Reader;

use Phphp\Character;
use Phphp\Reader\Text;
use PHPUnit\Framework\TestCase;

class StringTest extends TestCase
{
    public function testPeek()
    {
        $text = new Text('hoge');
        $this->assertEquals('h', $text->peek(1));
        $this->assertEquals('ho', $text->peek(2));
        $this->assertEquals('hoge', $text->peek(4));
        $this->assertEquals('hoge', $text->peek(5));
    }

    public function testAdvance()
    {
        $source = "hoge\nfugafuga\r\npiyopiyopiyo\rhogefugapiyo";
        $text = new Text($source);

        $this->assertEquals(0, $text->getColumn());
        $this->assertEquals(1, $text->getLine());

        // hoge
        for ($i = 0; $i < 4; $i++) {
            $this->assertEquals($source[$i], $text->advance());
            $this->assertEquals($i+1, $text->getColumn());
            $this->assertEquals(1, $text->getLine());
        }

        // \n
        $this->assertEquals("\n", $text->advance());
        $this->assertEquals(0, $text->getColumn());
        $this->assertEquals(2, $text->getLine());

        // fugafuga
        for ($i = 0; $i < 8; $i++) {
            $this->assertEquals($source[$i+5], $text->advance());
            $this->assertEquals($i+1, $text->getColumn());
            $this->assertEquals(2, $text->getLine());
        }

        // \r\n
        $this->assertEquals("\r", $text->advance());
        $this->assertEquals(8, $text->getColumn());
        $this->assertEquals(2, $text->getLine());
        $this->assertEquals("\n", $text->advance());
        $this->assertEquals(0, $text->getColumn());
        $this->assertEquals(3, $text->getLine());

        // piyopiyopiyo
        for ($i = 0; $i < 12; $i++) {
            $this->assertEquals($source[$i+15], $text->advance());
            $this->assertEquals($i+1, $text->getColumn());
            $this->assertEquals(3, $text->getLine());
        }

        // \r
        $this->assertEquals("\r", $text->advance());
        $this->assertEquals(0, $text->getColumn());
        $this->assertEquals(4, $text->getLine());

        // hogefugapiyo
        for ($i = 0; $i < 12; $i++) {
            $this->assertEquals($source[$i+28], $text->advance());
            $this->assertEquals($i+1, $text->getColumn());
            $this->assertEquals(4, $text->getLine());
        }

        $this->assertEquals(Character::EOT, $text->advance());
        $this->assertEquals(12, $text->getColumn());
        $this->assertEquals(4, $text->getLine());

        $this->assertEquals(Character::EOT, $text->advance());
        $this->assertEquals(12, $text->getColumn());
        $this->assertEquals(4, $text->getLine());

        return $text;
    }

    /**
     * @depends testAdvance
     * 
     * @param \Phphp\Reader\Text $text
     */
    public function testRetreat(Text $text)
    {
        $source = "hoge\nfugafuga\r\npiyopiyopiyo\rhogefugapiyo";

        $this->assertEquals(12, $text->getColumn());
        $this->assertEquals(4, $text->getLine());

        // hogefugapiyo
        for ($i = 11; $i >= 0; $i--) {
            $this->assertEquals($source[$i+28], $text->retreat());
            $this->assertEquals($i, $text->getColumn());
            $this->assertEquals(4, $text->getLine());
        }

        // \r
        $this->assertEquals("\r", $text->retreat());
        $this->assertEquals(12, $text->getColumn());
        $this->assertEquals(3, $text->getLine());

        for ($i = 11; $i >= 0; $i--) {
            $this->assertEquals($source[$i+15], $text->retreat());
            $this->assertEquals($i, $text->getColumn());
            $this->assertEquals(3, $text->getLine());
        }

        // \r\n
        $this->assertEquals("\n", $text->retreat());
        $this->assertEquals(0, $text->getColumn());
        $this->assertEquals(3, $text->getLine());
        $this->assertEquals("\r", $text->retreat());
        $this->assertEquals(8, $text->getColumn());
        $this->assertEquals(2, $text->getLine());

        // fugafuga
        for ($i = 7; $i >= 0; $i--) {
            $this->assertEquals($source[$i+5], $text->retreat());
            $this->assertEquals($i, $text->getColumn());
            $this->assertEquals(2, $text->getLine());
        }

        // \n
        $this->assertEquals("\n", $text->retreat());
        $this->assertEquals(4, $text->getColumn());
        $this->assertEquals(1, $text->getLine());

        // hoge
        for ($i = 3; $i >= 0; $i--) {
            $this->assertEquals($source[$i], $text->retreat());
            $this->assertEquals($i, $text->getColumn());
            $this->assertEquals(1, $text->getLine());
        }

        $this->assertEquals('', $text->retreat());
        $this->assertEquals(0, $text->getColumn());
        $this->assertEquals(1, $text->getLine());

        $this->assertEquals('', $text->retreat());
        $this->assertEquals(0, $text->getColumn());
        $this->assertEquals(1, $text->getLine());
    }
}