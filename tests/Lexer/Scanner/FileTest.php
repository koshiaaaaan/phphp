<?php
namespace Phphp\Tests\Scanner;

use Phphp\Character;
use Phphp\Lexer\Scanner\File;
use PHPUnit\Framework\TestCase;

class FileTest extends TestCase
{
    public function getWritingFile($string = '')
    {
        $file = tempnam(sys_get_temp_dir(), 'php');
        if (strlen($string)) {
            file_put_contents($file, $string, LOCK_EX);
        }
        return $file;
    }

    public function testPeek()
    {
        $file = $this->getWritingFile('hoge');
        $scanner = new File($file);
        $this->assertSame('h', $scanner->peek(1));
        $this->assertSame('ho', $scanner->peek(2));
        $this->assertSame('hoge', $scanner->peek(4));
        $this->assertSame('hoge', $scanner->peek(5));
        unset($scanner);
        unlink($file);
    }

    public function testAdvance()
    {
        $source = "hoge\nfugafuga\r\npiyopiyopiyo\rhogefugapiyo";
        $file = $this->getWritingFile($source);
        $scanner = new File($file);

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

        $this->assertSame(Character::EOT, $scanner->advance());
        $this->assertSame(12, $scanner->getColumn());
        $this->assertSame(4, $scanner->getLine());

        $this->assertSame(Character::EOT, $scanner->advance());
        $this->assertSame(12, $scanner->getColumn());
        $this->assertSame(4, $scanner->getLine());

        unset($scanner);
        unlink($file);
    }

    /**
     * @depends testAdvance
     */
    public function testRetreat()
    {
        $source = "hoge\nfugafuga\r\npiyopiyopiyo\rhogefugapiyo";
        $file = $this->getWritingFile($source);
        $scanner = new File($file);

        while (Character::EOT !== $scanner->advance()) {}

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

        $file = $scanner->getPath();
        unset($scanner);
        unlink($file);
    }

    public function testEmptyFile()
    {
        $file = $this->getWritingFile();
        $scanner = new File($file);

        $this->assertSame(0, $scanner->getColumn());
        $this->assertSame(1, $scanner->getLine());
        $this->assertSame(Character::EOT, $scanner->advance());
        $this->assertSame(Character::EOT, $scanner->advance());
        $this->assertSame(0, $scanner->getColumn());
        $this->assertSame(1, $scanner->getLine());
        $this->assertSame('', $scanner->retreat());
        $this->assertSame('', $scanner->retreat());
        $this->assertSame(0, $scanner->getColumn());
        $this->assertSame(1, $scanner->getLine());
        $this->assertSame('', $scanner->peek());
        $this->assertSame('', $scanner->peek(5));
        unset($scanner);
        unlink($file);
    }

    /**
     * @depends testPeek
     * @depends testAdvance
     */
    public function testPeekForward()
    {
        $file = $this->getWritingFile('hoge');
        $scanner = new File($file);
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
        $this->assertSame(Character::EOT, $scanner->advance());
        $this->assertSame(Character::EOT, $scanner->advance());
        $this->assertSame('e', $scanner->peek(-1));
        $this->assertSame('ge', $scanner->peek(-2));
        $this->assertSame('hoge', $scanner->peek(-5));
        unset($scanner);
        unlink($file);

        $file = $this->getWritingFile(Character::BOM.'hoge');
        $scanner = new File($file);
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
        $this->assertSame(Character::EOT, $scanner->advance());
        $this->assertSame(Character::EOT, $scanner->advance());
        $this->assertSame('e', $scanner->peek(-1));
        $this->assertSame('ge', $scanner->peek(-2));
        $this->assertSame('hoge', $scanner->peek(-5));
        unset($scanner);
        unlink($file);
    }
}