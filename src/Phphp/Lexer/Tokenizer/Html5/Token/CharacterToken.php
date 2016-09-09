<?php
namespace Phphp\Lexer\Tokenizer\Html5\Token;

/**
 * Class Character
 * @package Phphp\Lexer\Tokenizer\Html5\Token
 */
class CharacterToken implements Token
{
    private $chars = '';

    public function __construct($char)
    {
        $this->chars = $char;
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