<?php
namespace Phphp\Lexer\Tokenizer\Html5\Support;

/**
 * @property \Phphp\Contracts\Lexer\Scanner $scanner
 */
trait Consumer
{
    /**
     * @var \Phphp\Contracts\Lexer\Scanner
     */
    protected $scanner;

    public function consume()
    {
        return $this->scanner->advance();
    }

    public function unconsume()
    {
        return $this->scanner->retreat();
    }
}