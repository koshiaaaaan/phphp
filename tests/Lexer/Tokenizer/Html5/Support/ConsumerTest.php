<?php
namespace Phphp\Tests\Lexer\Tokenizer\Html5\Support;

use ReflectionClass;
use Phphp\Character;
use Phphp\Contracts\Lexer\Scanner;
use Phphp\Lexer\Tokenizer\Html5\Support\Consumer;
use PHPUnit\Framework\TestCase;

class ConsumerTest extends TestCase
{
    /**
     * @throws \ReflectionException
     */
    public function testConsume()
    {
        $scanner = $this->getMockBuilder(Scanner::class)
            ->setMethods(['advance'])
            ->getMock();
        $scanner->expects($this->exactly(6))
            ->method('advance')
            ->will($this->onConsecutiveCalls('a', 'b', 'c', 'd', 'e', Character::EOF));

        /** @var \Phphp\Lexer\Tokenizer\Html5\Support\Consumer $consumer */
        $consumer = $this->getMockBuilder(Consumer::class)
            ->getMockForTrait();
        $property = (new ReflectionClass($consumer))->getProperty('scanner');
        $property->setAccessible(true);
        $property->setValue($consumer, $scanner);

        $this->assertSame('a', $consumer->consume());
        $this->assertSame('b', $consumer->consume());
        $this->assertSame('c', $consumer->consume());
        $this->assertSame('d', $consumer->consume());
        $this->assertSame('e', $consumer->consume());
        $this->assertSame(Character::EOF, $consumer->consume());
    }

    /**
     * @throws \ReflectionException
     */
    public function testUnconsume()
    {
        $scanner = $this->getMockBuilder(Scanner::class)
            ->setMethods(['retreat'])
            ->getMock();
        $scanner->expects($this->exactly(6))
            ->method('retreat')
            ->will($this->onConsecutiveCalls('e', 'd', 'c', 'b', 'a', ''));

        /** @var \Phphp\Lexer\Tokenizer\Html5\Support\Consumer $consumer */
        $consumer = $this->getMockBuilder(Consumer::class)
            ->getMockForTrait();
        $property = (new ReflectionClass($consumer))->getProperty('scanner');
        $property->setAccessible(true);
        $property->setValue($consumer, $scanner);

        $this->assertSame('e', $consumer->unconsume());
        $this->assertSame('d', $consumer->unconsume());
        $this->assertSame('c', $consumer->unconsume());
        $this->assertSame('b', $consumer->unconsume());
        $this->assertSame('a', $consumer->unconsume());
        $this->assertSame('', $consumer->unconsume());
    }
}