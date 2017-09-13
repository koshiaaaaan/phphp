<?php
namespace Phphp\Parser;

use Phphp\Lexer\Reader\Reader;
use Phphp\Lexer\Tokenizer\Html5 as Tokenizer;

/**
 * HTML5をパースする
 **/
class Html5 implements Parser
{
    private $stopped = false;

    /**
     * Tokenizer
     * @var Tokenizer
     **/
    private $tokenizer;

    public static function parse(Reader $reader)
    {
        return new self($reader);
    }

    /**
     * Html5 constructor.
     * @param Reader $reader
     */
    public function __construct(Reader $reader)
    {
        $this->tokenizer = new Tokenizer($reader);
        $this->runParsingLoop();
    }

    protected function runParsingLoop()
    {
        while (!$this->stopped) {
            $token = $this->tokenizer->getNextToken();
            $token->process($this);
        }
     }
}
