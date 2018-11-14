<?php
namespace Phphp\Tests\Scanner;

use Phphp\Character;
use Phphp\Lexer\Scanner\Text;
use PHPUnit\Framework\TestCase;

class TextTest extends TestCase
{
    public function testPeek()
    {
        $scanner = new Text('hoge');
        $this->assertSame('h', $scanner->peek(1));
        $this->assertSame('ho', $scanner->peek(2));
        $this->assertSame('hoge', $scanner->peek(4));
        $this->assertSame('hoge', $scanner->peek(5));
    }

    public function testAdvance()
    {
        $source = "hoge\nfugafuga\r\npiyopiyopiyo\rhogefugapiyo";
        $scanner = new Text($source);

        $this->assertSame(0, $scanner->getColumn());
        $this->assertSame(1, $scanner->getLine());

        // hoge
        for ($i = 0; $i < 4; $i++) {
            $this->assertSame($source[$i], $scanner->advance());
            $this->assertSame($i+1, $scanner->getColumn());
            $this->assertSame(1, $scanner->getLine());
        }

        // \n
        $this->assertSame("\n", $scanner->advance());
        $this->assertSame(0, $scanner->getColumn());
        $this->assertSame(2, $scanner->getLine());

        // fugafuga
        for ($i = 0; $i < 8; $i++) {
            $this->assertSame($source[$i+5], $scanner->advance());
            $this->assertSame($i+1, $scanner->getColumn());
            $this->assertSame(2, $scanner->getLine());
        }

        // \r\n
        $this->assertSame("\r", $scanner->advance());
        $this->assertSame(8, $scanner->getColumn());
        $this->assertSame(2, $scanner->getLine());
        $this->assertSame("\n", $scanner->advance());
        $this->assertSame(0, $scanner->getColumn());
        $this->assertSame(3, $scanner->getLine());

        // piyopiyopiyo
        for ($i = 0; $i < 12; $i++) {
            $this->assertSame($source[$i+15], $scanner->advance());
            $this->assertSame($i+1, $scanner->getColumn());
            $this->assertSame(3, $scanner->getLine());
        }

        // \r
        $this->assertSame("\r", $scanner->advance());
        $this->assertSame(0, $scanner->getColumn());
        $this->assertSame(4, $scanner->getLine());

        // hogefugapiyo
        for ($i = 0; $i < 12; $i++) {
            $this->assertSame($source[$i+28], $scanner->advance());
            $this->assertSame($i+1, $scanner->getColumn());
            $this->assertSame(4, $scanner->getLine());
        }

        $this->assertSame(Character::EOF, $scanner->advance());
        $this->assertSame(12, $scanner->getColumn());
        $this->assertSame(4, $scanner->getLine());

        $this->assertSame(Character::EOF, $scanner->advance());
        $this->assertSame(12, $scanner->getColumn());
        $this->assertSame(4, $scanner->getLine());

        return $scanner;
    }

    /**
     * @depends testAdvance
     *
     * @param \Phphp\Lexer\Scanner\Text $scanner
     * @return \Phphp\Lexer\Scanner\Text $scanner
     */
    public function testRetreat(Text $scanner)
    {
        $source = "hoge\nfugafuga\r\npiyopiyopiyo\rhogefugapiyo";

        $this->assertSame(12, $scanner->getColumn());
        $this->assertSame(4, $scanner->getLine());

        // hogefugapiyo
        for ($i = 11; $i >= 0; $i--) {
            $this->assertSame($source[$i+28], $scanner->retreat());
            $this->assertSame($i, $scanner->getColumn());
            $this->assertSame(4, $scanner->getLine());
        }

        // \r
        $this->assertSame("\r", $scanner->retreat());
        $this->assertSame(12, $scanner->getColumn());
        $this->assertSame(3, $scanner->getLine());

        for ($i = 11; $i >= 0; $i--) {
            $this->assertSame($source[$i+15], $scanner->retreat());
            $this->assertSame($i, $scanner->getColumn());
            $this->assertSame(3, $scanner->getLine());
        }

        // \r\n
        $this->assertSame("\n", $scanner->retreat());
        $this->assertSame(0, $scanner->getColumn());
        $this->assertSame(3, $scanner->getLine());
        $this->assertSame("\r", $scanner->retreat());
        $this->assertSame(8, $scanner->getColumn());
        $this->assertSame(2, $scanner->getLine());

        // fugafuga
        for ($i = 7; $i >= 0; $i--) {
            $this->assertSame($source[$i+5], $scanner->retreat());
            $this->assertSame($i, $scanner->getColumn());
            $this->assertSame(2, $scanner->getLine());
        }

        // \n
        $this->assertSame("\n", $scanner->retreat());
        $this->assertSame(4, $scanner->getColumn());
        $this->assertSame(1, $scanner->getLine());

        // hoge
        for ($i = 3; $i >= 0; $i--) {
            $this->assertSame($source[$i], $scanner->retreat());
            $this->assertSame($i, $scanner->getColumn());
            $this->assertSame(1, $scanner->getLine());
        }

        $this->assertSame('', $scanner->retreat());
        $this->assertSame(0, $scanner->getColumn());
        $this->assertSame(1, $scanner->getLine());

        $this->assertSame('', $scanner->retreat());
        $this->assertSame(0, $scanner->getColumn());
        $this->assertSame(1, $scanner->getLine());

        return $scanner;
    }

    /**
     * @depends testRetreat
     *
     * @param \Phphp\Lexer\Scanner\Text $scanner
     */
    public function testAdvanceAndRetreat(Text $scanner)
    {
        $this->assertSame('h', $scanner->advance());
        $this->assertSame('o', $scanner->advance());
        $this->assertSame('g', $scanner->advance());
        $this->assertSame('e', $scanner->advance());
        $this->assertSame("\n", $scanner->advance());
        $this->assertSame('f', $scanner->advance());

        $this->assertSame('f', $scanner->retreat());
        $this->assertSame("\n", $scanner->retreat());
        $this->assertSame('e', $scanner->retreat());
        $this->assertSame('g', $scanner->retreat());

        $this->assertSame('g', $scanner->advance());
        $this->assertSame('e', $scanner->advance());
    }

    public function testEmptyText()
    {
        $scanner = new Text('');

        $this->assertSame(0, $scanner->getColumn());
        $this->assertSame(1, $scanner->getLine());
        $this->assertSame(Character::EOF, $scanner->advance());
        $this->assertSame(Character::EOF, $scanner->advance());
        $this->assertSame(0, $scanner->getColumn());
        $this->assertSame(1, $scanner->getLine());
        $this->assertSame('', $scanner->retreat());
        $this->assertSame('', $scanner->retreat());
        $this->assertSame(0, $scanner->getColumn());
        $this->assertSame(1, $scanner->getLine());
        $this->assertSame('', $scanner->peek());
        $this->assertSame('', $scanner->peek(5));
    }

    public function testPeekForward()
    {
        $scanner = new Text('hoge');
        $this->assertSame('', $scanner->peek(0));
        $this->assertSame('h', $scanner->advance());
        $this->assertSame('h', $scanner->peek(-1));
        $this->assertSame('h', $scanner->peek(-5));
        $this->assertSame('o', $scanner->advance());
        $this->assertSame('g', $scanner->advance());
        $this->assertSame('g', $scanner->peek(-1));
        $this->assertSame('og', $scanner->peek(-2));
        $this->assertSame('hog', $scanner->peek(-5));
        $this->assertSame('e', $scanner->advance());
        $this->assertSame(Character::EOF, $scanner->advance());
        $this->assertSame(Character::EOF, $scanner->advance());
        $this->assertSame('e', $scanner->peek(-1));
        $this->assertSame('ge', $scanner->peek(-2));
        $this->assertSame('hoge', $scanner->peek(-5));

        $scanner = new Text(Character::BOM.'hoge');
        $this->assertSame('', $scanner->peek(0));
        $this->assertSame('h', $scanner->advance());
        $this->assertSame('h', $scanner->peek(-1));
        $this->assertSame('h', $scanner->peek(-5));
        $this->assertSame('o', $scanner->advance());
        $this->assertSame('g', $scanner->advance());
        $this->assertSame('g', $scanner->peek(-1));
        $this->assertSame('og', $scanner->peek(-2));
        $this->assertSame('hog', $scanner->peek(-5));
        $this->assertSame('e', $scanner->advance());
        $this->assertSame(Character::EOF, $scanner->advance());
        $this->assertSame(Character::EOF, $scanner->advance());
        $this->assertSame('e', $scanner->peek(-1));
        $this->assertSame('ge', $scanner->peek(-2));
        $this->assertSame('hoge', $scanner->peek(-5));
    }
}