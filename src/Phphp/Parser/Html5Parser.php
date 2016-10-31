<?php
namespace Phphp\Parser;

use Phphp\Lexer\Reader\Reader;
use Phphp\Lexer\Tokenizer\Html5Tokenizer;

/**
 * HTML5をパースする
 **/
class Html5Parser implements Parser
{
    private $stopped = false;

    /**
     * Tokenizer
     * @var Phphp\Lexer\Tokenizer\Html5Tokenizer
     **/
    private $tokenizer;

    public static function parse(Reader $reader)
    {
        $parser = new self($reader);
        $parser->runParsingLoop();
    }

    protected function __construct(Reader $reader)
    {
        $this->tokenizer    = new Html5Tokenizer($reader);
    }

    protected function runParsingLoop()
    {
        while (!$this->stopped) {
            $token = $this->tokenizer->getNextToken();
            $token->process($this);
        }
     }
}
