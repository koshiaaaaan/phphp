<?php
namespace Phphp\Parser;

use Phphp\Contracts\Lexer;
use Phphp\Lexer\Scanner\File;
use Phphp\Lexer\Html5 as Html5Lexer;
use Phphp\Lexer\Scanner\Text;
use Phphp\Contracts\Parser;

/**
 * HTML5をパースする
 **/
class Html5 implements Parser
{
    private $stopped = false;

    /**
     * @var \Phphp\Contracts\Lexer $lexer
     **/
    private $lexer;

    public static function parse(string $html)
    {
        $scanner = new Text($html);
        $lexer = new Html5Lexer($scanner);
        $parser = new static($lexer);
        $parser->runParsingLoop();
    }

    public static function parseFile(string $path)
    {
        $scanner = new File($path);
        $lexer = new Html5Lexer($scanner);
        $parser = new static($lexer);
        $parser->runParsingLoop();
    }

    protected function __construct(Lexer $lexer)
    {
        $this->lexer = $lexer;
    }

    protected function runParsingLoop()
    {
        while (!$this->stopped) {
            $token = $this->lexer->analyze();
            $token->process($this);
        }
     }
}
