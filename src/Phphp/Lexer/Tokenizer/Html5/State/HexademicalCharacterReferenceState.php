<?php
namespace Phphp\Lexer\Tokenizer\Html5\State;

use Phphp\Lexer\Tokenizer\Tokenizer;
use Phphp\Lexer\Tokenizer\Html5\Character;

/**
 * Class HexademicalCharacterReferenceState
 * @package Phphp\Lexer\Tokenizer\Html5\State
 */
class HexademicalCharacterReferenceState extends AbstractState
{
    public function handle()
    {
        $tokenizer = $this->getTokenizer();
        $tmpBuff = $tokenizer->getTemporaryBuffer();
        $char = $tokenizer->consume();

        if ($this->isUppercaseAsciiHexDigits($char)) {
            // TODO:
        }
    }
}