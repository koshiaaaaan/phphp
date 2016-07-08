<?php
namespace Phphp\Parser;

use Phphp\Lexer\Reader\ReaderInterface;
use Phphp\Lexer\Tokenizer\Html5 as Tokenizer;

/**
 * HTML5をパースする
 **/
class Html5 implements ParserInterface
{
    private $stopped = false;

    /**
     * Tokenizer
     * @var Phphp\Lexer\Tokenizer\Html5
     **/
    private $tokenizer;

    public static function parse(ReaderInterface $reader)
    {
        $parser = new self($reader);
        $parser->runParsingLoop();
    }

    protected function __construct(ReaderInterface $reader)
    {
        $this->tokenizer    = new Tokenizer($reader);
    }

    protected function runParsingLoop()
    {
        while (!$this->stopped) {
            $token = $this->tokenizer->getNextToken();
            $token->process($this);
        }
     }
}