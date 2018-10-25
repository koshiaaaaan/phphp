<?php
namespace Phphp\Parser;

use Phphp\Scanner\Scanner;
use Phphp\Lexer\Html5 as Html5Lexer;

/**
 * HTML5をパースする
 **/
class Html5 implements Parser
{
    private $stopped = false;

    /**
     * @var \Phphp\Lexer\Lexer $lexer
     **/
    private $lexer;

    public static function parse(Scanner $reader)
    {
        $parser = new self($reader);
        $parser->runParsingLoop();
    }

    protected function __construct(Scanner $reader)
    {
        $this->lexer = new Html5Lexer($reader);
    }

    protected function runParsingLoop()
    {
        while (!$this->stopped) {
            $token = $this->lexer->getNextToken();
            $token->process($this);
        }
     }
}
