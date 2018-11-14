<?php
namespace Phphp\Tests\Scanner;

use org\bovigo\vfs\vfsStream;
use Phphp\Character;
use Phphp\Lexer\Scanner\File;
use PHPUnit\Framework\TestCase;

class FileTest extends TestCase
{
    /**
     * @var \org\bovigo\vfs\vfsStreamFile
     */
    private $file;

    public function setUp()
    {
        parent::setUp();
        $root = vfsStream::setup();
        $this->file = vfsStream::newFile('test')
            ->at($root);
    }

    public function testPeek()
    {
        $this->file->withContent('hoge');
        $scanner = new File($this->file->url());
        $this->assertSame('h', $scanner->peek(1));
        $this->assertSame('ho', $scanner->peek(2));
        $this->assertSame('hoge', $scanner->peek(4));
        $this->assertSame('hoge', $scanner->peek(5));
    }

    /**
     * @return \Phphp\Lexer\Scanner\File
     */
    public function testAdvance()
    {
        $source = "hoge\nfugafuga\r\npiyopiyopiyo\rhogefugapiyo";
        $this->file->withContent($source);
        $scanner = new File($this->file->url());

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
     * @param \Phphp\Lexer\Scanner\File $scanner
     * @return \Phphp\Lexer\Scanner\File
     */
    public function testRetreat(File $scanner)
    {
        $source = "hoge\nfugafuga\r\npiyopiyopiyo\rhogefugapiyo";

        while (Character::EOF !== $scanner->advance()) {}

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
     * @param \Phphp\Lexer\Scanner\File $scanner
     */
    public function testAdvanceAndRetreat(File $scanner)
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

    public function testEmptyFile()
    {
        $scanner = new File($this->file->url());

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

    /**
     * @depends testPeek
     * @depends testAdvance
     */
    public function testPeekForward()
    {
        $this->file->withContent('hoge');
        $scanner = new File($this->file->url());
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

        $this->file->withContent(Character::BOM.'hoge');
        $scanner = new File($this->file->url());
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