<?php
namespace Phphp\Tests\Lexer\Tokenizer;

use PHPUnit\Framework\TestCase;
use Phphp\Contracts\Lexer\Scanner;
use Phphp\Contracts\Lexer\Tokenizer\Html5\Token;
use Phphp\Lexer\Tokenizer\Html5;
use Phphp\Lexer\Tokenizer\Html5\Support\Consumer;
use Phphp\Lexer\Tokenizer\Html5\Support\ErrorManager;
use Phphp\Lexer\Tokenizer\Html5\Support\StateHandler;
use Phphp\Lexer\Tokenizer\Html5\Support\TemporaryBuffer;

class Html5Test extends TestCase
{
    public function testExistsTrait()
    {
        /** @var \PHPUnit\Framework\MockObject\MockObject | \Phphp\Contracts\Lexer\Scanner $scanner */
        $scanner = $this->getMockBuilder(Scanner::class)
            ->getMock();
        $html5 = new Html5($scanner);

        foreach (get_class_methods(Consumer::class) as $method) {
            $this->assertTrue(method_exists($html5, $method));
        }

        foreach (get_class_methods(ErrorManager::class) as $method) {
            $this->assertTrue(method_exists($html5, $method));
        }

        foreach (get_class_methods(StateHandler::class) as $method) {
            $this->assertTrue(method_exists($html5, $method));
        }

        foreach (get_class_methods(TemporaryBuffer::class) as $method) {
            $this->assertTrue(method_exists($html5, $method));
        }
    }

    public function testTokenQueue()
    {
        /** @var \PHPUnit\Framework\MockObject\MockObject | \Phphp\Contracts\Lexer\Scanner $scanner */
        $scanner = $this->getMockBuilder(Scanner::class)
            ->getMock();
        $html5 = new Html5($scanner);

        /** @var \PHPUnit\Framework\MockObject\MockObject | \Phphp\Contracts\Lexer\Tokenizer\Html5\Token $token */
        $token = $this->getMockBuilder(Token::class)
            ->getMock();

        $this->assertNull($html5->getNextToken());

        $this->assertInstanceOf(Html5::class, $html5->emitToken($token));
        $this->assertInstanceOf(Token::class, $html5->getNextToken());
        $this->assertNull($html5->getNextToken());

        $this->assertInstanceOf(Html5::class, $html5->emitToken($token));
        $this->assertInstanceOf(Html5::class, $html5->emitToken($token));
        $this->assertInstanceOf(Token::class, $html5->getNextToken());
        $this->assertInstanceOf(Token::class, $html5->getNextToken());
        $this->assertNull($html5->getNextToken());
    }
}