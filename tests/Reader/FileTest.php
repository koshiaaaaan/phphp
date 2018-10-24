<?php
namespace Phphp\Tests\Reader;

use Phphp\Character;
use Phphp\Reader\File;
use PHPUnit\Framework\TestCase;

class FileTest extends TestCase
{
    public $handle;

    public $path;

    public function setUp()
    {
        parent::setUp();

        $this->path = tempnam(sys_get_temp_dir(), 'php');
    }

    public function tearDown()
    {
        parent::tearDown();

        unlink($this->path);
    }

    public function testPeek()
    {
        file_put_contents($this->path, 'hoge', LOCK_EX);
        $reader = new File($this->path);
        $this->assertEquals('h', $reader->peek(1));
        $this->assertEquals('ho', $reader->peek(2));
        $this->assertEquals('hoge', $reader->peek(4));
        $this->assertEquals('hoge', $reader->peek(5));
        unset($reader);
    }

    public function testAdvance()
    {
        $source = "hoge\nfugafuga\r\npiyopiyopiyo\rhogefugapiyo";
        file_put_contents($this->path, $source, LOCK_EX);
        $reader = new File($this->path);

        $this->assertEquals(0, $reader->getColumn());
        $this->assertEquals(1, $reader->getLine());

        // hoge
        for ($i = 0; $i < 4; $i++) {
            $this->assertEquals($source[$i], $reader->advance());
            $this->assertEquals($i+1, $reader->getColumn());
            $this->assertEquals(1, $reader->getLine());
        }

        // \n
        $this->assertEquals("\n", $reader->advance());
        $this->assertEquals(0, $reader->getColumn());
        $this->assertEquals(2, $reader->getLine());

        // fugafuga
        for ($i = 0; $i < 8; $i++) {
            $this->assertEquals($source[$i+5], $reader->advance());
            $this->assertEquals($i+1, $reader->getColumn());
            $this->assertEquals(2, $reader->getLine());
        }

        // \r\n
        $this->assertEquals("\r", $reader->advance());
        $this->assertEquals(8, $reader->getColumn());
        $this->assertEquals(2, $reader->getLine());
        $this->assertEquals("\n", $reader->advance());
        $this->assertEquals(0, $reader->getColumn());
        $this->assertEquals(3, $reader->getLine());

        // piyopiyopiyo
        for ($i = 0; $i < 12; $i++) {
            $this->assertEquals($source[$i+15], $reader->advance());
            $this->assertEquals($i+1, $reader->getColumn());
            $this->assertEquals(3, $reader->getLine());
        }

        // \r
        $this->assertEquals("\r", $reader->advance());
        $this->assertEquals(0, $reader->getColumn());
        $this->assertEquals(4, $reader->getLine());

        // hogefugapiyo
        for ($i = 0; $i < 12; $i++) {
            $this->assertEquals($source[$i+28], $reader->advance());
            $this->assertEquals($i+1, $reader->getColumn());
            $this->assertEquals(4, $reader->getLine());
        }

        $this->assertEquals(Character::EOT, $reader->advance());
        $this->assertEquals(12, $reader->getColumn());
        $this->assertEquals(4, $reader->getLine());

        $this->assertEquals(Character::EOT, $reader->advance());
        $this->assertEquals(12, $reader->getColumn());
        $this->assertEquals(4, $reader->getLine());
        return $reader;
    }

    /**
     * @depends testAdvance
     *
     * @param \Phphp\Reader\File $reader
     */
    public function testRetreat(File $reader)
    {
        $source = "hoge\nfugafuga\r\npiyopiyopiyo\rhogefugapiyo";

        $this->assertEquals(12, $reader->getColumn());
        $this->assertEquals(4, $reader->getLine());

        // hogefugapiyo
        for ($i = 11; $i >= 0; $i--) {
            $this->assertEquals($source[$i+28], $reader->retreat());
            $this->assertEquals($i, $reader->getColumn());
            $this->assertEquals(4, $reader->getLine());
        }

        // \r
        $this->assertEquals("\r", $reader->retreat());
        $this->assertEquals(12, $reader->getColumn());
        $this->assertEquals(3, $reader->getLine());

        for ($i = 11; $i >= 0; $i--) {
            $this->assertEquals($source[$i+15], $reader->retreat());
            $this->assertEquals($i, $reader->getColumn());
            $this->assertEquals(3, $reader->getLine());
        }

        // \r\n
        $this->assertEquals("\n", $reader->retreat());
        $this->assertEquals(0, $reader->getColumn());
        $this->assertEquals(3, $reader->getLine());
        $this->assertEquals("\r", $reader->retreat());
        $this->assertEquals(8, $reader->getColumn());
        $this->assertEquals(2, $reader->getLine());

        // fugafuga
        for ($i = 7; $i >= 0; $i--) {
            $this->assertEquals($source[$i+5], $reader->retreat());
            $this->assertEquals($i, $reader->getColumn());
            $this->assertEquals(2, $reader->getLine());
        }

        // \n
        $this->assertEquals("\n", $reader->retreat());
        $this->assertEquals(4, $reader->getColumn());
        $this->assertEquals(1, $reader->getLine());

        // hoge
        for ($i = 3; $i >= 0; $i--) {
            $this->assertEquals($source[$i], $reader->retreat());
            $this->assertEquals($i, $reader->getColumn());
            $this->assertEquals(1, $reader->getLine());
        }

        $this->assertEquals('', $reader->retreat());
        $this->assertEquals(0, $reader->getColumn());
        $this->assertEquals(1, $reader->getLine());

        $this->assertEquals('', $reader->retreat());
        $this->assertEquals(0, $reader->getColumn());
        $this->assertEquals(1, $reader->getLine());
        unset($reader);
    }

    public function testEmptyFile()
    {
        $reader = new File($this->path);

        $this->assertEquals(0, $reader->getColumn());
        $this->assertEquals(1, $reader->getLine());
        $this->assertEquals(Character::EOT, $reader->advance());
        $this->assertEquals(Character::EOT, $reader->advance());
        $this->assertEquals(0, $reader->getColumn());
        $this->assertEquals(1, $reader->getLine());
        $this->assertEquals('', $reader->retreat());
        $this->assertEquals('', $reader->retreat());
        $this->assertEquals(0, $reader->getColumn());
        $this->assertEquals(1, $reader->getLine());
        $this->assertEquals('', $reader->peek());
        $this->assertEquals('', $reader->peek(5));
        unset($reader);
    }

    public function testPeekForward()
    {
        file_put_contents($this->path, 'hoge', LOCK_EX);
        $reader = new File($this->path);
        $this->assertEquals('', $reader->peek(0));
        $this->assertEquals('h', $reader->advance());
        $this->assertEquals('h', $reader->peek(-1));
        $this->assertEquals('h', $reader->peek(-5));
        $this->assertEquals('o', $reader->advance());
        $this->assertEquals('g', $reader->advance());
        $this->assertEquals('g', $reader->peek(-1));
        $this->assertEquals('og', $reader->peek(-2));
        $this->assertEquals('hog', $reader->peek(-5));
        $this->assertEquals('e', $reader->advance());
        $this->assertEquals(Character::EOT, $reader->advance());
        $this->assertEquals(Character::EOT, $reader->advance());
        $this->assertEquals('e', $reader->peek(-1));
        $this->assertEquals('ge', $reader->peek(-2));
        $this->assertEquals('hoge', $reader->peek(-5));
        unset($reader);

        file_put_contents($this->path, Character::BOM.'hoge', LOCK_EX);
        $reader = new File($this->path);
        $this->assertEquals('', $reader->peek(0));
        $this->assertEquals('h', $reader->advance());
        $this->assertEquals('h', $reader->peek(-1));
        $this->assertEquals('h', $reader->peek(-5));
        $this->assertEquals('o', $reader->advance());
        $this->assertEquals('g', $reader->advance());
        $this->assertEquals('g', $reader->peek(-1));
        $this->assertEquals('og', $reader->peek(-2));
        $this->assertEquals('hog', $reader->peek(-5));
        $this->assertEquals('e', $reader->advance());
        $this->assertEquals(Character::EOT, $reader->advance());
        $this->assertEquals(Character::EOT, $reader->advance());
        $this->assertEquals('e', $reader->peek(-1));
        $this->assertEquals('ge', $reader->peek(-2));
        $this->assertEquals('hoge', $reader->peek(-5));
        unset($reader);
    }
}