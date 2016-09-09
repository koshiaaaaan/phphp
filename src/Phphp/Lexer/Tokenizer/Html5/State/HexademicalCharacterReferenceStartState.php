<?php
namespace Phphp\Lexer\Tokenizer\Html5\State;

use Phphp\Lexer\Tokenizer\Tokenizer;
use Phphp\Lexer\Tokenizer\Html5\Character;

/**
 * Class HexademicalCharacterReferenceStartState
 * @package Phphp\Lexer\Tokenizer\Html5\State
 */
class HexademicalCharacterReferenceStartState extends AbstractState
{
    public function handle()
    {
        $tokenizer = $this->getTokenizer();
        $tmpBuff = $tokenizer->getTemporaryBuffer();
        $char = $tokenizer->consume();

        if ($this->isAsciiHexDigits($char)) {
            // Reconsume in the hexademical character reference state.
            $tokenizer->unconsume();
            $tokenizer->setState(new HexademicalCharacterReferenceState());
        } else {
            $tokenizer->error(Tokenizer::PARSE_ERROR);
            $tokenizer->unconsume();
            $tokenizer->setState(new CharacterReferenceEndState());
        }
    }
}