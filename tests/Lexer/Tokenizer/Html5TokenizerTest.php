<?php
namespace Phphp\Tests\Lexer\Tokenizer;

use Phphp\Lexer\Tokenizer\Html5Tokenizer;
use Phphp\Lexer\Tokenizer\Html5\Token;
use Phphp\Lexer\Reader\StringReader;

class Html5TokenizerTest extends \PHPUnit_Framework_TestCase
{
    public function testGetCharacterToken()
    {
        $tokenizer = new Html5Tokenizer(new StringReader('abcde'));
        /* @var Html5\Token\CharacterToken $token */
        $token  = $tokenizer->getNextToken();
        $this->assertInstanceOf(Token\CharacterToken::class, $token);
        $this->assertEquals('a', $token->getCharacters());
        $token  = $tokenizer->getNextToken();
        $this->assertEquals('b', $token->getCharacters());
        $token  = $tokenizer->getNextToken();
        $this->assertEquals('c', $token->getCharacters());
        $token  = $tokenizer->getNextToken();
        $this->assertEquals('d', $token->getCharacters());
        $token  = $tokenizer->getNextToken();
        $this->assertEquals('e', $token->getCharacters());
        return  $tokenizer;
    }

    /**
     * @depends testGetCharacterToken
     */
    public function testGetEofToken($tokenizer)
    {
        $token  = $tokenizer->getNextToken();
        $this->assertInstanceOf(Token\EofToken::class, $token);
    }
}