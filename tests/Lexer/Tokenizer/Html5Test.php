<?php
namespace Phphp\Tests\Lexer\Tokenizer;

use Phphp\Lexer\Tokenizer_back\Html5;
use Phphp\Lexer\Tokenizer_back\Html5\Token;
use Phphp\Lexer\Reader\StringReader;

class Html5Test extends \PHPUnit_Framework_TestCase
{
    /**
     * @depends testReader
     */
    public function testGivenAmpersand()
    {
        $tokenizer = new Html5(new StringReader('&'));
    }

    public function testGetCharacterToken()
    {
        $tokenizer = new Html5(new StringReader('abcde'));
        /* @var Token\CharacterToken $token */
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
     * @param Html5 $tokenizer
     *
     * @depends testGetCharacterToken
     */
    public function testGetEofToken(Html5 $tokenizer)
    {
        $token  = $tokenizer->getNextToken();
        $this->assertInstanceOf(Token\EofToken::class, $token);
    }
}