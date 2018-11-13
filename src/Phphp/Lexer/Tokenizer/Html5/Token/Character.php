<?php
namespace Phphp\Lexer\Tokenizer\Html5\Token;

use Phphp\Contracts\Lexer\Tokenizer\Html5\Token;

class Character implements Token
{
    /**
     * @var string
     */
    protected $char = '';

    /**
     * @var string
     */
    protected $original = '';

    /**
     * Character constructor.
     * @param string $char
     * @param string $original
     */
    public function __construct(string $char, string $original = null)
    {
        $this->char = $char;
        $this->original = $original ?? $char;
    }
}