<?php
namespace Phphp\Tests\Lexer\Tokenizer;

use PHPUnit\Framework\TestCase;
use Phphp\Character;
use Phphp\Contracts\Lexer\Scanner;
use Phphp\Contracts\Lexer\Tokenizer\Html5\State;
use Phphp\Lexer\Tokenizer\Html5;
use Phphp\Lexer\Tokenizer\Html5\State\CharacterReference;

class Html5Test extends TestCase
{
    /**
     * @return \PHPUnit\Framework\MockObject\MockObject | \Phphp\Contracts\Lexer\Scanner
     */
    public function getScannerMock()
    {
        return $this->getMockBuilder(Scanner::class)
            ->setMethods(['advance', 'retreat', 'peek'])
            ->getMock();
    }

    //==========================================================================
    // \Phphp\Lexer\Tokenizer\Html5\Support\Consumer
    //==========================================================================

    public function testConsume()
    {
        $scanner = $this->getScannerMock();
        $scanner->expects($this->atLeastOnce())
            ->method('advance')
            ->will($this->onConsecutiveCalls('a', 'b', 'c', 'd', 'e', Character::EOF));

        $tokenizer = new Html5($scanner);
        $this->assertSame('a', $tokenizer->consume());
        $this->assertSame('b', $tokenizer->consume());
        $this->assertSame('c', $tokenizer->consume());
        $this->assertSame('d', $tokenizer->consume());
        $this->assertSame('e', $tokenizer->consume());
        $this->assertSame(Character::EOF, $tokenizer->consume());
    }

    public function testUnconsume()
    {
        $scanner = $this->getScannerMock();
        $scanner->expects($this->atLeastOnce())
            ->method('retreat')
            ->will($this->onConsecutiveCalls('e', 'd', 'c', 'b', 'a', ''));

        $tokenizer = new Html5($scanner);

        $this->assertSame('e', $tokenizer->unconsume());
        $this->assertSame('d', $tokenizer->unconsume());
        $this->assertSame('c', $tokenizer->unconsume());
        $this->assertSame('b', $tokenizer->unconsume());
        $this->assertSame('a', $tokenizer->unconsume());
        $this->assertSame('', $tokenizer->unconsume());
    }

    //==========================================================================
    // \Phphp\Lexer\Tokenizer\Html5\Support\StateHandler
    //==========================================================================

    public function testStateReturnType()
    {
        $scanner = $this->getScannerMock();
        $tokenizer = new Html5($scanner);

        $state = $this->getMockBuilder(State::class)
            ->setMockClassName('TestState')
            ->setMethods(['handle'])
            ->getMock();

        $state->expects($this->once())
            ->method('handle')
            ->will($this->onConsecutiveCalls(get_class($state)));

        $this->assertInstanceOf(Html5::class, $tokenizer->setState(get_class($state)));
        $this->assertInstanceOf(Html5::class, $tokenizer->handle());

        $state->expects($this->once())
            ->method('handle')
            ->will($this->onConsecutiveCalls(null));

        $this->assertInstanceOf(Html5::class, $tokenizer->handle());

    }


}