<?php
namespace Phphp\Tests\Lexer;

use PHPUnit\Framework\TestCase;
use Phphp\Lexer\Html5;
use Phphp\Lexer\Scanner\Text;
use Phphp\Lexer\Tokenizer\Html5\Token;

class Html5Test extends TestCase
{
    public function testAnalyze()
    {
        $lexer = new Html5(new Text('a'));
        $this->assertInstanceOf(Token\Character::class, $lexer->analyze());
        $this->assertInstanceOf(Token\Eof::class, $lexer->analyze());
    }
}