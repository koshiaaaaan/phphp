<?php
namespace Phphp\Lexer\Tokenizer\Html5\Token;

/**
 * Class Character
 * @package Phphp\Lexer\Tokenizer\Html5\Token
 */
class Character implements TokenInterface
{
    private $chars = '';

    public function __construct()
    {
    }

    public function appendCharacter($char)
    {
        $this->chars    .= $char;
    }

    public function getCharacters()
    {
        return  $this->chars;
    }
}