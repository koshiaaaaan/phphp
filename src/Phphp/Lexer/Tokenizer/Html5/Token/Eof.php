<?php
namespace Phphp\Lexer\Tokenizer\Html5\Token;

use Phphp\Contracts\Lexer\Tokenizer\Html5\Token;

class Eof implements Token
{
    /**
     * @var string
     */
    protected $char = '';

    /**
     * Eof constructor.
     * @param string $char
     */
    public function __construct(string $char)
    {
        $this->char = $char;
    }
}