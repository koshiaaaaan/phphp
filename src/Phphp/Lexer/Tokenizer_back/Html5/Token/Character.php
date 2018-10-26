<?php
namespace Phphp\Lexer\Tokenizer_back\Html5\Token;

/**
 * Class Character
 * @package Phphp\Lexer\Tokenizer\Html5\Token
 */
class Character implements Token
{
    private $chars = '';

    /**
     * @param  string $char
     * @return $this
     */
    public function appendCharacter($char)
    {
        $this->chars .= $char;
        return $this;
    }

    /**
     * @return string
     */
    public function getCharacters()
    {
        return $this->chars;
    }
}
