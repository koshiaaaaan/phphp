<?php
namespace Phphp\Tests\Lexer\Tokenizer\Html5\Support;

use Phphp\Character;
use Phphp\Lexer\Scanner\Text;
use Phphp\Lexer\Tokenizer\Html5\Support\Consumer;
use PHPUnit\Framework\TestCase;

class ConsumerTest extends TestCase
{
    public function getConsumerExtendsObject($text)
    {
        return new class($text) {
            use Consumer;

            public function __construct($text)
            {
                $this->scanner = new Text($text);
            }
        };
    }

    public function testConsume()
    {
        $consumer = $this->getConsumerExtendsObject('abcd');
        $this->assertSame('a', $consumer->consume());
        $this->assertSame('b', $consumer->consume());
        $this->assertSame('c', $consumer->consume());
        $this->assertSame('d', $consumer->consume());
        $this->assertSame(Character::EOF, $consumer->consume());
        return $consumer;
    }

    /**
     * @depends testConsume
     *
     * @param $consumer
     */
    public function testUnconsume($consumer)
    {
        $this->assertSame('d', $consumer->unconsume());
        $this->assertSame('c', $consumer->unconsume());
        $this->assertSame('b', $consumer->unconsume());
        $this->assertSame('a', $consumer->unconsume());
        $this->assertSame('', $consumer->unconsume());
    }
}