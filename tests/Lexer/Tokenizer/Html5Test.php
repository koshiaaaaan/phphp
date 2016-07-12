<?php
namespace Phphp\Tests\Lexer\Tokenizer;

use Phphp\Lexer\Tokenizer\Html5;
use Phphp\Lexer\Reader\String;

class Html5Test extends \PHPUnit_Framework_TestCase
{
    public function testGetCharacterToken()
    {
        $tokenizer = new Html5(new String('abcde'));
        /* @var Html5\Token\Character $token */
        $token  = $tokenizer->getNextToken();
        $this->assertInstanceOf(Html5\Token\Character::class, $token);
        $this->assertEquals('abcde', $token->getCharacters());
        return  $tokenizer;
    }

    /**
     * @depends testGetCharacterToken
     */
    public function testGetEofToken($tokenizer)
    {
        $token  = $tokenizer->getNextToken();
        $this->assertInstanceOf(Html5\Token\Eof::class, $token);
    }
}